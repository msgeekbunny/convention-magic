<?php

class presentation {
	function convention_magic_presentation(){
		register_post_type( 'convention_magic_presentation',
			[
				'labels'      => [
					'name'          => __( 'Presentations' ),
					'singular_name' => __( 'Presentation' ),
					'add_new' => 'Add New Presentation',
					'add_new_item' => 'Add New Presentation',
					'edit_item' => 'Edit Presentation',
					'new_item' => 'New Presentation',
					'all_items' => 'All Presentations',
					'view_item' => 'View Presentation',
					'search_items' => 'Search Presentations',
					'not_found' => 'No Presentations Found',
					'not_found_in_trash' => 'No Presentations found in Trash',
					'menu_name' => 'Presentations'
				],
				'taxonomy' => array('category', 'post_tag', 'speakers', 'rooms'),
				'public'      => true,
				'has_archive' => true,
                'menu_position' => 22,
                'show_in_rest' => true,
				'supports' => array('title', 'editor', 'excerpt', 'custom-fields','thumbnails', 'page-attributes'),
				'rewrite'     => [ 'slug' => 'presentations' ]
			]
		);
	}
    public function presentation_meta_box(){

    }
    public function presentation_save(){

    }
}