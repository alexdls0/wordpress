<footer class="site-footer mt-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="mb-5">
              <h3 class="footer-heading mb-4 text-center">Sobre Nómadas</h3>
              <p>Nuestra filosofía consiste en buscar la libertad sin perder la comodidad de casa. El mundo del caravaning ofrece
              ambos conceptos en numerosos tipos de vehículos diseñados para ello.</p>
            </div>
            
          </div>
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="row mb-5 d-flex justify-content-center align-items-center">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4 text-center">Navegación</h3>
              </div>
              <div class="col-md-6 col-lg-6 text-center">
                <ul class="list-unstyled">
                  <li><a href="<?php echo get_option( 'Inicio' ) ?>">Inicio</a></li>
                  <li><a href="<?php echo get_page_link(get_page_by_title('Blog')->ID); ?>">Blog</a></li>
                  <li><a href="<?php echo get_page_link(get_page_by_title('Galería')->ID); ?>">Galería</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-6 text-center">
                <ul class="list-unstyled">
                  <li><a href="<?php echo get_page_link(get_page_by_title('Contacto')->ID); ?>">Contacta</a></li>
                  <li><a href="<?php echo get_page_link(get_page_by_title('Privado')->ID); ?>">Privado</a></li>
                  <li><a href="<?php echo get_page_link(get_page_by_title('Archivos')->ID); ?>">Archivos</a></li>
                </ul>
              </div>
            </div>

            

          </div>

          <div class="col-lg-4 mb-5 mb-lg-0">
           

            <div class="mb-5">
              <h3 class="footer-heading mb-4 text-center">Más información</h3>
              <p>Envíanos tu correo para recibir las últimas novedades en vehículos camperizados.</p>

              <form action="#" method="post">
                <div class="input-group mb-3">
                  <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Escribe tu Email" aria-label="Enter Email" aria-describedby="button-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-primary text-white" type="button" id="button-addon2">Enviar</button>
                  </div>
                </div>
              </form>

            </div>

          </div>
          
        </div>
        <div class="row pt-3 text-center">
          <div class="col-md-12">
            <div class="mb-5">
              <a href="https://es-es.facebook.com/SalonCaravaning/" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
              <a href="https://twitter.com/caravaningbcn?lang=es" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
              <a href="https://www.instagram.com/caravaningk2/" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
              <a href="https://es.linkedin.com/in/autocaravanasdelsol" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
            </div>

            <p>
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados a Nómadas 
            </p>
          </div>
          
        </div>
      </div>
    </footer>
  </div>
  <?php wp_footer(); ?>
  </body>
</html>