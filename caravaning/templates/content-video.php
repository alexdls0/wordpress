<div class="col-md-12 mb-5">
	<div>
        <h3 class="mb-3"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
    	<h6><?php the_author_posts_link(); ?><span class="text-muted"> <?php echo " "; the_time('j M Y');?></span></h6>
    	<h6 class="mb-4"><?php the_category();?></h6>
        <div>
            <h1><?php the_content(); ?></h1>
        </div>
	</div>
</div>