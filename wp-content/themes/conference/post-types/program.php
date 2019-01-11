<?php

function program_post_type()
{
    $labels = [
        'name' => _x('Программа', 'Post Type General Name', 'conference'),
        'singular_name' => _x('Программа', 'Post Type Singular Name', 'conference'),
        'menu_name' => __('Программа', 'conference'),
        'name_admin_bar' => __('Программа', 'conference'),
        'all_items' => __('Все программы', 'conference'),
        'add_new_item' => __('Добавить программу', 'conference'),
        'add_new' => __('Добавить программу', 'conference'),
        'new_item' => __('Новая программа', 'conference'),
        'edit_item' => __('Редактировать программу', 'conference'),
        'update_item' => __('Обновить программу', 'conference'),
        'view_item' => __('Просмотреть', 'conference'),
        'view_items' => __('Просмотреть все', 'conference'),
        'search_items' => __('Найти программу', 'conference'),
    ];
    $args = [
        'label' => __('Программа', 'conference'),
        'labels' => $labels,
        'supports' => ['title', 'editor', 'thumbnail'],
        'taxonomies' => [],
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
        'menu_icon' => 'dashicons-welcome-learn-more',
    ];
    register_post_type('program', $args);
}
add_action('init', 'program_post_type', 0);