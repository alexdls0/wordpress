<?php
    get_header();
    the_post();
?>

<body>
  
	<?php get_template_part('templates/nav','front'); ?>
  
  	<div class="site-mobile-menu">
	  <div class="site-mobile-menu-header">
	    <div class="site-mobile-menu-close mt-3">
	      <span class="icon-close2 js-menu-toggle"></span>
	    </div>
	  </div>
	  <div class="site-mobile-menu-body"></div>
	</div>

	<div class="site-section">
      <div class="container">
        <div class="row">
        	<div class="col-md-9">
        		<div class="breadcrumb mb-3"><?php get_breadcrumb(); ?></div>
        		
        		<p class="postmeta mb-4 mt-4">
                     <span class="post-author">
                     <i class="fa fa-user"></i>
                     <?php __('Por', 'zapa'); ?> <?php the_author_posts_link(); ?>
                     |</span>
                     <span class="post-author">
                     <?php 
                        $fecha = get_post_meta($post->ID, 'fechainicioventa', true);
                        
                        echo ' <i class="fa fa-calendar-o"></i> Publicado:  '.$fecha.' |  ';
                        
                     ?>
                     </span>
                     <span class="post-comment">
                     <i class="fa fa-comments ml-2"></i>
                     <?php comments_number( __('Ningún comentario', 'zapa'), '1 comentario', '% comentarios' ); ?>
                     |</span>
                     <span class="post-comment ml-2">
                     <i class="fa fa-users"></i>
                     <?php echo get_num_visits($post->ID); ?>
                     </span>
                </p>
        		
        		<img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid mt-3 mb-3" alt="recurso no encontrado">
        		
        		<div class="mt-5">
        		    <h2 class="mb-5"><?php the_title(); ?>
        		    
        		    <?php 
                        $disponible = get_post_meta($post->ID, 'disponible', true);
                        if($disponible == 'si'){
                            echo ' <span class="text-muted"> (Disponible)</span>';
                        }else{
                            echo ' <span class="text-danger"> (No disponible)</span>';
                        }
                    ?>
        		    
        		    </h2>
        		    
                    <?php the_content(); ?>
                </div>
                
                <div>
                    <h4 class="mt-5 text-center mb-3">Información del vehículo</h4>
                    <div class="grid">
                        <div class="grid-item grid-item--width2 border p-3">
                            <div class="d-flex flex-column align-items-center p-3">
                                <?php 
                                    $dimensiones = get_post_meta($post->ID, 'dimensiones', true);
                                    if($dimensiones == 'menosde4'){
                                        echo '<p class="border-bottom">Longitud &#62 menos de 4 metros</p>';
                                    }
                                    if($dimensiones == '4a6'){
                                        echo '<p class="border-bottom">Longitud &#62  4 - 6  metros</p>';
                                    }
                                    if($dimensiones == '6a8'){
                                        echo '<p class="border-bottom">Longitud &#62 6 - 8  metros</p>';
                                    }
                                    if($dimensiones == 'masde8'){
                                        echo '<p class="border-bottom">Longitud &#62 mas de 8 metros</p>';
                                    }
                                ?>
                                
                                <?php 
                                    $tipo = get_post_meta($post->ID, 'vehiculo', true);
                                    if($tipo == 'celulapickup'){
                                        echo '<p class="border-bottom">Tipo &#62 Célula Pick Up</p>';
                                    }
                                    if($tipo == 'caravana'){
                                        echo '<p class="border-bottom">Tipo &#62 Caravana</p>';
                                    }
                                    if($tipo == 'autocaravana'){
                                        echo '<p class="border-bottom">Tipo &#62 Autocaravana</p>';
                                    }
                                    if($tipo == 'fifthwheel'){
                                        echo '<p class="border-bottom">Tipo &#62 Caravana quinta rueda</p>';
                                    }
                                    if($tipo == 'camper'){
                                        echo '<p class="border-bottom">Tipo &#62 Furgoneta camperizada</p>';
                                    }
                                ?>
                            </div>
                            
                            <h5 class="text-center">Extras:</h5>
                            <div class="d-flex flex-column align-items-center p-3">
                                <ul class="list-unstyled">
                                <?php
                                    $algunextra = false;
                                    $extra1 = get_post_meta($post->ID, 'extra1', true);
                                    if($extra1 !=''){
                                        echo '<li class="border-bottom"><i class="fa fa-check"></i> Estabilizadores </li>';
                                        $algunextra = true;
                                    }
                                    $extra2 = get_post_meta($post->ID, 'extra2', true);
                                    if($extra2 !=''){
                                        echo '<li class="border-bottom"><i class="fa fa-check"></i> Neumáticos reforzados </li>';
                                        $algunextra = true;
                                    }
                                    $extra3 = get_post_meta($post->ID, 'extra3', true);
                                    if($extra3 !=''){
                                        echo '<li class="border-bottom"><i class="fa fa-check"></i> Calefacción </li>';
                                        $algunextra = true;
                                    }
                                    $extra4 = get_post_meta($post->ID, 'extra4', true);
                                    if($extra4 !=''){
                                        echo '<li class="border-bottom"><i class="fa fa-check"></i> Toldo </li>';
                                        $algunextra = true;
                                    }
                                    $extra5 = get_post_meta($post->ID, 'extra5', true);
                                    if($extra5 !=''){
                                        echo '<li class="border-bottom"><i class="fa fa-check"></i> Portabicis </li>';
                                        $algunextra = true;
                                    }
                                    $extra6 = get_post_meta($post->ID, 'extra6', true);
                                    if($extra6 !=''){
                                        echo '<li class="border-bottom"><i class="fa fa-check"></i> Agua caliente </li>';
                                        $algunextra = true;
                                    }
                                    $extra7 = get_post_meta($post->ID, 'extra7', true);
                                    if($extra7 !=''){
                                        echo '<li class="border-bottom"><i class="fa fa-check"></i> Aire acondicionado </li>';
                                        $algunextra = true;
                                    }
                                    $extra8 = get_post_meta($post->ID, 'extra8', true);
                                    if($extra8 !=''){
                                        echo '<li class="border-bottom"><i class="fa fa-check"></i> Generador </li>';
                                        $algunextra = true;
                                    }
                                    $extra9 = get_post_meta($post->ID, 'extra9', true);
                                    if($extra9 !=''){
                                        echo '<li class="border-bottom"><i class="fa fa-check"></i> Batería auxiliar </li>';
                                        $algunextra = true;
                                    }
                                    if(!$algunextra){
                                        echo '<li class="border-bottom"><i class="fa fa-times mr-1"></i>Ningún extra disponible</li>';
                                    }
                                ?>
                                </ul>
                            </div>
                            
                            <?php 
                                $precio = get_post_meta($post->ID, 'precio', true);
                                
                                echo '<h5 class="text-center text-success">'.$precio.'€</h5>';
                                
                            ?>
                            
                        </div>
                    </div>
                </div>
                
                <div class="row">
					<?php
					    $author=$post->post_author;
					    $categoria = wp_get_post_categories( $post->ID );
                        $args = array ( 
                            'post__not_in'      => array($post->ID),
                        	'posts_per_page' => 2,
                            'category__in' => $categoria,
                        );
                       $post_by_author = get_posts( $args );
                       $custom_query= new WP_Query($args);
                    ?>
                    <?php if ($custom_query->have_posts()): ?>
                    <h1 class="col-md-12 text-center mt-5 mb-5">Posts relacionados</h1>
                    <?php while ($custom_query->have_posts()): ?>
                    <?php $custom_query->the_post();?> 
                    <div class="col-md-6">
    					<?php get_template_part('templates/content','front'); ?>
    				</div>
    				<?php endwhile; ?>
    				<?php 
    				    endif; 
    					wp_reset_postdata();
    				?>
                </div>
                
                <div class="row mt-5 mb-5">
                    <div class="col-md-4 d-flex justify-content-center align-items-center">
                        <img src="<?php echo get_avatar_url($author->ID,'size=170'); ?>" class="rounded-circle" alt="image">
                    </div>
                    <div class="col-md-8">
                        <span class="blog-post-author-name"><?php echo $author->user_nicename; ?></span>
                        <p class="text-center"><?php the_author_posts_link(); ?></p>
                        <p> <?php the_author_meta('description', $author->ID) ?> </p>
                    </div>
                    
                </div>
                
                <div id="comentarios">
                    <?php comments_template(); ?>
                </div>
                
          	</div>
          	
          	<div class="col-md-3 mt-5">
              	<div class="col-md-12 d-flex align-items-center flex-column">
	                <?php get_sidebar(); ?>
              	</div>
          	</div>
          	
      	</div>
    </div>

<?php
    get_footer();
?>