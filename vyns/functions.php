<?php
function wpm_enqueue_styles(){
wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
wp_enqueue_script( 'script', get_stylesheet_directory_uri() . '/script.js' );
}
add_action( 'wp_enqueue_scripts', 'wpm_enqueue_styles' );

    
function wpm_custom_post_type_blues() {

	// On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
	$labels = array(
		// Le nom au pluriel
		'name'                => _x( 'Blues', 'Post Type General Name'),
		// Le nom au singulier
		'singular_name'       => _x( 'Blues', 'Post Type Singular Name'),
		// Le libellé affiché dans le menu
		'menu_name'           => __( 'Blues'),
		// Les différents libellés de l'administration
		'all_items'           => __( 'Tout les vinyles de blues'),
		'view_item'           => __( 'Voir les vinyles de blues'),
		'add_new_item'        => __( 'Ajouter un nouvel article blues'),
		'add_new'             => __( 'Ajouter'),
		'edit_item'           => __( 'Editer'),
		'update_item'         => __( 'Modifier'),
		'search_items'        => __( 'Rechercher'),
		'not_found'           => __( 'Non trouvée'),
		'not_found_in_trash'  => __( 'Non trouvée dans la corbeille'),
	);
	
	// On peut définir ici d'autres options pour notre custom post type

    
	$args = array(
		'label'               => __( 'Blues'),
        'description'         => __( 'Tous sur le vinyles'),
        'labels'              => $labels,
        'taxonomies' 	      => array('post_tag'),
		// On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
		// 'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		'show_in_rest' => true,
		'hierarchical'        => false,
		'public'              => true,
		'has_archive'         => true,
		'rewrite'			  => array( 'slug' => 'blues'),
	);
	// On enregistre notre custom post type qu'on nomme ici "serietv" et ses arguments
    register_post_type( 'blues', $args );
}
add_action( 'init', 'wpm_custom_post_type_blues', 0 );

// ###################################################################
// ###################################################################
// ########################## METABOX  BLUES ###############################
// ###################################################################

function blues_number_add_meta_box() {
    add_meta_box( 'blues_number', 'Numero vinyle', 'blues_number_callback' , 'blues' );
}

function blues_number_callback( $post ){
    wp_nonce_field('blues_save_number_data', 'blues_number_meta_box_nonce');

    $value = get_post_meta( $post->ID, '_blues_number_value_key', true);

    echo '<label for="blues_number_field">Entrez le numero du vinyle</label>';
    echo '<input type="text" id="blues_number_field" name="blues_number_field" value="' . esc_attr( $value ) . '"
    size="25">';
}

add_action('add_meta_boxes', 'blues_number_add_meta_box');


//if nonce doesnt exist stop la function
// function blues_save_number_data ( $post_id ) {
//     if( ! isset( $_POST['blues_number_meta_box_nonce'] ) ) {
//         return;
//     }
//     if ( ! wp_verify_nonce( $_POST['blues_number_meta_box_nonce'], ' blues_save_number_data' )) {
//         return;
//     }

//     if( defined ('DOING_AUTOSAVE') && DOING_AUTOSAVE ) {
//         return;
//     }

//     if ( ! curent_user_can('edit_post', $post_id)) {
//         return;
//     }

//     if ( ! isset ( $_POST['blues_number_field'])){
//         return;
//     }

//     $my_data = sanitize_text_field($_POST['blues_number_field']);

//     update_post_meta( $post_id, '_blues_number_value_key', $my_data);

// }

// add_action ('save_post', ' blues_save_number_data');

// ###################################################################
// ###################################################################

function blues_date_add_meta_box() {
    add_meta_box( 'blues_date', 'Date de sortie', 'blues_date_callback' , 'blues' );
}

