<?php 
include('app/config.php');
include('app/controllers/productos/listado_produ.php');
?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SISTEMA VETERINARIA</title>
    <!--CSS-->
    <link rel="stylesheet" href="styles.css">
    <!--JQUERY-->
    <script src="public/js/jquery-3.7.1.min.js"></script>
   <!-- BOOSTRAP INSTALADO-->
    <link href="public/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!--ICONOS BOOSTRAP-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  </head>
  <body>
  <!--NAV-->
    <nav class="navbar navbar-expand-lg bg-custom sticky-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="https://static.vecteezy.com/system/resources/thumbnails/006/470/429/small/pet-shop-logo-design-template-modern-animal-icon-label-for-store-veterinary-clinic-hospital-shelter-business-services-flat-illustration-background-with-dog-cat-and-horse-free-vector.jpg" 
          alt="Logo" width="60" height="35" class="d-inline-block align-text-top">
          Veterinaria Corazon
        </a>
         <!-- BOTÓN PARA MENÚ RESPONSIVO -->
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>

      <!-- MENÚ -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link btn btn-outline-info" aria-current="page" href="#"><i class="bi bi-house-heart-fill"></i>Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link btn btn-outline-info" href="#" >Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle btn btn-outline-info" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" aria-disabled="true">Disabled</a>
            </li>
          </ul>
          <div class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle btn btn-outline-info" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Ingresar
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="login/login.php">Iniciar Sesión</a></li>
                  <li><a class="dropdown-item" href="login/registro.php">Registrarme</a></li>
                </ul>
          </div>
        </div>
      </div>
    </nav>

  <!--CAROUSEL-->
  <section>
    <div id="carouselExampleCaptions" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://media.istockphoto.com/id/2102632990/photo/happy-man-vet-doctor-in-blue-uniform-cuddling-pembroke-welsh-corgi-dog-playing-with-little.jpg?s=1024x1024&w=is&k=20&c=m1_EKhHsC1XB_ZI1Tcn-glzz6451lq1Ji2TBiTAClqQ=" 
          class="d-block w-100" alt="Veterinario abrazando perro">
          <div class="carousel-caption d-none d-md-block">
            <div class="colorpal">
            <h5>CARIÑO</h5>
            <p>Amor para nuestros pacientes.</p>
          </div>
        </div>
        </div>
        <div class="carousel-item">
          <img src="https://media.istockphoto.com/id/2160576548/photo/veterinarian-examining-grey-cat-on-veterinary-table-in-clinic.jpg?s=1024x1024&w=is&k=20&c=Y73m65iSlBsyNzW7pOgvmJwSAmjm4lX7EPBBmOwxtaQ=" 
          class="d-block w-100" alt="Gato gris en mesa veterinaria">
          <div class="carousel-caption d-none d-md-block">
            <div class="colorpal">
            <h5>CONFIANZA</h5>
            <p>Nuestros pacientes se sienten comodos al confiar en el personal.</p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://cdn.pixabay.com/photo/2023/12/06/19/00/dog-8434224_1280.jpg" class="d-block w-100" alt="Cachorro">
          <div class="carousel-caption d-none d-md-block">  
            <div class="colorpal">
            <h5>DESDE PEQUEÑOS</h5>
            <p>Atendemos a pacientes en todas las etapas de la vida</p>
          </div>
        </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>
  <section class="container my-5">
  <div class="card p-4 text-center shadow" style="margin-bottom: -10%">
    <h3 class="mb-4">¿Como podemos ayudarte?</h3>
    <div class="d-flex flex-column flex-md-row justify-content-center gap-3">
      <a href="#" class="btn btn-info btn-lg ">Reservar Cita</a>
      <a href="#" class="btn btn-info btn-lg ">Productos</a>
    </div>
  </div>
