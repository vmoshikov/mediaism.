<?php
/*
Plugin Name: m.Навигатор
Plugin URI: https://mediaism.moshikov.co
Description:
Version: 1.0
Author: Владислав Мошиков
Author URI: http://www.moshikov.co/
Copyright: Владислав Мошиков
*/
// Регистраци типа
add_action('init', 'navi_type');
function navi_type(){
	register_post_type('navi', array(
		'labels'             => array(
			'name'               => 'Навигатор',
			'singular_name'      => 'Навигатор',
			'menu_name'          => 'Навигатор'
		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'taxonomies'		     => array('navi_group'),
		'menu_icon'          => 'dashicons-post-status',
		'supports'           => array('title', 'editor')
	) );
}
// Регистрация таксономии
add_action('init', 'navi_group');
function navi_group(){
	register_taxonomy('navi_group', array('navi'), array(
		'label'                 => '',
		'labels'                => array(
			'name'              => 'Категория',
			'singular_name'     => 'Категория',
			'menu_name'         => 'Категория размещения',
		),
		'description'           => '',
		'public'                => true,
		'publicly_queryable'    => null,
		'show_in_nav_menus'     => true,
		'show_ui'               => true,
		'show_tagcloud'         => true,
		'show_in_rest'          => null,
		'rest_base'             => null,
		'hierarchical'          => true,
		'update_count_callback' => '',
		'rewrite'								=> array( 'slug' => 'navigation' ),

		//'query_var'             => $taxonomy, // название параметра запроса
		'capabilities'          => array(),
		'meta_box_cb'           => null,
		'show_admin_column'     => false,
		'_builtin'              => false,
		'show_in_quick_edit'    => null,
	) );
}
// ACF
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_59bbffc649f9f',
	'title' => 'Навигатор',
	'fields' => array (
		array (
			'key' => 'field_59bbffcd74d67',
			'label' => 'Адрес',
			'name' => 'adress',
			'type' => 'text',
			'instructions' => 'г. Геленджик, ул. Кирова 125',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array (
			'key' => 'field_59bbffda74d68',
			'label' => 'Телефон',
			'name' => 'phone',
			'type' => 'text',
			'instructions' => '8 (928) 275-50-07',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array (
			'key' => 'field_59bbfff674d69',
			'label' => 'Координаты на карте',
			'name' => 'coords',
			'type' => 'text',
			'instructions' => '<b>55.75399399999374, 37.62209300000001</b> Получить их можно в сервисе <a href="https://yandex.ru/map-constructor/location-tool/">Определение координат</a> + нужно будет поставить пробел после запятой',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'navi',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;
?>
