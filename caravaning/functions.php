<?php

/*
    -- -- Custom Fields -- --
*/
require_once 'templates/custom-fields.php';

/*
*
*   Soportes del tema
*
*/
add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('image', 'gallery', 'audio', 'video', 'link', 'quote'));


/*Contiene las funciones personalizadas del tema*/

//Registrar y poner en la cola los scripts de nuestro tema
//id, ruta, array->dependencias, version, saber si va antes del body y despues(boolean)-->true footer, false en el header(normalmente las librerias van en el header y los scripts que las usan en el footer)

function my_theme_scripts(){
    wp_register_script('jquery', get_template_directory_uri().'/js/jquery-3.3.1.min.js', array('jquery'), null, true);
    wp_enqueue_script('jquery');
    wp_register_script('brands', 'https://use.fontawesome.com/releases/v5.0.8/js/brands.js', array('jquery'), null, false);
    wp_enqueue_script('brands');
    wp_register_script('fontawesome', 'https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js', array('jquery'), null, false);
    wp_enqueue_script('fontawesome');
    wp_register_script('migrate', get_template_directory_uri().'/js/jquery-migrate-3.0.1.min.js', array('jquery'), null, true);
    wp_enqueue_script('migrate');
    wp_register_script('ui', get_template_directory_uri().'/js/jquery-ui.js', array('jquery'), null, true);
    wp_enqueue_script('ui');
    wp_register_script('pooper', get_template_directory_uri().'/js/popper.min.js', array('jquery'), null, true);
    wp_enqueue_script('pooper');
    wp_register_script('min', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'), null, true);
    wp_enqueue_script('min');
    wp_register_script('carrusel', get_template_directory_uri().'/js/owl.carousel.min.js', array('jquery'), null, true);
    wp_enqueue_script('carrusel');
    wp_register_script('stellar', get_template_directory_uri().'/js/jquery.stellar.min.js', array('jquery'), null, true);
    wp_enqueue_script('stellar');
    wp_register_script('countdown', get_template_directory_uri().'/js/jquery.countdown.min.js', array('jquery'), null, true);
    wp_enqueue_script('countdown');
    wp_register_script('popup', get_template_directory_uri().'/js/jquery.magnific-popup.min.js', array('jquery'), null, true);
    wp_enqueue_script('popup');
    wp_register_script('datepicker', get_template_directory_uri().'/js/bootstrap-datepicker.min.js', array('jquery'), null, true);
    wp_enqueue_script('datepicker');
    wp_register_script('aos', get_template_directory_uri().'/js/aos.js', array('jquery'), null, true);
    wp_enqueue_script('aos');
    wp_register_script('main', get_template_directory_uri().'/js/main.js', array('jquery'), null, true);
    wp_enqueue_script('main');
    wp_register_script('circleprogressbar', get_template_directory_uri().'/js/circleprogressbar.js', array('jquery'), null, true);
    wp_enqueue_script('circleprogressbar');
    
    wp_register_script('masonry', get_template_directory_uri().'/js/masonry.pkgd.js', array('jquery'), null, true);
    wp_enqueue_script('masonry');
    wp_register_script('mprueba', get_template_directory_uri().'/js/pruebamasonry.js', array('jquery'), null, true);
    wp_enqueue_script('mprueba');
}

add_action('wp_enqueue_scripts','my_theme_scripts');

function count_user_posts_by_type( $userid, $post_type = 'post' ) {
    global $wpdb;
    $where = get_posts_by_author_sql( $post_type, true, $userid );
    $count = $wpdb->get_var( "SELECT COUNT(*) FROM $wpdb->posts $where" );
    
    return apply_filters( 'get_usernumposts', $count, $userid );
}

function generaltheme_widgets_init(){
    
    register_sidebar(array(
        'name' => 'Sidebar Widgets',
        'id' => 'sidebar',
        'description' =>  'Sidebar Widget Area' ,
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
    ));
}

add_action('widgets_init','generaltheme_widgets_init');

function get_author_rol($author_id){
    $user_info= get_userdata($author_id);
    return implode(',', $user_info->roles);
}

function list_tags() {
    if ( is_page( 'Archives' ) ) { // Quitar si lo queremos invocar en más plantillas
        $tags = get_tags( array('orderby' => 'count', 'order' => 'DESC', 'number' => 30) );
        foreach ( (array) $tags as $tag ) {
            echo '<i class="fa fa-tag"></i><a href="' . get_tag_link ($tag->term_id) . '" >' . $tag->name . ' <span class=pull-right>' . $tag->count . '</span></a><br />';
        }
    }
}

function my_front_end_login_fail( $username ) {
     $referrer = $_SERVER['HTTP_REFERER'];
     if ( !empty($referrer) && !strstr($referrer,'wp-login') && !strstr($referrer,'wp-admin') ) {
          wp_redirect( $referrer); 
          exit;
     }
}

add_action( 'wp_login_failed', 'my_front_end_login_fail' ); 

function my_login_logo(){
   echo '<style type="text/css">
        #login h1 a, .login h1 a{
            background-image: url('; echo bloginfo('template_url'); echo '/images/nomadas2.png);
            background-size: 300px, 350px;
            height: 350px;
            width:300px;
            background-repeat: no-repeat;
        }
        #login_error{
            display: none;
        }
        
        #backtoblog{
            display: none;
        }
    </style>';
}

