<?php

add_filter('show_admin_bar','__return_false');

//投稿にアーカイブ(投稿一覧)を持たせる
function post_has_archive( $args, $post_type ) {
	if ( 'post' == $post_type ) {
	  $args['rewrite'] = true;
	  $args['has_archive'] = 'news'; 
	}
	return $args;
  }
  add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );
  


// カスタムポスト
add_action('init', 'my_works');
function my_works()
{
  $labels = array(
	'name'=>'WORKS',
	'singular_name'=>'works',
	'add_new' => __('追加', 'works'),
	'add_new_item' => __('追加'),
	'edit_item' => __('編集'),
  );
	 $args = array(
    'labels' => $labels,
		'hierarchical' => false,
		'public' => true,
		'query_var' => false,
		'supports' => array('title','editor','thumbnail'),
		'menu_position' => 5,
		'has_archive' => true,
		'rewrite' => array('slug' => 'works'),
		'show_in_rest' => true,
	);
	
	register_post_type('works',$args);
}

/*タイトルタグ、サムネイル*/
add_theme_support( 'title-tag' );
add_theme_support('post-thumbnails');
set_post_thumbnail_size(720, 540, true );

