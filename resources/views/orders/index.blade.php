@extends('home.layout')

@push('styles')
	{!! NoCaptcha::renderJs() !!}
@endpush

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="panel panel-primary">
					@if(session()->has('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                @endif
					<div class="panel-heading">
						<h3 class="panel-title title-card">Pedidos de libros</h3>
					</div>
					<div class="panel-body">
						{!! Form::open(['route' => 'pedidos.store', 'method' => 'POST']) !!}

							<div class="form-group label-floating">
								{!! Form::label('title', 'Títuto del libro', ['class' => 'control-label']) !!}
								{!! Form::text('title', null, ['class' => 'form-control', 'required']) !!}
								<p class="help-block">Escriba el nombre del libro</p>
							</div>

							<div class="form-group label-floating">
								{!! Form::label('authors', 'Autor/es', ['class' => 'control-label']) !!}
								{!! Form::text('authors', null, ['class' => 'form-control']) !!}
								<p class="help-block">Escriba el nombre de los autores del libro</p>
							</div>

							<div class="form-group label-floating">
								{!! Form::label('editorial', 'Editorial del libro', ['class' => 'control-label']) !!}
								{!! Form::text('editorial', null, ['class' => 'form-control']) !!}
								<p class="help-block">Escriba el nombre de la editorial del libro</p>
							</div>

							<div class="form-group label-floating">
								{!! Form::label('edition', 'Año de edición', ['class' => 'control-label']) !!}
								{!! Form::text('edition', null, ['class' => 'form-control']) !!}
								<p class="help-block">Escriba el año de edicion del libro</p>
							</div>

							<div class="form-group label-floating">
								{!! Form::label('copies', 'Cantidad de ejemplares', ['class' => 'control-label']) !!}
								{!! Form::number('copies', null, ['class' => 'form-control']) !!}
								<p class="help-block">Escriba la cantidad de ejemplares que desee que se compren</p>
							</div>

							<div class="form-group label-floating">
								{!! Form::label('comments', 'Comentarios', ['class' => 'control-label']) !!}
								{!! Form::textarea('comments', null, ['class' => 'form-control', 'rows' => '5']) !!}
								<p class="help-block">Si lo desea puede escribir algun comentario relacionado a la compra del libro</p>
							</div>

							<div class="form-group">
								{!! NoCaptcha::display() !!}
							</div>

							

							<div class="form-group">
								<div class="row">
									<div class="col-sm-6 col-sm-offset-3">
										{!! Form::submit('Enviar', ['class' => 'form-control']) !!}
									</div>
								</div>
							</div>

						{!! Form::close() !!}
					</div>
				</div>
			</div>

			<div class="col-lg-4">
			<!--
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title title-card">Comision de compra de libros</h3>
					</div>
					<div class="panel-body">
						Esta comision es la encargada de comprar los libros para la biblioteca de acuerdo al pedido de los profesores y los estudiantes.<br><br>
						La misma esta formada por:<br>
						<ul>
							<li>dsadsadsa</li>
							<li>dsadasda</li>
							<li>dasdasda</li>
						</ul>
					</div>
				</div>
			-->
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title title-card">Queremos escuchar tus sugerencias</h3>
					</div>
					<div class="panel-body">
						Es muy importante para nosotros escuchar tus sugerencias de esta forma vamos a poder brindar un servicio que cumpla con tus expectativas, por eso te invitamos a comunicarte con nosotros a traves de facebook o whatsapp. Esperamos tu mensaje!<br><br>
						Facebook: <a href="https://www.facebook.com/bibexa/" target="_blank">Biblioteca Facultad Ciencias Exactas</a><br>
						Whatsapp: <a href="#">387 212 6226</a>
					</div>
				</div>
			</div>
		</div>
	</div>

@stop