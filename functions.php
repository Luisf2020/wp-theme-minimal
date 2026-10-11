<?php
/**
 * Configuracion del tema LZ Minimal.
 */
declare(strict_types=1);

if (!defined('ABSPATH')) {
    exit;
}

function lz_minimal_setup(): void
{
    load_theme_textdomain('lz-minimal', get_template_directory() . '/languages');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'comment-list', 'gallery']);
    register_nav_menus(['primary' => __('Menu principal', 'lz-minimal')]);
}
add_action('after_setup_theme', 'lz_minimal_setup');

function lz_minimal_assets(): void
{
    wp_enqueue_style('lz-minimal', get_stylesheet_uri(), [], wp_get_theme()->get('Version'));
}
add_action('wp_enqueue_scripts', 'lz_minimal_assets');

function lz_minimal_excerpt_length(): int
{
    return 28;
}
add_filter('excerpt_length', 'lz_minimal_excerpt_length');