function blues_date_callback( $post ){
    wp_nonce_field('blues_save_date_data', 'blues_date_meta_box_nonce');

    $value = get_post_meta( $post->ID, '_blues_date_value_key', true);

    echo '<label for="blues_date_field">Entrez la date de sortie du vinyle : </label>';
    echo '<input type="text" id="blues_date_field" name="blues_date_field" value="' . esc_attr( $value ) . '"
    size="25">';
}

add_action('add_meta_boxes', 'blues_date_add_meta_box');


// ###################################################################
// ###################################################################

function blues_pressage_add_meta_box() {
    add_meta_box( 'blues_pressage', 'Pressage', 'blues_pressage_callback' , 'blues' );
}

function blues_pressage_callback( $post ){
    wp_nonce_field('blues_save_pressage_data', 'blues_pressage_meta_box_nonce');

    $value = get_post_meta( $post->ID, '_blues_pressage_value_key', true);

    echo '<label for="blues_pressage_field">Entrez le lieu de pressage du vinyle : </label>';
    echo '<input type="text" id="blues_pressage_field" name="blues_pressage_field" value="' . esc_attr( $value ) . '"
    size="35">';
}

add_action('add_meta_boxes', 'blues_pressage_add_meta_box');


// ###################################################################
// ###################################################################

function blues_label_add_meta_box() {
    add_meta_box( 'blues_label', 'Label', 'blues_label_callback' , 'blues' );
}

function blues_label_callback( $post ){
    wp_nonce_field('blues_save_label_data', 'blues_label_meta_box_nonce');

    $value = get_post_meta( $post->ID, '_blues_label_value_key', true);

    echo '<label for="blues_label_field">Entrez le label du vinyle : </label>';
    echo '<input type="text" id="blues_label_field" name="blues_label_field" value="' . esc_attr( $value ) . '"
    size="30">';
}

add_action('add_meta_boxes', 'blues_label_add_meta_box');

// ###################################################################
// ###################################################################

function blues_duree_add_meta_box() {
    add_meta_box( 'blues_duree', 'Duree', 'blues_duree_callback' , 'blues' );
}

function blues_duree_callback( $post ){
    wp_nonce_field('blues_save_duree_data', 'blues_duree_meta_box_nonce');

    $value = get_post_meta( $post->ID, '_blues_duree_value_key', true);

    echo '<label for="blues_duree_field">Entrez la durée du vinyle : </label>';
    echo '<input type="text" id="blues_duree_field" name="blues_duree_field" value="' . esc_attr( $value ) . '"
    size="20">';
}

add_action('add_meta_boxes', 'blues_duree_add_meta_box');


// ###################################################################
// ###################################################################

function blues_prix_add_meta_box() {
    add_meta_box( 'blues_prix', 'Prix', 'blues_prix_callback' , 'blues' );
}

function blues_prix_callback( $post ){
    wp_nonce_field('blues_save_prix_data', 'blues_prix_meta_box_nonce');

    $value = get_post_meta( $post->ID, '_blues_prix_value_key', true);

    echo '<label for="blues_prix_field">Entrez le prix du vinyle : </label>';
    echo '<input type="text" id="blues_prix_field" name="blues_prix_field" value="' . esc_attr( $value ) . '"
    size="20">';
}

add_action('add_meta_boxes', 'blues_prix_add_meta_box');



// ###################################################################
// ###################################################################
// ########################## METABOX ###############################
// ###################################################################
/**
 * Registers the event post type.
 */
function wpt_event_post_type() {
	$labels = array(
		'name'               => __( 'Events' ),
		'singular_name'      => __( 'Event' ),
		'add_new'            => __( 'Add New Event' ),
		'add_new_item'       => __( 'Add New Event' ),
		'edit_item'          => __( 'Edit Event' ),
		'new_item'           => __( 'Add New Event' ),
		'view_item'          => __( 'View Event' ),
		'search_items'       => __( 'Search Event' ),
		'not_found'          => __( 'No events found' ),
		'not_found_in_trash' => __( 'No events found in trash' )
	);
	$supports = array(
		'title',
		'editor',
		'thumbnail',
		'comments',
		'revisions',
	);
	$args = array(
		'labels'               => $labels,
		'supports'             => $supports,
		'public'               => true,
		'capability_type'      => 'post',
		'rewrite'              => array( 'slug' => 'events' ),
		'has_archive'          => true,
		'menu_position'        => 30,
		'menu_icon'            => 'dashicons-calendar-alt',
		'register_meta_box_cb' => 'wpt_add_event_metaboxes',
	);
	register_post_type( 'events', $args );
}
add_action( 'init', 'wpt_event_post_type' );




