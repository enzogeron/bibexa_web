@extends('home.layout')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				@include('partials.panel-dialog')
			</div>

			<div class="col-lg-9">
				<h4 class="text-info text-center"><strong>HISTORIA DE LA BIBLIOTECA</strong></h4>
				<div style="text-align: justify;">
				<p>Nuestra Biblioteca fue creada en el año 1998 con la disolución de la Ex Biblioteca Central, en la que funcionaban las Bibliotecas de Humanidades y Ciencias Exactas. La cual se disuelve mediante Resolucion 451/98 del 04/12/99 en la cual se dispone que el 70% del material y mobiliario forme la Biblioteca de Humanidades  y el 30% pase a formar la Biblioteca de la Facultad de Ciencias Exactas quedando la misma formada a pártir de Diciembre de 1998 con el siguiente personal:</p>
				<p><strong>Bib. David Angel Aguilera</strong> y dos Auxiliares Administrativos</p>
				<p>Todo lo relativo al traslado se encuentra plasmado en las Resoluciones Rectorales y Consejo Superior:<br><br><strong>Res. 451/98 --- 152/99 ---387/2000.-</strong></p>
				<p>En ese entonces se contaba con una cantidad aproximada de 7600 libros y hoy podemos decir que se ha duplicado en cantidad y calidad del material bibliográfico, además de incorporarse las nuevas tecnologías tanto de búsqueda de información como de consulta vía web creándose el departamento de consulta informatizada, acorde al crecimiento de las instalaciones y de las revistas se crea la hemeroteca con materiales tales como Publicaciones periódicas, Seminarios de Informática, Tesis Doctorales etc.-</p>
				<p>El personal fué capacitando a lo largo del tiempo y contamos con un plantel que esta plenamente compenetrado con el servicio y las tareas que realizan en la biblioteca en lo cual lleva a brindar un mejor servicio s a los usuarios de la misma.</p>
				<p>Nuestras salas de lecturas también han sido modificadas y acondicionadas para brindarles a los usuarios un lugar acorde a sus necesidades disponiendo de una sala de lectura parlante y una silenciosa se proyecta la creación de salas de lectura grupales es decir boxes para 3 o cuatro personas con un pizarrón y una pc.</p>
				<p>En la actualidad se están realizando las migraciones de nuestro sistema de gestión de biblioteca realizado en FoxPro por un nuevo Sistema Open source PMB el cual permite la conexión via internet.</p>
				<p>Se han brindado diferentes talleres de capacitación a los usuarios de la biblioteca.</p>
				<p>Se ha participado en los diferentes curso de ingreso brindando charlas y enseñando a los alumnos ingresantes acerca de la biblioteca el material que posee como consultar los materiales como realizar una búsqueda como hacerse socio etc.-</p>
				</div>
			</div>
		</div>
	</div>

	@include('partials.dialog-services')

@stop