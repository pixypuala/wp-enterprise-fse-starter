# Changelog

All notable changes to this project are documented here. The format is based on
[Keep a Changelog](https://keepachangelog.com/en/1.1.0/) and this project adheres
to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

### Added
- Repository scaffolding: governance files, docs, and CI skeleton.
- Installable FSE starter theme: theme.json tokens, index/single templates, header/footer parts, hero pattern.
- Dark style variation (`theme/styles/dark.json`) with an AAA-contrast palette (text 16.4:1, links 9.4:1).
- Call-to-action, feature-grid, and testimonial block patterns, each using theme.json preset tokens.
- Block style registrations in `functions.php`: `Bordered` (Group) and `Pill` (Button), styled from design tokens.
- Self-hosted `Display` and `Body` fonts: committed the `Literata` and `Atkinson Hyperlegible Next` variable `woff2` files (SIL OFL 1.1 with bundled `OFL.txt`), wired via `theme.json` `fontFace` entries, with system fallback stacks.
- CI validating theme.json and linting theme PHP.

### Changed
- CI now validates every JSON file under `theme/` (theme.json plus style variations), not just theme.json.
