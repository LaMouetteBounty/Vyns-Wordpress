<?php
// Ajout de image à la une dans les posts
add_theme_support('post-thumbnails');


// Ajout des styles
function wpm_enqueue_styles()
{
	wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'wpm_enqueue_styles');


function add_theme_scripts()
{
	wp_enqueue_script('script_validator', get_stylesheet_directory_uri() . '/validator.min.js');
	wp_enqueue_script('script', get_stylesheet_directory_uri() . '/script.js');
}
add_action('wp_footer', 'add_theme_scripts');

// ###########################################################################
// ###############################    BLUES     ##############################
// ###########################################################################


function wpm_custom_post_type_blues()
{

	// On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
	$labels = array(
		// Le nom au pluriel
		'name'                => _x('Blues', 'Post Type General Name'),
		// Le nom au singulier
		'singular_name'       => _x('Blues', 'Post Type Singular Name'),
		// Le libellé affiché dans le menu
		'menu_name'           => __('Blues'),
		// Les différents libellés de l'administration
		'all_items'           => __('Tout les vinyles de blues'),
		'view_item'           => __('Voir les vinyles de blues'),
		'add_new_item'        => __('Ajouter un nouvel article blues'),
		'add_new'             => __('Ajouter'),
		'edit_item'           => __('Editer'),
		'update_item'         => __('Modifier'),
		'search_items'        => __('Rechercher'),
		'not_found'           => __('Non trouvée'),
		'not_found_in_trash'  => __('Non trouvée dans la corbeille'),
	);

	// On peut définir ici d'autres options pour notre custom post type


	$args = array(
		'label'               => __('Blues'),
		'description'         => __('Tous sur le vinyles'),
		'labels'              => $labels,
		'taxonomies' 	      => array('post_tag'),
		// On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
		'supports'            => array('title', 'editor', 'excerpt',  'thumbnail'),
		'show_in_rest' => true,
		'hierarchical'        => false,
		'public'              => true,
		'has_archive'         => true,
		'rewrite'			  => array('slug' => 'blues'),
		'show_in_rest'		=> true,
		'rest_base'			=> 'blues_api'

	);
	// On enregistre notre custom post type qu'on nomme ici "serietv" et ses arguments
	register_post_type('blues', $args);
}
add_action('init', 'wpm_custom_post_type_blues', 0);

// ###########################################################################
// ###############################    JAZZ     ###############################
// ###########################################################################

function wpm_custom_post_type_jazz()
{

	// On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
	$labels = array(
		// Le nom au pluriel
		'name'                => _x('Jazz', 'Post Type General Name'),
		// Le nom au singulier
		'singular_name'       => _x('Jazz', 'Post Type Singular Name'),
		// Le libellé affiché dans le menu
		'menu_name'           => __('Jazz'),
		// Les différents libellés de l'administration
		'all_items'           => __('Tout les vinyles de jazz'),
		'view_item'           => __('Voir les vinyles de jazz'),
		'add_new_item'        => __('Ajouter un nouvel article jazz'),
		'add_new'             => __('Ajouter'),
		'edit_item'           => __('Editer'),
		'update_item'         => __('Modifier'),
		'search_items'        => __('Rechercher'),
		'not_found'           => __('Non trouvée'),
		'not_found_in_trash'  => __('Non trouvée dans la corbeille'),
	);

	// On peut définir ici d'autres options pour notre custom post type


	$args = array(
		'label'               => __('Jazz'),
		'description'         => __('Tous sur le vinyles'),
		'labels'              => $labels,
		'taxonomies' 	      => array('post_tag'),
		// On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
		'supports'            => array('title', 'editor', 'excerpt',  'thumbnail'),
		'show_in_rest' => true,
		'hierarchical'        => false,
		'public'              => true,
		'has_archive'         => true,
		'rewrite'			  => array('slug' => 'jazz'),
		'show_in_rest'		=> true,
		'rest_base'			=> 'jazz_api'

	);
	// On enregistre notre custom post type qu'on nomme ici "serietv" et ses arguments
	register_post_type('jazz', $args);
}
add_action('init', 'wpm_custom_post_type_jazz', 0);