add_action( 'add_meta_box', 'add_events_metaboxes' );

/**
 * Adds a metabox to the right side of the screen under the â€œPublishâ€ box
 */
function wpt_add_event_metaboxes() {
	add_meta_box(
		'wpt_events_location',
		'Event Location',
		'wpt_events_location',
		'events',
		'side',
		'default'
	);
}



/**
 * Output the HTML for the metabox.
 */
function wpt_events_location() {
	global $post;
	// Nonce field to validate form request came from current site
	wp_nonce_field( basename( __FILE__ ), 'event_fields' );
	// Get the location data if it's already been entered
	$location = get_post_meta( $post->ID, 'location', true );
	// Output the field
	echo '<input type="text" name="location" value="' . esc_textarea( $location )  . '" class="widefat">';
}


/**
 * Save the metabox data
 */
function wpt_save_events_meta( $post_id, $post ) {
	// Return if the user doesn't have edit permissions.
	if ( ! current_user_can( 'edit_post', $post_id ) ) {
		return $post_id;
	}
	// Verify this came from the our screen and with proper authorization,
	// because save_post can be triggered at other times.
	if ( ! isset( $_POST['location'] ) || ! wp_verify_nonce( $_POST['event_fields'], basename(__FILE__) ) ) {
		return $post_id;
	}
	// Now that we're authenticated, time to save the data.
	// This sanitizes the data from the field and saves it into an array $events_meta.
	$events_meta['location'] = esc_textarea( $_POST['location'] );
	// Cycle through the $events_meta array.
	// Note, in this example we just have one item, but this is helpful if you have multiple.
	foreach ( $events_meta as $key => $value ) :
		// Don't store custom data twice
		if ( 'revision' === $post->post_type ) {
			return;
		}
		if ( get_post_meta( $post_id, $key, false ) ) {
			// If the custom field already has a value, update it.
			update_post_meta( $post_id, $key, $value );
		} else {
			// If the custom field doesn't have a value, add it.
			add_post_meta( $post_id, $key, $value);
		}
		if ( ! $value ) {
			// Delete the meta key if there's no value
			delete_post_meta( $post_id, $key );
		}
	endforeach;
}
add_action( 'save_post', 'wpt_save_events_meta', 1, 2 );


// ###################################################################
// ###################################################################
// ######################### TAXONIMIE ###############################
// ###################################################################


// Let us create Taxonomy for Custom Post Type
add_action( 'init', 'crunchify_create_deals_custom_taxonomy', 0 );
 
//create a custom taxonomy name it "type" for your posts
function crunchify_create_blues_custom_taxonomy() {
 
  $labels = array(
    'name' => _x( 'Types', 'taxonomy general name' ),
    'singular_name' => _x( 'Type', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Types' ),
    'all_items' => __( 'All Types' ),
    'parent_item' => __( 'Parent Type' ),
    'parent_item_colon' => __( 'Parent Type:' ),
    'edit_item' => __( 'Edit Type' ), 
    'update_item' => __( 'Update Type' ),
    'add_new_item' => __( 'Add New Type' ),
    'new_item_name' => __( 'New Type Name' ),
    'menu_name' => __( 'Types' ),
  ); 	
 
  register_taxonomy('types',array('blues'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'type' ),
  ));
}


// ############################################################################

