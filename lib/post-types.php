<?php  
// Register Custom Press Release
function press_release_post_type() {

	$labels = array(
		'name'                  => _x( 'Press Releases', 'Press Release General Name', 'sage' ),
		'singular_name'         => _x( 'Press Release', 'Press Release Singular Name', 'sage' ),
		'menu_name'             => __( 'Press Releases', 'sage' ),
		'name_admin_bar'        => __( 'Press Release', 'sage' ),
		'archives'              => __( 'Press Release Archives', 'sage' ),
		'parent_item_colon'     => __( 'Parent Press Release:', 'sage' ),
		'all_items'             => __( 'All Press Releases', 'sage' ),
		'add_new_item'          => __( 'Add New Press Release', 'sage' ),
		'add_new'               => __( 'Add New', 'sage' ),
		'new_item'              => __( 'New Press Release', 'sage' ),
		'edit_item'             => __( 'Edit Press Release', 'sage' ),
		'update_item'           => __( 'Update Press Release', 'sage' ),
		'view_item'             => __( 'View Press Release', 'sage' ),
		'search_items'          => __( 'Search Press Release', 'sage' ),
		'not_found'             => __( 'Not found', 'sage' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'sage' ),
		'featured_image'        => __( 'Featured Image', 'sage' ),
		'set_featured_image'    => __( 'Set featured image', 'sage' ),
		'remove_featured_image' => __( 'Remove featured image', 'sage' ),
		'use_featured_image'    => __( 'Use as featured image', 'sage' ),
		'insert_into_item'      => __( 'Insert into item', 'sage' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'sage' ),
		'items_list'            => __( 'Press Releases list', 'sage' ),
		'items_list_navigation' => __( 'Press Releases list navigation', 'sage' ),
		'filter_items_list'     => __( 'Filter items list', 'sage' ),
	);
	$args = array(
		'label'                 => __( 'Press Release', 'sage' ),
		'description'           => __( 'Press Releases', 'sage' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'trackbacks', 'revisions', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'press_release', $args );

}
add_action( 'init', 'press_release_post_type', 0 );

function asset_post_type() {

	$labels = array(
		'name'                  => _x( 'Assets', 'Asset General Name', 'sage' ),
		'singular_name'         => _x( 'Asset', 'Asset Singular Name', 'sage' ),
		'menu_name'             => __( 'Assets', 'sage' ),
		'name_admin_bar'        => __( 'Asset', 'sage' ),
		'archives'              => __( 'Asset Archives', 'sage' ),
		'parent_item_colon'     => __( 'Parent Asset:', 'sage' ),
		'all_items'             => __( 'All Assets', 'sage' ),
		'add_new_item'          => __( 'Add New Asset', 'sage' ),
		'add_new'               => __( 'Add New', 'sage' ),
		'new_item'              => __( 'New Asset', 'sage' ),
		'edit_item'             => __( 'Edit Asset', 'sage' ),
		'update_item'           => __( 'Update Asset', 'sage' ),
		'view_item'             => __( 'View Asset', 'sage' ),
		'search_items'          => __( 'Search Asset', 'sage' ),
		'not_found'             => __( 'Not found', 'sage' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'sage' ),
		'featured_image'        => __( 'Featured Image', 'sage' ),
		'set_featured_image'    => __( 'Set featured image', 'sage' ),
		'remove_featured_image' => __( 'Remove featured image', 'sage' ),
		'use_featured_image'    => __( 'Use as featured image', 'sage' ),
		'insert_into_item'      => __( 'Insert into item', 'sage' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'sage' ),
		'items_list'            => __( 'Assets list', 'sage' ),
		'items_list_navigation' => __( 'Assets list navigation', 'sage' ),
		'filter_items_list'     => __( 'Filter items list', 'sage' ),
	);
	$args = array(
		'label'                 => __( 'Asset', 'sage' ),
		'description'           => __( 'Assets', 'sage' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'trackbacks', 'revisions', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'asset', $args );

}
add_action( 'init', 'asset_post_type', 0 );



?>