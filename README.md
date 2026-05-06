# BIMI SVG Validator

![Version](https://img.shields.io/badge/version-1.0.5-blue)
![License](https://img.shields.io/badge/license-GPLv2%20or%20later-lightgrey)

BIMI SVG Validator is a WordPress plugin that cleans and normalises SVG files for BIMI Tiny-PS use.

It is built for marketers, email deliverability teams, and brand teams that need practical help preparing BIMI logo files. Paste an SVG, add a title, run the validator, and copy the cleaned output.

## What it does

Version 1.0.5 focuses on RNC-aligned SVG Tiny-PS cleanup. It does not simply check whether an SVG is valid. It repairs common issues found in exported logo files and reports what changed.

The front end includes:

- A title field for the required `<title>` element.
- A large SVG input box.
- A cleaned square SVG output box.
- A Copy Output button below the cleaned code.
- A collapsible **More info** report showing normalisations, removals, and warnings.

## Shortcode

Add the validator to any WordPress page or post:

```text
[bimi_svg_validator]
```

## Key features

- Enforces `version="1.2"` and `baseProfile="tiny-ps"`.
- Ensures `xmlns="http://www.w3.org/2000/svg"`.
- Normalises output to a square `viewBox`.
- Removes fixed `width` and `height`.
- Adds a required `<title>` element.
- Inlines simple class-based presentation styles before removing `<style>`.
- Preserves paths, shapes, local gradients, and supported text elements.
- Removes unsafe or unsupported elements and attributes.
- Reports changes through the **More info** Schema report.

## SVG cleanup behaviour

### Supported and preserved

The cleaner is designed to preserve common logo features where they are compatible with Tiny-PS rules:

- `path`
- `rect`
- `circle`
- `ellipse`
- `line`
- `polyline`
- `polygon`
- `defs`
- `linearGradient`
- `radialGradient`
- `stop`
- `solidColor`
- `text`
- `textArea`
- `tspan`
- `use`

### Removed

The cleaner removes content that commonly fails RNC validation or introduces risky behaviour:

- `<style>`
- `<script>`
- `<foreignObject>`
- `<clipPath>`
- `<mask>`
- `data-*` attributes
- `aria-*` attributes
- inline `style` attributes
- event handler attributes such as `onclick`
- external `href` references
- unsafe JavaScript references

When possible, the tool inlines simple class styles first. For example, `.cls-1 { fill: #827a04; }` is converted into `fill="#827a04"` before `<style>` is removed.

## Notes on text

The plugin preserves supported text elements, but it warns users when text remains. For production BIMI logos, converting text to paths is usually safer because mailbox providers may render fonts differently.

## Notes on clipping and masks

The plugin removes clipping and masking. These features can cause RNC compliance issues and visual ambiguity. The Schema report warns when these features are removed because the logo may change visually.

## Installation

1. Download the plugin zip.
2. Upload it in WordPress under **Plugins → Add New → Upload Plugin**.
3. Activate **BIMI SVG Validator**.
4. Add `[bimi_svg_validator]` to a page or post.

## File structure

```text
bimi-svg-validator/
├── bimi-svg-validator.php
├── readme.txt
├── README.md
├── CHANGELOG.md
└── assets/
    ├── css/
    │   └── bimi-svg-validator.css
    └── js/
        └── main.js
```

## Changelog

See [CHANGELOG.md](CHANGELOG.md).

## License

GPLv2 or later.
