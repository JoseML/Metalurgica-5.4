    @extends('layouts.header')
    @section('content')

    <!-- /navbar -->
    <div class="subnavbar">
      <div class="subnavbar-inner">
        <div class="container">
          <ul class="mainnav">
            <li class="active"><a href="admin.html"><i class="icon-dashboard"></i><span>Inicio</span> </a> </li>
        </div>
        <!-- /container --> 
      </div>
      <!-- /subnavbar-inner --> 
    </div>
    <!-- /subnavbar -->
    <div class="main">
      <div class="main-inner">
        <div class="container">
          <div class="row">
            <div class="span6">
              
              <div class="widget">
                <div class="widget-header"> <i class="icon-bookmark"></i>
                  <h3>Acciones</h3>
                </div>
                <!-- /widget-header -->
                <div class="widget-content">
                  <div class="shortcuts"> 
                    <!--<a href="procesos.html" class="shortcut">
                      <i class="shortcut-icon icon-briefcase"></i><span class="shortcut-label">Gestionar Procesos de Negocio</span> 
                    </a>
                    <a href="workflows.html" class="shortcut">
                      <i class="shortcut-icon icon-cogs"></i><span class="shortcut-label">Gestionar Flujos de Trabajo</span> 
                    </a>
                    <a href="departamentos.html" class="shortcut">
                      <i class="shortcut-icon icon-sitemap"></i><span class="shortcut-label">Gestionar Unidades Funcionales</span> 
                    </a>
                    <a href="usuarios.html" class="shortcut">
                      <i class="shortcut-icon icon-group"></i><span class="shortcut-label">Administración de Usuarios</span> 
                    </a>-->
                    <a href="administracion.html" class="shortcut">
                      <i class="shortcut-icon icon-briefcase"></i><span class="shortcut-label">Administracion</span> 
                    </a>
                    <a href="expedientes.html" class="shortcut">
                      <i class="shortcut-icon icon-paste"></i><span class="shortcut-label">Gestionar Expedientes</span>
                    </a>
                    <a href="reportes.html" class="shortcut">
                      <i class="shortcut-icon icon-signal"></i> <span class="shortcut-label">Generación de Reportes</span> 
                    </a>
                    <!--<a href="buzon.html" class="shortcut">
                      <i class="shortcut-icon icon-inbox"></i><span class="shortcut-label">Administrar Buzón de Entrada</span> 
                    </a> --> 
                  </div>
                  <!-- /shortcuts --> 
                </div>
                <!-- /widget-content --> 
              </div>
              <!-- /widget -->
            </div>
            <!-- /span6 -->
            <div class="span6">   
              
              <div class="widget">
                <div class="widget-header"> <i class="icon-signal"></i>
                  <h3>Reporte de productividad</h3>
                </div>
                <!-- /widget-header -->
                <div class="widget-content">
                  <canvas id="area-chart" class="chart-holder" height="250" width="538"> </canvas>
                  <!-- /area-chart --> 
                </div>
                <!-- /widget-content --> 
              </div>
            </div>
            <!-- /span6 --> 
          </div>
          <!-- /row --> 
        </div>
        <!-- /container --> 
      </div>
      <!-- /main-inner --> 
    </div>
    <!-- /main -->
    <div class="extra">
      <div class="extra-inner">
        <div class="container">
          <div class="row">
            <!-- /span3 -->
              <div class="span3">
                <h4>Soporte</h4>
                <ul>
                    <li><a href="javascript:;">Preguntas Frecuentes</a></li>
                    <li><a href="javascript:;">Contacto</a></li>
                </ul>
            </div>
            <!-- /span3 -->
            <div class="span3">
                <h4>Aspectos Legales</h4>
                <ul>
                    <li><a href="javascript:;">Licencia</a></li>
                    <li><a href="javascript:;">Terminos de Uso</a></li>
                    <li><a href="javascript:;">Política de Privacidad</a></li>
                </ul>
            </div>
          </div>
          <!-- /row --> 
        </div>
        <!-- /container --> 
      </div>
      <!-- /extra-inner --> 
    </div>
    <!-- /extra -->
    <div class="footer">
      <div class="footer-inner">
        <div class="container">
          <div class="row">
            <div class="span12"> &copy; 2017 <a href="#">C A B A L, C.A.</a></div>
            <!-- /span12 --> 
          </div>
          <!-- /row --> 
        </div>
        <!-- /container --> 
      </div>
      <!-- /footer-inner --> 
    </div>
    <!-- /footer --> 
    <!-- Le javascript
    ================================================== --> 
    <!-- Placed at the end of the document so the pages load faster --> 
    @endsection
    
    @section('js')
    <script>     

            var lineChartData = {
                labels: ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"],
                datasets: [
    				{
    				    fillColor: "rgba(220,220,220,0.5)",
    				    strokeColor: "rgba(220,220,220,1)",
    				    pointColor: "rgba(220,220,220,1)",
    				    pointStrokeColor: "#fff",
    				    data: [65, 59, 90, 81, 56, 55, 40, 35, 56, 70, 90, 40]
    				},
    				{
    				    fillColor: "rgba(151,187,205,0.5)",
    				    strokeColor: "rgba(151,187,205,1)",
    				    pointColor: "rgba(151,187,205,1)",
    				    pointStrokeColor: "#fff",
    				    data: [28, 48, 40, 19, 96, 27, 100, 50, 70, 80, 70, 35]
    				}
    			]

            }

            var myLine = new Chart(document.getElementById("area-chart").getContext("2d")).Line(lineChartData);


            var barChartData = {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [
    				{
    				    fillColor: "rgba(220,220,220,0.5)",
    				    strokeColor: "rgba(220,220,220,1)",
    				    data: [65, 59, 90, 81, 56, 55, 40]
    				},
    				{
    				    fillColor: "rgba(151,187,205,0.5)",
    				    strokeColor: "rgba(151,187,205,1)",
    				    data: [28, 48, 40, 19, 96, 27, 100]
    				}
    			]

            }    

            $(document).ready(function() {
            var date = new Date();
            var d = date.getDate();
            var m = date.getMonth();
            var y = date.getFullYear();
            var calendar = $('#calendar').fullCalendar({
              header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
              },
              selectable: true,
              selectHelper: true,
              select: function(start, end, allDay) {
                var title = prompt('Event Title:');
                if (title) {
                  calendar.fullCalendar('renderEvent',
                    {
                      title: title,
                      start: start,
                      end: end,
                      allDay: allDay
                    },
                    true // make the event "stick"
                  );
                }
                calendar.fullCalendar('unselect');
              },
              editable: true,
              events: [
                {
                  title: 'All Day Event',
                  start: new Date(y, m, 1)
                },
                {
                  title: 'Long Event',
                  start: new Date(y, m, d+5),
                  end: new Date(y, m, d+7)
                },
                {
                  id: 999,
                  title: 'Repeating Event',
                  start: new Date(y, m, d-3, 16, 0),
                  allDay: false
                },
                {
                  id: 999,
                  title: 'Repeating Event',
                  start: new Date(y, m, d+4, 16, 0),
                  allDay: false
                },
                {
                  title: 'Meeting',
                  start: new Date(y, m, d, 10, 30),
                  allDay: false
                },
                {
                  title: 'Lunch',
                  start: new Date(y, m, d, 12, 0),
                  end: new Date(y, m, d, 14, 0),
                  allDay: false
                },
                {
                  title: 'Birthday Party',
                  start: new Date(y, m, d+1, 19, 0),
                  end: new Date(y, m, d+1, 22, 30),
                  allDay: false
                },
                {
                  title: 'EGrappler.com',
                  start: new Date(y, m, 28),
                  end: new Date(y, m, 29),
                  url: 'http://EGrappler.com/'
                }
              ]
            });
          });
        </script><!-- /Calendar -->
        @endsection
   