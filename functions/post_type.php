<?php
/**
 * Post Types
 */
add_action( 'init', 'your_prefix_register_post_type' );
function your_prefix_register_post_type() {
	$labels = [
		'name'                     => esc_html__( 'Game Items', 'your-textdomain' ),
		'singular_name'            => esc_html__( 'game items', 'your-textdomain' ),
		'add_new'                  => esc_html__( 'Add New', 'your-textdomain' ),
		'add_new_item'             => esc_html__( 'Add New game items', 'your-textdomain' ),
		'edit_item'                => esc_html__( 'Edit game items', 'your-textdomain' ),
		'new_item'                 => esc_html__( 'New game items', 'your-textdomain' ),
		'view_item'                => esc_html__( 'View game items', 'your-textdomain' ),
		'view_items'               => esc_html__( 'View Game Items', 'your-textdomain' ),
		'search_items'             => esc_html__( 'Search Game Items', 'your-textdomain' ),
		'not_found'                => esc_html__( 'No game items found.', 'your-textdomain' ),
		'not_found_in_trash'       => esc_html__( 'No game items found in Trash.', 'your-textdomain' ),
		'parent_item_colon'        => esc_html__( 'Parent game items:', 'your-textdomain' ),
		'all_items'                => esc_html__( 'All Game Items', 'your-textdomain' ),
		'archives'                 => esc_html__( 'Game items Archives', 'your-textdomain' ),
		'attributes'               => esc_html__( 'Game items Attributes', 'your-textdomain' ),
		'insert_into_item'         => esc_html__( 'Insert into game items', 'your-textdomain' ),
		'uploaded_to_this_item'    => esc_html__( 'Uploaded to this game items', 'your-textdomain' ),
		'featured_image'           => esc_html__( 'Featured image', 'your-textdomain' ),
		'set_featured_image'       => esc_html__( 'Set featured image', 'your-textdomain' ),
		'remove_featured_image'    => esc_html__( 'Remove featured image', 'your-textdomain' ),
		'use_featured_image'       => esc_html__( 'Use as featured image', 'your-textdomain' ),
		'menu_name'                => esc_html__( 'Game Items', 'your-textdomain' ),
		'filter_items_list'        => esc_html__( 'Filter game items list', 'your-textdomain' ),
		'filter_by_date'           => esc_html__( '', 'your-textdomain' ),
		'items_list_navigation'    => esc_html__( 'Game Items list navigation', 'your-textdomain' ),
		'items_list'               => esc_html__( 'Game Items list', 'your-textdomain' ),
		'item_published'           => esc_html__( 'Game items published.', 'your-textdomain' ),
		'item_published_privately' => esc_html__( 'Game items published privately.', 'your-textdomain' ),
		'item_reverted_to_draft'   => esc_html__( 'Game items reverted to draft.', 'your-textdomain' ),
		'item_scheduled'           => esc_html__( 'Game items scheduled.', 'your-textdomain' ),
		'item_updated'             => esc_html__( 'Game items updated.', 'your-textdomain' ),
	];
	$args = [
		'label'               => esc_html__( 'Game Items', 'your-textdomain' ),
		'labels'              => $labels,
		'description'         => '',
		'public'              => true,
		'hierarchical'        => false,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'show_in_rest'        => true,
		'query_var'           => true,
		'can_export'          => true,
		'delete_with_user'    => true,
		'has_archive'         => true,
		'rest_base'           => '',
		'show_in_menu'        => true,
		'menu_position'       => '',
		'menu_icon'           => 'dashicons-games',
		'capability_type'     => 'post',
		'supports'            => ['title', 'editor', 'thumbnail'],
		'taxonomies'          => [],
		'rewrite'             => [
			'with_front' => false,
		],
	];

	register_post_type( 'game-items', $args );

	$labels = [
		'name'                     => esc_html__( 'Characters', 'your-textdomain' ),
		'singular_name'            => esc_html__( 'character', 'your-textdomain' ),
		'add_new'                  => esc_html__( 'Add New', 'your-textdomain' ),
		'add_new_item'             => esc_html__( 'Add New character', 'your-textdomain' ),
		'edit_item'                => esc_html__( 'Edit character', 'your-textdomain' ),
		'new_item'                 => esc_html__( 'New character', 'your-textdomain' ),
		'view_item'                => esc_html__( 'View character', 'your-textdomain' ),
		'view_items'               => esc_html__( 'View Characters', 'your-textdomain' ),
		'search_items'             => esc_html__( 'Search Characters', 'your-textdomain' ),
		'not_found'                => esc_html__( 'No characters found.', 'your-textdomain' ),
		'not_found_in_trash'       => esc_html__( 'No characters found in Trash.', 'your-textdomain' ),
		'parent_item_colon'        => esc_html__( 'Parent character:', 'your-textdomain' ),
		'all_items'                => esc_html__( 'All Characters', 'your-textdomain' ),
		'archives'                 => esc_html__( 'Character Archives', 'your-textdomain' ),
		'attributes'               => esc_html__( 'Character Attributes', 'your-textdomain' ),
		'insert_into_item'         => esc_html__( 'Insert into character', 'your-textdomain' ),
		'uploaded_to_this_item'    => esc_html__( 'Uploaded to this character', 'your-textdomain' ),
		'featured_image'           => esc_html__( 'Featured image', 'your-textdomain' ),
		'set_featured_image'       => esc_html__( 'Set featured image', 'your-textdomain' ),
		'remove_featured_image'    => esc_html__( 'Remove featured image', 'your-textdomain' ),
		'use_featured_image'       => esc_html__( 'Use as featured image', 'your-textdomain' ),
		'menu_name'                => esc_html__( 'Characters', 'your-textdomain' ),
		'filter_items_list'        => esc_html__( 'Filter characters list', 'your-textdomain' ),
		'filter_by_date'           => esc_html__( '', 'your-textdomain' ),
		'items_list_navigation'    => esc_html__( 'Characters list navigation', 'your-textdomain' ),
		'items_list'               => esc_html__( 'Characters list', 'your-textdomain' ),
		'item_published'           => esc_html__( 'Character published.', 'your-textdomain' ),
		'item_published_privately' => esc_html__( 'Character published privately.', 'your-textdomain' ),
		'item_reverted_to_draft'   => esc_html__( 'Character reverted to draft.', 'your-textdomain' ),
		'item_scheduled'           => esc_html__( 'Character scheduled.', 'your-textdomain' ),
		'item_updated'             => esc_html__( 'Character updated.', 'your-textdomain' ),
	];
	$args = [
		'label'               => esc_html__( 'Characters', 'your-textdomain' ),
		'labels'              => $labels,
		'description'         => '',
		'public'              => true,
		'hierarchical'        => false,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'show_in_rest'        => true,
		'query_var'           => true,
		'can_export'          => true,
		'delete_with_user'    => true,
		'has_archive'         => true,
		'rest_base'           => '',
		'show_in_menu'        => true,
		'menu_position'       => '',
		'menu_icon'           => 'dashicons-carrot',
		'capability_type'     => 'post',
		'supports'            => ['title', 'editor', 'thumbnail'],
		'taxonomies'          => [],
		'rewrite'             => [
			'with_front' => false,
		],
	];

	register_post_type( 'character', $args );
}


