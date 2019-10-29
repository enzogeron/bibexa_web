@extends('home.layout')

@section('content')

	<div class="container">

		<div class="row">
			<!-- Blog Entries Column -->
			<div class="col-lg-10 col-lg-offset-1">

				<!-- Blog Post -->
				<div class="card">
					<img class="card-img-top" src="{{ url('img/img0.jpg') }}" alt="Card image cap">
					<div class="card-body">
						<span class="text-muted">Publicado el 10/12/2017</span>
						<h3 class="card-title text-info">Nuevo sitio web de Bibexa</h3>
						<p class="card-text">La biblioteca de la Facultad de Ciencias Exactas informa a sus usuarios que ya se encuentra disponible el primer avance de nuestro nuevo sitio web, el mismo esta siendo desarrollado por el estudiante Enzo Geron como proyecto final para la asignatura Seminario Técnico Profesional de la carrera Tecnicatura Universitaria en Programación.</p>
						<p>Esperamos escuchar las sugerencias de todos, para que este nuevo espacio nos permita brindar un mejor servicio a todos los actores de la comunidad universitaria.</p>
					</div>
				</div>
				<br><br>
			</div>


		</div>
		<!-- /.row -->

	</div>
	<!-- /.container -->



@endsection