function wpc_excerpt_pages_blues() {
    add_meta_box('postexcerpt', __('Extrait'), 'post_excerpt_meta_box', 'page', 'normal', 'core');
    }
    add_action( 'admin_menu', 'wpc_excerpt_pages_blues' );



// ###############################################################
// ###############################################################
// ###############################################################
// ###############################################################






    function wpm_custom_post_type_jazz() {

        // On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
        $labels = array(
            // Le nom au pluriel
            'name'                => _x( 'Jazz', 'Post Type General Name'),
            // Le nom au singulier
            'singular_name'       => _x( 'Jazz', 'Post Type Singular Name'),
            // Le libellé affiché dans le menu
            'menu_name'           => __( 'Jazz'),
            // Les différents libellés de l'administration
            'all_items'           => __( 'Tout les vinyles de Jazz'),
            'view_item'           => __( 'Voir les vinlyles de Jazz'),
            'add_new_item'        => __( 'Ajouter un nouvel article Jazz'),
            'add_new'             => __( 'Ajouter'),
            'edit_item'           => __( 'Editer'),
            'update_item'         => __( 'Modifier'),
            'search_items'        => __( 'Rechercher'),
            'not_found'           => __( 'Non trouvée'),
            'not_found_in_trash'  => __( 'Non trouvée dans la corbeille'),
        );
        
        // On peut définir ici d'autres options pour notre custom post type
        
        $args = array(
            'label'               => __( 'Jazz'),
            'description'         => __( 'Tous sur le vinyle'),
            'labels'              => $labels,
            'taxonomies' 	      => array('post_tag'),
            // On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
            'template' => array( // Définir un modèle
                array( 'core/paragraph', array(
                    'placeholder' => 'numero du vinyle',
                ) ),
                array( 'core/paragraph', array(
                    'placeholder' => 'Titre du vinyle',
                ) ),
                array( 'core/paragraph', array(
                    'placeholder' => 'Date de sortie',
                ) ),
                array( 'core/paragraph', array(
                    'placeholder' => 'Pressage',
                ) ),
                array( 'core/paragraph', array(
                    'placeholder' => 'Label',
                ) ),
                array( 'core/paragraph', array(
                    'placeholder' => 'Duree du vinyle',
                ) ),
                array( 'core/paragraph', array(
                    'placeholder' => 'Prix',
                ) ),
                array( 'core/paragraph', array(
                    'placeholder' => 'Description',
                ) ),
                array( 'core/image', array(
                    'align' => 'center',
                ) ),
            ),
              'template_lock' => 'all',
            'show_in_rest' => true,
            'hierarchical'        => false,
            'public'              => true,
            'has_archive'         => true,
            'rewrite'			  => array( 'slug' => 'jazz'),
    
        );
        
        // On enregistre notre custom post type qu'on nomme ici "serietv" et ses arguments
        register_post_type( 'jazz', $args );
    
    }
    
    add_action( 'init', 'wpm_custom_post_type_jazz', 0 );
    
    
// ###################################################################
// ###################################################################
// ##########################TAXONIMIE###############################
// ###################################################################


// Let us create Taxonomy for Custom Post Type
add_action( 'init', 'crunchify_create_jazz_custom_taxonomy', 0 );
 
//create a custom taxonomy name it "type" for your posts
function crunchify_create_jazz_custom_taxonomy() {
 
  $labels = array(
    'name' => _x( 'Types', 'taxonomy general name' ),
    'singular_name' => _x( 'Type', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Types' ),
    'all_items' => __( 'All Types' ),
    'parent_item' => __( 'Parent Type' ),
    'parent_item_colon' => __( 'Parent Type:' ),
    'edit_item' => __( 'Edit Type' ), 
    'update_item' => __( 'Update Type' ),
    'add_new_item' => __( 'Add New Type' ),
    'new_item_name' => __( 'New Type Name' ),
    'menu_name' => __( 'Types' ),
  ); 	
 
  register_taxonomy('types',array('jazz'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'type' ),
  ));
}


