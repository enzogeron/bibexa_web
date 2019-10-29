@extends('home.layout')

@push('styles')
	{!! Html::style('css/pmb_login.css') !!}
@endpush

@section('content')

@include('pmb.partials.navigation')

<div class="container">
	<div class="col-lg-7">	
		{!! Form::open(['route' => 'actualizar_socio', 'method' => 'PATCH']) !!}
		<div class="panel panel-login">
			<div class="panel-heading">
				<strong>Datos personales</strong>
			</div>
			<div class="panel-body">
				<div class="form-group label-floating {{ $errors->has('name') ? 'has-error' : ''}}">
					{!! Form::label('name', 'Nombres', ['class' => 'control-label']) !!}
					{!! Form::text('name', $partner->empr_prenom, ['class' => 'form-control', 'required']) !!}
					{!! $errors->first('name', '<span class="help-block">:message</span>') !!}
					<p class="help-block">Escriba sus nombres</p>
				</div>

				<div class="form-group label-floating {{ $errors->has('lastname') ? 'has-error' : ''}}">
					{!! Form::label('lastname', 'Apellidos', ['class' => 'control-label']) !!}
					{!! Form::text('lastname', $partner->empr_nom, ['class' => 'form-control', 'required']) !!}
					{!! $errors->first('lastname', '<span class="help-block">:message</span>') !!}
					<p class="help-block">Escriba sus apellidos</p>
				</div>

				<div class="form-group label-floating {{ $errors->has('email') ? 'has-error' : ''}}">
					{!! Form::label('email', 'Correo electronico', ['class' => 'control-label']) !!}
					{!! Form::email('email', $partner->empr_mail, ['class' => 'form-control', 'required']) !!}
					{!! $errors->first('email', '<span class="help-block">:message</span>') !!}
					<p class="help-block">Escriba su dirección de correo electronico</p>
				</div>

				<div class="form-group label-floating {{ $errors->has('year') ? 'has-error' : ''}}">
					{!! Form::label('year', 'Año de nacimiento', ['class' => 'control-label']) !!}
					{!! Form::text('year', $partner->empr_year, ['class' => 'form-control', 'required']) !!}
					{!! $errors->first('year', '<span class="help-block">:message</span>') !!}
					<p class="help-block">Escriba su año de nacimiento</p>
				</div>

				<div class="form-group label-floating {{ $errors->has('domicile') ? 'has-error' : ''}}">
					{!! Form::label('domicile', 'Domicilio', ['class' => 'control-label']) !!}
					{!! Form::text('domicile', $partner->empr_adr1, ['class' => 'form-control', 'required']) !!}
					{!! $errors->first('domicile', '<span class="help-block">:message</span>') !!}
					<p class="help-block">Escriba la dirección de su domicilio actual</p>
				</div>

				<div class="form-group label-floating {{ $errors->has('district') ? 'has-error' : ''}}">
					{!! Form::label('district', 'Barrio', ['class' => 'control-label']) !!}
					{!! Form::text('district', $partner->empr_adr2, ['class' => 'form-control', 'required']) !!}
					{!! $errors->first('district', '<span class="help-block">:message</span>') !!}
					<p class="help-block">Escriba el nombre del barrio donde vive</p>
				</div>

				<div class="form-group label-floating {{ $errors->has('city') ? 'has-error' : ''}}">
					{!! Form::label('city', 'Ciudad', ['class' => 'control-label']) !!}
					{!! Form::text('city', $partner->empr_ville, ['class' => 'form-control', 'required']) !!}
					{!! $errors->first('city', '<span class="help-block">:message</span>') !!}
					<p class="help-block">Escriba el nombre de su ciudad de procedencia</p>
				</div>

				<div class="form-group label-floating {{ $errors->has('province') ? 'has-error' : ''}}">
					{!! Form::label('province', 'Provincia', ['class' => 'control-label']) !!}
					{!! Form::text('province', $partner->empr_pays, ['class' => 'form-control', 'required']) !!}
					{!! $errors->first('province', '<span class="help-block">:message</span>') !!}
					<p class="help-block">Escriba el nombre de su provincia de procedencia</p>
				</div>

				<div class="form-group label-floating {{ $errors->has('phone') ? 'has-error' : ''}}">
					{!! Form::label('phone', 'Celular', ['class' => 'control-label']) !!}
					{!! Form::text('phone', $partner->empr_tel1, ['class' => 'form-control', 'required']) !!}
					{!! $errors->first('phone', '<span class="help-block">:message</span>') !!}
					<p class="help-block">Escriba su numero de celular</p>
				</div>

				<div class="form-group label-floating {{ $errors->has('telephone') ? 'has-error' : ''}}">
					{!! Form::label('telephone', 'Telefono', ['class' => 'control-label']) !!}
					{!! Form::text('telephone', $partner->empr_tel2, ['class' => 'form-control', 'required']) !!}
					{!! $errors->first('telephone', '<span class="help-block">:message</span>') !!}
					<p class="help-block">Escriba su numero de telefono</p>
				</div>

			</div>

			<div class="form-group">
				{!! Form::submit('Guardar datos', ['class' => 'btn btn-primary btn-block']) !!}
			</div>

		</div>

		{!! Form::close() !!}

	</div>


	<div class="col-lg-5">
		{!! Form::open(['route' => 'subir_foto', 'files' => true, 'method' => 'PATCH']) !!}
		<div class="panel panel-login">
			<div class="panel-heading">
				<strong>Foto personal para carnet</strong>
			</div>
			<div class="panel-body">
				<div class="form-group">
					<img class="img-profile" src="{{ url('/bibexa_sistem/fotos-personales/' . $partner->empr_cb . '.jpg') }}" width="130" height="130" alt="Sin foto, debes subir una" /><br>
					{!! Form::hidden('dni', $partner->empr_cb) !!}
					{!! Form::label('upload_photo', 'Subir foto', ['class' => 'control-label']) !!}
					{!! Form::file('upload_photo', ['id' => 'upload_photo', 'required']) !!}
					<input readonly="" class="form-control" placeholder="Click aqui para subir/actualizar la foto" type="text">
				</div>
			</div>
			<div class="form-group">
				{!! Form::submit('Subir foto', ['class' => 'btn btn-primary btn-block']) !!}
			</div>
		</div>
		{!! Form::close() !!}
	</div>
	
	


</div>

@endsection
