<?php
/*
    Template Name: Archives
*/

    get_header();

    $curauth = (get_query_var('author_name')) ? get_user_by('slug',
    get_query_var('author_name')) : get_userdata(get_query_var('author'));
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
        
    <div class="col-md-8 mx-auto">
	    <div class="grid mt-5">
            
            <div class="grid-item grid-item--width2 border p-3">
                <?php
                    // colección de objetos autor
                    $authors = get_users(array( 'fields' => array( 'display_name', 'ID' ) )); 
                    foreach($authors as $auth) {
                        
                    $args = array (  
                        'post_type'=>array('post','venta_cv'),
                        'author'        =>  $auth->ID,
                        'orderby'       =>  'post_date',
                        'order'         =>  'DESC',
                    );
                   
                   $post_by_author = get_posts( $args );
                ?>
                
                <h4 class="text-center"><?php echo $auth->display_name;?></h4>
                
                <?php
                   if(count($post_by_author) != 0){
                ?>
                <p class="">
                <?php
                   echo '<ul class="mb-5">';
                       foreach ( $post_by_author as $post) {
                           echo '<li><a href="'.get_permalink($post->ID).'"> '.$post->post_title.'</a></li><hr class="hrsoft">';
                       }
                       echo '</ul>';
                   }else{
                       echo '<p class="text-center mt-3 mb-5"> Ningún posts publicado </p>';
                   }
                ?> 
                </p>
                <?php 
                    }
                ?>
            </div>
            
            <div class="grid-item grid-item--width2 d-flex flex-column align-items-center border p-3">
                <h5>Categorias</h5>
                <div class="mb-5">
                    <?php
						$categories = get_categories( array(
						    'orderby' => 'name',
						    'order'   => 'ASC'
						) );
						echo '<ul class="list-unstyled">';
						foreach($categories as $category) {
							echo '<li><i class="fa fa-clipboard-list"></i><a class="ml-3 mr-3" href="'. esc_url( get_category_link( $category->term_id ) ) .'">' . $category->name . '</a></li>';
						}
						echo '</ul>';
					?>
                </div>
            </div>
           
            <div class="grid-item grid-item--width2 d-flex flex-column align-items-center border p-3">
                <h5>Archivos diarios</h5>
                <div class="mb-5">
                    <ul class="list-unstyled w-100">
                         <?php 
                            $args = array (
                                'type' => 'daily',
                                'show_post_count' => 1,
                                'echo' => false,
                            );
                            $dailypost = wp_get_archives( $args );
                            $dailypost = preg_replace( '~(&nbsp;)(\(\d++\))~', '$1<span class=""> &#62 $2</span>', $dailypost );
                            $dailypost = preg_replace('/[\(\)]/', '', $dailypost); 
                            echo $dailypost;
                        ?>
                        </ul>
                </div>
            </div>
            
            <div class="grid-item grid-item--width2 d-flex flex-column align-items-center border p-3">
                <h5>Archivos mensuales</h5>
                <div class="mb-5">
                    <ul class="list-unstyled w-100">
                         <?php 
                            $args = array (
                                'type' => 'monthly',
                                'show_post_count' => 1,
                                'echo' => false,
                            );
                            $dailypost = wp_get_archives( $args );
                            $dailypost = preg_replace( '~(&nbsp;)(\(\d++\))~', '$1<span class=""> &#62 $2</span>', $dailypost );
                            $dailypost = preg_replace('/[\(\)]/', '', $dailypost); 
                            echo $dailypost;
                        ?>
                        </ul>
                </div>
            </div>
            
            <div class="grid-item grid-item--width2 d-flex flex-column align-items-center border p-3">
                <h5>Archivos anuales</h5>
                <div class="mb-5">
                    <ul class="list-unstyled">
                         <?php 
                            $args = array (
                                'type' => 'yearly',
                                'show_post_count' => 1,
                                'echo' => false,
                            );
                            /*<i class="fa fa-calendar"></i>*/
                            $dailypost = wp_get_archives( $args );
                            $dailypost = preg_replace( '~(&nbsp;)(\(\d++\))~', ' $1 <span>&#62 $2</span>', $dailypost );
                            $dailypost = preg_replace('/[\(\)]/', '', $dailypost); 
                            echo $dailypost;
                        ?>
                    </ul>
                </div>
            </div>
            
            <div class="grid-item grid-item--width2 d-flex flex-column align-items-center border p-3">
                <h5>Posts más comentados</h5>
                <div class="mb-5">
                         <p class="">
                            <?php
                                $args = array (
                                  'orderby' => 'comment_count',
                                  'post_per_page' => null,
                                );
                                $most = new WP_Query( $args );
                                echo '<ul class="list-unstyled">';
                                while ( $most->have_posts() ) : $most->the_post();
                                       $num_comments = get_comments_number( $post->ID );
                                       echo '<li><a href="'.get_the_permalink($post->ID).'">'. $post->post_title.' <span class="heavyblue pull-right"> <i class="fa fa-comment"></i>&nbsp;&nbsp; '.$num_comments.'</span></a><br /></li>';
                                       echo '<hr class="hrsoft">';
                                 endwhile;
                                 echo '</ul>';
                                 wp_reset_postdata();
                            ?>
                        </p>
                </div>
            </div>
            
            <div class="grid-item grid-item--width2 d-flex flex-column align-items-center border p-3">
                <h5>Etiquetas</h5>
                <ul class="list-unstyled">
                    <?php
                    $tags = get_tags();
                    if ( $tags ) :
                        foreach ( $tags as $tag ) : ?>
                            <li><i class="fa fa-tag mr-2"></i><a href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>" title="<?php echo esc_attr( $tag->name ); ?>"> <?php echo esc_html( $tag->name ); ?></a></li>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>
            </div>
            
            <div class="grid-item grid-item--width2 border p-3">
                <h5 class="text-center">Autores y Nº Posts</h5>
                <?php
                    // colección de objetos autor
                    $authors = get_users(array( 'fields' => array( 'display_name', 'ID' ) )); 
                    foreach($authors as $auth) {
                ?>
                
                <div class="d-flex flex-row justify-content-between pl-3 pr-3">
                    <div class="d-flex flex-row flex-nowrap">
                        <i class="fa fa-child mr-2 "></i>
                        <h6 class="text-center"><a href="<?php echo get_author_posts_url($auth->ID); ?>"><?php echo $auth->display_name;?></a></h6>
                    </div>
                    <h5><?php echo count_user_posts_by_type($auth->ID,array('post','venta_cv'));?></h5>    
                </div>
                <?php
                        
                    }
                ?>
            </div>
            
	    </div>
    </div>

<?php
    get_footer();
?>
