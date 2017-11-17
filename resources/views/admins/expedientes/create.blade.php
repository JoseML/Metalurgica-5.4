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
						<h3>Crear Expediente</h3>
					</div> <!-- /widget-header -->
					
          {!! Form::open(['route'=>'admin.expedientes.store','method'=>'POST', 'class' => '']) !!}
					<div class="widget-content">	
                    <div class="control-group">                     
              <label class="control-label" for="firstname">Fecha del documento</label>
              <div class="controls">
                <input type="text" class="span6" id="cod">
              </div> <!-- /controls -->       
            </div> <!-- /control-group -->		


              <div class="control-group">                     
             {!! Form::label('descripcion','Descripcion') !!}
              <div class="controls">
               {!! Form::text('descripcion',null,['class'=>'form-control','placeholder'=>''])!!}
               </div> <!-- /controls -->       
            </div> <!-- /control-group -->    
             <div class="control-group">
              {!! Form::label('usuario','Responsable') !!}                          
              {{-- <label class="control-label" for="radiobtns">Ente Emisor</label> --}}
                  <div class="controls">
                    <div class="btn-group">
                        <a class="btn btn-primary" href=""><i class="icon-sitemap"></i></a>
                           {!! Form::select('usuario', $usuario,null,['class' => 'form-control','placeholder'=>'Seleccionar','required']) !!}
                    </div>
                  </div>  <!-- /controls -->      
              </div> <!-- /control-group -->  
            <div class="control-group">
              {!! Form::label('ente2','Ente Emisor') !!}                          
              {{-- <label class="control-label" for="radiobtns">Ente Emisor</label> --}}
                  <div class="controls">
                    <div class="btn-group">
                        <a class="btn btn-primary" href=""><i class="icon-sitemap"></i></a>
                           {!! Form::select('ente2', $unidad,null,['class' => 'form-control','placeholder'=>'Seleccionar','required']) !!}
                    </div>
                  </div>  <!-- /controls -->      
              </div> <!-- /control-group -->	
              <div class="control-group">          
               {!! Form::label('ente1','Ente Receptor') !!}            
              {{-- <label class="control-label" for="radiobtns">Ente Receptor</label> --}}
                  <div class="controls">
                    <div class="btn-group">
                        <a class="btn btn-primary" href=""><i class="icon-sitemap"></i></a>
                        {!! Form::select('ente1', $unidad,null,['class' => 'form-control','placeholder'=>'Seleccionar','required']) !!}
                        
                    </div>
                  </div>  <!-- /controls -->      
              </div> <!-- /control-group -->
              <div class="control-group">                      
              {!! Form::label('flujos','Flujo de Trabajo asociado') !!}
             {{-- <label class="control-label" for="radiobtns"></label> --}}
                  <div class="controls">
                    <div class="btn-group">
                        <a class="btn btn-primary" href=""><i class="icon-cogs"></i></a>
                       {!! Form::select('flujos', $flujos,null,['class' => 'form-control','placeholder'=>'Seleccionar','required']) !!}
                        
                    </div>
                  </div>  <!-- /controls -->      
              </div> <!-- /control-group --> 
                  <div class="form-actions">
                {{-- <button type="submit" class="btn btn-primary">Crear</button> --}} 
                {!! Form::submit('crear',['class'=>'btn btn-primary','required']) !!}
              </div> <!-- /form-actions --> 
                 
              <br><br><br>			
				</div> <!-- /widget -->		
        {!! Form::close() !!}			
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

