<?php
/*
	Template Name: Private
*/
	get_header();
?>

<body>
    <div class="site-wrap">
        
        <?php get_template_part('templates/nav','front'); ?>
        
        <div class="site-mobile-menu">
          <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
              <span class="icon-close2 js-menu-toggle"></span>
            </div>
          </div>
          <div class="site-mobile-menu-body"></div>
        </div>
        
        <div class="mt-3 mb-5">
        	<?php
                if(!is_user_logged_in()){
                    /*Parte si no está logueado*/
                   
                    wp_login_form();
                    wp_register('<p class="text-center mt-5 mb-5">','</p>',true);
                }else{
                    /*Parte si está logueado*/
                    echo '<div class="logueado">';
                    $user = wp_get_current_user();
                    $rol = get_author_rol($user->ID);
                    
                    if($rol == 'administrator'){
                        $rol = 'administrador';
                    }
                    
                    if($rol == 'author'){
                        $rol = 'autor';
                    }
                    
                    if($rol == 'editor'){
                        $rol = 'editor';
                    }
                    
                    if($rol == 'contributor'){
                        $rol = 'colaborador';
                    }
                    
                    if($rol =='subscriber '){
                        $rol = 'subscriptor';
                    }
                    
                    echo '<h2 class="text-center">Bienvenido '.$rol .'<a href="';
                    echo get_author_posts_url($user->ID).'">';
                    echo ' '.$user->display_name .'</a></h2>';
                ?>
                <div class="row mx-0 my-0 mt-5 ml-5 mr-5">
                        <div class="col-md-4 container-fluid">
                 			<img src="<?php echo get_avatar_url($user->ID);?>" alt="imagen no encontrada" class="rounded-circle w-100 mb-5">
             			</div>
             			<div class="col-md-7 d-flex flex-column justify-content-center">
                 			<h3 class="mb-3"><?php echo $user->user_nicename; ?></h3>
                        	<p><?php echo $user->description; ?></p>
             			</div>
                </div>
        </div>
        
        <?php
            $args = array (  
                'post_type'=>array('post','venta_cv'),
                'author'        =>  $user->ID,
                'orderby'       =>  'post_date',
                'order'         =>  'DESC',
                'posts_per_page' => 5,
            );
           
           $post_by_author = get_posts( $args );
           $custom_query= new WP_Query($args);
        ?>
        
        <?php if ($custom_query->have_posts()): ?>
        <h3 class="text-center">Mis últimos posts</h3>
        <div class="d-flex justify-content-center mb-5">
            <ul>
            <?php while ($custom_query->have_posts()): ?>
            <?php $custom_query->the_post();?> 
    			<li class="mt-3"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></li>
    		<?php endwhile; ?>
    		</ul>
    	</div>
		<?php 
		    endif; 
			wp_reset_postdata();
		?>
		
        <?php
            echo '<h5 class="text-center"><a href="'.wp_logout_url(get_permalink()).'">Cerrar sesión</a></h5>';
            echo '</div>';
        }
        ?>
        
<?php
	get_footer();
?>