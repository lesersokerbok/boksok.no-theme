<?php
/**
 * Custom functions
 */

//add_action("pre_get_posts", "custom_front_page");
//
//function custom_front_page($wp_query){
//
//    if($wp_query->get('page_id') == get_option('page_on_front')):
//
//        $wp_query->set('post_type', 'stop');
//        $wp_query->set('page_id', ''); //Empty
//
//        //Fix conditional Fucntions like is_front_page or is_single ect
//        $wp_query->is_page = 0;
//        $wp_query->is_singular = 0;
//
//    endif;
//}