// ###########################################################################
// ###############################    DISCO     ##############################
// ###########################################################################

function wpm_custom_post_type_disco()
{

	// On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
	$labels = array(
		// Le nom au pluriel
		'name'                => _x('Disco', 'Post Type General Name'),
		// Le nom au singulier
		'singular_name'       => _x('Disco', 'Post Type Singular Name'),
		// Le libellé affiché dans le menu
		'menu_name'           => __('Disco'),
		// Les différents libellés de l'administration
		'all_items'           => __('Tout les vinyles de disco'),
		'view_item'           => __('Voir les vinyles de disco'),
		'add_new_item'        => __('Ajouter un nouvel article disco'),
		'add_new'             => __('Ajouter'),
		'edit_item'           => __('Editer'),
		'update_item'         => __('Modifier'),
		'search_items'        => __('Rechercher'),
		'not_found'           => __('Non trouvée'),
		'not_found_in_trash'  => __('Non trouvée dans la corbeille'),
	);

	// On peut définir ici d'autres options pour notre custom post type


	$args = array(
		'label'               => __('Disco'),
		'description'         => __('Tous sur le vinyles'),
		'labels'              => $labels,
		'taxonomies' 	      => array('post_tag'),
		// On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
		'supports'            => array('title', 'editor', 'excerpt',  'thumbnail'),
		'show_in_rest' => true,
		'hierarchical'        => false,
		'public'              => true,
		'has_archive'         => true,
		'rewrite'			  => array('slug' => 'disco'),
		'show_in_rest'		=> true,
		'rest_base'			=> 'disco_api'

	);
	// On enregistre notre custom post type qu'on nomme ici "serietv" et ses arguments
	register_post_type('disco', $args);
}
add_action('init', 'wpm_custom_post_type_disco', 0);


// ###########################################################################
// ###############################    ROCK    ##############################
// ###########################################################################

function wpm_custom_post_type_rock()
{

	// On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
	$labels = array(
		// Le nom au pluriel
		'name'                => _x('Rock', 'Post Type General Name'),
		// Le nom au singulier
		'singular_name'       => _x('Rock', 'Post Type Singular Name'),
		// Le libellé affiché dans le menu
		'menu_name'           => __('Rock'),
		// Les différents libellés de l'administration
		'all_items'           => __('Tout les vinyles de rock'),
		'view_item'           => __('Voir les vinyles de rock'),
		'add_new_item'        => __('Ajouter un nouvel article rock'),
		'add_new'             => __('Ajouter'),
		'edit_item'           => __('Editer'),
		'update_item'         => __('Modifier'),
		'search_items'        => __('Rechercher'),
		'not_found'           => __('Non trouvée'),
		'not_found_in_trash'  => __('Non trouvée dans la corbeille'),
	);

	// On peut définir ici d'autres options pour notre custom post type


	$args = array(
		'label'               => __('Rock'),
		'description'         => __('Tous sur le vinyles'),
		'labels'              => $labels,
		'taxonomies' 	      => array('post_tag'),
		// On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
		'supports'            => array('title', 'editor', 'excerpt',  'thumbnail'),
		'show_in_rest' => true,
		'hierarchical'        => false,
		'public'              => true,
		'has_archive'         => true,
		'rewrite'			  => array('slug' => 'rock'),
		'show_in_rest'		=> true,
		'rest_base'			=> 'rock_api'

	);
	// On enregistre notre custom post type qu'on nomme ici "serietv" et ses arguments
	register_post_type('rock', $args);
}
add_action('init', 'wpm_custom_post_type_rock', 0);

// ###########################################################################
// ###############################  META BOXES ###############################
// ###########################################################################

function vinyle_setting_add_meta_box()
{
	add_meta_box('vinyle_setting', 'Informations', 'vinyle_setting_callback', array('blues', 'jazz', 'disco', 'rock'), 'normal', 'high', null);
}
add_action('add_meta_boxes', 'vinyle_setting_add_meta_box');

