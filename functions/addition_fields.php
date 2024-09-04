<?php
/**
 * Additional Fields
 */
add_filter( 'rwmb_meta_boxes', 'your_prefix_function_name' );

function your_prefix_function_name( $meta_boxes ) {
    $prefix = '';

    $meta_boxes[] = [
        'title'          => __( 'Home', 'your-text-domain' ),
        'post_types'     => ['page'],
        'closed'         => false,
        'default_hidden' => false,
        'autosave'       => false,
        'revision'       => false,
        'include'        => [
            'relation' => 'OR',
            'ID'       => [73],
        ],
        'fields'         => [
            [
                'name'              => __( 'Header', 'your-text-domain' ),
                'id'                => $prefix . 'header',
                'type'              => 'group',
                'collapsible'       => false,
                'clone'             => false,
                'clone_empty_start' => false,
                'hide_from_rest'    => false,
                'hide_from_front'   => false,
                'fields'            => [
                    [
                        'name'              => __( 'Title', 'your-text-domain' ),
                        'id'                => $prefix . 'text_uqeycw0cd5d',
                        'type'              => 'text',
                        'required'          => false,
                        'disabled'          => false,
                        'readonly'          => false,
                        'clone'             => false,
                        'clone_empty_start' => false,
                        'hide_from_rest'    => false,
                        'hide_from_front'   => false,
                        'limit_type'        => 'character',
                    ],
                    [
                        'name'              => __( 'Content', 'your-text-domain' ),
                        'id'                => $prefix . 'content',
                        'type'              => 'wysiwyg',
                        'raw'               => false,
                        'required'          => false,
                        'clone'             => false,
                        'clone_empty_start' => false,
                        'hide_from_rest'    => false,
                        'hide_from_front'   => false,
                        'limit_type'        => 'character',
                    ],
                    [
                        'name'              => __( 'Button_Text', 'your-text-domain' ),
                        'id'                => $prefix . 'button_text',
                        'type'              => 'text',
                        'required'          => false,
                        'disabled'          => false,
                        'readonly'          => false,
                        'clone'             => false,
                        'clone_empty_start' => false,
                        'hide_from_rest'    => false,
                        'hide_from_front'   => false,
                        'limit_type'        => 'character',
                    ],
                    [
                        'name'              => __( 'Button_URL', 'your-text-domain' ),
                        'id'                => $prefix . 'button_url',
                        'type'              => 'text',
                        'required'          => false,
                        'disabled'          => false,
                        'readonly'          => false,
                        'clone'             => false,
                        'clone_empty_start' => false,
                        'hide_from_rest'    => false,
                        'hide_from_front'   => false,
                        'limit_type'        => 'character',
                    ],
                    [
                        'name'              => __( 'Single Image', 'your-text-domain' ),
                        'id'                => $prefix . 'single_image_zxtzdoxryqn',
                        'type'              => 'single_image',
                        'force_delete'      => false,
                        'required'          => false,
                        'clone'             => false,
                        'clone_empty_start' => false,
                        'hide_from_rest'    => false,
                        'hide_from_front'   => false,
                    ],
                ],
            ],
        ],
    ];

    return $meta_boxes;
}