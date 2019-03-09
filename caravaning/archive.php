<?php
    get_header();
	$total_busqueda = $wp_the_query->found_posts;
	switch ($total_busqueda) {
	    case 0:
	        $label = "No se ha encontrado recurso";
	        break;
	    case 1:
	        $label = "1 resultado encontrado";
	        break;
		default:
    		$label = $total_busqueda." resultados encontrados";
	        break;
	}
	
    if($total_busqueda > 0){
	    $title_archives = 'Archivos '  ;
	    
	    if(is_category()){
	        $title_archives = 'para la categoría:  '. '<span class="text-muted">' . single_cat_title( '', false ) . ' </span>' ;
	    }
	    
	    if(is_tag()){
	        $title_archives = 'para la etiqueta:  '. '<span class="text-muted">' . single_tag_title( '', false ) . ' </span>' ;
	    }
	    
	    if ( is_author() ) {
              the_post();
              $title_archives = ' del autor: ' . '<span class="text-muted"><a href="' 
              . get_author_posts_url( get_the_author_meta( "ID" ) ) . '" title="' . esc_attr( get_the_author() ) 
              . '" rel="me">' . get_the_author() . '</a> </span>';
              rewind_posts();

        }
        
        if ( is_day() ) {
            $title_archives = ' para el día:  ' . '<span class="text-muted">' . get_the_date() . ' </span>'  ;

        }
        
        if ( is_month() ) {
            $title_archives = ' para el mes:  ' . '<span class="text-muted">' . get_the_date( 'F Y' ) . ' </span>'  ;

        }
        
        if ( is_year() ) {
            $title_archives = ' para el año:  ' . '<span class="text-muted">' . get_the_date( 'Y' ) . ' </span>'  ;
        }
	}

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
   
    <div class="site-section">
      <div class="container">
        
        <div class="row">
          <div class="col-md-9">
      			<div class="col-md-12 mt-5 mb-5">
      			    <h3 class="text-center mb-5"><?php echo $label ?> <?php echo $title_archives ?></h1>
      			    
      			      <?php if (have_posts()) : ?>
      			        <div class="col-md-12">
                              <table class="table text-center">
                                <thead>
                                  <tr>
                                    <th scope="col" class="text-center">Nº</th>
                                    <th scope="col" class="text-center">Publicado</th>
                                    <th scope="col" class="text-center">Autor</th>
                                    <th scope="col" class="text-center">Titulo</th>
                                  </tr>
                                </thead>
                                <tbody>
                                 <?php while ( have_posts() ) : the_post(); ?>
                                    <?php get_template_part('templates/content','list'); ?>
                                 <?php endwhile; ?>
                                </tbody>
                              </table>
              			</div>
              		<?php endif; ?>
      			    
      			</div>
      			<div class="row">
        		  <div class="col-md-9 ">
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