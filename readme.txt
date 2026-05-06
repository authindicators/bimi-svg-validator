=== BIMI SVG Validator ===
Contributors: emailkarma
Tags: BIMI, SVG, Tiny-PS, email authentication, deliverability
Requires at least: 6.0
Tested up to: 6.6
Requires PHP: 7.4
Stable tag: 1.0.5
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Validate, clean, and normalise SVG files for BIMI Tiny-PS compatibility.

== Description ==

BIMI SVG Validator helps marketers, email teams, and brand teams clean SVG files for BIMI use. The tool accepts pasted SVG code, adds a required title, normalises the root SVG attributes, and produces a square Tiny-PS output.

Version 1.0.5 adds stronger RNC-aligned cleaning. It removes unsupported metadata, style blocks, scriptable content, clipping, and masking. It also preserves common safe SVG features, including paths, shapes, local gradients, and supported text elements.

The validator is designed as a practical repair tool, not just a pass/fail checker. It helps users understand what changed through the collapsible “More info” Schema report.

== Features ==

* Paste SVG code into a front-end validator.
* Add a required `<title>` element to the output SVG.
* Enforce `version="1.2"` and `baseProfile="tiny-ps"`.
* Ensure a square `viewBox` and remove fixed `width` and `height`.
* Inline simple class-based CSS before removing `<style>`.
* Preserve local gradients using `linearGradient`, `radialGradient`, and `stop`.
* Remove disallowed elements, including `style`, `script`, `foreignObject`, `clipPath`, and `mask`.
* Remove disallowed attributes, including `data-*`, `aria-*`, inline `style`, event handlers, and unsafe references.
* Preserve text elements while warning that converting text to paths is safer for production BIMI logos.
* Show a collapsible “More info” Schema report.
* Copy cleaned output to the clipboard.

== Installation ==

1. Upload the `bimi-svg-validator` folder to `/wp-content/plugins/`.
2. Activate the plugin in WordPress.
3. Add the shortcode `[bimi_svg_validator]` to any page or post.
4. Paste SVG code, add a title, and click **Validate & Normalise**.

== Frequently Asked Questions ==

= Does this guarantee BIMI display? =

No. This tool helps produce a BIMI-friendly SVG, but BIMI display also depends on DNS, DMARC enforcement, certificate requirements, and mailbox provider behaviour.

= Does the tool validate DNS or VMC/CMC certificates? =

No. This plugin focuses on SVG cleanup and Tiny-PS normalisation. Use a BIMI record checker for DNS, DMARC, VMC, and CMC validation.

= Why does the tool remove `<style>`? =

The Tiny-PS RNC does not allow `<style>`. Version 1.0.5 inlines simple class-based presentation rules first, then removes the style block.

= Why are clip paths and masks removed? =

They can create RNC compliance problems and visual ambiguity. The tool removes them and warns that the output may change visually.

= Should text be used in a BIMI logo? =

The tool preserves supported text elements, but converting text to paths is usually safer. Mailbox providers may render fonts differently.

== Changelog ==

= 1.0.5 =
* Added RNC-aligned SVG Tiny-PS cleanup rules.
* Removed `data-*` and `aria-*` attributes.
* Always removes `<style>`, after inlining simple class-based presentation styles.
* Preserves supported local gradients.
* Preserves text and textArea elements, with warnings.
* Removes clip paths and masks with visual-change warnings.
* Adds a collapsible “More info” Schema report.
* Moves Copy Output below the cleaned SVG output.
* Updates asset cache-busting versions to 1.0.5.

= 1.0.4 =
* Restored a working vanilla JavaScript front end.
* Added Title input and square SVG output.
* Added Tiny-PS root attributes.
* Added basic schema reporting and WordPress settings support.

= 1.0.3 =
* Standardised plugin header and asset structure.
* Added initial readme and stylesheet.
