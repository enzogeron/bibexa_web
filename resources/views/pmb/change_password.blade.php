@extends('home.layout')

@push('styles')
	{!! Html::style('css/pmb_login.css') !!}
@endpush

@section('content')

@include('pmb.partials.navigation')

<div class="container">
	<div class="col-lg-8 col-lg-offset-2">	
		{!! Form::open(['route' => 'editar_password', 'method' => 'PATCH']) !!}
		<div class="panel panel-login">
			<div class="panel-heading">
				<strong>Datos de acceso al PMB</strong>
			</div>
			<div class="panel-body">

				<div class="form-group label-floating">
					{!! Form::label('current_password', 'Contraseña actual', ['class' => 'control-label']) !!}
					{!! Form::password('current_password', ['class' => 'form-control', 'required']) !!}
					<p class="help-block">Escriba su contraseña actual</p>
				</div>

				<div class="form-group label-floating">
					{!! Form::label('new_password', 'Contraseña nueva', ['class' => 'control-label']) !!}
					{!! Form::password('new_password', ['class' => 'form-control', 'required']) !!}
					<p class="help-block">Escriba una nueva contraseña</p>
				</div>

				<div class="form-group label-floating">
					{!! Form::label('new_password_confirmation', 'Repetir contraseña nueva', ['class' => 'control-label']) !!}
					{!! Form::password('new_password_confirmation', ['class' => 'form-control', 'required']) !!}
					<p class="help-block">Vuelva a escribir la contraseña</p>
				</div>
			</div>
			<div class="form-group">
				{!! Form::submit('Cambiar contraseña', ['class' => 'btn btn-primary btn-block']) !!}
			</div>
		</div>
		{!! Form::close() !!}
	</div>
</div>

@endsection
