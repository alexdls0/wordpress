<div class="col-md-12 mb-5">
	<h3 class="mb-3"><a href="<?php the_permalink(); ?>">
	<?php 
		if ( 'venta_cv' == get_post_type() ){
	    	echo '<span class="text-success"> (Venta)</span>';
		}
	
	?>
	<?php the_title();?></a></h3>
	<div class="mismo-size mb-3">
		<img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid mb-3" alt="No se ha podido encontrar el recurso">	
	</div>
	<h6><?php the_author_posts_link(); ?><span class="text-muted"> <?php echo " "; the_time('j M Y');?></span></h6>
	<h6 class="mb-4"><?php the_category();?></h6>
	<p><?php the_excerpt(); ?></p>
</div>