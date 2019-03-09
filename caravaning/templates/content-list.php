<tr>
	<th class="text-center"><?php echo $wp_query->current_post +1; ?></th>
	<th class="text-center"><?php the_time('F j, Y');?></th>
	<th class="text-center"><?php the_author_posts_link(); ?></th>
	<th class="text-center"><a href="<?php the_permalink(); ?>">&#60 <?php the_title();?> &#62</a></th>	
</tr>