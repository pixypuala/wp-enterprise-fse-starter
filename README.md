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
- `theme/templates/` — `index`, `single`, `page`, `search`, and `404` templates. A block theme without `page.html` renders Pages through `index.html`, i.e. the blog loop instead of the page's own content; without `404.html` a missing URL renders an archive title over that same loop.
- `theme/parts/` — header and footer template parts.
- `theme/patterns/` — hero, call-to-action, feature-grid, and testimonial patterns.
- `theme/screenshot.png` — the 1200x900 screenshot the directory requires, rendered from the theme's own patterns.
- `theme/functions.php` — minimal setup: pattern category plus token-driven block styles (`Bordered` group, `Pill` button).
- `theme/assets/fonts/` — self-hosted `Display` and `Body` font wiring (`Literata`, `Atkinson Hyperlegible Next`) via `theme.json` `fontFace` entries.

CI validates `theme.json` and lints every PHP file. This is the extraction of the theme layer
from the Enterprise FSE Publishing Platform — presentation only, no bundled business logic.

## What ships now (previously boundary)

The **self-hosted font binaries** are committed (SIL OFL 1.1 — see
`theme/assets/fonts/OFL.txt`), with the system fallback stacks retained: *Literata* for
`Display`, a screen-first editorial serif suited to real article bodies, and *Atkinson
Hyperlegible Next* for `Body`, drawn by the Braille Institute to make the usually
confusable letterforms unambiguous for low-vision readers. In an accessibility-first
starter the body face should do accessibility work, not merely avoid harming it. Nothing
is fetched from a font CDN at runtime, so the theme adds no external request and leaks no
visitor IP. Patterns, block style registrations, and the **Dark** style variation
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
