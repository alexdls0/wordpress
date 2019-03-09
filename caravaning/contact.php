<?php
/*
	Template Name: Contact
*/
?>
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
    
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
            <div class="col-md-7">

            <form action="" method="post" id="formularioContacta" class="p-5 bg-white mt-5 mb-0">

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Nombre</label>
                  <input type="text" id="fname" class="form-control" required>
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname">Apellidos</label>
                  <input type="text" id="lname" class="form-control" required>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email" id="emailcontacta" class="form-control" required>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="subject" required>Asunto</label> 
                  <input type="subject" id="subject" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message" required>Mensaje</label> 
                  <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Escriba sus preguntas u observaciones aquí..."></textarea>
                </div>
              </div>
              
              <div class="mb-5">
                <input type="checkbox" required name="terms"> He leído y acepto la <a href="https://www.ieszaidinvergeles.org/contacto.php">política de privacidad</a>  
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Enviar" name="enviar" required class="btn btn-primary py-2 px-4 text-white">
                </div>
              </div>
              
            </form>
            
            <?php
              if (isset($_POST['enviar'])){
                /*$nombre = $_POST["fname"].' '.$_POST['lname'];
                $remitente = $_POST["email"];
                $destino= "periclesawesome@gmail.com";
                $asunto= $_POST["subject"];
                $mensaje= $_POST["message"];
                
                $encabezados = "From: $remitente" . "\r\n" . "Reply-To: $remitente" . "\r\n" . 'Content-type: text/plain; charset=iso-8859-1';
                
                mail($destino, $asunto, $mensaje, $encabezados) or die ("Su mensaje no pudo ser enviado");
                echo 'enviado';*/
              }
            ?>
            
          </div>
          <div class="col-md-5">
            
            <div class="p-4 mb-0 mt-5 bg-white">
              <img src="<?php echo get_template_directory_uri(); ?>/images/contacta-banner.jpg" alt="recurso no encontrado" class="img-fluid mb-4 rounded">
              <h3 class="h5 text-black mb-3">Más información</h3>
              <p>Sientase libre de preguntarnos cualquier duda. Abajo se le proporcionan datos para contactarnos ya sea a través de nuestro correo electrónico, teléfono o físicamente.</p>
            </div>
            
            <div class="p-4 bg-white mb-5">
              <p class="mb-0 font-weight-bold">Dirección</p>
              <p class="mb-4">Avenida San Martín de Valdeiglesias nº1, 28922 Alcorcón, Madrid</p>

              <p class="mb-0 font-weight-bold">Teléfono</p>
              <p class="mb-4"><a href="#">+91 904 40 01</a></p>

              <p class="mb-0 font-weight-bold">Direccion de correo</p>
              <p class="mb-0"><a href="#">nomadas@caravaning.com</a></p>

            </div>
            
          </div>
        </div>
      </div>
    </div>
    
<?php
	get_footer();
?>