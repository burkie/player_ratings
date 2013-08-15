add_action( 'init', 'create_subs_taxonomies', 0 );
add_action( 'init', 'create_goalkeeper_taxonomies', 0 );
add_action( 'init', 'create_defender_taxonomies', 0 );
add_action( 'init', 'create_midfielder_taxonomies', 0 );
add_action( 'init', 'create_forward_taxonomies', 0 );

// create two taxonomies, genres and writers for the post type "book"
function create_subs_taxonomies() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Subs', 'taxonomy general name' ),
		'singular_name'     => _x( 'Sub', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Subs' ),
		'all_items'         => __( 'All Subs' ),
		'parent_item'       => __( 'Parent Sub' ),
		'parent_item_colon' => __( 'Parent Sub' ),
		'edit_item'         => __( 'Edit Sub' ),
		'update_item'       => __( 'Update Sub' ),
		'add_new_item'      => __( 'Add New Sub' ),
		'new_item_name'     => __( 'New Sub Name' ),
		'menu_name'         => __( 'Sub' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'subs' ),
	);

	register_taxonomy( 'subs', array( 'post' ), $args );
	}
	
	
	
	function create_goalkeeper_taxonomies() {
		// Add new taxonomy, make it hierarchical (like categories)
		$labels = array(
			'name'              => _x( 'Goalkeeper', 'taxonomy general name' ),
			'singular_name'     => _x( 'Goalkeeper', 'taxonomy singular name' ),
			'search_items'      => __( 'Search Goalkeepers' ),
			'all_items'         => __( 'All Goalkeepers' ),
			'parent_item'       => __( 'Parent Goalkeeper' ),
			'parent_item_colon' => __( 'Parent Goalkeeper' ),
			'edit_item'         => __( 'Edit Goalkeeper' ),
			'update_item'       => __( 'Update Goalkeeper' ),
			'add_new_item'      => __( 'Add New Goalkeeper' ),
			'new_item_name'     => __( 'New Goalkeeper Name' ),
			'menu_name'         => __( 'Goalkeeper' ),
		);
	
		$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'goalkeeper' ),
		);
	
		register_taxonomy( 'goalkeeper', array( 'post' ), $args );
		}
		
		/* DEFENDERS */
		
		function create_defender_taxonomies() {
			// Add new taxonomy, make it hierarchical (like categories)
			$labels = array(
				'name'              => _x( 'Defender', 'taxonomy general name' ),
				'singular_name'     => _x( 'Defender', 'taxonomy singular name' ),
				'search_items'      => __( 'Search Defenders' ),
				'all_items'         => __( 'All Defenders' ),
				'parent_item'       => __( 'Parent Defender' ),
				'parent_item_colon' => __( 'Parent Defender' ),
				'edit_item'         => __( 'Edit Defender' ),
				'update_item'       => __( 'Update Defender' ),
				'add_new_item'      => __( 'Add New Defender' ),
				'new_item_name'     => __( 'New Defender Name' ),
				'menu_name'         => __( 'Defender' ),
			);
		
			$args = array(
				'hierarchical'      => true,
				'labels'            => $labels,
				'show_ui'           => true,
				'show_admin_column' => true,
				'query_var'         => true,
				'rewrite'           => array( 'slug' => 'defender' ),
			);
		
			register_taxonomy( 'defender', array( 'post' ), $args );
			}
			
			
			
			/* MIDFIELDERS */
			
			function create_midfielder_taxonomies() {
				// Add new taxonomy, make it hierarchical (like categories)
				$labels = array(
					'name'              => _x( 'Midfielder', 'taxonomy general name' ),
					'singular_name'     => _x( 'Midfielder', 'taxonomy singular name' ),
					'search_items'      => __( 'Search Midfielders' ),
					'all_items'         => __( 'All Midfielders' ),
					'parent_item'       => __( 'Parent Midfielder' ),
					'parent_item_colon' => __( 'Parent Midfielder' ),
					'edit_item'         => __( 'Edit Midfielder' ),
					'update_item'       => __( 'Update Midfielder' ),
					'add_new_item'      => __( 'Add New Midfielder' ),
					'new_item_name'     => __( 'New Midfielder Name' ),
					'menu_name'         => __( 'Midfielder' ),
				);
			
				$args = array(
					'hierarchical'      => true,
					'labels'            => $labels,
					'show_ui'           => true,
					'show_admin_column' => true,
					'query_var'         => true,
					'rewrite'           => array( 'slug' => 'midfielder' ),
				);
			
				register_taxonomy( 'midfielder', array( 'post' ), $args );
				}
				
				
				/* FORWARDS */
				
				function create_forward_taxonomies() {
					// Add new taxonomy, make it hierarchical (like categories)
					$labels = array(
						'name'              => _x( 'Forwards', 'taxonomy general name' ),
						'singular_name'     => _x( 'Forward', 'taxonomy singular name' ),
						'search_items'      => __( 'Search Forwards' ),
						'all_items'         => __( 'All Forwards' ),
						'parent_item'       => __( 'Parent Forward' ),
						'parent_item_colon' => __( 'Parent Forward' ),
						'edit_item'         => __( 'Edit Forward' ),
						'update_item'       => __( 'Update Forward' ),
						'add_new_item'      => __( 'Add New Forward' ),
						'new_item_name'     => __( 'New Forward Name' ),
						'menu_name'         => __( 'Forward' ),
					);
				
					$args = array(
						'hierarchical'      => true,
						'labels'            => $labels,
						'show_ui'           => true,
						'show_admin_column' => true,
						'query_var'         => true,
						'rewrite'           => array( 'slug' => 'forward' ),
					);
				
					register_taxonomy( 'forward', array( 'post' ), $args );
					}
	