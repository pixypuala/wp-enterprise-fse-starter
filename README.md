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

## What ships now (previously boundary)

The **self-hosted font binary** is committed: `theme/assets/fonts/fraunces-variable.woff2`
(SIL OFL 1.1 — see `theme/assets/fonts/OFL.txt`), the real *Fraunces* variable font
that `theme.json`'s `Display` `fontFace` points at, with the system-serif fallback
stack retained. Patterns, block style registrations, and the **Dark** style variation
(`theme/styles/dark.json`, AAA-contrast: text 16.4:1, links 9.4:1) also ship; CI
validates every theme JSON file.

> **Document status:** implementation-complete engineering blueprint, not a claim that the software has already been built.

A production-oriented reference architecture for a block theme, a site-core plugin, and optional environment bootstrap without mixing presentation and business logic.

## Who this is for

- WordPress agencies
- enterprise product teams
- theme developers
- technical leads reviewing FSE architecture

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
