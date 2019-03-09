<?php
	get_header();
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

    <div class="slide-one-item home-slider owl-carousel">
      <div class="site-blocks-cover overlay" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/inicio1.png);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
              <h1 class="text-white font-weight-light">Nuevos paisajes</h1>
              <p class="mb-5">La ruta la decides tú y la comodidad la llevas contigo.</p>
            </div>
          </div>
        </div>
      </div>  

      <div class="site-blocks-cover overlay" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/inicio2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
              <h1 class="text-white font-weight-light">Miles de posibilidades</h1>
              <p class="mb-5">Vehículos diseñados para cubrir las comodidades de hasta el más selecto, solo tienes que buscar el tuyo.</p>
            </div>
          </div>
        </div>
      </div>  

    </div>

    <div class="site-section">
      <div class="container overlap-section">
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="unit-1 text-center">
              <img src="<?php echo get_template_directory_uri(); ?>/images/peopl1.jpg" alt="Image" class="img-fluid">
              <div class="unit-1-text">
                <h3 class="unit-1-heading">Una forma de ocio</h3>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="unit-1 text-center">
              <img src="<?php echo get_template_directory_uri(); ?>/images/peopl2.jpg" alt="Image" class="img-fluid">
              <div class="unit-1-text">
                <h3 class="unit-1-heading">Haz lo que amas</h3>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="unit-1 text-center">
              <img src="<?php echo get_template_directory_uri(); ?>/images/peopl3.jpg" alt="Image" class="img-fluid">
              <div class="unit-1-text">
                <h3 class="unit-1-heading">Pasa tiempo en familia</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row align-items-stretch">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="unit-4 d-flex mt-3">
              <div class="unit-4-icon mr-4"><span class="text-primary"><i class="fas fa-cocktail"></i></span></div>
              <div>
                <h3>Conoce gente</h3>
                <p>Esta forma de turismo permite conocer no solo otras culturas sino también gente nueva con las mismas inquietudes.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="unit-4 d-flex mt-3">
              <div class="unit-4-icon mr-4"><span class="text-primary"><i class="fas fa-chart-line"></i></span></div>
              <div>
                <h3>Desarrolla tu pasión</h3>
                <p>Dedícale tiempo a eso que tanto amas hacer. El mundo del caravaning te permite desarrollar tus pasatiempos favoritos.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="unit-4 d-flex mt-3">
              <div class="unit-4-icon mr-4"><span class="text-primary"><i class="fas fa-users"></i></span></div>
              <div>
                <h3>Disfruta de la familia</h3>
                <p>Todos los vehículos vivienda te dan la posibilidad de disfrutar de tu pareja e hijos en cualquier lugar del mundo.</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  
    <div class="site-section block-13 bg-light">
      <div class="container">
          <div class="row justify-content-center mb-5">
            <div class="col-md-7">
              <h2 class="font-weight-light text-black text-center mt-5">Nosotros</h2>
            </div>
          </div>
  
          <div class="nonloop-block-13 owl-carousel mb-5">
  
            <div class="item">
              <div class="container">
                <div class="row">
                  <div class="col-lg-6 mb-5">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/testimonio-1.jpg" alt="Image" class="img-md-fluid">
                  </div>
                  <div class="overlap-left col-lg-6 bg-white p-md-5 align-self-center">
                    <p class="text-black lead">&ldquo;De alguna forma Nómadas trata de traer un concepto que lleva muchas más décadas de desarrollo en países extranjeros como Francia, Alemania e incluso Reino Unido y ese concepto es llevar la casa a cuestas.&rdquo;</p>
                    <p class="">&mdash; <em>Erik koch</em>, <a href="" class="nocursor">Repr. Nómadas Alemania</a></p>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="item">
              <div class="container">
                <div class="row">
                  <div class="col-lg-6 mb-5">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/testimonio-2.jpg" alt="Image" class="img-md-fluid">
                  </div>
                  <div class="overlap-left col-lg-6 bg-white p-md-5 align-self-center">
                    <p class="text-black lead">&ldquo;No tener que pensar en que hoteles vas a reservar o como vas a desplazarte ahorra mucho tiempo y esfuerzo que realmente puede invertirse en mejorar la experiencia en sí del propio viaje.&rdquo;</p>
                    <p class="">&mdash; <em>Alessandra White</em>, <a href="" class="nocursor">Depto Diseño Nómadas</a></p>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="item">
              <div class="container">
                <div class="row">
                  <div class="col-lg-6 mb-5">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/testimonio-3.jpg" alt="Image" class="img-md-fluid">
                  </div>
                  <div class="overlap-left col-lg-6 bg-white p-md-5 align-self-center">
                    <p class="text-black lead">&ldquo;La realidad es que es una forma de turismo perfectamente practicable por jóvenes y mayores. Probablemente lo más difícil es encontrar el vehículo adecuado, esa es una de las grandes razones por las que Nómadas fue creada&rdquo;</p>
                    <p class="">&mdash; <em>Sasha Kozlov</em>, <a href="#">Depto Ventas Nómadas</a></p>
                  </div>
                </div>
              </div>
            </div>
  
          </div>
        </div>
    </div>

    <div class="site-blocks-cover overlay inner-page-cover" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/fondo-video.jpg); background-attachment: fixed;">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-7" data-aos="fade-up" data-aos-delay="400">
            <a href="https://www.youtube.com/watch?v=PFRrI3FwKy8" class="play-single-big mb-4 d-inline-block popup-vimeo"><span class="icon-play"></span></a>
            <h2 class="text-white font-weight-light mb-5 h1">Experimente una pequeña parte de lo que ofrecemos</h2>
            
          </div>
        </div>
      </div>
    </div>  





    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <h2 class="font-weight-light text-black mt-5">Acerca de Nómadas</h2>
          </div>
        </div>
        <div class="row align-items-stretch">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary"><i class="fas fa-calendar-alt"></i></span></div>
              <div>
                <h3>Experiencia</h3>
                <p>Llevamos mas de 10 años dedicándonos al sector de la venta de vehículos vivienda de toda clase.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary"><i class="fas fa-check-circle"></i></span></div>
              <div>
                <h3>Reconocimiento</h3>
                <p>Nómadas tiene su sede en España pero nos reconocen a nivel mundial por nuestra dedicación.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary"><i class="fas fa-chalkboard-teacher"></i></span></div>
              <div>
                <h3>Conocimiento</h3>
                <p>Probamos todos los vehículos que nos llegan para dar al cliente toda la información que necesite.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary"><i class="fas fa-certificate"></i></span></div>
              <div>
                <h3>Marcas</h3>
                <p>Tratamos de contar con las mejores marcas internacionales teniendo siempre en cuenta la opinión de nuestros compradores.</p>
                
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary"><i class="fas fa-business-time"></i></span></div>
              <div>
                <h3>Profesionales</h3>
                <p>Contamos con una flota de profesionales que se esfuerzan por obtener los mejores resultados dándonos ese reconocimiento global.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary"><i class="fas fa-phone-volume"></i></span></div>
              <div>
                <h3>Atención al cliente</h3>
                <p>Nos gusta que el cliente siempre tenga una relación cercana con nosotros y nos comunique cualquier problema o dificultad que tenga.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>





    <div class="site-section border-top">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-12 mt-5">
            <h2 class="mb-5 text-black>">¿Desea saber más?</h2>
            <p class="mb-0"><a href="<?php echo get_page_link(get_page_by_title('Blog')->ID); ?>" class="btn btn-primary py-3 px-5 text-white">Visite el blog</a></p>
          </div>
        </div>
      </div>
    </div>
    
<?php
	get_footer();
?>