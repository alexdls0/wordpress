<?php
/*
    Plugin Name: venta-CV
    Plugin URI: www.diso.org
    Description: Crear el custom post type de ventas
    Version: 1.0
    Author: caravaning
    License: GPL
*/

/*
*
*   Función para registrar el custom post type ventas
*
*/

function registra_ventas(){
    $supports = array(
        'title', // post title
        'editor', // post content
        'author', // post author
        'thumbnail', // featured images
        'excerpt', // post excerpt
        //'custom-fields', // custom fields
        'comments', // post comments
        'revisions', // post revisions
        //'post-formats', // post formats
    );
    $labels = array(
        'name' => _x('Ventas', 'plural'), // general name for the post type - usually plural (default = posts/pages)
        'singular_name' => _x('Venta', 'singular'), // name for one object of this post type
        'menu_name' => _x('Ventas', 'admin menu'), // Text for use in the admin area 
        'name_admin_bar' => _x('Venta', 'admin bar'), // Text for use in the New option in admin area 
        'add_new' => _x('Añadir venta', 'añadir venta'), // The text for add new (default 'Add New')
        
        'add_new_item' => __('Añadir nueva venta'), // Text for add new item (default 'Add new post'/'Add new page')
        'new_item' => __('Nueva venta'), // idem.
        'edit_item' => __('Editar venta'),  // idem.
        'view_item' => __('Ver venta'),// idem.
        'all_items' => __('Todas las ventas'),// idem.
        'search_items' => __('Buscar Ventas'),// idem.
        'not_found' => __('Ventas no encontradas.'),// idem.
    );
    $args = array(
        'supports' => $supports,
        'labels' => $labels,
        'public' => true, // Controls how the type is visible to authors (show_in_nav_menus, show_ui) and readers (exclude_from_search, publicly_queryable). Default: false
        'query_var' => true,
        'rewrite' => array('slug' => 'venta_cv'),//especificar el slug del custom post type
        'has_archive' => true, // Para que podamos usar la plantilla archive-{custom_post_type}.php   -->  no me funciona
        'hierarchical' => false,
        'menu_position' => 4, // The position in the menu order the post type should appear
        'menu_icon' => 'dashicons-universal-access', //The url to the icon to be used for this menu or the name of the icon from the iconfont [1] Default: null - defaults to the posts icon
        // EJEMPLO: 'get_template_directory_uri() . "/images/cutom-posttype-icon.png"' (Use a image located in the current theme)
        //'taxonomies' => array('category'), //  
    );
    register_post_type('venta_cv', $args);
}

add_action('init','registra_ventas');

function add_cat_panels(){
    register_taxonomy_for_object_type('category','venta_cv');
    register_taxonomy_for_object_type('post_tag','venta_cv');
}

add_action('init','add_cat_panels');

function crear_metabox(){
    $screens = array('venta_cv');
    foreach($screens as $screen){
        add_meta_box('ventas_meta',__('Venta de caravanas y RVs'),'ventas_callback',$screen,'normal');
    }
}

add_action(add_meta_boxes,'crear_metabox');

