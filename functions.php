<?php


function enquejquery() {
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', '//code.jquery.com/jquery-latest.min.js');
}

add_action('wp_enqueue_scripts', 'enquejquery');


// Register Custom Post Type
function eventos() {

	$labels = array(
		'name'                  => _x( 'Eventos', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Evento', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Eventos', 'text_domain' ),
		'name_admin_bar'        => __( 'Eventos', 'text_domain' ),
		'archives'              => __( 'Archivo Eventos', 'text_domain' ),
		'attributes'            => __( 'Editar Evento', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'Todos los Eventos', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Agregar Nuevo Evento', 'text_domain' ),
		'new_item'              => __( 'Nuevo Evento', 'text_domain' ),
		'edit_item'             => __( 'Editar Evento', 'text_domain' ),
		'update_item'           => __( 'Actualizar Evento', 'text_domain' ),
		'view_item'             => __( 'Ver evento', 'text_domain' ),
		'view_items'            => __( 'Ver Eventos', 'text_domain' ),
		'search_items'          => __( 'Buscar Evento', 'text_domain' ),
		'not_found'             => __( 'No existen eventos', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Imagen de Evento', 'text_domain' ),
		'set_featured_image'    => __( 'Establecer imagen de evento', 'text_domain' ),
		'remove_featured_image' => __( 'Remover Imagen', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Evento', 'text_domain' ),
		'description'           => __( 'Custom post type para eventos', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-tickets-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'evento', $args );

}
add_action( 'init', 'eventos', 0 );