<?php
	get_header();
?>
  <body>
  
  <?php get_template_part('templates/nav','front'); ?>
  <div class="site-wrap">
    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    <div class="slide-one-item home-slider owl-carousel mb-5">
      
      <div class="site-blocks-cover overlay" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/blog-carrusel-1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
              <h1 class="text-white font-weight-light">Nuestros blogs</h1>
              <p class="mb-5">Publicaciones del mundo del caravaning.</p>
            </div>
          </div>
        </div>
      </div>  

      <div class="site-blocks-cover overlay" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/blog-carrusel-2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
              <h1 class="text-white font-weight-light">Noticias y Novedades</h1>
              <p class="mb-5">Vehículos de gran calidad de marcas reconocidas.</p>
            </div>
          </div>
        </div>
      </div>  

    </div>
    
    <div class="site-section">
      <div class="container">
        
        <div class="row mb-5">
          <?php
            $args = array(
              'post_type'=>array('post','venta_cv'),
              'posts_per_page' => 1,
              'tax_query' => array( 
                          array(
                              'taxonomy' => 'post_format',
                              'field' => 'slug',
                              'terms' => array(
                                      'post-format-gallery', 
                                      'post-format-link', 
                                      'post-format-image', 
                                      'post-format-quote', 
                                      'post-format-audio', 
                                      'post-format-video'
                              ),
                              'operator' => 'NOT IN'
                          )
                  )
            );
    	      $post_destacado= new WP_Query($args);
    	      if($post_destacado->have_posts()): 
    				  $post_destacado->the_post();
    				  $post_destacado_ID = $post->ID;
    			?>
          <div class="col-md-12 text-center">
            <h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
          </div>
    			
    			<div class="row mb-3">
    			  <div class="col-md-12 mb-5">
    			  </div>
    			  <div class="col-md-6">
    			    <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid" alt="No se ha podido encontrar el recurso">
    			  </div>
    			  <div class="col-md-6 d-flex justify-content-center align-items-center">
    			    <p><?php the_excerpt(); ?></p>
    			  </div>
    			</div>
    			
    			<div class="col-md-12">
            <h6><?php the_author_posts_link(); ?> <span class="text-muted"> <?php echo " "; the_time('j M Y');?></span></h6>
  					<h6><?php the_category();?></h6>
          </div>
        	<?php endif; 
      		  wp_reset_postdata();
      		?>
        </div>
        
        <div class="row">
          <div class="col-md-9">
            <div class="row mb-3 align-items-stretch">
              
              <?php 
      					$paged = get_query_var('paged') > 1 ? get_query_var('paged') : 1;
                $args = array(
                    'post_type'=>array('post','venta_cv'),
                    'posts_per_page'=>4,
                    'paged' => $paged,
                    'post__not_in' => array($post_destacado_ID),//asi no nos sale el post destacado en el listado de posts
                    );
                $custom_query = new WP_Query($args);
              ?>
              
              <?php if ($custom_query->have_posts()): ?>
              
              <?php while ($custom_query->have_posts()): ?>
              
              <?php $custom_query->the_post(); 
      				  get_template_part('templates/content', get_post_format()); 
      				?>
      				
      				<?php endwhile; ?>
      				
      				<?php endif; 
      					wp_reset_postdata();
      				?>
      				
      				<div class="row">
      				  <div class="col-md-12 ">
      					  <nav>
        						<ul class="">
      							  <?php the_posts_pagination( array(
        								'mid_size'=>2,
      								  'prev_text'=>__('Anterior','textdomain'),
      								  'next_text'=>__('Siguiente','textdomain'),
      							  )); ?>
      						  </ul>
      					  </nav>
      					 </div>
      				</div>
      				
            </div>
          </div>
          <div class="col-md-3">
              <div class="col-md-12 d-flex align-items-center flex-column">
                <?php get_sidebar(); ?>
              </div>
          </div>
      </div>
    </div>
    
<?php
	get_footer();
?>