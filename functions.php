<?php
function ghm_setup() {
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support('custom-logo', array(
		'height' => 50,
		'width' => 320,
		'flex-height' => true
	));
	register_nav_menu('primery', 'Primery menu');
}
add_action ('after_setup_theme', 'ghm_setup');
function ghm_scripts() {
	wp_enqueue_style( 'style-css', get_stylesheet_uri() );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css');
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/slick/slick.css');
	wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/slick/slick-theme.css');

	wp_enqueue_script( 'migrate', get_template_directory_uri() . '/js/jquery-migrate-1.2.1.min.js');
	
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/slick/slick.js');
	wp_enqueue_script( 'area', get_template_directory_uri() . '/js/area.js');

}
add_action('wp_enqueue_scripts', 'ghm_scripts' );
add_action('init', 'slider');
function slider(){
	register_post_type('slider', array(
		'public' => true,
		'supports' => array('title', 'editor', 'thumbnail'),
		'labels' => array(
			'name' => 'Слайдер',
			'all_items' => 'Все слайды',
			'add_new' => 'Добавить новый'
		)
	));
}
add_action('init', 'slider_logo');
function slider_logo(){
	register_post_type('slider_logo', array(
		'public' => true,
		'supports' => array('title', 'thumbnail'),
		'labels' => array(
			'name' => 'Слайдер логотипов',
			'all_items' => 'Все слайды логотипов',
			'add_new' => 'Добавить новый'
		)
	));
}
function ghm_customize_register ($wp_customize) {
	$wp_customize->add_setting('section_kompany', array(
		'default' => 'Главные принципы компании',
		'transport' => 'refresh',
	));
	$wp_customize->add_setting('label1', array(
		'default' => 'не срывать сроки',
		'transport' => 'refresh',
	));
	$wp_customize->add_setting('label2', array(
		'default' => 'иметь в команде квалифицированных работников',
		'transport' => 'refresh',
	));
	$wp_customize->add_setting('label3', array(
		'default' => 'Выполнять работы качественно',
		'transport' => 'refresh',
	));
	$wp_customize->add_section('title_section', array(
		'title' => 'Секция принципы компании',
		'priority' => 30,
	));
	$wp_customize->add_control('section_kompany', array(
		'label' => 'Принципы компании',
		'section' => 'title_section',
		'settings' => 'section_kompany',
		'type' => 'text',
	));
	$wp_customize->add_control('label1', array(
		'label' => 'Первый принцип',
		'section' => 'title_section',
		'settings' => 'label1',
		'type' => 'text',
	));
	$wp_customize->add_control('label2', array(
		'label' => 'Второй принцип',
		'section' => 'title_section',
		'settings' => 'label2',
		'type' => 'text',
	));
	$wp_customize->add_control('label3', array(
		'label' => 'Третий принцип',
		'section' => 'title_section',
		'settings' => 'label3',
		'type' => 'text',
	));
}
add_action('customize_register', 'ghm_customize_register');