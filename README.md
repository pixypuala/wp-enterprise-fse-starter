# WP Enterprise FSE Starter

## Getting started

Copy `theme/` into `wp-content/themes/enterprise-fse-starter` (or symlink it) and activate it in
Appearance → Themes. No build step — the theme is pure configuration and block markup.

To try it in the browser with [WordPress Playground](https://wordpress.org/playground/):

```bash
npx @wp-playground/cli@latest server --mount=theme:/wordpress/wp-content/themes/enterprise-fse-starter
```

## What is built today

A valid, installable FSE **block theme starter**:

- `theme/theme.json` — design tokens (colour, fluid type, spacing) with accessible defaults.
- `theme/templates/` — `index` and `single` templates.
- `theme/parts/` — header and footer template parts.
- `theme/patterns/` — hero, call-to-action, feature-grid, and testimonial patterns.
- `theme/functions.php` — minimal setup: pattern category plus token-driven block styles (`Bordered` group, `Pill` button).
- `theme/assets/fonts/` — self-hosted `Display` font wiring (`Fraunces`) via a `theme.json` `fontFace`.

CI validates `theme.json` and lints every PHP file. This is the extraction of the theme layer
from the Enterprise FSE Publishing Platform — presentation only, no bundled business logic.

## Documented boundary (not yet built)

The **font binary** is the one remaining boundary item: `theme.json` registers a
self-hosted `Display` family whose `fontFace` `src` points at
`assets/fonts/fraunces-variable.woff2`, but that `woff2` file is not committed to
keep the repository light. Until it is added (see `theme/assets/fonts/README.md`),
the `Display` family degrades to its system-serif fallback stack, so headings
still render correctly.

Patterns, block style registrations, and the **Dark** style variation
(`theme/styles/dark.json`) now ship. The Dark variation is an AAA-contrast palette
override (text 16.4:1, links 9.4:1 against the dark base); CI validates every theme
JSON file, including style variations.

> **Document status:** implementation-complete engineering blueprint, not a claim that the software has already been built.

A production-oriented reference architecture for a block theme, a site-core plugin, and optional environment bootstrap without mixing presentation and business logic.

## Who this is for

- WordPress agencies
- enterprise product teams
- theme developers
- technical leads reviewing FSE architecture

## Start-to-finish route

1. Read `docs/00-PRODUCT-PCAAP.md` and accept or change the problem boundary.
2. Freeze v1 scope using `docs/01-SCOPE-REQUIREMENTS-ACCEPTANCE.md`.
3. Record architecture decisions from `docs/02-ARCHITECTURE-AND-ADRS.md` before scaffolding.
4. Create the exact repository skeleton in `docs/03-REPOSITORY-STRUCTURE.md`.
5. Apply the stack and compatibility policy in `docs/04-STACK-COMPATIBILITY-DEPENDENCIES.md`.
6. Execute phases in `docs/05-IMPLEMENTATION-PLAN.md`; do not jump to polish before contracts and failure paths.
7. Apply security/privacy controls and threat model from `docs/06-SECURITY-PRIVACY-THREAT-MODEL.md`.
8. Build the test system in `docs/07-TEST-QUALITY-ACCESSIBILITY-PERFORMANCE.md`.
9. Enforce merge/release gates in `docs/08-CI-CD-SUPPLY-CHAIN-RELEASE.md`.
10. Produce user, contributor, API and evidence documentation from `docs/09-DOCUMENTATION-DEMO-EVIDENCE.md`.
11. Establish governance and maintainer expectations from `docs/10-OPEN-SOURCE-GOVERNANCE.md`.
12. Operate support, deprecation and incident handling from `docs/11-MAINTENANCE-SUPPORT-INCIDENTS.md`.
13. Follow `docs/12-ROADMAP-MILESTONES-ISSUES.md` and release only through `docs/13-STRICT-AUDIT-FIX-DEFINITION-OF-DONE.md`.
14. Freeze commands and machine contracts in `docs/15-TECHNICAL-CONTRACTS-COMMANDS-SCHEMAS.md`.
15. Execute the decomposed work in `docs/16-IMPLEMENTATION-BACKLOG.md`.
16. Release and transfer maintainership using `docs/17-RELEASE-MANIFEST-AND-HANDOFF.md`.
17. Use `TEMPLATES/` to initialize repository community and CI files; replace all placeholders before publishing.

## Required implementation outputs

- installable theme ZIP
- installable site-core plugin ZIP
- Playground bundle
- demo content fixture
- architecture decision records
- compatibility report
- security threat model
- case study and benchmark report

## Non-negotiable rule

A feature is not complete because code exists. It is complete only when its contract, permissions, failure behavior, automated tests, manual evidence where applicable, documentation, migration/deprecation impact and release artifact are all reviewed.