function ventas_callback($post){
    //Crear el campo nonce
    wp_nonce_field('save_metabox','ventas_nonce');
    
    //Recoger los valores de los campos
    $chasis = get_post_meta($post->ID,'chasis',true);
    $dimensiones = get_post_meta($post->ID,'dimensiones',true);
    $vehiculo = get_post_meta($post->ID,'vehiculo',true);
    $precio = get_post_meta($post->ID,'precio',true);
    $fechainicioventa = get_post_meta($post->ID,'fechainicioventa',true);
    $disponible = get_post_meta($post->ID,'disponible',true);
    $extra1 = get_post_meta($post->ID,'extra1',true);
    $extra2 = get_post_meta($post->ID,'extra2',true);
    $extra3 = get_post_meta($post->ID,'extra3',true);
    $extra4 = get_post_meta($post->ID,'extra4',true);
    $extra5 = get_post_meta($post->ID,'extra5',true);
    $extra6 = get_post_meta($post->ID,'extra6',true);
    $extra7 = get_post_meta($post->ID,'extra7',true);
    $extra8 = get_post_meta($post->ID,'extra8',true);
    $extra9 = get_post_meta($post->ID,'extra9',true);
    
    
    //Construir la estructura html
    echo '<br><fieldset>';
    echo '<label for="chasis"><h1>Chasis</h1> </label><br>';
    echo '<input type="text" id="chasis" value="'.$chasis.'" name="chasis">';    
    echo '</fieldset>';
    
    echo '<br><br><fieldset>';
    echo '<label for="dimensiones"><h1>Dimensiones</h1> </label><br>';
    echo '<input type="radio" name="dimensiones" value="menosde4"';
    if($dimensiones=='menosde4'){
        echo ' checked';
    }
    echo '>Menos de 4<br>';
    
    echo '<input type="radio" name="dimensiones" value="4a6"';
    if($dimensiones=='4a6'){
        echo ' checked';
    }
    echo '>De 4 a 6 metros<br>';
    
    echo '<input type="radio" name="dimensiones" value="6a8"';
    if($dimensiones=='6a8'){
        echo ' checked';
    }
    echo '>De 6 a 8 metros<br>';
    
    echo '<input type="radio" name="dimensiones" value="masde8"';
    if($dimensiones=='masde8'){
        echo ' checked';
    }
    echo  '>Más de 8 metros<br>';
    
    echo '</fieldset>';
    
    echo '<br><br><fieldset>';
    echo '<label for="vehiculo"><h1>Tipo de vehículo</h1> </label><br>';
    echo '<input type="radio" name="vehiculo" value="autocaravana"';
    if($vehiculo=='autocaravana'){
        echo ' checked';
    }
    echo  '>Autocaravana<br>';
    
    echo '<input type="radio" name="vehiculo" value="caravana"';
    if($vehiculo=='caravana'){
        echo ' checked';
    }
    echo  '>Caravana<br>';
    
    echo '<input type="radio" name="vehiculo" value="celulapickup"';
    if($vehiculo=='celulapickup'){
        echo ' checked';
    }
    echo  '>Célula pick-up<br>';
    
    echo '<input type="radio" name="vehiculo" value="camper"';
    if($vehiculo=='camper'){
        echo ' checked';
    }
    echo  '>Camper<br>';
    
    echo '<input type="radio" name="vehiculo" value="fifthwheel"';
    if($vehiculo=='fifthwheel'){
        echo ' checked';
    }
    echo  '>Fifth Wheel<br>';
    
    echo '</fieldset>';
    
    echo '<br><fieldset>';
    echo '<label for="precio"><h1>Precio</h1> </label><br>';
    echo '<input type="number" id="precio" value="'.$precio.'" name="precio">';    
    echo '</fieldset>';
    
    echo '<br><fieldset>';
    echo '<label for="fechainicioventa"><h1>Fecha de publicación</h1> </label><br>';
    echo '<input type="date" id="fechainicioventa" value="'.$fechainicioventa.'" name="fechainicioventa">';    
    echo '</fieldset>';
    
    echo '<fieldset>';
    echo '<br><label for="extras"><h1>Extras</h1> </label><br>';
    echo '<input type="checkbox" id="estabilizador" name="extra1" value="estabilizador" ';
    if($extra1 =='estabilizador'){
        echo ' checked';
    }
    echo  '>Estabilizador <br>';
    
    echo '<input type="checkbox" id="neumaticosreforzados" name="extra2" value="neumaticosreforzados" ';
    if($extra2 =='neumaticosreforzados'){
        echo ' checked';
    }
    echo  '>Neumáticos reforzados<br>';
    
    echo '<input type="checkbox" id="calefaccion" name="extra3" value="calefaccion" ';
    if($extra3 =='calefaccion'){
        echo ' checked';
    }
    echo  '>Calefacción  <br>';
    
    echo '<input type="checkbox" id="toldo" name="extra4" value="toldo" ';
    if($extra4 =='toldo'){
        echo ' checked';
    }
    echo  '>Toldo <br>';
    
    echo '<input type="checkbox" id="portabicis" name="extra5" value="portabicis" ';
    if($extra5 =='portabicis'){
        echo ' checked';
    }
    echo  '>Portabicis <br>';
    
    echo '<input type="checkbox" id="aguacaliente" name="extra6" value="aguacaliente" ';
    if($extra6 =='aguacaliente'){
        echo ' checked';
    }
    echo  '>Agua caliente <br>';
    
    echo '<input type="checkbox" id="aireacondicionado" name="extra7" value="aireacondicionado" ';
    if($extra7 =='aireacondicionado'){
        echo ' checked';
    }
    echo  '>Aire acondicionado <br>';
    
    echo '<input type="checkbox" id="generador" name="extra8" value="generador" ';
    if($extra8 =='generador'){
        echo ' checked';
    }
    echo  '>Generador <br>';
    
    echo '<input type="checkbox" id="bateriaauxiliar" name="extra9" value="bateriaauxiliar" ';
    if($extra9 =='bateriaauxiliar'){
        echo ' checked';
    }
    echo  '>Batería auxiliar <br>';
    
    echo '</fieldset>';
     
    echo '<br><br><fieldset>';
    echo '<label for="disponible"><h1>Disponible</h1> </label><br>';
    echo '<input type="radio" name="disponible" value="si"';
    if($disponible=='si'){
        echo ' checked';
    }
    echo  '>Sí<br>';
    echo '<input type="radio" name="disponible" value="no"';
    if($disponible=='no'){
        echo ' checked';
    }
    echo  '>No<br>';
    echo '</fieldset><br>';
    
}