// ############################################################################
    function wpc_excerpt_pages_jazz() {
        add_meta_box('postexcerpt', __('Extrait'), 'post_excerpt_meta_box', 'page', 'normal', 'core');
        }
        add_action( 'admin_menu', 'wpc_excerpt_pages_jazz' );


        // ###############################################################
// ###############################################################
// ###############################################################
// ###############################################################






    function wpm_custom_post_type_disco() {

        // On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
        $labels = array(
            // Le nom au pluriel
            'name'                => _x( 'Disco', 'Post Type General Name'),
            // Le nom au singulier
            'singular_name'       => _x( 'Disco', 'Post Type Singular Name'),
            // Le libellé affiché dans le menu
            'menu_name'           => __( 'Disco'),
            // Les différents libellés de l'administration
            'all_items'           => __( 'Tout les vinyles de Disco'),
            'view_item'           => __( 'Voir les vinlyles de Disco'),
            'add_new_item'        => __( 'Ajouter un nouvel article Disco'),
            'add_new'             => __( 'Ajouter'),
            'edit_item'           => __( 'Editer'),
            'update_item'         => __( 'Modifier'),
            'search_items'        => __( 'Rechercher'),
            'not_found'           => __( 'Non trouvée'),
            'not_found_in_trash'  => __( 'Non trouvée dans la corbeille'),
        );
        
        // On peut définir ici d'autres options pour notre custom post type
        
        $args = array(
            'label'               => __( 'Disco'),
            'description'         => __( 'Tous sur le vinyle'),
            'labels'              => $labels,
            'taxonomies' 	      => array('post_tag'),
            // On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
            'template' => array( // Définir un modèle
                array( 'core/paragraph', array(
                    'placeholder' => 'numero du vinyle',
                ) ),
                array( 'core/paragraph', array(
                    'placeholder' => 'Titre du vinyle',
                ) ),
                array( 'core/paragraph', array(
                    'placeholder' => 'Date de sortie',
                ) ),
                array( 'core/paragraph', array(
                    'placeholder' => 'Pressage',
                ) ),
                array( 'core/paragraph', array(
                    'placeholder' => 'Label',
                ) ),
                array( 'core/paragraph', array(
                    'placeholder' => 'Duree du vinyle',
                ) ),
                array( 'core/paragraph', array(
                    'placeholder' => 'Prix',
                ) ),
                array( 'core/paragraph', array(
                    'placeholder' => 'Description',
                ) ),
                array( 'core/image', array(
                    'align' => 'center',
                ) ),
            ),
              'template_lock' => 'all',
            'show_in_rest' => true,
            'hierarchical'        => false,
            'public'              => true,
            'has_archive'         => true,
            'rewrite'			  => array( 'slug' => 'disco'),
    
        );
        
        // On enregistre notre custom post type qu'on nomme ici "serietv" et ses arguments
        register_post_type( 'disco', $args );
    
    }
    
    add_action( 'init', 'wpm_custom_post_type_disco', 0 );
    
    
// ###################################################################
// ###################################################################
// ##########################TAXONIMIE###############################
// ###################################################################


// Let us create Taxonomy for Custom Post Type
add_action( 'init', 'crunchify_create_disco_custom_taxonomy', 0 );
 
//create a custom taxonomy name it "type" for your posts
function crunchify_create_disco_custom_taxonomy() {
 
  $labels = array(
    'name' => _x( 'Types', 'taxonomy general name' ),
    'singular_name' => _x( 'Type', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Types' ),
    'all_items' => __( 'All Types' ),
    'parent_item' => __( 'Parent Type' ),
    'parent_item_colon' => __( 'Parent Type:' ),
    'edit_item' => __( 'Edit Type' ), 
    'update_item' => __( 'Update Type' ),
    'add_new_item' => __( 'Add New Type' ),
    'new_item_name' => __( 'New Type Name' ),
    'menu_name' => __( 'Types' ),
  ); 	
 
  register_taxonomy('types',array('disco'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'type' ),
  ));
}


