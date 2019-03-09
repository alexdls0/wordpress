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
                     <i class="fa fa-calendar-o"></i>
                     <?php the_time('j, M Y');?>
                     |</span>
                     <span class="post-comment">
                     <i class="fa fa-comments ml-2"></i>
                     <?php comments_number( __('Ningún comentario', 'zapa'), '1 comentario', '% comentarios' ); ?>
                     |</span>
                     <span class="post-comment ml-2">
                     <i class="fa fa-users"></i>
                     <?php echo get_num_visits($post->ID); ?>
                     </span>
                </p>
        		<?php
            		if(get_the_post_thumbnail_url()){
            	?>
            	    <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid mt-3 mb-3" alt="recurso no encontrado">
            	<?php
            		    
            		}
        		?>
        		
        		<div class="mt-5 mb-5">
        		    <h2 class="mb-5"><?php the_title(); ?></h2>
                    <?php the_content(); ?>
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