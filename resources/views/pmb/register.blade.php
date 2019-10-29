@extends('home.layout')

@push('styles')
	{!! Html::style('css/pmb_login.css') !!}
	{!! NoCaptcha::renderJs() !!}
@endpush

@section('content')

	<div class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="#" class="active" id="login-form-link">Iniciar sesion</a>
							</div>
							<div class="col-xs-6">
								<a href="#" id="register-form-link">Registrarse</a>
							</div>
						</div>
						<hr>
					</div>

					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">

								{!! Form::open(['route' => 'dashboard', 'method' => 'POST', 'id' => 'login-form', 'role' => 'form', 'style' => 'display: block;']) !!}
									<div class="form-group label-floating">
										{!! Form::label('dni', 'DNI', ['class' => 'control-label']) !!}
										{!! Form::text('dni', null, ['class' => 'form-control']) !!}
										<p class="help-block">Escriba su numero de documento</p>
									</div>
									<div class="form-group label-floating">
										{!! Form::label('password', 'Contraseña', ['class' => 'control-label']) !!}
										{!! Form::password('password', ['class' => 'form-control']) !!}
										<p class="help-block">Escriba su contraseña</p>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login-submit" id="login-submit" tabindex="3" value="Ingresar" class="form-control">
											</div>
										</div>
									</div>

								{!! Form::close() !!}

								{!! Form::open(['route' => 'registro_socio', 'method' => 'POST', 'id' => 'register-form', 'role' => 'form', 'style' => 'display: none;']) !!}
									<div class="form-group label-floating">
										{!! Form::label('dni', 'DNI', ['class' => 'control-label']) !!}
										{!! Form::text('dni', null, ['class' => 'form-control', 'required']) !!}
										<p class="help-block">Escriba su numero de documento</p>
									</div>

									<div class="form-group label-floating">
										{!! Form::label('name', 'Nombre', ['class' => 'control-label']) !!}
										{!! Form::text('name', null, ['class' => 'form-control', 'required']) !!}
										<p class="help-block">Escriba su nombre</p>
									</div>

									<div class="form-group label-floating">
										{!! Form::label('lastname', 'Apellido', ['class' => 'control-label']) !!}
										{!! Form::text('lastname', null, ['class' => 'form-control', 'required']) !!}
										<p class="help-block">Escriba su apellido</p>
									</div>

									<div class="form-group label-floating">
										{!! Form::label('email', 'Correo electronico', ['class' => 'control-label']) !!}
										{!! Form::email('email', null, ['class' => 'form-control', 'required']) !!}
										<p class="help-block">Escriba su dirección de correo electronico</p>
									</div>

									<div class="form-group label-floating">
										{!! Form::label('confirm-email', 'Repetir correo electronico', ['class' => 'control-label']) !!}
										{!! Form::email('confirm-email', null, ['class' => 'form-control', 'required']) !!}
										<p class="help-block">Vuelva a escribir su dirección de correo electronico</p>
									</div>

									<div class="form-group label-floating">
										{!! Form::label('password', 'Contraseña', ['class' => 'control-label']) !!}
										{!! Form::password('password', ['class' => 'form-control']) !!}
										<p class="help-block">Escriba una nueva contraseña</p>
									</div>

									<div class="form-group label-floating">
										{!! Form::label('confirm-password', 'Repetir contraseña', ['class' => 'control-label']) !!}
										{!! Form::password('confirm-password', ['class' => 'form-control']) !!}
										<p class="help-block">Vuelva a escribir la contraseña</p>
									</div>

									<div class="form-group">
										{!! NoCaptcha::display() !!}
									</div>

									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												{!! Form::submit('Registrarse', ['id' => 'register-submit', 'name' => 'register-submit', 'class' => 'form-control']) !!}
											</div>
										</div>
									</div>

								{!! Form::close() !!}

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
   
@endsection

@push('scripts')

    <script>
  		$(function() {
	    	$('#login-form-link').click(function(e) {
				$("#login-form").delay(100).fadeIn(100);
		 		$("#register-form").fadeOut(100);
				$('#register-form-link').removeClass('active');
				$(this).addClass('active');
				e.preventDefault();
			});

			$('#register-form-link').click(function(e) {
				$("#register-form").delay(100).fadeIn(100);
		 		$("#login-form").fadeOut(100);
				$('#login-form-link').removeClass('active');
				$(this).addClass('active');
				e.preventDefault();
			});
		});
    </script>

@endpush