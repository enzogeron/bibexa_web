@extends('home.layout')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				@include('partials.panel-dialog')
			</div>

			<div class="col-lg-9">
				<h4 class="text-info text-center"><strong>MISIÓN DE BIBEXA</strong></h4>
				<div style="text-align: justify;">
				<p>Desarrollar espacios de consulta digital que favorecerán cada vez más a los docentes, bibliotecarios y alumnos en la medida en que los canales de telecomunicación sean los apropiados y el acceso preferencial a Internet se haga realidad desde la misma escuela y/o comunidad.</p>
				<p>Desarrollar y gestionar espacios virtuales para brindar acceso a registros y textos completos de legislación, innovación, investigación, recursos didácticos y publicaciones periódicas sobre educación. Promover la formación de ciudadanos lectores autónomos.</p>
				<p>La Biblioteca es un puente entre el pasado y el futuro que crea un escenario de tiempo real que los une en una única dimensión temporal permitiendo que distintos usuarios, en distintas latitudes, accedan al conocimiento y a la información almacenada en nuestros espacios de consulta.</p>
 				<p>Nuestra Biblioteca deberá crecer manteniendo el rol y la misión que la definen como tal: almacenamiento y producción de conocimiento y servicio a su comunidad de usuarios. Pero estará entregada a una "danza de cambio" que incluya lo organizacional y lo tecnológico para continuar liderando proyectos de gestión de la información educativa para la comunidad, promoviendo conocimientos e información de calidad, garantizando la equidad en su acceso.</p>
				</div>
			</div>
		</div>
	</div>

	@include('partials.dialog-services')

@stop