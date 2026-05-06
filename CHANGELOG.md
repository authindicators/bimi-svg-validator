# Changelog

## 1.0.5

Release focus: RNC-aligned Tiny-PS cleanup and reporting.

### Added

- RNC-aligned cleanup behaviour for SVG Tiny-PS output.
- Collapsible **More info** Schema report.
- Warning section in the Schema report.
- Support for preserving local gradients:
  - `linearGradient`
  - `radialGradient`
  - `stop`
- Support for preserving text-related elements, with warnings:
  - `text`
  - `textArea`
  - `tspan`
- Simple CSS class inlining before removing `<style>` blocks.
- Explicit handling for visual-risk removals, including clipping and masking.

### Changed

- Output now consistently enforces:
  - `version="1.2"`
  - `baseProfile="tiny-ps"`
  - `xmlns="http://www.w3.org/2000/svg"`
  - square `viewBox`
  - no fixed `width` or `height`
- Copy Output button now appears below the cleaned SVG output.
- Schema report starts collapsed behind **More info**.
- Asset cache-busting versions updated to `1.0.5`.

### Removed or sanitized

- Removes `<style>` after inlining simple supported class styles.
- Removes `<script>`.
- Removes `<foreignObject>`.
- Removes `<clipPath>` and `<mask>`.
- Removes `data-*` attributes.
- Removes `aria-*` attributes.
- Removes inline `style` attributes.
- Removes event handler attributes such as `onclick`.
- Removes unsafe JavaScript references.
- Removes external references where they could break Tiny-PS compliance.

### Notes

The plugin now behaves more like a repair and normalisation tool than a basic validator. It attempts to preserve visual fidelity where the RNC allows it, and reports where it changes or removes features.

## 1.0.4

Release focus: restore a functional front end and add Tiny-PS basics.

### Added

- Working vanilla JavaScript front end.
- SVG input textarea.
- Title field for the output `<title>` element.
- Square output SVG handling.
- Basic Tiny-PS root attributes.
- Initial Schema report.
- Copy Output button.
- WordPress settings page stub.

### Fixed

- Removed broken inline JavaScript and Markdown fences from PHP.
- Corrected asset loading through `assets/js/main.js` and `assets/css/bimi-svg-validator.css`.

## 1.0.3

Release focus: file structure and plugin metadata cleanup.

### Added

- Standard WordPress plugin header.
- Basic stylesheet.
- Initial `readme.txt`.
- Initial zip package layout.

### Changed

- Moved front-end JavaScript into the assets folder.
