	<header class="site-navbar py-1" role="banner">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-6 col-xl-2">
            <a href="<?php echo get_page_link(get_page_by_title('Inicio')->ID); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/nomadas.png" alt="Image" class="img-fluid"></a>
            <!--h1 class="mb-0"><a href="<?php echo get_page_link(get_page_by_title('Inicio')->ID); ?>" class="text-black h2 mb-0">Nómadas</a></h1>-->
          </div>
          <div class="col-10 col-md-8 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">
              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <!--<li class="has-children">
                  <a href="destination.html">Destinations</a>
                  <ul class="dropdown">
                    <li><a href="#">Japan</a></li>
                    <li><a href="#">Europe</a></li>
                    <li><a href="#">China</a></li>
                    <li><a href="#">France</a></li>
                  </ul>
                </li>-->
                <li><a href="<?php echo get_page_link(get_page_by_title('Inicio')->ID); ?>">Inicio</a></li>
                <li><a href="<?php echo get_page_link(get_page_by_title('Blog')->ID); ?>">Blog</a></li>
                <li><a href="<?php echo get_page_link(get_page_by_title('Galería')->ID); ?>">Galería</a></li>
                <li><a href="<?php echo get_page_link(get_page_by_title('Contacto')->ID); ?>">Contacta</a></li>
                <li><a href="<?php echo get_page_link(get_page_by_title('Privado')->ID); ?>">Privado</a></li>
                <li><a href="<?php echo get_page_link(get_page_by_title('Archivos')->ID); ?>">Archivos</a></li>
              </ul>
            </nav>
          </div>
          <div class="col-6 col-xl-2 text-right">
            <div class="d-none d-xl-inline-block">
              <ul class="site-menu js-clone-nav ml-auto list-unstyled d-flex text-right mb-0" data-class="social">
                <li>
                  <a href="https://www.tripadvisor.es/ShowTopic-g1-i27333-k5917082-Autocaravanas_alquiler_e_itinerarios-Camping.html" class="pl-0 pr-3 text-black"><span class="icon-tripadvisor"></span></a>
                </li>
                <li>
                  <a href="https://twitter.com/caravaningbcn?lang=es" class="pl-3 pr-3 text-black"><span class="icon-twitter"></span></a>
                </li>
                <li>
                  <a href="https://es-es.facebook.com/SalonCaravaning/" class="pl-3 pr-3 text-black"><span class="icon-facebook"></span></a>
                </li>
                <li>
                  <a href="https://www.instagram.com/caravaningk2/" class="pl-3 pr-3 text-black"><span class="icon-instagram"></span></a>
                </li>
              </ul>
            </div>
            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
          </div>
        </div>
      </div>
    </header>    