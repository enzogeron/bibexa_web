@extends('home.layout')

@section('content')

	<br>

	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title title-card">Servicios</h3>
					</div>
					<div class="panel-body">
						<ul class="nav nav-pills nav-stacked">
							<li><a href="#" data-toggle="modal" data-target="#prestamo-personal">Préstamo personal</a></li>
							<li><a href="#" data-toggle="modal" data-target="#horarios">Horarios de atención</a></li>
							<li><a href="#" data-toggle="modal" data-target="#tramite">Solicitar carnet</a></li>
							<li><a href="pedidos.html">Pedidos de libros/revistas</a></li>
							<li><a href="#" data-toggle="modal" data-target="#servicio-usuarios">Servicio de información, orientación y atención al usuario</a></li>
							<li><a href="#" data-toggle="modal" data-target="#sala-de-lectura">Lectura en sala</a></li>
							<li><a href="#" data-toggle="modal" data-target="#whatsapp">Whatsapp</a></li>
							<li><a href="#" data-toggle="modal" data-target="#becas-bibexa">Becas Bibexa</a></li>
						</ul>
					</div>
				</div>
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

	<!-- Dialog Services -->
	<div id="prestamo-personal" class="modal fade" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title text-info">Préstamo personal</h4>
				</div>
				<div class="modal-body">
					<p>Este servicio permite obtener documentos de los fondos propios de la biblioteca. Pueden utilizar este servicio los usuarios con carné de la Biblioteca de la Facultad de Ciencias Exactas.</p>
					<p>Los usuarios, según criterios de cada biblioteca, podrán también realizar reservas de los documentos y ésta se encargará de atender su petición. Los usuarios internos se acogerán a las instrucciones de su biblioteca relativas a la recogida o envío de los documentos de los fondos propios.</p>
					<p>Los usuarios personales externos deberán personarse en la biblioteca para solicitar fotocopias, para recoger los documentos reservados y para abonar los servicios en su caso.</p>
					<p>Todo prestatario se hace responsable del documento en préstamo, su custodia, conservación y devolución, por lo que no podrá cederlo a otra persona.</p>
					<p>Todos los documentos existentes en la Biblioteca son susceptibles de préstamo.</p>
					<p>El número de préstamos, los plazos de devolución y la renovación de los préstamos (siempre que no estén reservados por otro lector), están en función de la siguiente combinación estatus de lector-estatus de ejemplar</p>
					<p>Préstamo en Sala de Lectura</p>
					<p><strong>De 8:00  a 19:00 Horas</strong></p>
					<p>Préstamo a Domicilio</p>
					<p><strong>Máximo por 7 días con Renovación</strong></p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal">Buenisimo!</button>
				</div>
			</div>
		</div>
	</div>

	<div id="horarios" class="modal fade" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title text-info">Horarios de atención</h4>
				</div>
				<div class="modal-body">
					<p>La biblioteca abre sus puertas todos los dias lectivos desde 08:00hs. a 19:00hs. en horario corrido.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal">Buenisimo!</button>
				</div>
			</div>
		</div>
	</div>

	<div id="tramite" class="modal fade" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title text-info">Carnet de Biblioteca</h4>
				</div>
				<div class="modal-body">
					<p>El carnet de biblioteca puede ser solicitado por alumnos, docentes y/o personal PAU. Este carnet le permitira solicitar prestamos de libros ya sea para sala de lectura o para domicilio.</p>
					<p>El carnet de biblioteca es de uso personal, quien posea el carnet de biblioteca será el responsable de devolver el libro y otro material en buenas condiciones.</p>
					<p>Requisitos de solicitud de carnet para Alumnos:</p>
					<p><ol>
						<li>Completar el Formulario de Solicitud de Carnet en la Página de la Biblioteca.</li>
						<li>Imprimir el Formulario, hacerlo completar por un garante (estudiante con el 50% de la carrera aprobada) y por el Departamento de Alumnos.</li>
						<li>Acercarce a la biblioteca para depositar el formulario.</li>
					</ol></p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal">Buenisimo!</button>
				</div>
			</div>
		</div>
	</div>

	<div id="servicio-usuarios" class="modal fade" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title text-info">Servicio de información, orientación y atención al usuario</h4>
				</div>
				<div class="modal-body">
					<p>Da respuesta a consultas, generales o especializadas, sobre los recursos informativos accesibles en la biblioteca y el funcionamiento de los servicios bibliotecarios. La información se presta de manera presencial o remota (portal web, e-mail y teléfono)</p>
					<p>Este servicio se ofrece tanto a usuarios propios como a externos.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal">Buenisimo!</button>
				</div>
			</div>
		</div>
	</div>

	<div id="sala-de-lectura" class="modal fade" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title text-info">Lectura en sala</h4>
				</div>
				<div class="modal-body">
					<p>Este servicio permite la consulta personal de los fondos propios de la biblioteca. Existe un fondo de referencia de libre acceso, que el lector puede consultar sin trámite previo alguno, y otro que, por razones de seguridad, conservación, obsolescencia de la documentación, etc., puede no ser de libre acceso. Las obras que no son de libre acceso se solicitan al personal bibliotecario. Las salas de lectura tienen a disposición de los usuarios los catálogos de la biblioteca. La consulta del catálogo bibexa es libre y gratuita para todos los usuarios.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal">Buenisimo!</button>
				</div>
			</div>
		</div>
	</div>

	<div id="whatsapp" class="modal fade" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title text-info">Whatsapp de Bibexa</h4>
				</div>
				<div class="modal-body">
					<p>La Biblioteca de la Facultad de Ciencias Exactas informa a todos sus usuarios que se encuentra disponible el servicio de Whatsapp y linea telefonica. Estas herramientas de comunicación permitirán en tiempo real, resolver dudas y consultas relacionadas con los servicios,recursos, instalaciones y horarios, pero principalmente brindar la prestación de renovaciones de materiales bibliográficos.</p>
					<p><strong>Whatsapp:</strong> 387-152126226</p>
					<p><strong>Teléfono:</strong> 4255460</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal">Buenisimo!</button>
				</div>
			</div>
		</div>
	</div>

	<div id="becas-bibexa" class="modal fade" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title text-info">Becas Bibexa</h4>
				</div>
				<div class="modal-body">
					<p>Becas Bibexa tiene como objetivo ayudar a la formación y capacitación de los estudiantes universitarios poniendo a disposición de los beneficiarios cursos a distancia de prestigiosas universidades.</p>
					<p>Entra a nuestra pagina web para participar: <a href="http://becabibexa.com/" target="_blank">Beca Bibexa</a></p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal">Buenisimo!</button>
				</div>
			</div>
		</div>
	</div>

	<!-- End Dialog Services -->

	<br>

@stop