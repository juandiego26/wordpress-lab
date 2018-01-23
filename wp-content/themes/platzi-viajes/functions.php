<?php
/*******ADD ROLE VIAJERO************/
function add_role_viajero()
{
  remove_role('viajero');
    add_role(
        'viajero',
        'Viajero',
        [
            'read'                 => true,
            'edit_posts'           => true,
            'upload_files'         => true,
            'publish_posts'        => true,
         // 'delete_posts'         => true,
            'edit_published_posts' => true
        ]
    );
}

// add the simple_role
add_action('init', 'add_role_viajero');

/*************ADD CUSTOM POST TYPE********************************/
function viajes_init() {
    $labels = array(
        'name'              => _x( 'Viajes', 'post type general name', 'your-plugin-textdomain' ),
        'singular_name'     => _x( 'Viajes', 'post type general name', 'your-plugin-textdomain' ),
        'menu_name'         => _x( 'Mis viajes', 'admin menu', 'your-plugin-textdomain' ),
        'name_admin_bar'    => _x( 'Viajes', 'add new on admin bar', 'your-plugin-textdomain' ),
        'add_new'           => _x( 'Añadir nuevo', 'viaje', 'your-plugin-textdomain' ),
        'add_new_item'      => __( 'Añadir nuevo viaje', 'your-plugin-textdomain' ),
        'new_item'          => __( 'Nuevo viaje', 'your-plugin-textdomain' ),
        'edit_item'         => __( 'Editar viaje', 'your-plugin-textdomain' ),
        'view_item'         => __( 'Ver viaje', 'your-plugin-textdomain' ),
        'all_items'         => __( 'Todos los viajes', 'your-plugin-textdomain' ),
        'search_items'      => __( 'Buscar viajes', 'your-plugin-textdomain' ),
        'parent_item_colon' => __( 'Viajes padre', 'your-plugin-textdomain' ),
        'not_found'         => __( 'No hemos encontrado viajes.', 'your-plugin-textdomain' ),
        'not_found_in_trash'=> __( 'No hemos encontrado viajes en la papelera', 'your-plugin-textdomain' ),
    );

    $args = array(
        'labels'            => $labels,
        'description'       => __('Description', 'your-plugin-textdomain'),
        'public'            => true,
        'public_queryable'  => true,
        'show_ui'           => true,
        'show_in_menu'      => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'viaje' ),
        'capability_type'   => 'post',
        'has_archive'       => true,
        'hierarchical'      => false,
        'menu_position'     => null,
        'menu_icon'         => 'dashicons-admin-multisite',
        'supports'          => array( 'title', 'editor', 'author', 'thumbnail' )
    );

    register_post_type( 'viaje', $args );
}

add_action( 'init', 'viajes_init' );

/********Advanced custom post type fields***********/

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_viaje',
		'title' => 'Viaje',
		'fields' => array (
			array (
				'key' => 'field_5a66a9a00ec93',
				'label' => 'Destino',
				'name' => 'destino',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5a66aa0adfe89',
				'label' => 'Vacunas obligatorias',
				'name' => 'vacunas_obligatorias',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5a66aa2adfe8a',
				'label' => 'Vacunas recomendadas',
				'name' => 'vacunas_recomendadas',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5a66aa55dfe8b',
				'label' => 'Transporte local',
				'name' => 'transporte_local',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5a66aa6fdfe8c',
				'label' => 'Peligrosidad',
				'name' => 'peligrosidad',
				'type' => 'select',
				'choices' => array (
					'nula' => 'Nula',
					'baja' => 'Baja',
					'media' => 'Media',
					'alta' => 'Alta',
					'muy alta' => 'Muy Alta',
				),
				'default_value' => '',
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5a66aaf4dfe8d',
				'label' => 'Moneda local',
				'name' => 'moneda_local',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'viaje',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}

?>
