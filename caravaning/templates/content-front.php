<div class="homepost-item">
   <a href="<?php the_permalink(); ?>">
      <div style="background-image:url('<?php echo get_first_image(); ?>');background-repeat:no-repeat;background-size:cover;background-position:center;height:250px" class="homepost-item-image">
      </div>
   </a>
   <div class="homepost-box-wraper">
      <h4 class="post-title mt-3"><a href="<?php the_permalink(); ?>"><?php echo cut30(get_the_title()); ?></a></h4>
      <!--<p class="post-text"><?php echo get_the_excerpt(); ?></p>-->
      <!--<p class="post-more"><a href="<?php the_permalink(); ?>">Read More...</a></p>-->
      <p class="postmeta">
         <span class="post-author">
         <i class="fa fa-user"></i>
         <?= __('Por', 'zapa'); ?> <?php the_author_posts_link(); ?>
         </span>
         <span class="post-comment">
         <i class="fa fa-comments ml-2"></i>
         <?php echo get_num_visits($post->ID); ?>
         <i class="fa fa-calendar ml-2"></i>
         <span><?php the_time('j');?></span>
               <?php the_time('F'); ?>
         </span>                             
      </p>
   </div>
</div>