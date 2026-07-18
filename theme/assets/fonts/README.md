# Self-hosted fonts

`theme.json` registers a `Display` font family whose `fontFace` points at a
self-hosted variable font:

    file:./assets/fonts/fraunces-variable.woff2

The binary itself is not committed to keep the repository light. Until it is
dropped in here, the `Display` family degrades gracefully to its system-serif
fallback stack (`"Iowan Old Style", Palatino, Georgia, serif`), so headings
still render correctly.

## Adding the font

1. Download **Fraunces** (SIL Open Font License 1.1, GPL-compatible) from
   <https://fonts.google.com/specimen/Fraunces>.
2. Subset and convert the variable font to `woff2` (weights 400–700).
3. Save it in this directory as `fraunces-variable.woff2` — the filename the
   `fontFace` `src` already references.

No other change is required: WordPress emits the `@font-face` rule from
`theme.json` automatically once the file is present.
