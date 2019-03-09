<?php
    get_header();
    $curauth = (get_query_var('author_name')) ? get_user_by('slug',
	get_query_var('author_name')) : get_userdata(get_query_var('author'));
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
        		<div class="row">
         			<div class="col-md-4 container-fluid mt-4 mb-5">
	         			<img src="<?php echo get_avatar_url($curauth->ID);?>" alt="imagen no encontrada" class="img-fluid w-100">
         			</div>
         			<div class="col-md-7 pl-2 pr-2  d-flex flex-column justify-content-center">
	         			<h3 class="mb-3">Perfil de: <?php echo $curauth->user_nicename; ?></h3>
                    	<p><?php echo $curauth->description; ?></p>
         			</div>
         			<div class="col-md-1">
          			</div>
          			<div class="col-md-12 d-flex flex-row">
          				<div class="col-md-4 text-center">
				            <a href="https://twitter.com/" class="text-muted">
				            	<i class="fab fa-twitter"></i>
		                        <?php the_author_meta('twitter', $curatuh->ID); ?>
		                    </a>
				        </div>
				        <div class="col-md-4 text-center">
				            <a href="https://www.linkedin.com/" class="text-muted">
		                        <i class="fab fa-linkedin"></i>
		                        <?php the_author_meta('linkedin', $curatuh->ID); ?>
		                    </a>
				        </div>
				        <div class="col-md-4 text-center">
				            <a href="https://www.facebook.com/" class="text-muted">
		                        <i class="fab fa-facebook"></i>
		                        <?php the_author_meta('facebook', $curatuh->ID); ?>
		                    </a>
				        </div>
          			</div>
          			
      				<div class="col-md-12 mt-4">
      					<div class="w-100">
						  <div class="progress">
						    <div class="progress-bar bg-danger" role="progressbar" aria-valuemin="0" aria-valuemax="100"
						    style="max-width: <?php the_author_meta('skill1V', $curatuh->ID); ?>%">
						    <span class="title"><?php the_author_meta('skill1', $curatuh->ID); ?> &#8250 <?php the_author_meta('skill1V', $curatuh->ID); ?>%</span>
						    </div>
						  </div>
						</div>
      				</div>
      				
      				<div class="col-md-12 mt-4">
      					<div class="w-100">
						  <div class="progress">
						    <div class="progress-bar bg-warning" role="progressbar" aria-valuemin="0" aria-valuemax="100"
						    style="max-width: <?php the_author_meta('skill2V', $curatuh->ID); ?>%">
						    <span class="title"><?php the_author_meta('skill2', $curatuh->ID); ?> &#8250 <?php the_author_meta('skill2V', $curatuh->ID); ?>%</span>
						    </div>
						  </div>
						</div>
      				</div>
      				
      				<div class="col-md-12 mt-4">
      					<div class="w-100">
						  <div class="progress">
						    <div class="progress-bar bg-info" role="progressbar" aria-valuemin="0" aria-valuemax="100"
						    style="max-width: <?php the_author_meta('skill3V', $curatuh->ID); ?>%">
						    <span class="title"><?php the_author_meta('skill3', $curatuh->ID); ?> &#8250 <?php the_author_meta('skill3V', $curatuh->ID); ?>%</span>
						    </div>
						  </div>
						</div>
      				</div>
      				
      				<div class="col-md-12 mt-4">
      					<div class="w-100">
						  <div class="progress">
						    <div class="progress-bar bg-success" role="progressbar" aria-valuemin="0" aria-valuemax="100"
						    style="max-width: <?php the_author_meta('skill4V', $curatuh->ID); ?>%">
						    <span class="title"><?php the_author_meta('skill4', $curatuh->ID); ?> &#8250 <?php the_author_meta('skill4V', $curatuh->ID); ?>%</span>
						    </div>
						  </div>
						</div>
      				</div>
					
					<div class="col-md-12">
					<div class="row">	
						<?php
	                        $args = array ( 
	                        	'post_type'=>array('post','venta_cv'),
	                        	'posts_per_page' => 2,
	                            'author'        =>  $curauth->ID,
	                            'orderby'       =>  'post_date',
	                            'order'         =>  'DESC',
	                        );
	                       $post_by_author = get_posts( $args );
	                       $custom_query= new WP_Query($args);
	                    ?>
	                    <?php if($custom_query->have_posts()): ?>
	                    <div class="col-md-12 mt-5 mb-3">
							<h3 class="text-center">Publicaciones recientes</h3>
						</div>
						
				        <?php while ($custom_query->have_posts()): ?>
				        <?php $custom_query->the_post(); ?>
				            <div class="col-md-6">
				              <div class="post-entry">
				                <?php if(has_post_thumbnail()){ ?>
				                	<img src="<?php echo get_the_post_thumbnail_url();?>" alt="Image placeholder" class="img-fluid">
				                <?php } ?>
				                <div class="body-text">
				                	<div class="mt-3"><?php the_category(); ?></div>
				                  	<h4 class="ml-3 mb-3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
				                  	<!--<p class="mb-4"><?php the_excerpt(); ?></p>-->
				                  	<!--<p class="sub-heading"><?php the_time('j');?> <?php the_time('M');?></p>-->
				                </div>
				              </div>
				            </div>
				        <?php endwhile; ?>
				        <?php endif; ?>
						</div>
					</div>

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





