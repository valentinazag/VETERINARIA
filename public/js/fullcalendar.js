document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth',
      locale: 'es',
      allDaySlot: false,
      editable: true,   // con el cursor
      selectable:true,  //puedo seleccionar el dia
      events: 'app/controllers/reservas/cargar_r.php',

       dateClick: function(info) {
        var a = info.dateStr;
        const fecha_cadena = a;
        var num_dia = new Date(fecha_cadena).getDay();
        var dias = ['LUNES', 'MARTES', 'MIÉRCOLES', 'JUEVES', 'VIERNES'];
        
        if((num_dia == "6") || (num_dia == "5")){
            alert("No hay atencion con reserva este día");
        }
        else{
            $('#modal_reserva').modal("show");
            $('#dia_semana').html(dias[num_dia] + " " + a );
        }

      },
    });


    calendar.render();
  });