function save_metabox($post_id){
    //Comprobar el campo nonce
    if(!isset($_POST['ventas_nonce'])){
        return;
    }
    
    if(!wp_verify_nonce($_POST['ventas_nonce'],'save_metabox')){
        return;
    }
    
    //Comprobar que el usuario tiene permisos
    if(!current_user_can('edit_page',$post_id)){
        return;
    }
    
    if(!current_user_can('edit_post',$post_id)){
        return;
    }
    
    //Saneamos los campos antes de salvarlos
    $chasis = sanitize_text_field($_POST['chasis']);
    $dimensiones = sanitize_text_field($_POST['dimensiones']);
    $vehiculo = sanitize_text_field($_POST['vehiculo']);
    $precio = sanitize_text_field($_POST['precio']);
    $fechainicioventa = sanitize_text_field($_POST['fechainicioventa']);
    $disponible = sanitize_text_field($_POST['disponible']);
    $extra1 = sanitize_text_field($_POST['extra1']);
    $extra2 = sanitize_text_field($_POST['extra2']);
    $extra3 = sanitize_text_field($_POST['extra3']);
    $extra4 = sanitize_text_field($_POST['extra4']);
    $extra5 = sanitize_text_field($_POST['extra5']);
    $extra6 = sanitize_text_field($_POST['extra6']);
    $extra7 = sanitize_text_field($_POST['extra7']);
    $extra8 = sanitize_text_field($_POST['extra8']);
    $extra9 = sanitize_text_field($_POST['extra9']);
    
    //Actualizamos la BBDD
    update_post_meta($post_id,'chasis',$chasis);
    update_post_meta($post_id,'dimensiones',$dimensiones);
    update_post_meta($post_id,'vehiculo',$vehiculo);
    update_post_meta($post_id,'precio',$precio);
    update_post_meta($post_id,'fechainicioventa',$fechainicioventa);
    update_post_meta($post_id,'disponible',$disponible);
    update_post_meta($post_id,'extra1',$extra1);
    update_post_meta($post_id,'extra2',$extra2);
    update_post_meta($post_id,'extra3',$extra3);
    update_post_meta($post_id,'extra4',$extra4);
    update_post_meta($post_id,'extra5',$extra5);
    update_post_meta($post_id,'extra6',$extra6);
    update_post_meta($post_id,'extra7',$extra7);
    update_post_meta($post_id,'extra8',$extra8);
    update_post_meta($post_id,'extra9',$extra9);
    
}

add_action('save_post','save_metabox');