function vinyle_setting_callback($post)
{
	wp_nonce_field(basename(__FILE__), "meta-box-nonce");

	echo '<label for="vinyle_titre">Entrez le titre du vinyle</label>';
	echo '<input type="text" id="vinyle_titre" name="vinyle_titre" value="' . get_post_meta($post->ID, 'vinyle_titre', true) . '"
    size="25"> <br>';

	echo '<label for="blues_number">Entrez le numero du vinyle</label>';
	echo '<input type="text" id="blues_number" name="blues_number" value="' . get_post_meta($post->ID, 'blues_number', true) . '"
    size="25"> <br>';

	echo '<label for="vinyle_date">Entrez la date du vinyle</label>';
	echo '<input type="text" id="vinyle_date" name="vinyle_date" value="' . get_post_meta($post->ID, 'vinyle_date', true) . '"
    size="25"> <br>';

	echo '<label for="vinyle_pressage">Entrez le lieu de pressage</label>';
	echo '<input type="text" id="vinyle_pressage" name="vinyle_pressage" value="' . get_post_meta($post->ID, 'vinyle_pressage', true) . '"
    size="25"> <br>';

	echo '<label for="vinyle_label">Entrez le label du vinyle</label>';
	echo '<input type="text" id="vinyle_label" name="vinyle_label" value="' . get_post_meta($post->ID, 'vinyle_label', true) . '"
    size="25"> <br>';

	echo '<label for="vinyle_duree">Entrez la durée du vinyle (minutes)</label>';
	echo '<input type="text" id="vinyle_duree" name="vinyle_duree" value="' . get_post_meta($post->ID, 'vinyle_duree', true) . '"
    size="25">  </p> <br>';

	echo '<label for="vinyle_prix">Entrez le prix du vinyle (euros)</label>';
	echo '<input type="text" id="vinyle_prix" name="vinyle_prix" value="' . get_post_meta($post->ID, 'vinyle_prix', true) . '"
    size="25"> <br> ';

	echo '<label for="vinyle_description">Entrez la description du vinyle</label>';
	echo '<input type="text" id="vinyle_description" name="vinyle_description" value="' . get_post_meta($post->ID, 'vinyle_description', true) . '"
    size="125"> <br> ';
}

// ###########################################################################
// ###############################    SAVE     ###############################
// ###########################################################################

function vinyle_save_metaboxes($post_id)
{
	if (!isset($_POST["meta-box-nonce"]) || !wp_verify_nonce($_POST["meta-box-nonce"], basename(__FILE__))) {
		return $post_id;
	}

	if (!current_user_can('edit_post', $post_id)) {
		return $post_id;
	}

	if (defined("DOING_AUTOSAVE") && DOING_AUTOSAVE) {
		return $post_id;
	}


	//refaire pour chaque meta_box
	$input_number = '';
	$input_date = '';
	$input_pressage = '';
	$input_label = '';
	$input_duree = '';
	$input_prix = '';
	$input_description = '';
	$input_titre = '';

	if (isset($_POST['vinyle_titre'])) {
		$input_titre  = $_POST['vinyle_titre'];
	}

	update_post_meta($post_id, "vinyle_titre", $input_titre);


	//#############################################################################
	if (isset($_POST['blues_number'])) {
		$input_number = $_POST['blues_number'];
	}

	update_post_meta($post_id, "blues_number", $input_number);

	//#############################################################################

	if (isset($_POST['vinyle_date'])) {
		$input_date = $_POST['vinyle_date'];
	}

	update_post_meta($post_id, "vinyle_date", $input_date);

	//#############################################################################

	if (isset($_POST['vinyle_pressage'])) {
		$input_pressage = $_POST['vinyle_pressage'];
	}

	update_post_meta($post_id, "vinyle_pressage", $input_pressage);

	//#############################################################################

	if (isset($_POST['vinyle_label'])) {
		$input_label = $_POST['vinyle_label'];
	}

	update_post_meta($post_id, "vinyle_label", $input_label);

	//#############################################################################

	if (isset($_POST['vinyle_duree'])) {
		$input_duree = $_POST['vinyle_duree'];
	}

	update_post_meta($post_id, "vinyle_duree", $input_duree);

	//#############################################################################

	if (isset($_POST['vinyle_prix'])) {
		$input_prix = $_POST['vinyle_prix'];
	}

	update_post_meta($post_id, "vinyle_prix", $input_prix);

	//#############################################################################

	if (isset($_POST['vinyle_description'])) {
		$input_description = $_POST['vinyle_description'];
	}

	update_post_meta($post_id, "vinyle_description", $input_description);
}
add_action('save_post', 'vinyle_save_metaboxes');

