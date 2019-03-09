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
	
	
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="col-md-6">
					<section>
                        <h3 class="text-center mt-5 mb-3"><?php echo $label; ?></h3>
                    </section>
			</div>
		</div>
	
		<div class="row d-flex justify-content-center">
			<div class="col-md-6 mb-2">
					<section>
                        <?php get_search_form() ?>
                    </section>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-12 mb-5 d-flex justify-content-center">
					<?php
						$categories = get_categories( array(
						    'orderby' => 'name',
						    'order'   => 'ASC'
						) );
						
						for($i = 0; $i<4; $i++){
							echo '<a class="ml-3 mr-3" href="'. esc_url( get_category_link( $categories[$i]->term_id ) ) .'">' . $categories[$i]->name . '</a> ';
						}
					?>
					<a class="ml-3 mr-3" href="<?php echo get_page_link(get_page_by_title('Archivos')->ID); ?>">Más</a>	
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-12 text-center">
				<?php if(have_posts()): ?>
					<h2>Resultados para: <?php echo $_GET['s'] ?></h2>	
					<table class="table">
						<thdead>
							<tr>
								<th class="text-center">Nº</th>
								<th class="text-center">Publicado</th>
								<th class="text-center">Autor</th>
								<th class="text-center">Título</th>
							</tr>
						</thdead>
						
						<?php $counter = 0;?>
						<?php while(have_posts()):?>
						<?php the_post(); ?>
							<tbody>
								<?php get_template_part('templates/content','list'); ?>
							</tbody>
						<?php endwhile; ?>
					</table>
					<?php endif;?>
			</div>
		</div>
		<div class="row">
  		  <div class="col-md-12 ">
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
<?php
	//require_once('footer.php');
	get_footer();
?>