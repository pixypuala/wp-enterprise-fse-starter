# Architecture and Required Decisions

## Architectural shape

| Component | Responsibility |
|---|---|
| packages/theme | Presentation-only block theme: theme.json, templates, parts, patterns, style variations, CSS and editor assets. |
| packages/site-core | Plugin-owned content model, permissions, APIs, dynamic rendering, migrations, CLI commands and domain services. |
| packages/mu-bootstrap-example | Optional defensive boot checks and environment policy examples; never required for ordinary installs. |
| packages/e2e-fixtures | Seed content, users, roles and intentional failure fixtures. |
| playground | Blueprint, bundle resources and smoke validation. |
| tools | Build, lint, audit, release, screenshot and evidence scripts. |

## Public interfaces

- PHP namespace and service-container boundary for site-core services.
- block.json API version 3 contracts for every custom block.
- REST routes with explicit schema, permission_callback and stable error codes.
- Interactivity API stores with documented public state/actions and no hidden global mutable state.
- WP-CLI commands for seed, migrate, verify and rollback operations.

## Dependency direction

- Domain contracts and schemas must not depend on UI, CI vendor or a concrete adapter.
- WordPress integration depends on domain contracts; domain contracts must remain testable outside a full browser journey where practical.
- Reporters consume immutable results and cannot change test outcomes.
- Examples and fixtures depend on released/public packages; production packages never depend on examples.
- Generated files are reproducible outputs and include generator/version provenance.

## Required ADRs before implementation

1. **ADR-0001 – repository topology and package boundaries.** Monorepo vs split repositories, release units, ownership and dependency rules.
2. **ADR-0002 – minimum/support matrix.** WordPress, PHP, Node/Bun, WooCommerce/browser/runtime policy and scheduled next-version testing.
3. **ADR-0003 – public API and schema versioning.** Semantic versioning limits, deprecation period and compatibility classification.
4. **ADR-0004 – local/CI environment.** Container, wp-env, Playground or custom fixture strategy; database and browser lifecycle.
5. **ADR-0005 – data and migration policy.** Storage, idempotency, backup, rollback and irreversible changes.
6. **ADR-0006 – permissions and trust boundaries.** Capabilities, authentication, remote calls, filesystem/command execution and secrets.
7. **ADR-0007 – test pyramid and sampled matrix.** Which checks run per commit, pull request, scheduled build and release.
8. **ADR-0008 – observability and result schema.** Error taxonomy, logging, redaction, artifacts and retention.
9. **ADR-0009 – build/release provenance.** Lockfiles, generated artifacts, signing/attestation policy and tag workflow.
10. **ADR-0010 – licensing and contribution ownership.** Project license, third-party assets and contributor terms.

## Error model

Every operational error must include a stable code, category, human message, remediation, safe context and causal chain. Categories: configuration, unsupported environment, permission, validation, dependency, setup/migration, assertion/contract, timeout/cancellation, network, infrastructure, security policy and internal defect.

## Extension rules

- Extension points are named, typed/schematized, versioned and tested.
- Hooks/events do not expose mutable internal objects without a documented stability promise.
- Adapters declare capabilities and side effects; core never infers dangerous capability from method presence.
- Experimental interfaces are clearly namespaced and excluded from stability promises.
- Removal requires deprecation notice, migration guidance and the published support window.

## Architecture review gate

No implementation phase beyond the walking skeleton starts until ADR-0001 through ADR-0006 are accepted, the main trust boundaries are drawn, and one end-to-end vertical slice proves the proposed package direction.
