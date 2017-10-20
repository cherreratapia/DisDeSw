@extends('hyf/header1')

    @section('body')
	<div id="fondo" class="justify-content-center">
		<div id="navbar" class="justify-content-end">
			<ul class="nav justify-content-end">
				<li class="nav-item">
					<button type="button" class="btnSession nav-link" data-toggle="modal" data-target="#small"  onclick="mostrarForm()">Iniciar Sesión</button>
						<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="small">
						  <div class="modal-dialog modal-sm">
						    <div class="modal-content">
                                 {!! Form::open(['url' => '', 'class' => 'form-control'])!!}
						     		<br>
						     		<span class="text-center text-muted textoFeo">Inicio de sesión</span>
								  <div class="form-group row divText">
								    <div class="col-sm-10">
                                   {!! Form::text('email', null, ['class' => 'form-control', 'id' => 'staticEmail', 'placeholder' => 'Email']) !!}
								    </div>
								  </div>
								  <div class="form-group row">
								    <div class="col-sm-10">
                                        {!! Form::password('password', ['class' => 'form-control', 'id' => 'inputPassword', 'placeholder' => 'Contraseña'])!!}
								    </div>
								  </div>
								  <div class="form-group row">
								  	<div class="col-sm-6 col-form-label">
                                        {!! Form::submit('Enviar', ['class'=>'form-control btn btn-primary btnSubmit'], ['id' => 'btnEnviar']) !!}
								  	</div>
								  </div>
								  <br>
                                  {!! Form::close() !!}
						    </div>
						  </div>
						</div>
				</li>
			</ul>

		</div>
		
	
		



	</div>
	<div id="cajamayor" class="align-middle">
		<div id="contenedorbusqueda" class="card rounded align-middle">
            <span id="busquedaprincipal">Busqueda de bus</span>
            {!! Form::select('formatoBusqueda', ['nviaje' => 'N° de viaje', 'patente' => 'Patente'], 'nviaje', ['class' => 'custom-select', 'id' => 'select'])!!}
            {!! Form::text('datobusqueda', null, ['class' => 'justify-content-center form-control', 'id' => 'datobusqueda', 'placeholder' => 'Ingrese los datos de busqueda'])!!}
            {!! Form::submit('Enviar', ['class' => 'btn btn-success', 'id' => 'enviar'])!!}
		</div>
		
		<div id="map"></div>
	</div>
@endsection()