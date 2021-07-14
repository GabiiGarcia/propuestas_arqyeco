<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Arquitectura y urbanización ecológica</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/mediaelementplayer.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/fl-bigmug-line.css">
    
  
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
  <div class="site-loader"></div>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->

    <div class="site-navbar mt-4">
        <div class="container py-1">
          <div class="row align-items-center">
            <div class="col-8 col-md-8 col-lg-4">
              <h1 class="mb-0"><a href="index.html" class="text-white h2 mb-0"><strong>Homeland<span class="text-danger">.</span></strong></a></h1>
            </div>
            <div class="col-4 col-md-4 col-lg-8">
              <nav class="site-navigation text-right text-md-right" role="navigation">

                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

                <ul class="site-menu js-clone-nav d-none d-lg-block">
                  <li>
                    <a href="index.html">Inicio</a>
                  </li>
                  <li ><a href="about.html">¿Quiénes somos?</a></li>
                  <li class="has-children">
                    <a href="#">Arquitectura y urbanización ecologica</a>
                    <ul class="dropdown arrow-top">
                      <li><a href="quees.html">¿Qué es?</a></li>
                      <li><a href="principios.html">Principios</a></li>
                      <li><a href="proyectos.html">Empresas</a></li>
                    </ul>
                  </li>
                  <li class="has-children">
                    <a href="#">Aplicación en el mundo</a>
                    <ul class="dropdown arrow-top">
                      <li><a href="blog1.html">África</a></li>
                      <li><a href="blog3.html">América</a></li>
                      <li><a href="blog4.html">Asia</a></li>
                      <li><a href="blog2.html">Europa</a></li>
                      <li><a href="blog5.html">Oceanía</a></li>
                    </ul>
                  </li>
                  <li class="active"><a href="propuestas.html">Propuestas</a></li>
                  <li><a href="ventajas.blade.php">Ventajas</a>
                  </li>
                  <li><a href="contacto.blade.php">Contacto</a></li>
                </ul>
              </nav>
            </div>
           

          </div>
        </div>
      </div>
    </div>

    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/hero_bg_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-10">
            <h1 class="mb-2">Contact Us</h1>
          </div>
        </div>
      </div>
    </div>
    

    <div class="site-section">
      <div class="container">
        <div class="row">
       
          <div class="col-md-12 col-lg-8 mb-5">
          
            
          
            <form method="POST" action="{{ route('comentarios.crear')}}" class="p-5 bg-white border"  @csrf>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">

                  <label class="font-weight-bold" for="fullname">Nombre</label>
                  <input type="text" id="name" class="form-control" >
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">apellidos</label>
                  <input type="text" id="apell" class="form-control" >
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Correo electrónico</label>
                  <input type="email" id="email" class="form-control" >
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="message">Mensaje</label> 
                  <textarea name="message" id="message" cols="30" rows="5" class="form-control" ></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Envíar" class="btn btn-primary  py-2 px-4 rounded-0">
                </div>
              </div>

  
            </form>
          </div>

          <div class="col-lg-4">
            <div class="p-4 mb-3 bg-white">
              <h3 class="h6 text-black mb-3 text-uppercase">Información de contacto</h3>
              <p class="mb-0 font-weight-bold">Dirección</p>
              <p class="mb-4">Maravatio, Michoacan</p>

              <p class="mb-0 font-weight-bold">Teléfono</p>
              <p class="mb-4"><a href="#">+52 447 121 3425</a></p>

              <p class="mb-0 font-weight-bold">Correo electrónico</p>
              <p class="mb-0"><a href="#">arqyeco@gmail.com</a></p>

            </div>
            
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
      <center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7503.467121265492!2d-100.44638237820452!3d19.893469485140166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d2d09d28f95e93%3A0x91a0d188ce6d3241!2sCentro%2C%20Maravatio%2C%20Mich.!5e0!3m2!1ses-419!2smx!4v1626187929416!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></center>
    </div>
  </div>
    

  

<footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="mb-5">
              <h3 class="footer-heading mb-4">ArqyEco</h3>
              <div class="col-md-12">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Arquitectura y urbanización ecológica <a target="_blank" href="http://www.templatemonster.com/">arqyeco.com</a>  |  <a href="https://colorlib.com" target="_blank">propuestasarqyeco@gmail.com <i class="icon-heart "  aria-hidden="true"></i></a>
             Maravatio, Michoacan <img src="images/maps-and-flags.png" width="20dp">
             <br>By <a target="_blank" href="http://www.templatemonster.com/">Gabriela Albino - Jacqueline Estrella</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </br>
          </div>
          
            </div>


          </div>
          
        </div>
        
      </div>
    </footer>

  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/mediaelement-and-player.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/circleaudioplayer.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>