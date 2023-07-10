document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('agenda');


  var calendar = new FullCalendar.Calendar(calendarEl, {

      initialView: 'dayGridMonth',
      //cambiamos de idioma a aespañol
      locale: 'es',

      headerToolbar: {
          left: 'prev,next today',
          center: 'title',
          right: 'dayGridMonth,timeGridWeek,listWeek',
      },
      
      dateClick: function(info) {
          $("#evento").modal("show");
      }
  });
  calendar.render();
});