</section>
 <!--INFORMACION-->
  <section>
    <div class="container"> <!--container-fluid: abarca toda la pantalla de izq a der-->
      <div class="row">
        <div class="col-md-6 col-sm-12 acerca-texto">
          <center>
            <div class="imagenclinica">
              <img src="https://media.istockphoto.com/id/2176460176/photo/caucasian-woman-and-her-dog-exiting-veterinary-clinic.jpg?s=1024x1024&w=is&k=20&c=AMsT0NIPI5nU47lKauexgRX3qkPeClScAmYLlZYBRdU=" alt="Mujer saliendo de edificio veterinario con un perro" style="margin-top: 25%; width: 1200px;">
            </div>
          </center>
        </div>
        <div class="col-md-6 col-sm-12 acerca-texto">
          <br><br><br><br><br>
          <center><h2>ACERCA DE <span style="color: rgb(40, 171, 223);"> NUESTRA CLÍNICA </span> </h2>
          
          <p style="text-align: justify; width: 80%;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eu massa vitae mauris mattis dapibus. In velit tellus, dapibus non varius vitae, sollicitudin a sem. Nunc vestibulum, leo vel commodo vestibulum, ex est tincidunt elit, nec interdum ante quam quis lorem. Nam et vehicula mauris, vel tempus odio. Pellentesque ut faucibus augue, eu rhoncus est. Aenean tristique sollicitudin eros et tempus. Integer dictum massa vel metus dignissim, quis dictum lectus fringilla. 
             Ultrices mollis orci. Aliquam erat volutpat. Aliquam feugiat vehicula consectetur. Praesent dapibus ut enim quis posuere. Pellentesque convallis maximus iaculis.</p>
         <!--    <a href="" class="btn btn-outline-info btn-lg" >Más Informacion</a></center>-->
            </div>
      </div>
    </div>
  </section>

    <!--SERVICIOS-->
    <section class="our-services">
    <div class="container">
      <div class="row">
        <div class="col-md-12 ">
        <br><br>
        <h2>NUESTROS <span style="color: rgb(40, 171, 223);">SERVICIOS</span></h2>
        <br>
       </div>
      </div>
        <div class="row">
          <div class="col-md-3 zoomP">
            <div class="card">
            <img src="https://img.freepik.com/foto-gratis/veterinario-cuidando-perro-mascota_23-2149198639.jpg?t=st=1743568358~exp=1743571958~hmac=bcb4df1953c5783dd4f0f002e6974417da3f206b6be448e531bf9421df797d7a&w=996" class="card-img-top" alt="Perro Corgi">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
          <br>
         </div>
         <div class="col-md-3 zoomP">
            <div class="card">
            <img src="https://img.freepik.com/foto-gratis/cerrar-doctor-control-gato_23-2149304262.jpg?t=st=1743568383~exp=1743571983~hmac=8e485d80ec61abb6da8a009dd575fdafe38aef94b72686219c07ed1cc9b27426&w=1060" class="card-img-top" alt="Gatoo negro siendo atendido" style="height:172px;">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
          <br>
         </div>
         <div class="col-md-3 zoomP">
            <div class="card">
            <img src="https://img.freepik.com/foto-gratis/cerca-veterinario-cuidando-mascota_23-2149143866.jpg?t=st=1743568371~exp=1743571971~hmac=be413163d0d71c04c647e3ed2c2af8a99e6593eb2d3538d14cdcbc682f36f1d5&w=996" class="card-img-top" alt="Perro beagle siendo atendido">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
          <br>
         </div>
         <div class="col-md-3 zoomP">
          <img src="https://img.freepik.com/vector-gratis/dibujado-mano-adoptar-ilustracion-perro_23-2150586490.jpg?t=st=1743634803~exp=1743638403~hmac=885bfc36c0fe60903885d0a44d99ba78715cd3cb291835fc524bf5cca9978481&w=740" alt="" width="100%" height="92.5%">
         </div>
        </div>
    </div>
  </section>

<!--PRODUCTOS-->
  <section class="our-products">
    <div class="container">
      <div class="row">
        <div class="col-md-12 ">
        <br><br>
        <h2>NUESTROS <span style="color: rgb(40, 171, 223);">PRODUCTOS</span></h2>
        <br>
       </div>
      </div>
        <div class="row">
          <?php foreach ($productos as $producto){
          ?>
          <div class="col-md-3">
            <div class="card">
            <img src="<?php echo $URL."public/images/productos/".$producto['imagen']?>" height="220px" class="card-img-top" alt="<?php echo $producto['descripcion']?>">
            <div class="card-body">
              <h5><div class="card-title"><?php echo $producto['nombre_producto']?></div></h5>
              <hr>
              <p class="card-text"><?php echo $producto['descripcion']?></p>
              <a href="" class="btn btn-outline-info btn-lg" >Agregar al carrito</a>
            </div>
          </div>
          <br>
         </div>
          <?php
          }
          ?>
          <div class="row mt-4">
  <div class="col d-flex justify-content-center">
    <a href="tienda.php" class="btn btn-info btn-lg w-100 w-md-75">Ver más productos</a>
  </div>
</div>
    </div>
  </section>

  <!--GALERIA-->
