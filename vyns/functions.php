<?php
function wpm_enqueue_styles(){
wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
wp_enqueue_script( 'script', get_stylesheet_directory_uri('http://localhost:8080/wp-content/themes/vyns/assets/js') . '/script.js' );
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
		// On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
		// 'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		/* 
		* Différentes options supplémentaires
        */// Définir un modèle
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
		'rewrite'			  => array( 'slug' => 'blues'),

	);
	
	// On enregistre notre custom post type qu'on nomme ici "serietv" et ses arguments
    register_post_type( 'blues', $args );


}

add_action( 'init', 'wpm_custom_post_type_blues', 0 );


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
    
    
    function wpc_excerpt_pages_rock() {
        add_meta_box('postexcerpt', __('Extrait'), 'post_excerpt_meta_box', 'page', 'normal', 'core');
        }
        add_action( 'admin_menu', 'wpc_excerpt_pages_rock' );


        function wpcodex_add_excerpt_support_for_post() {
            add_post_type_support( 'blues', 'excerpt' );
        }
        add_action( 'init', 'wpcodex_add_excerpt_support_for_post' );
        