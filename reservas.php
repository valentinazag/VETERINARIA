<?php 
include('app/config.php');
include('layout/i_parte1.php');
?>
<script src="public/js/fullcalendar.js"></script>

<style>
  .fc .fc-highlight {
    background-color: rgba(40, 171, 223, 0.7); /* Más fuerte y con opacidad */
  }
</style>
    <!--SERVICIOS-->
    <section class="our-services">
    <div class="container">
      <div class="row">
        <div class="col-md-12 ">
        <br><br>
        <h2 style=" text-align:center">RESERVAR <span style="color: rgb(40, 171, 223)">CITA</span></h2>
        <br>
       </div>
      </div>
        <div class="row">
        <div id='calendar'></div>
        </div>
    </div>
  </section>

<br>
<br>
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


<!-- Modal reserv-->
<div class="modal fade" id="modal_reserva" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Reserva tu cita para el <span id= "dia_semana"></span></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6">
            <center><b>Turno Mañana </b></center><br>
          <div class="d-grid gap-2">
              <button class="btn btn-primary" id="btn_h1" data-bs-dismiss="modal" type="button">08:00-09:00</button>
              <button class="btn btn-primary" id="btn_h2" data-bs-dismiss="modal" type="button">09:00-10:00</button>
              <button class="btn btn-primary" id="btn_h3" data-bs-dismiss="modal" type="button">10:00-11:00</button>
              <button class="btn btn-primary" id="btn_h4" data-bs-dismiss="modal" type="button">11:00-12:00</button>
            </div>
          </div>
          <div class="col-md-6">
            <center><b>Turno Tarde </b></center><br>
          <div class="d-grid gap-2">
              <button class="btn btn-primary" id="btn_h5" data-bs-dismiss="modal" type="button" >16:00-17:00</button>
              <button class="btn btn-primary" id="btn_h6" data-bs-dismiss="modal" type="button">17:00-18:00</button>
              <button class="btn btn-primary" id="btn_h7" data-bs-dismiss="modal" type="button">18:00-19:00</button>
              <button class="btn btn-primary" id="btn_h8" data-bs-dismiss="modal" type="button">19:00-20:00</button>
            </div></div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<script src="public/js/formu_reservas.js"></script>

<!-- Modal formulari-->
<div class="modal fade" id="modal_formulario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Reserva tu cita para el <span id= "dia_semana"></span></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="row">
        <form action="">
          <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-6"></div>
          </div>
        </form>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



