<div class="col-md-12 mb-5">
	<div>
        <h3 class="mb-3"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
        <div class="mismo-size mb-3">
    		<img src="<?php echo get_first_image(); ?>" />
    	</div>
    	<h6><?php the_author_posts_link(); ?><span class="text-muted"> <?php echo " "; the_time('j M Y');?></span></h6>
    	<h6><?php the_category();?></h6>
	</div>
</div>