// ##############################################################
// ####################### INPUT MAP ############################
// ##############################################################
add_action('admin_menu', 'my_admin_menu');

function my_admin_menu()
{
	add_menu_page('My Map Menu', 'Adresse', 'manage_options', 'myplugin/myplugin-admin-page.php', 'carte_google_options', 'dashicons-admin-site-alt2', 6);
}

function vinyle_setting(){
	register_setting('vinyle_options_map', 'vinyle_map_address');
  }
  
  add_action('init', 'vinyle_setting');
  
  function carte_google_options(){
	  echo '<div class="wrap">';
	  echo '<h1>Carte</h1>';
	  echo '<form action="options.php" method="post" >';
	  settings_fields('vinyle_options_map');
	  do_settings_sections('vinyle_options_map');
	  echo '<h2>Options de la carte</h2>';
	  echo '<table class="form-table">';
	  echo '<tr>';
	  echo '<th scope="row" >Adresse : </th>';
	  echo "<td>";
	  echo '<input type="text" name="vinyle_map_address" size="50" value="'.esc_attr( get_option( 'vinyle_map_address' ) ).'" />';
	  echo "</td>";
	  echo '</tr>';
	  echo '</table>';
	  echo submit_button();
	  echo '</form>';    
	  echo '</div>';
  
	}
  


// ###########################################################
##############################################################
##############################################################

function vinyles_rest_api_custom_values()
{

	register_rest_field(
		'blues',
		'blues_meta',
		array(
			'get_callback' => 'blues_meta_information',
			'schema' => null,
			'update_callback' => null
		)
	);
	register_rest_field(
		'jazz',
		'jazz_meta',
		array(
			'get_callback' => 'jazz_meta_information',
			'schema' => null,
			'update_callback' => null
		)
	);
	register_rest_field(
		'disco',
		'disco_meta',
		array(
			'get_callback' => 'disco_meta_information',
			'schema' => null,
			'update_callback' => null
		)
	);
	register_rest_field(
		'rock',
		'rock_meta',
		array(
			'get_callback' => 'rock_meta_information',
			'schema' => null,
			'update_callback' => null
		)
	);
}

function blues_meta_information(){
	global $post;
	$post_id = $post->ID;
	return get_post_meta ( $post_id);
}

function jazz_meta_information(){
	global $post;
	$post_id = $post->ID;
	return get_post_meta ( $post_id);
}

function disco_meta_information(){
	global $post;
	$post_id = $post->ID;
	return get_post_meta ( $post_id);
}

function rock_meta_information(){
	global $post;
	$post_id = $post->ID;
	return get_post_meta ( $post_id);
}

add_action('rest_api_init', 'vinyles_rest_api_custom_values');



// ################################################
//  					EMAIL
// ################################################

function vinyle_save_contact(){
	global $wpdb;

	if( isset( $_POST['message-submit']) && $_POST['hidden'] === "1"){
		$name = sanitize_text_field($_POST['name']);
		$email = sanitize_email($_POST['email']);
		$message = sanitize_text_field($_POST['message']);

		$admin_email = get_option('admin_email');
		$headers = "From: \"".$name."\" <".$email.">\r\n";
		// $message = 'Allez voir votre tableau de bord, vous avez un nouveau message';

		$envoie = wp_mail($admin_email, 'Message depuis le site', $message, $headers);

		$textSend =($envoie === true)? 'sent':'notSent';

		// $wpdb->insert ($table, $data, $format);
		global $wp;
		$wp->add_query_var('send');
		$url = get_page_by_title('home');
		wp_redirect(get_permalink($url).'?send='.$textSend);

		exit();
	}
}

add_action('init','vinyle_save_contact');

?>