<?php

add_action('init', 'register_post_type_lsb_book');
add_action('init', 'register_tax_lsb_author');
add_action('init', 'register_tax_lsb_illustrator');
add_action('init', 'register_tax_lsb_publisher');
add_action('init', 'register_tax_lsb_topic');

function register_post_type_lsb_book() {
  register_post_type('lsb_book',
    array(
      'label' => 'Bøker',
      'description' => '',
      'public' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'capability_type' => 'post',
      'map_meta_cap' => true,
      'hierarchical' => false,
      'rewrite' => array('slug' => 'bok', 'with_front' => 1),
      'query_var' => true,
      'has_archive' => true,
      'menu_position' => '5',
      'supports' => array('title','excerpt','comments','revisions','author'),
      'labels' => array (
        'name' => 'Bøker',
        'singular_name' => 'Bok',
        'menu_name' => 'Bøker',
        'add_new' => 'Add Bok',
        'add_new_item' => 'Add New Bok',
        'edit' => 'Edit',
        'edit_item' => 'Edit Bok',
        'new_item' => 'New Bok',
        'view' => 'View Bok',
        'view_item' => 'View Bok',
        'search_items' => 'Search Bøker',
        'not_found' => 'No Bøker Found',
        'not_found_in_trash' => 'No Bøker Found in Trash',
        'parent' => 'Parent Bok',
      )
    )
  );
}

function register_tax_lsb_author() {
  register_taxonomy( 'lsb_tax_author',
    array(
      0 => 'lsb_book',
    ),
    array( 'hierarchical' => false,
    	'label' => 'Forfattere',
    	'show_ui' => true,
    	'query_var' => true,
    	'rewrite' => array( 'slug' => 'forfatter' ),
    	'show_admin_column' => true,
    	'labels' => array (
        'search_items' => 'Forfatter',
        'popular_items' => '',
        'all_items' => '',
        'parent_item' => '',
        'parent_item_colon' => '',
        'edit_item' => '',
        'update_item' => '',
        'add_new_item' => '',
        'new_item_name' => '',
        'separate_items_with_commas' => '',
        'add_or_remove_items' => '',
        'choose_from_most_used' => '',
      )
    )
  );
}

function register_tax_lsb_illustrator() {
  register_taxonomy( 'lsb_tax_illustrator',
    array(
      0 => 'lsb_book',
    ),
    array( 'hierarchical' => false,
    	'label' => 'Illustratører',
    	'show_ui' => true,
    	'query_var' => true,
    	'rewrite' => array( 'slug' => 'illustrator' ),
    	'show_admin_column' => false,
    	'labels' => array (
        'search_items' => 'Illustratør',
        'popular_items' => '',
        'all_items' => '',
        'parent_item' => '',
        'parent_item_colon' => '',
        'edit_item' => '',
        'update_item' => '',
        'add_new_item' => '',
        'new_item_name' => '',
        'separate_items_with_commas' => '',
        'add_or_remove_items' => '',
        'choose_from_most_used' => '',
      )
    )
  );
}

function register_tax_lsb_publisher() {
  register_taxonomy( 'lsb_tax_publisher',
    array(
      0 => 'lsb_book',
    ),
    array( 'hierarchical' => false,
      'label' => 'Forlag',
      'show_ui' => true,
      'query_var' => true,
      'rewrite' => array( 'slug' => 'forlag' ),
      'show_admin_column' => false,
      'labels' => array (
        'search_items' => 'Forlag',
        'popular_items' => '',
        'all_items' => '',
        'parent_item' => '',
        'parent_item_colon' => '',
        'edit_item' => '',
        'update_item' => '',
        'add_new_item' => '',
        'new_item_name' => '',
        'separate_items_with_commas' => '',
        'add_or_remove_items' => '',
        'choose_from_most_used' => '',
      )
    )
  );
}

function register_tax_lsb_topic() {
  register_taxonomy( 'lsb_tax_topic',
    array(
      0 => 'lsb_book',
    ),
    array( 'hierarchical' => false,
    	'label' => 'Emner',
    	'show_ui' => true,
    	'query_var' => true,
    	'rewrite' => array( 'slug' => 'emne' ),
    	'show_admin_column' => false,
    	'labels' => array (
        'search_items' => 'Emne',
        'popular_items' => '',
        'all_items' => '',
        'parent_item' => '',
        'parent_item_colon' => '',
        'edit_item' => '',
        'update_item' => '',
        'add_new_item' => '',
        'new_item_name' => '',
        'separate_items_with_commas' => '',
        'add_or_remove_items' => '',
        'choose_from_most_used' => '',
      )
    )
  );
}

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'lsb_book_meta',
		'title' => 'Bokmeta',
		'fields' => array (
			array (
				'key' => 'lsb_isbn',
				'label' => 'ISBN',
				'name' => 'isbn',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'lsb_published_year',
				'label' => 'Publisert',
				'name' => 'published_year',
				'type' => 'text',
				'instructions' => 'Året boken ble publisert',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'lsb_pages',
				'label' => 'Pages',
				'name' => 'pages',
				'type' => 'text',
				'instructions' => 'Antall sider',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'lsb_supported',
				'label' => 'Støttet av Leser søker bok?',
				'name' => 'supported',
				'type' => 'true_false',
				'required' => 1,
				'message' => '',
				'default_value' => 0,
			),
			array (
				'key' => 'lsb_support_cat',
				'label' => 'Støttekategori',
				'name' => 'support_cat',
				'type' => 'radio',
				'required' => 1,
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'lsb_supported',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
				'choices' => array (
					'purple' => 'Litt å lese',
					'yellow' => 'Storskrift',
					'orange' => 'Punktskrift & Følebilder',
					'green' => 'Enkelt innhold',
					'red' => 'Tegnspråk & NMT',
					'blue' => 'Bliss & Piktogram',
				),
				'other_choice' => 0,
				'save_other_choice' => 0,
				'default_value' => '',
				'layout' => 'vertical',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'lsb_book',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'lsb_content',
		'title' => 'Anmeldelse',
		'fields' => array (
			array (
				'key' => 'lsb_review',
				'label' => 'Anmeldelse',
				'name' => 'review',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'no',
			),
			array (
				'key' => 'lsb_quote',
				'label' => 'Utdrag fra boken',
				'name' => 'quote',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'basic',
				'media_upload' => 'no',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'lsb_book',
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
