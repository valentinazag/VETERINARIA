<?php 
include('app/config.php');
include('app/controllers/productos/listado_produ.php');
include('layout/i_parte1.php');
?>

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
      <div class="col-md-12 text-center">
        <br><br>
        <h2>NUESTROS <span style="color: rgb(40, 171, 223);">PRODUCTOS</span></h2>
        <br>
      </div>
    </div>
    <div class="row justify-content-center">
      <?php 
      $contador = 0;
      foreach ($productos as $producto) {
        if ($contador >= 4) break;
        $contador++;
      ?>
      <div class="col-md-3 mb-4">
        <div class="card h-100 shadow-sm">
          <img src="<?php echo $URL . "public/images/productos/" . $producto['imagen'] ?>" class="card-img-top" alt="<?php echo $producto['descripcion'] ?>" style="height: 220px; object-fit: cover;">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title"><?php echo $producto['nombre_producto'] ?></h5>
            <hr>
            <p class="card-text" style="flex-grow: 1;"><?php echo $producto['descripcion'] ?></p>
            <div class="d-flex gap-2 mt-auto">
              <a href="#" class="btn btn-info w-100">Comprar</a>
              <button class="btn btn-outline-info" title="Agregar al carrito">
                <i class="bi bi-cart-plus"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>

    <!-- Botón de ver más -->
    <div class="row mt-4">
      <div class="col d-flex justify-content-center">
        <a href="tienda.php" class="btn btn-info btn-lg px-5">Ver más productos</a>
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

<?php
include('layout/i_parte2.php');
?>