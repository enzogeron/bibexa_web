@extends('home.layout')

@push('styles')
	{!! Html::style('css/pmb_login.css') !!}
@endpush

@section('content')

@include('pmb.partials.navigation')

<div class="container">
	{!! Form::open(['route' => 'pdf', 'method' => 'POST', 'target' => '_blank']) !!}
	<div class="col-lg-7">	
		<div class="panel panel-login">
			<div class="panel-heading">
				<strong>Datos personales</strong>
			</div>
			<div class="panel-body">
				<p class="text-info">Verifica que la información que ingresaste es correcta, con estos datos realizaremos tu carnet de socio de BIBEXA. Es muy importante que subas una foto personal al sistema.</p>
				<div class="form-group label-floating {{ $errors->has('name') ? 'has-error' : ''}}">
					{!! Form::label('name', 'Nombres', ['class' => 'control-label']) !!}
					{!! Form::text('name', $partner->empr_prenom, ['class' => 'form-control', 'disabled']) !!}
					{!! $errors->first('name', '<span class="help-block">:message</span>') !!}
					<p class="help-block">Escriba sus nombres</p>
				</div>

				<div class="form-group label-floating {{ $errors->has('lastname') ? 'has-error' : ''}}">
					{!! Form::label('lastname', 'Apellidos', ['class' => 'control-label']) !!}
					{!! Form::text('lastname', $partner->empr_nom, ['class' => 'form-control', 'disabled']) !!}
					{!! $errors->first('lastname', '<span class="help-block">:message</span>') !!}
					<p class="help-block">Escriba sus apellidos</p>
				</div>

				<div class="form-group label-floating {{ $errors->has('email') ? 'has-error' : ''}}">
					{!! Form::label('email', 'Correo electronico', ['class' => 'control-label']) !!}
					{!! Form::email('email', $partner->empr_mail, ['class' => 'form-control', 'disabled']) !!}
					{!! $errors->first('email', '<span class="help-block">:message</span>') !!}
					<p class="help-block">Escriba su dirección de correo electronico</p>
				</div>

				<div class="form-group label-floating {{ $errors->has('year') ? 'has-error' : ''}}">
					{!! Form::label('year', 'Año de nacimiento', ['class' => 'control-label']) !!}
					{!! Form::text('year', $partner->empr_year, ['class' => 'form-control', 'disabled']) !!}
					{!! $errors->first('year', '<span class="help-block">:message</span>') !!}
					<p class="help-block">Escriba su año de nacimiento</p>
				</div>

				<div class="form-group label-floating {{ $errors->has('domicile') ? 'has-error' : ''}}">
					{!! Form::label('domicile', 'Domicilio', ['class' => 'control-label']) !!}
					{!! Form::text('domicile', $partner->empr_adr1, ['class' => 'form-control', 'disabled']) !!}
					{!! $errors->first('domicile', '<span class="help-block">:message</span>') !!}
					<p class="help-block">Escriba la dirección de su domicilio actual</p>
				</div>

				<div class="form-group label-floating {{ $errors->has('district') ? 'has-error' : ''}}">
					{!! Form::label('district', 'Barrio', ['class' => 'control-label']) !!}
					{!! Form::text('district', $partner->empr_adr2, ['class' => 'form-control', 'disabled']) !!}
					{!! $errors->first('district', '<span class="help-block">:message</span>') !!}
					<p class="help-block">Escriba el nombre del barrio donde vive</p>
				</div>

				<div class="form-group label-floating {{ $errors->has('city') ? 'has-error' : ''}}">
					{!! Form::label('city', 'Ciudad', ['class' => 'control-label']) !!}
					{!! Form::text('city', $partner->empr_ville, ['class' => 'form-control', 'disabled']) !!}
					{!! $errors->first('city', '<span class="help-block">:message</span>') !!}
					<p class="help-block">Escriba el nombre de su ciudad de procedencia</p>
				</div>

				<div class="form-group label-floating {{ $errors->has('province') ? 'has-error' : ''}}">
					{!! Form::label('province', 'Provincia', ['class' => 'control-label']) !!}
					{!! Form::text('province', $partner->empr_pays, ['class' => 'form-control', 'disabled']) !!}
					{!! $errors->first('province', '<span class="help-block">:message</span>') !!}
					<p class="help-block">Escriba el nombre de su provincia de procedencia</p>
				</div>

				<div class="form-group label-floating {{ $errors->has('phone') ? 'has-error' : ''}}">
					{!! Form::label('phone', 'Celular', ['class' => 'control-label']) !!}
					{!! Form::text('phone', $partner->empr_tel1, ['class' => 'form-control', 'disabled']) !!}
					{!! $errors->first('phone', '<span class="help-block">:message</span>') !!}
					<p class="help-block">Escriba su numero de celular</p>
				</div>

				<div class="form-group label-floating {{ $errors->has('telephone') ? 'has-error' : ''}}">
					{!! Form::label('telephone', 'Telefono', ['class' => 'control-label']) !!}
					{!! Form::text('telephone', $partner->empr_tel2, ['class' => 'form-control', 'disabled']) !!}
					{!! $errors->first('telephone', '<span class="help-block">:message</span>') !!}
					<p class="help-block">Escriba su numero de telefono</p>
				</div>

			</div>
		</div>

	</div>


	<div class="col-lg-5">
		<div class="panel panel-login">
			<div class="panel-heading">
				<strong>Foto personal para carnet</strong>
			</div>
			<div class="panel-body">
				<img class="img-profile" src="{{ url('/bibexa_sistem/fotos-personales/' . $partner->empr_cb . '.jpg') }}" width="130" height="130" alt="Sin foto, debes subir una"/><br>
			</div>
		</div>

		<div class="panel panel-login">
			<div class="panel-heading">
				<strong>Datos academicos</strong>
			</div>
			<div class="panel-body">
				<div class="form-group">
					<label for="departments">Departamento</label>
					<select id="departments" name="departments" class="form-control" required="true">
						<option value="" selected disabled>Selecciona una opcion</option>
						<option value="2">Química</option>
						<option value="3">Informática</option>
						<option value="4">Física</option>
						<option value="7">Matemática</option>
						<option value="9">Externo</option>
					</select>
				</div>

				<div class="form-group">
					<label for="careers">Carrera</label>
					<select id="careers" name="careers" class="form-control" required="true">
						<option value="" selected disabled>Selecciona una carrera</option>
						<option value="1">Lic. en Matemática</option>
						<option value="2">Profesorado en Matemática</option>
						<option value="3">Licenciatura en Análisis de Sistemas</option>
						<option value="4">Licenciatura en Química</option>
						<option value="5">Bromatología</option>
						<option value="6">Lic. en Bromatología</option>
						<option value="7">Profesorado en Química</option>
						<option value="8">Analista Químico</option>
						<option value="9">Lic. en Física</option>
						<option value="10">Lic. en Energías Renovables</option>
						<option value="11">Profesorado en Física</option>
						<option value="12">Tecnicatura Electrónica Universitaria</option>
						<option value="13">Tec. Univ. en Estadística</option>
						<option value="14">Tec. Univ. en Programación</option>
						<option value="16">Tec. Univ. en Energia Solar</option>
						<option value="15">Carrera externa a la Facultad de Ciencias Exactas</option>
					</select>
				</div>

				<div class="form-group">
					<label for="year">Cursando año</label>
					<select id="year" name="year" class="form-control" required="true">
						<option value="" selected disabled>Selecciona una opcion</option>
						<option value="1">1er Año</option>
						<option value="2">2do Año</option>
						<option value="3">3er Año</option>
						<option value="4">4to Año</option>
						<option value="5">5to Año</option>
					</select>
				</div>
			</div>
		</div>

		<div class="form-group">
			{!! Form::submit('Imprimir Formulario', ['class' => 'btn btn-primary btn-block']) !!}
		</div>

	</div>
	{!! Form::close() !!}
</div>

@endsection