// ############################################################################

    function wpc_excerpt_pages_disco() {
        add_meta_box('postexcerpt', __('Extrait'), 'post_excerpt_meta_box', 'page', 'normal', 'core');
        }
        add_action( 'admin_menu', 'wpc_excerpt_pages_disco' );


                // ###############################################################
// ###############################################################
// ###############################################################
// ###############################################################






    function wpm_custom_post_type_rock() {

        // On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
        $labels = array(
            // Le nom au pluriel
            'name'                => _x( 'Rock', 'Post Type General Name'),
            // Le nom au singulier
            'singular_name'       => _x( 'Rock', 'Post Type Singular Name'),
            // Le libellé affiché dans le menu
            'menu_name'           => __( 'Rock'),
            // Les différents libellés de l'administration
            'all_items'           => __( 'Tout les vinyles de Rock'),
            'view_item'           => __( 'Voir les vinlyles de Rock'),
            'add_new_item'        => __( 'Ajouter un nouvel article Rock'),
            'add_new'             => __( 'Ajouter'),
            'edit_item'           => __( 'Editer'),
            'update_item'         => __( 'Modifier'),
            'search_items'        => __( 'Rechercher'),
            'not_found'           => __( 'Non trouvée'),
            'not_found_in_trash'  => __( 'Non trouvée dans la corbeille'),
        );
        
        // On peut définir ici d'autres options pour notre custom post type
        
        $args = array(
            'label'               => __( 'Rock'),
            'description'         => __( 'Tous sur le vinyle'),
            'labels'              => $labels,
            'taxonomies' 	      => array('post_tag'),
            // On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            /* 
            * Différentes options supplémentaires
            */
            'show_in_rest' => true,
            'hierarchical'        => false,
            'public'              => true,
            'has_archive'         => true,
            'rewrite'			  => array( 'slug' => 'rock'),
    
        );
        
        // On enregistre notre custom post type qu'on nomme ici "serietv" et ses arguments
        register_post_type( 'rock', $args );
    
    }
    
    add_action( 'init', 'wpm_custom_post_type_rock', 0 );

    
// ###################################################################
// ###################################################################
// ##########################TAXONIMIE###############################
// ###################################################################


// Let us create Taxonomy for Custom Post Type
add_action( 'init', 'crunchify_create_rock_custom_taxonomy', 0 );
 
//create a custom taxonomy name it "type" for your posts
function crunchify_create_rock_custom_taxonomy() {
 
  $labels = array(
    'name' => _x( 'Types', 'taxonomy general name' ),
    'singular_name' => _x( 'Type', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Types' ),
    'all_items' => __( 'All Types' ),
    'parent_item' => __( 'Parent Type' ),
    'parent_item_colon' => __( 'Parent Type:' ),
    'edit_item' => __( 'Edit Type' ), 
    'update_item' => __( 'Update Type' ),
    'add_new_item' => __( 'Add New Type' ),
    'new_item_name' => __( 'New Type Name' ),
    'menu_name' => __( 'Types' ),
  ); 	
 
  register_taxonomy('types',array('rock'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'type' ),
  ));
}


// ############################################################################
    
    function wpc_excerpt_pages_rock() {
        add_meta_box('postexcerpt', __('Extrait'), 'post_excerpt_meta_box', 'page', 'normal', 'core');
        }
        add_action( 'admin_menu', 'wpc_excerpt_pages_rock' );

// ###################################################################
// #############################EXTRAIT#############################
// ###################################################################
        function wpcodex_add_excerpt_support_for_post_blues() {
            add_post_type_support( 'blues', 'excerpt' );
        }
        add_action( 'init', 'wpcodex_add_excerpt_support_for_post_blues' );
// ###################################################################   
        function wpcodex_add_excerpt_support_for_post_jazz() {
            add_post_type_support( 'jazz', 'excerpt' );
        }
        add_action( 'init', 'wpcodex_add_excerpt_support_for_post_jazz' );
