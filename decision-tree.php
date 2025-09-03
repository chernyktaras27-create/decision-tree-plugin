<?php
/*
Plugin Name: Decision Tree
Description: Interaktiver Entscheidungsbaum per Shortcode [decision_tree].
Version: 1.1
Author: Taras Chernyk
*/

if (!defined('ABSPATH')) { exit; }

// Shortcod: [decision_tree tree="energieberater"]
function dtree_render_shortcode($atts = []) {
    $atts = shortcode_atts([
        'tree' => 'energieberater', // за замовчуванням
    ], $atts, 'decision_tree');

    // path to tree file
    $tree_file = plugin_dir_path(__FILE__) . 'trees/' . sanitize_file_name($atts['tree']) . '.php';

    if (!file_exists($tree_file)) {
        return '<div id="decision-tree">Konfigurationsdatei nicht gefunden.</div>';
    }

    // loading the tree array
    $tree_data = include $tree_file;

    //enqueue only when there is a shortcode
    //CSS
    wp_enqueue_style(
        'decision-tree-css',
        plugin_dir_url(__FILE__) . 'assets/css/decision-tree.css',
        [],
        '1.1'
    );
    //Vue.js (via CDN)
    wp_enqueue_script(
        'vue',
        'https://cdn.jsdelivr.net/npm/vue@3.3.4/dist/vue.global.prod.js',
        [],
        null,
        true
    );
    // Our JS
    wp_enqueue_script(
        'decision-tree-js',
        plugin_dir_url(__FILE__) . 'assets/js/decision-tree.js',
        ['vue'],
        '1.1',
        true
    );

    // localize/pass data to JS
    $ui = [
        'labels' => [
            'back' => 'Zurück',
            'recommendation' => 'Empfehlung',
            'more' => 'Mehr erfahren',
        ]
    ];

    wp_localize_script('decision-tree-js', 'DecisionTreeConfig', [
        'tree' => $tree_data,
        'ui'   => $ui,
    ]);

    return '<div id="decision-tree"></div>';
}
add_shortcode('decision_tree', 'dtree_render_shortcode');