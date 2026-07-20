# Self-hosted fonts

`theme.json` registers both families with a `fontFace` pointing at a self-hosted
variable font, committed here. WordPress emits the `@font-face` rules from
`theme.json` automatically; nothing is fetched from a third party at runtime, so
the theme adds no external request and leaks no visitor IP to a font CDN.

## The pairing

This is an accessibility-first enterprise starter, and the type is chosen for
that rather than for fashion.

**Literata** (`literata-variable.woff2`) carries display and headings. It is a
screen-first editorial serif — designed for long-form reading on devices rather
than adapted from print — which suits a publishing theme that expects real
article bodies, not marketing fragments. The system-serif stack
(`"Iowan Old Style", Palatino, Georgia, serif`) remains the fallback.

**Atkinson Hyperlegible Next** (`atkinson-hyperlegible-next-variable.woff2`)
carries body and UI. It was designed by the Braille Institute specifically to
raise character recognition for low-vision readers: the letterforms that are
usually confusable — `I` `l` `1`, `O` `0`, `b` `d` `p` `q` — are drawn to be
unambiguous. In a theme whose stated purpose is accessibility, the body face
should do accessibility work rather than merely avoid harming it.

Both are variable fonts, so one file per family covers the whole weight range
the theme uses.

## Licensing

Both families are licensed under the **SIL Open Font License 1.1**, which is
GPL-compatible. The full licence travels with the fonts in `OFL.txt`, as the
licence requires.

Both files are the Latin subsets published through Google Fonts, mirroring the
upstream [Literata](https://github.com/googlefonts/literata) and
[Atkinson Hyperlegible](https://github.com/googlefonts/atkinson-hyperlegible)
projects.

## Replacing or subsetting

To slim a file further, subset the variable `woff2` to the glyphs and weight
range you ship and overwrite it in place — the filename is what the `fontFace`
`src` in `theme.json` references. Keep `OFL.txt` alongside it, and update the
fallback stack in `theme.json` so text still renders correctly before the
webfont loads.
