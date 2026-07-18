# Implementation Backlog

This backlog is the minimum decomposition, not a substitute for issue-specific design. Each issue must include owner, dependencies, security/compatibility/docs impact, test plan and evidence link. Split issues that cannot be reviewed safely in one pull request.

| ID | Work item | Acceptance | Initial status |
|---|---|---|---|
| ISSUE-001 | Bootstrap | Initialize license, governance, CODEOWNERS, security and support files. | Not started |
| ISSUE-002 | Architecture | Accept repository topology, support, schema, environment, trust and test ADRs. | Not started |
| ISSUE-003 | Tooling | Create version files, authoritative lockfiles and immutable installation commands. | Not started |
| ISSUE-004 | Doctor | Implement read-only environment diagnostics and remediation output. | Not started |
| ISSUE-005 | Fixture | Create smallest deterministic known-good fixture and cleanup ownership. | Not started |
| ISSUE-006 | Failure fixture | Create first known-bad fixture and prove the intended gate fails. | Not started |
| ISSUE-007 | Static quality | Configure formatting, lint, types/static analysis, schema and generated-file drift checks. | Not started |
| ISSUE-008 | Integration environment | Create disposable WordPress/database/browser lifecycle with cleanup. | Not started |
| ISSUE-009 | Security | Complete threat model and add permission/input/network/filesystem/redaction tests. | Not started |
| ISSUE-010 | Evidence | Define immutable result/evidence directory, manifest and redaction inspection. | Not started |
| ISSUE-011 | CI | Implement PR target cell using only repository-owned commands. | Not started |
| ISSUE-012 | Scheduled CI | Implement sampled matrix, next-beta checks and maintenance health. | Not started |
| ISSUE-013 | Release | Implement protected tag build, artifact inspection/checksum and artifact-install smoke. | Not started |
| ISSUE-014 | Docs | Verify clean-clone tutorial through an uninvolved reviewer. | Not started |
| ISSUE-015 | Compatibility | Publish dated tested/unsupported matrix tied to release SHA. | Not started |
| ISSUE-016 | Upgrade | Create previous-release fixture and candidate upgrade/recovery test. | Not started |
| ISSUE-017 | CLI: implement `tool doctor` | Detect PHP, WordPress, database, JS runtime, browser and extension prerequisites without changing state. Includes unit/contract tests, help text, JSON behavior where applicable, and failure cases. | Not started |
| ISSUE-018 | CLI: implement `tool setup` | Install locked dependencies, create disposable site and activate theme/site-core packages. Includes unit/contract tests, help text, JSON behavior where applicable, and failure cases. | Not started |
| ISSUE-019 | CLI: implement `wp enterprise-starter seed` | Create deterministic users, content, menus, templates and media fixtures. Includes unit/contract tests, help text, JSON behavior where applicable, and failure cases. | Not started |
| ISSUE-020 | CLI: implement `wp enterprise-starter migrate --dry-run` | Show pending site-core data/schema migrations and affected records. Includes unit/contract tests, help text, JSON behavior where applicable, and failure cases. | Not started |
| ISSUE-021 | CLI: implement `wp enterprise-starter migrate` | Apply idempotent versioned migrations with backup/lock. Includes unit/contract tests, help text, JSON behavior where applicable, and failure cases. | Not started |
| ISSUE-022 | CLI: implement `wp enterprise-starter verify` | Check content registration, routes, blocks, templates, permissions and migration state. Includes unit/contract tests, help text, JSON behavior where applicable, and failure cases. | Not started |
| ISSUE-023 | CLI: implement `wp enterprise-starter rollback <migration>` | Run only migrations explicitly declared reversible; otherwise print recovery procedure. Includes unit/contract tests, help text, JSON behavior where applicable, and failure cases. | Not started |
| ISSUE-024 | CLI: implement `tool check` | Run formatting, lint, types, static analysis, schema and generated-file checks. Includes unit/contract tests, help text, JSON behavior where applicable, and failure cases. | Not started |
| ISSUE-025 | CLI: implement `tool test --suite=<unit\|integration\|e2e\|a11y\|visual\|performance>` | Run a named test layer locally using CI-equivalent configuration. Includes unit/contract tests, help text, JSON behavior where applicable, and failure cases. | Not started |
| ISSUE-026 | CLI: implement `tool build-release` | Build allowlisted theme/plugin ZIPs and manifest from a clean tree. Includes unit/contract tests, help text, JSON behavior where applicable, and failure cases. | Not started |
| ISSUE-027 | Domain: implement `SiteSchemaVersion` model | SiteSchemaVersion: current migration version and last successful migration metadata. Validate serialization, invariants and backward compatibility. | Not started |
| ISSUE-028 | Domain: implement `ContentRegistration` model | ContentRegistration: post type/taxonomy/meta/REST visibility/capability mapping. Validate serialization, invariants and backward compatibility. | Not started |
| ISSUE-029 | Domain: implement `BlockContract` model | BlockContract: block name, apiVersion, attributes, render mode, interactivity namespace, deprecation versions. Validate serialization, invariants and backward compatibility. | Not started |
| ISSUE-030 | Domain: implement `FixtureManifest` model | FixtureManifest: fixture version, users, content IDs, media hashes and cleanup ownership. Validate serialization, invariants and backward compatibility. | Not started |
| ISSUE-031 | Domain: implement `ReleaseManifest` model | ReleaseManifest: theme/plugin versions, source SHA, files, hashes, support matrix and build tooling. Validate serialization, invariants and backward compatibility. | Not started |
| ISSUE-032 | Contract: enforce public API rule | WordPress hooks and services are internal unless listed in docs/api/public-php.md. Add a contract test and documentation link. | Not started |
| ISSUE-033 | Contract: enforce public API rule | REST route namespace includes explicit major version; all routes have args schema and permission callback. Add a contract test and documentation link. | Not started |
| ISSUE-034 | Contract: enforce public API rule | Block metadata is canonical in block.json; PHP/JS generated registration must be checked for drift. Add a contract test and documentation link. | Not started |
| ISSUE-035 | Contract: enforce public API rule | Interactivity namespaces are project-prefixed and actions/state documented as stable or experimental. Add a contract test and documentation link. | Not started |

## Backlog execution rules

- Complete Bootstrap through Failure fixture before parallel feature expansion.
- Public contracts and schemas require ADR/API-owner review.
- Security-sensitive and release-workflow issues require designated owner review.
- A CLI/model issue is not complete until error and negative paths are tested.
- Documentation follows the real command/artifact; never document a command that has not been run from a clean clone.
- Close an issue only with linked PR, tests and evidence; administrative closure states why it is no longer needed.
