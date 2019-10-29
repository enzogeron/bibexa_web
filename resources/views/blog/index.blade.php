@extends('home.layout')

@section('content')

	<div class="container">

		<div class="row">
			<!-- Blog Entries Column -->
			<div class="col-md-8">

				<!-- Blog Post -->
				<div class="card">
					<a href="{{ url('novedades/nuevo-sitio-web-bibexa') }}"><img class="card-img-top" src="{{ url('img/img0.jpg') }}" alt="Card image cap"></a>
					<div class="card-body">
						<span class="text-muted">Publicado el 10/12/2017</span>
						<h3 class="card-title text-info">Nuevo sitio web de Bibexa</h3>
						<p class="card-text">La biblioteca de la Facultad de Ciencias Exactas informa a sus usuarios que ya se encuentra disponible el primer avance de nuestro nuevo sitio web, el mismo esta siendo desarrollado por.... <a href="{{ url('novedades/nuevo-sitio-web-bibexa') }}">Leer mas &rarr;</a></p>
					</div>
				</div>
				<br><br>
			</div>

			<!-- Sidebar Widgets Column -->
			<div class="col-md-4">

                <div class="col-lg-12">
                	<div class="fb-page" data-href="https://www.facebook.com/bibexa/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/bibexa/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/bibexa/">Biblioteca Facultad Ciencias Exactas</a></blockquote></div>
                </div>

			</div>

		</div>
		<!-- /.row -->

	</div>
	<!-- /.container -->



@endsection