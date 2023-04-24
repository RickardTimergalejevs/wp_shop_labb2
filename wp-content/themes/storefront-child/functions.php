<?php

function add_some_text() {
    echo 'Fri frakt över 299 kr';
}

add_action('woocommerce_before_single_product_summary', 'add_some_text');

function remove_category() {
    remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);
}

add_action('after_setup_theme', 'remove_category');