add_action('login_enqueue_scripts','my_login_logo');


function my_login_logo_url(){
    return home_url();
}

add_filter('login_headerurl','my_login_logo_url');

function save_comment_meta_checkbox ( $post_id ) {
    $save_meta_checkbox = $_POST['consent'];
    if ( $save_meta_checkbox == 'on' ) {
        $value = 'Checkbox seleccionado: Acepto la política de privacidad';
    } else {
     	$value = 'Checkbox no seleccionado: No acepto';
    }
    add_comment_meta( $post_id, 'consentimiento', $value, true );
}
add_action( 'comment_post', 'save_comment_meta_checkbox', 1 );


/*----------------------COMENTARIOS----------------------*/

//$fields es un array con los campos del formulario
function remove_url_field($fields){
    
    unset($fields['url']);
    
    return $fields;
}

add_filter('comment_form_default_fields','remove_url_field');

//Cambiar orden estructural de los comentarios
function push_comment_to_botttom($fields){
    
    $comment = $fields['comment'];
    unset($fields['comment']);
    $fields['comment'] = $comment;
    
    return $fields;
}

add_filter('comment_form_fields','push_comment_to_botttom');

//Checkbox para aceptar la politica de privacidad y que el texto sea el link a la politica de privacidad
function add_checkbox($fields){
    
    $checkbox = '
    <div class="politica mb-3">
        <input type="checkbox" name="policy" value="accepted" id="policycheckbox" required> 
            Acepta la política de privacidad.
        <a href="#">Revisa nuestra política de privacidad</a>
    </div>';
    $fields['checkbox'] = $checkbox;
    
    return $fields;
}

add_filter('comment_form_fields','add_checkbox');

function add_logged_privacy() {
    $policy = '<div class="text-center"><input type="checkbox" name="policy" id="policy" value="0" required/><label>
        Acepta la polititca de privacidad </label></div>';
    echo $policy;
}
add_action( 'comment_form_logged_in_after', 'add_logged_privacy');

//Evitar que se publique si no activo el checkbox
//Falta grabar el consentimiento de la tabla de datos correspondiente a los comentarios

function get_num_visits($post_id) {
    $numvisits = 1;
    $sufix = ' VISITA';
    if (!add_post_meta($post_id, 'numvisits', $numvisits, true)) {
        $numvisits = get_post_meta($post_id, 'numvisits', true) + 1;
        $sufix = ' VISITAS';
        update_post_meta($post_id, 'numvisits', $numvisits);
    }
    return $numvisits . $sufix;
}

function year_func() {
    $date = date("Y");
    return $date;
}

add_shortcode("year", "year_func");

function saludo_func($persona, $content = null) {
    $name= shortcode_atts(array(
            'name' => 'whoever'
        ),$persona);
    return '<p>Que dise '.$name['name'].'</p><p>'.$content.'</p>';
}

add_shortcode("saludo", "saludo_func");

// Breadcrumbs
function get_breadcrumb() {
    echo '<a href="'.home_url().'" rel="nofollow">Home</a>';
    if (is_category() || is_single()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        the_category(' &bull; ');
            if (is_single()) {
                echo " &nbsp;&nbsp;&#187;&nbsp;&nbsp; ";
                the_title();
            }
    } elseif (is_page()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        echo the_title();
    } elseif (is_search()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;Search Results for... ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
}

//function para obtener la primera imagen
/*function get_first_image() {
  global $post, $posts;
 
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches[1][0];
 
  // Defines a default image here
  if(empty($first_img)){
    $first_img = "/images/notfound.jpg";
  }
  return $first_img;
}*/

function get_first_image() {
    if(!has_post_thumbnail()){
        global $post, $posts;
     
        $first_img = '';
        ob_start();
        ob_end_clean();
        $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
        $first_img = $matches[1][0];
        
        // Defines a default image here
        if(empty($first_img)){
        $first_img = get_template_directory_uri()."/images/not-found.jpg";
        }
    }else{
        $first_img = get_the_post_thumbnail_url();
    }
    return $first_img;
}

function cut30($title){
    $title_length = strlen($title);
    if ($title_length > 30){
        $title = substr($title, 0, 28)."...";
    }
    return $title;
}

add_action( 'pre_get_posts', function ( $q ) {
    if (    $q->is_home() && $q->is_main_query() ) {
        $q->set( 'posts_per_page', 4 );
        $q->set( 'post_type', array('venta_cv','post'));
    }
});

add_filter( 'pre_get_posts', 'tgm_io_cpt_search' );
function tgm_io_cpt_search( $query ) {
	
    if ( $query->is_search ) {
	$query->set( 'post_type', array( 'post', 'venta_cv') );
    }
    
    return $query;
    
}

function namespace_add_custom_types( $query ) {
  if( is_category() || is_tag() && empty( $query->query_vars['suppress_filters'] ) ) {
    $query->set( 'post_type', array(
     'post', 'nav_menu_item', 'venta_cv'
		));
	  return $query;
	}
}
add_filter( 'pre_get_posts', 'namespace_add_custom_types' );