/** Tax  */
add_action( 'init', 'your_prefix_register_taxonomy' );
function your_prefix_register_taxonomy() {
	$labels = [
		'name'                       => esc_html__( 'Game Types', 'your-textdomain' ),
		'singular_name'              => esc_html__( 'Game Type', 'your-textdomain' ),
		'menu_name'                  => esc_html__( 'Game Types', 'your-textdomain' ),
		'search_items'               => esc_html__( 'Search Game Types', 'your-textdomain' ),
		'popular_items'              => esc_html__( 'Popular Game Types', 'your-textdomain' ),
		'all_items'                  => esc_html__( 'All Game Types', 'your-textdomain' ),
		'parent_item'                => esc_html__( 'Parent Game Type', 'your-textdomain' ),
		'parent_item_colon'          => esc_html__( 'Parent Game Type:', 'your-textdomain' ),
		'edit_item'                  => esc_html__( 'Edit Game Type', 'your-textdomain' ),
		'view_item'                  => esc_html__( 'View Game Type', 'your-textdomain' ),
		'update_item'                => esc_html__( 'Update Game Type', 'your-textdomain' ),
		'add_new_item'               => esc_html__( 'Add New Game Type', 'your-textdomain' ),
		'new_item_name'              => esc_html__( 'New Game Type Name', 'your-textdomain' ),
		'separate_items_with_commas' => esc_html__( 'Separate game types with commas', 'your-textdomain' ),
		'add_or_remove_items'        => esc_html__( 'Add or remove game types', 'your-textdomain' ),
		'choose_from_most_used'      => esc_html__( 'Choose most used game types', 'your-textdomain' ),
		'not_found'                  => esc_html__( 'No game types found.', 'your-textdomain' ),
		'no_terms'                   => esc_html__( 'No game types', 'your-textdomain' ),
		'filter_by_item'             => esc_html__( 'Filter by game type', 'your-textdomain' ),
		'items_list_navigation'      => esc_html__( 'Game Types list pagination', 'your-textdomain' ),
		'items_list'                 => esc_html__( 'Game Types list', 'your-textdomain' ),
		'most_used'                  => esc_html__( 'Most Used', 'your-textdomain' ),
		'back_to_items'              => esc_html__( '&larr; Go to Game Types', 'your-textdomain' ),
		'text_domain'                => esc_html__( 'your-textdomain', 'your-textdomain' ),
	];
	$args = [
		'label'              => esc_html__( 'Game Types', 'your-textdomain' ),
		'labels'             => $labels,
		'description'        => '',
		'public'             => true,
		'publicly_queryable' => true,
		'hierarchical'       => false,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'show_in_nav_menus'  => true,
		'show_in_rest'       => true,
		'show_tagcloud'      => true,
		'show_in_quick_edit' => true,
		'show_admin_column'  => false,
		'query_var'          => true,
		'sort'               => false,
		'meta_box_cb'        => 'post_tags_meta_box',
		'rest_base'          => '',
		'rewrite'            => [
			'with_front'   => false,
			'hierarchical' => false,
		],
	];
	register_taxonomy( 'game-type', ['game-items'], $args );
}

