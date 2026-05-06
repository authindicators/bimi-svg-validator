<?php
/**
 * Plugin Name: BIMI SVG Validator
 * Description: Validate and normalise SVGs for BIMI compliance. Use shortcode [bimi_svg_validator]. Follow us: https://bsky.app/profile/bimigroup.bsky.social.
 * Version: 1.0.5
 * Author: Matthew Vernhout / BIMI Group
 * Author URI: https://github.com/EmailKarma
 * Plugin URI: https://github.com/EmailKarma/BIMI-official
 * License: GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: bimi-svg-validator
 */
defined('ABSPATH') || exit;

function bimi_svg_validator_enqueue_scripts() {
    wp_enqueue_script('bimi-svg-validator', plugin_dir_url(__FILE__) . 'assets/js/main.js', array(), '1.0.5', true);

    $opts = get_option('bsv_options', array('strict_mode' => 0, 'require_title' => 1));
    wp_localize_script('bimi-svg-validator', 'BIMISVGValidator', array(
        'strictMode' => !empty($opts['strict_mode']),
        'requireTitle' => !empty($opts['require_title']),
    ));

    wp_enqueue_style('bimi-svg-validator', plugin_dir_url(__FILE__) . 'assets/css/bimi-svg-validator.css', array(), '1.0.5');
}
add_action('wp_enqueue_scripts', 'bimi_svg_validator_enqueue_scripts');

function bimi_svg_validator_shortcode() {
    return '<div id="bimi-svg-validator-root" class="bimi-svg-validator"></div>';
}
add_shortcode('bimi_svg_validator', 'bimi_svg_validator_shortcode');

// Settings omitted here for brevity; reuse previous v1.0.4 settings page if needed.