<section class="fondo">
  <section class="gallery">
    <div class="container">
      <br><br>
      <h2><span style="color: rgb(0, 0, 0);">GALERÍA</span></h2>
      <br><br>
      <div class="row">
        <div class="col-md-4 zoomP">
          <center>
          <img src="https://img.freepik.com/foto-gratis/veterinario-cuidando-mascota_23-2149198599.jpg?ga=GA1.1.374979230.1730055924&semt=ais_hybrid&w=740" alt="" width="100%" height="300px">
        </center>
        <br><br>  
      </div>
        
        <div class="col-md-8 zoomP">
          <center>
            <img src="https://img.freepik.com/vector-gratis/banner-horizontal-isometrico-clinica-veterinaria-dos-veterinarios-examinando-perro-3d_1284-59852.jpg?ga=GA1.1.374979230.1730055924&semt=ais_hybrid&w=740" alt="" width="100%" height="300px">
          </center>
          <br><br> 
        </div>
      </div>

      <div class="row">
        <div class="col-md-4 zoomP">
          <center>
            <img src="https://img.freepik.com/foto-gratis/cerca-veterinario-cuidando-mascota_23-2149143906.jpg?ga=GA1.1.374979230.1730055924&semt=ais_hybrid&w=740" alt="" width="100%" height="300px">
          </center>
          <br><br> 
        </div>
        <div class="col-md-4 zoomP">
          <center>
            <img src="https://img.freepik.com/foto-gratis/medicos-tiro-medio-portapapeles-jaula-gatos_23-2148302234.jpg?ga=GA1.1.374979230.1730055924&semt=ais_hybrid&w=740" alt="" width="100%" height="300px">
          </center>
          <br><br> 
        </div>
        
        <div class="col-md-4 zoomP">
          <center>
            <img src="https://img.freepik.com/foto-gratis/cerrar-doctor-revisando-oreja-perro_23-2149304327.jpg?ga=GA1.1.374979230.1730055924&semt=ais_hybrid&w=740" alt="" width="100%" height="300px">
          </center>
          <br><br> 
        </div>
      </div>

     <br>

    </div>
  </section>

  <section class="map">
    <div class="container">
    <h2 style="text-align: center; color: rgb(0, 0, 0);"> ENCUÉNTRANOS AQUÍ</h2><br>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1379.616338500593!2d-58.69852644037732!3d-34.672399122797714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcbf871dbe5e01%3A0x8e41bc2a7eb3908e!2sFarmacia%20Guercio!5e0!3m2!1ses!2sar!4v1743639584072!5m2!1ses!2sar" 
    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </section>


<section class="contact">
  <div class="container">
   <!----> <br><br> <h2 style="text-align: center; color: #000000;">CONTACTANOS</h2>
    <div class="row"> 
      
        <div class="col-md-4"></div>
      <div class="col-md-4">
          <div class="card" style="background-color: #70bdd3;">
            
            <div class="card-body">
              <form action="" method="post">
                <div class="form-group">
                  <label for="">Nombre</label>
                  <input type="text" required class="form-control" placeholder="Escribe tu nombre..." style="border-color: #6fbed4;">
                </div>
                <br>
                <div class="form-group">
                  <label for="">Email</label>
                  <input type="email"  required class="form-control" placeholder="Ingrese correo electrónico..." style="border-color: #6fbed4;">
                </div>
                <br>
                <div class="form-group">
                  <label for="">Mensaje</label>
                  <textarea name="Mensaje" required id="" class="form-control" cols="30" rows="5" style="border-color: #6fbed4;" placeholder="..."></textarea>
                </div>
                <hr>
                <div class="d-grid gap-2">
                  <button class="btn btn-primary" type="submit" style="background-color: rgb(255, 255, 255); color: #000; border-color: #6fbed4;">Enviar</button>
                </div>
              </form>
            </div>
          </div> 
          <div class="col-md-4"></div>  
      </div> 
    
    </div>
    <br><br>
  </div>
</section>
</section> <!--CIERRO EL DEGRADE-->

<!--FOOTER-->
  <footer class="container-fluid footer">
    <div class="container">
      <br>
      <div class="row">
        <div class="col-md-4">
          <center>
            <br><br><br>
          <img src="https://static.vecteezy.com/system/resources/thumbnails/006/470/429/small/pet-shop-logo-design-template-modern-animal-icon-label-for-store-veterinary-clinic-hospital-shelter-business-services-flat-illustration-background-with-dog-cat-and-horse-free-vector.jpg" alt="" width="40%">
          </center>  
        </div>
        <div class="col-md-4">
          <h3 style="text-align: center;"><b>SISTEMA VETERINARIO</b></h3><br>
          <p>
            <a href="" class="btn" style="color: rgb(0, 0, 0);">NOSOTROS </a>
            <br>
            <a href="" class="btn" style="color: rgb(0, 0, 0);">GALERIA</a>
            <br>
            <a href="" class="btn" style="color: rgb(0, 0, 0);">TIENDA ONLINE</a>
            <br>
            <a href="" class="btn" style="color: rgb(0, 0, 0);">UBICACIÓN </a>
          </p>
          <br>
          
        </div>
        <div class="col-md-4">
          <br>
          <br>
          <br>
          <b><i class="bi bi-telephone"></i> CONTACTO</b> 
          <br>
          <br>
          <b><i class="bi bi-whatsapp"></i> WHATSAPP:</b> +54 11 11111-1111
          <br>
          <br>
          <b><i class="bi bi-envelope-at"></i> EMAIL:</b> veterinariacorazon@gmail.com
        </div>
      </div>
      
    </div>

    <section>
      <p style="text-align: center;">
        <b><i class="bi bi-c-circle"></i> Todos los derechos reservados, Zagman Valentina 2025 <i class="bi bi-c-circle"></i></b>
      </p>
      <br>
    </section>
  </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>