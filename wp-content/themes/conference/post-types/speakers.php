<?php

function speakers_post_type()
{
    $labels = [
        'name' => _x('Спикеры', 'Post Type General Name', 'conference'),
        'singular_name' => _x('Спикер', 'Post Type Singular Name', 'conference'),
        'menu_name' => __('Спикеры', 'conference'),
        'name_admin_bar' => __('Спикеры', 'conference'),
        'all_items' => __('Все спикеры', 'conference'),
        'add_new_item' => __('Добавить спикера', 'conference'),
        'add_new' => __('Добавить спикера', 'conference'),
        'new_item' => __('Новый  спикер', 'conference'),
        'edit_item' => __('Редактировать спикера', 'conference'),
        'update_item' => __('Обновить спикера', 'conference'),
        'view_item' => __('Просмотреть', 'conference'),
        'view_items' => __('Просмотреть все', 'conference'),
        'search_items' => __('Найти спикера', 'conference'),
    ];
    $args = [
        'label' => __('Спикер', 'conference'),
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
        'menu_icon' => 'dashicons-id',
    ];
    register_post_type('speakers', $args);
}
add_action('init', 'speakers_post_type', 0);
