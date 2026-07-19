# Self-hosted fonts

`theme.json` registers a `Display` font family whose `fontFace` points at a
self-hosted variable font, now committed here:

    file:./assets/fonts/fraunces-variable.woff2

## Fraunces (committed)

`fraunces-variable.woff2` is the **Fraunces** variable font (Latin, weight axis),
licensed under the **SIL Open Font License 1.1** (GPL-compatible) — the full
license travels with the font in `OFL.txt`. The system-serif stack
(`"Iowan Old Style", Palatino, Georgia, serif`) remains the fallback, so headings
render correctly even before the webfont loads.

Source: the OFL build published via [Fontsource](https://fontsource.org/fonts/fraunces),
mirroring the upstream [Fraunces project](https://github.com/undercasetype/Fraunces).
WordPress emits the `@font-face` rule from `theme.json` automatically.

## Replacing or subsetting

To slim the file further, subset the variable `woff2` to the glyphs and weight
range you ship and overwrite `fraunces-variable.woff2` in place — the filename the
`fontFace` `src` references. Keep `OFL.txt` alongside it; the license requires the
notice to travel with the font.