// ###################################################################
        function wpcodex_add_excerpt_support_for_post_disco() {
            add_post_type_support( 'disco', 'excerpt' );
        }
        add_action( 'init', 'wpcodex_add_excerpt_support_for_post_disco' );
// ###################################################################   
        function wpcodex_add_excerpt_support_for_post_rock() {
            add_post_type_support( 'rock', 'excerpt' );
        }
        add_action( 'init', 'wpcodex_add_excerpt_support_for_post_rock' );
// ###################################################################    
// ###################################################################   


function crunchify_deals_custom_post_type() {
	$labels = array(
		'name'                => __( 'Deals' ),
		'singular_name'       => __( 'Deal'),
		'menu_name'           => __( 'Deals'),
		'parent_item_colon'   => __( 'Parent Deal'),
		'all_items'           => __( 'All Deals'),
		'view_item'           => __( 'View Deal'),
		'add_new_item'        => __( 'Add New Deal'),
		'add_new'             => __( 'Add New'),
		'edit_item'           => __( 'Edit Deal'),
		'update_item'         => __( 'Update Deal'),
		'search_items'        => __( 'Search Deal'),
		'not_found'           => __( 'Not Found'),
		'not_found_in_trash'  => __( 'Not found in Trash')
	);
	$args = array(
		'label'               => __( 'deals'),
		'description'         => __( 'Best Crunchify Deals'),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields'),
		'public'              => true,
		'hierarchical'        => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'has_archive'         => true,
		'can_export'          => true,
		'exclude_from_search' => false,
	        'yarpp_support'       => true,
		'taxonomies' 	      => array('post_tag'),
		'publicly_queryable'  => true,
		'capability_type'     => 'page'
);
	register_post_type( 'deals', $args );
}
add_action( 'init', 'crunchify_deals_custom_post_type', 0 );







// Let us create Taxonomy for Custom Post Type
add_action( 'init', 'crunchify_create_deals_custom_taxonomy', 0 );
 
//create a custom taxonomy name it "type" for your posts
function crunchify_create_deals_custom_taxonomy() {
 
  $labels = array(
    'name' => _x( 'Types', 'taxonomy general name' ),
    'singular_name' => _x( 'Type', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Types' ),
    'all_items' => __( 'All Types' ),
    'parent_item' => __( 'Parent Type' ),
    'parent_item_colon' => __( 'Parent Type:' ),
    'edit_item' => __( 'Edit Type' ), 
    'update_item' => __( 'Update Type' ),
    'add_new_item' => __( 'Add New Type' ),
    'new_item_name' => __( 'New Type Name' ),
    'menu_name' => __( 'Types' ),
  ); 	
 
  register_taxonomy('types',array('deals'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'type' ),
  ));
}



// ####################################################

function wpb_postsbycategory() {
    // the query
    $the_query = new WP_Query( array( 'category_name' => 'all', 'posts_per_page' => 10 ) ); 
    $string= ''; 
    $post_id='';
    // The Loop
    if ( $the_query->have_posts() ) {
        $string .= '<ul class="postsbycategory widget_recent_entries">';
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
                if ( has_post_thumbnail() ) {
                $string .= '<li>';
                $string .= '<a href="' . get_the_permalink() .'" rel="bookmark">' . get_the_post_thumbnail($post_id, array( 50, 50) ) . get_the_title() .'</a></li>';
                } else { 
                // if no featured image is found
                $string .= '<li><a href="' . get_the_permalink() .'" rel="bookmark">' . get_the_title() .'</a></li>';
                }
                }
        } else {
        // no posts found
    }
    $string .= '</ul>';
     
    return $string;
     
    /* Restore original Post Data */
    wp_reset_postdata();
    }
    // Add a shortcode
    add_shortcode('categoryposts', 'wpb_postsbycategory');
     
    // Enable shortcodes in text widgets
    add_filter('widget_text', 'do_shortcode');


