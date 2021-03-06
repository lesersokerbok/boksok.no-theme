<?php

add_action('init', 'register_post_type_lsb_book');
add_action('init', 'register_tax_lsb_author');
add_action('init', 'register_tax_lsb_illustrator');
add_action('init', 'register_tax_lsb_translator');
add_action('init', 'register_tax_lsb_publisher');
add_action('init', 'register_tax_lsb_genre');
add_action('init', 'register_tax_lsb_age');
add_action('init', 'register_tax_lsb_customization');
add_action('init', 'register_tax_lsb_topic');
add_action('init', 'register_tax_lsb_language');

function custom_conference_in_home_loop( $query ) {
 if ( is_home() && $query->is_main_query() )
   $query->set( 'post_type', array( 'lsb_book') );
   return $query;
}
add_filter( 'pre_get_posts', 'custom_conference_in_home_loop' );

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
      'supports' => array('title','excerpt','comments','revisions','author','thumbnail'),
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

function register_tax_lsb_translator() {
  register_taxonomy( 'lsb_tax_translator',
    array(
      0 => 'lsb_book',
    ),
    array( 'hierarchical' => false,
      'label' => 'Oversetter',
      'show_ui' => true,
      'query_var' => true,
      'rewrite' => array( 'slug' => 'oversetter' ),
      'show_admin_column' => false,
      'labels' => array (
        'search_items' => 'Oversetter',
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

function register_tax_lsb_genre() {
  register_taxonomy( 'lsb_tax_genre',
    array(
      0 => 'lsb_book',
    ),
    array( 'hierarchical' => true,
      'label' => 'Sjanger',
      'show_ui' => true,
      'query_var' => true,
      'rewrite' => array( 'slug' => 'sjanger' ),
      'show_admin_column' => true,
      'labels' => array (
        'search_items' => 'Sjanger',
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

function register_tax_lsb_age() {
  register_taxonomy( 'lsb_tax_age',
    array(
      0 => 'lsb_book',
    ),
    array( 'hierarchical' => true,
      'label' => 'Alder',
      'show_ui' => true,
      'query_var' => true,
      'rewrite' => array( 'slug' => 'alder' ),
      'show_admin_column' => true,
      'labels' => array (
        'search_items' => 'Alder',
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

function register_tax_lsb_customization() {
  register_taxonomy( 'lsb_tax_customization',
    array(
      0 => 'lsb_book',
    ),
    array( 'hierarchical' => true,
      'label' => 'Tilpassning',
      'show_ui' => true,
      'query_var' => true,
      'rewrite' => array( 'slug' => 'tilpassning' ),
      'show_admin_column' => false,
      'labels' => array (
        'search_items' => 'Tilpassning',
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

function register_tax_lsb_language() {
  register_taxonomy( 'lsb_tax_language',
    array(
      0 => 'lsb_book',
    ),
    array( 'hierarchical' => true,
      'label' => 'Språk',
      'show_ui' => true,
      'query_var' => true,
      'rewrite' => array( 'slug' => 'språk' ),
      'show_admin_column' => false,
      'labels' => array (
        'search_items' => 'Språk',
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
		'id' => 'lsb_acf_book_meta',
		'title' => 'Bokmeta',
		'fields' => array (
			array (
				'key' => 'lsb_acf_isbn',
				'label' => 'ISBN',
				'name' => 'lsb_isbn',
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
				'key' => 'lsb_acf_published_year',
				'label' => 'Publisert',
				'name' => 'lsb_published_year',
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
				'key' => 'lsb_acf_pages',
				'label' => 'Sider',
				'name' => 'lsb_pages',
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
        'key' => 'lsb_acf_look_inside',
        'label' => 'Bla i boka',
        'name' => 'lsb_look_inside',
        'type' => 'text',
        'instructions' => 'Bla i boka url',
        'required' => 1,
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'formatting' => 'none',
        'maxlength' => '',
      ),
			array (
				'key' => 'lsb_acf_supported',
				'label' => 'Støttet av Leser søker bok?',
				'name' => 'lsb_supported',
				'type' => 'true_false',
				'required' => 1,
				'message' => '',
				'default_value' => 0,
			),
			array (
				'key' => 'lsb_acf_support_cat',
				'label' => 'Støttekategori',
				'name' => 'lsb_support_cat',
				'type' => 'radio',
				'required' => 1,
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'lsb_acf_supported',
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
		'id' => 'lsb_acf_content',
		'title' => 'Anmeldelse',
		'fields' => array (
			array (
				'key' => 'lsb_acf_review',
				'label' => 'Anmeldelse',
				'name' => 'lsb_review',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'no',
			),
			array (
				'key' => 'lsb_acf_quote',
				'label' => 'Utdrag fra boken',
				'name' => 'lsb_quote',
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
