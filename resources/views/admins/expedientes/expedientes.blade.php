@extends('layouts.header')
 @section('content')
    
<div class="main">
	
	<div class="main-inner">

	    <div class="container">
	
	      <div class="row">
	      	
	      	<div class="span12">
	      		
	      		<div class="widget">
						
					<div class="widget-header">
						<i class="icon-th-large"></i>
						<h3>Gestionar Expedientes</h3>
					</div> <!-- /widget-header -->
					
					<div class="widget-content">
						
						<div class="pricing-plans plans-4"> 
					    
					    <div class="plan-container">
					        <div class="plan green">
						        <div class="plan-header">
					                
						        	<div class="plan-title">
						        		Crear Expediente       		
					        		</div> <!-- /plan-title -->
					                
						            <div class="plan-price">
					                	<i class="icon-paste"></i>
					                	<br>
									</div> <!-- /plan-price -->
									
						        </div> <!-- /plan-header -->	          
						        
								<div class="plan-actions">				
									<a href="{{ route('admin.expedientes.create') }}" class="btn">Crear</a>				
								</div> <!-- /plan-actions -->
					
							</div> <!-- /plan -->
					    </div> <!-- /plan-container -->

					    <div class="plan-container">
					        <div class="plan green">
						        <div class="plan-header">
					                
						        	<div class="plan-title">
						        		Consultar Expedientes        		
					        		</div> <!-- /plan-title -->
					                
						            <div class="plan-price">
					                	<i class="icon-search"></i>
					                	<br>
									</div> <!-- /plan-price -->
									
						        </div> <!-- /plan-header -->	          
						        
								<div class="plan-actions">				
									<a href="consultarexpedientes.html" class="btn">Consultar</a>				
								</div> <!-- /plan-actions -->
					
							</div> <!-- /plan -->
					    </div> <!-- /plan-container -->

					    <div class="plan-container">
					        <div class="plan green">
						        <div class="plan-header">
					                
						        	<div class="plan-title">
						        		Actualizar Expedientes       		
					        		</div> <!-- /plan-title -->
					                
						            <div class="plan-price">
					                	<i class=" icon-refresh"></i>
					                	<br>
									</div> <!-- /plan-price -->
									
						        </div> <!-- /plan-header -->	       
								
								<div class="plan-actions">				
									<a href="actualizarexpediente.html" class="btn">Actualizar</a>				
								</div> <!-- /plan-actions -->
					
							</div> <!-- /plan -->
					    </div> <!-- /plan-container -->

					        <div class="plan-container">
					        <div class="plan green">
						        <div class="plan-header">
					                
						        	<div class="plan-title">
						        		Eliminar Expedientes		
					        		</div> <!-- /plan-title -->
					                
						            <div class="plan-price">
					                	<i class="icon-remove"></i>
					                	<br>
									</div> <!-- /plan-price -->
									
						        </div> <!-- /plan-header -->	      
								
								<div class="plan-actions">				
									<a href="eliminarexpedientes.html" class="btn">Eliminar</a>				
								</div> <!-- /plan-actions -->
					
							</div> <!-- /plan -->
					    </div> <!-- /plan-container -->
					    
					</div> <!-- /pricing-plans -->
						
					</div> <!-- /widget-content -->
						
				</div> <!-- /widget -->					
				
		    </div> <!-- /span12 -->     	
	      	
	      	
	      </div> <!-- /row -->
	
	    </div> <!-- /container -->
	    
	</div> <!-- /main-inner -->
    
</div> <!-- /main --> 
    
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
@endsection
    

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->


