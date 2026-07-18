# Product Definition Using PCAAP

## Problem

Teams often begin block-theme work from a visual starter that lacks durable architecture, editor governance, migration strategy, automated quality gates, and a clear theme/plugin boundary.

## Cost

- business logic becomes trapped in a theme
- editor and frontend styling drift
- unsafe dynamic blocks reach production
- updates become difficult to test
- new projects repeat the same foundational work

## Answer

Ship a reference monorepo containing a lean block theme, a site-core plugin, optional MU bootstrap examples, a WordPress Playground demo, automated tests, migration fixtures, and documented extension points.

## Advantage

The repository proves architectural judgment rather than merely providing another visual starter theme.

## Proof

- fresh clone to running demo in one documented command
- editor/frontend visual parity evidence
- dynamic block and Interactivity API tests
- security, accessibility, performance and compatibility reports
- migration from one released schema/version to another

## Ask

Use the starter for a pilot project, review its boundaries, or contribute a narrowly scoped pattern, test, or migration fixture.

## Product principles

1. **Bound every claim.** State exactly which versions, environments, contracts, roles, journeys and evidence support a claim.
2. **Prefer official platform APIs.** Private internals may be studied but must not become undocumented production dependencies.
3. **Prove failure detection.** Every important gate needs a known-bad fixture or mutation proving that it can fail.
4. **Local equals CI.** CI invokes versioned repository commands; it does not contain hidden logic unavailable to contributors.
5. **Safe by default.** Destructive, privileged, remote, secret-bearing or production-targeting behavior requires explicit opt-in.
6. **Documentation is a product surface.** A new contributor must be able to install, reproduce, test and understand limitations without private guidance.
7. **Maintenance is designed before launch.** Compatibility policy, ownership, deprecation, security disclosure and archive criteria exist before v1.0.

## Success outcomes

- A qualified developer can reach the documented demo from a clean clone without guessing.
- A reviewer can map every user-facing promise to code, tests and evidence.
- A maintainer can identify the supported versions, release process and breaking-change policy.
- A security reviewer can find permissions, sensitive data, network access and unsafe operations in one threat model.
- An outside contributor can select a scoped issue, run checks locally and submit a compliant pull request.

## Failure conditions

The project is not ready when it depends on undocumented local services, hides secrets in examples, uses vague compatibility language, lacks negative tests, has unowned critical code, cannot produce release artifacts from a tag, or has no plan for security reports and breaking changes.
