# Technical Contracts, Commands and Schemas

This chapter removes ambiguity before code. Names may change only through an ADR; the implemented README and CLI help must remain synchronized with the accepted contract.

## Required command surface

| Command | Required behavior |
|---|---|
| tool doctor | Detect PHP, WordPress, database, JS runtime, browser and extension prerequisites without changing state. |
| tool setup | Install locked dependencies, create disposable site and activate theme/site-core packages. |
| wp enterprise-starter seed | Create deterministic users, content, menus, templates and media fixtures. |
| wp enterprise-starter migrate --dry-run | Show pending site-core data/schema migrations and affected records. |
| wp enterprise-starter migrate | Apply idempotent versioned migrations with backup/lock. |
| wp enterprise-starter verify | Check content registration, routes, blocks, templates, permissions and migration state. |
| wp enterprise-starter rollback <migration> | Run only migrations explicitly declared reversible; otherwise print recovery procedure. |
| tool check | Run formatting, lint, types, static analysis, schema and generated-file checks. |
| tool test --suite=<unit\|integration\|e2e\|a11y\|visual\|performance> | Run a named test layer locally using CI-equivalent configuration. |
| tool build-release | Build allowlisted theme/plugin ZIPs and manifest from a clean tree. |

## Configuration example

```yaml
project:
  slug: enterprise-fse-starter
  support:
    wordpress: [previous, current]
    php: [declared-project-versions]
  packages:
    theme: packages/theme
    site_core: packages/site-core
  fixtures: fixtures/default
  budgets:
    frontend_js_bytes: <set-after-baseline>
    frontend_css_bytes: <set-after-baseline>
    max_queries: <per-journey>
```

The final implementation must publish a machine-readable JSON Schema, reject unknown/unsafe fields according to policy, report source locations for invalid input, and support `--format=json` for automation where appropriate. Environment variables may provide secrets or CI overrides but cannot silently replace committed project behavior.

## Core data models

- SiteSchemaVersion: current migration version and last successful migration metadata.
- ContentRegistration: post type/taxonomy/meta/REST visibility/capability mapping.
- BlockContract: block name, apiVersion, attributes, render mode, interactivity namespace, deprecation versions.
- FixtureManifest: fixture version, users, content IDs, media hashes and cleanup ownership.
- ReleaseManifest: theme/plugin versions, source SHA, files, hashes, support matrix and build tooling.

## API and stability rules

- WordPress hooks and services are internal unless listed in docs/api/public-php.md.
- REST route namespace includes explicit major version; all routes have args schema and permission callback.
- Block metadata is canonical in block.json; PHP/JS generated registration must be checked for drift.
- Interactivity namespaces are project-prefixed and actions/state documented as stable or experimental.

## Common exit-code contract

| Code | Meaning | Retry guidance |
|---|---|---|
| 0 | All requested operations completed and required assertions passed | No retry needed |
| 1 | Valid execution found a contract/budget/audit/test failure | Fix product/configuration; blind retry prohibited |
| 2 | Invalid command or configuration | Correct input |
| 3 | Unsupported or missing environment/dependency | Change environment or support policy |
| 4 | Permission or safety policy denied the operation | Do not bypass; obtain correct authorization/environment |
| 5 | Setup, migration or fixture preparation failed | Inspect diagnostics; clean owned state before retry |
| 6 | Timeout, cancellation or external/network failure | Retry only under documented bounded policy |
| 7 | Infrastructure failure unrelated to evaluated product behavior | Retry after environment repair; preserve original evidence |
| 8 | Internal defect/invariant violation | File a bug with redacted diagnostic bundle |

Commands that do not need all codes may use the applicable subset, but meanings cannot conflict.

## Output and logging contract

- Human output goes to stdout; diagnostics/progress to stderr where CLI conventions require machine-readable stdout.
- `--format=json` emits one valid documented schema, no decorative prose.
- Every run prints or records run ID, tool version, source SHA, platform versions, config hash and safety mode.
- Errors contain stable code, path/subject, remediation and redacted context.
- Verbose/debug mode is opt-in and still redacts secrets and personal data.
- Cancellation returns a distinct status and runs ownership-based cleanup.

## Schema evolution

Schemas include `schemaVersion`. Additive optional fields may be backward compatible; required fields, changed meaning/type, renamed IDs and removed enum values are breaking. Readers must reject unsupported major versions clearly. Golden fixtures for every supported schema version remain in tests through the deprecation window.
