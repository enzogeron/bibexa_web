@extends('home.layout')

@section('content')
    
    <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                @include('partials.panel-dialog')
            </div>

            <div class="col-lg-9">
                <section class="section-white">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="img/img0.jpg">
                                    <!-- <div class="carousel-caption">
                                        <h4><strong>Fernando Zerega, Gisela Vanina Rottigni, Enzo Notario, Giancarlo Bianchi.<br>Creadores de la app "Angela te Protege"</strong></h4>
                                    </div> -->
                                </div>

                                <div class="item">
                                    <img src="img/img1.jpg">
                                </div>

                                <div class="item">
                                    <img src="img/img2.jpg">
                                </div>

                            </div>

                            <!-- Controls -->
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                </section>
            </div>
        </div>
    </div>

    @include('partials.dialog-services')

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

    <br><br>
    
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-xs-12 visible-lg">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title title-card">Red de Bibliotecas</h3>
                    </div>
                    <div class="panel-body">
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="http://www.unsa.edu.ar/biblio/" target="_blank">Biblioteca Electrónica de la UNSa</a></li>
                            <li><a href="http://www.sisbi.uba.ar/" target="_blank">Sistema de Bibliotecas y de Información</a></li>
                            <li><a href="http://www.caicyt-conicet.gov.ar/" target="_blank">Centro Argentino de Información Científica y Tecnológica - CONICET</a></li>
                            <li><a href="http://www.biblioteca.mincyt.gob.ar/" target="_blank">Biblioteca Electrónica de Ciencia y Tecnología</a></li>
                            <li><a href="http://www.unesco.org/library/Es/" target="_blank">Biblioteca de la UNESCO</a></li>
                            <li><a href="http://digital.bl.fcen.uba.ar/gsdl-282/cgi-bin/library.cgi" target="_blank">Biblioteca Digital FCEN-UBA</a></li>
                            <li><a href="http://humani.unsa.edu.ar/biblioteca/" target="_blank">Biblioteca y Hemeroteca de la Facultad de Humanidades</a></li>
                            <li><a href="http://www.unsa.edu.ar/biblio/ingenieria/" target="_blank">Biblioteca de Ingeniería</a></li>
                            <li><a href="http://www.unsa.edu.ar/bibnat/" target="_blank">Biblioteca de la Facultad de Ciencias Naturales</a></li>
                            <li><a href="http://www.unsa.edu.ar/bibsalud/biblio/index.php" target="_blank">Biblioteca de la Facultad de Ciencias de la Salud</a></li>
                            <li><a href="http://biblioeco.unsa.edu.ar/webbibeco/" target="_blank">Biblioteca de la Facultad de Ciencias Económicas</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-xs-12">
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <!-- <h4 class="text-info">Buscar en los catálogos de la Biblioteca</h4>
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label for="catalogo" class="col-md-2 control-label">Catálogo</label>
                                    <div class="col-md-10">
                                        <select id="catalogo" class="form-control">
                                            <option>Seleccionar un catálogo</option>
                                            <option>Informática</option>
                                            <option>Física</option>
                                            <option>Química</option>
                                            <option>Matemática</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="title" class="col-md-2 control-label">Titulo</label>
                                    <div class="col-md-10">
                                        <input class="form-control" id="title" placeholder="Ingrese el titulo del libro" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-10 col-md-offset-2">
                                        <button type="submit" class="btn btn-raised btn-primary">Buscar</button>
                                    </div>
                                </div>
                            </form> -->
                            <a href="http://biblioteca.exa.unsa.edu.ar/pmb/opac_css/" target="_blank"><img src="{{ url('img/catalogo.jpg') }}" class="img-responsive"></a>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-body">
                            <!--
                            <h4 class="text-info">Últimos seminarios y tesis digitales</h4>
                            <strong>Estamos subiendo todos los seminarios y tesis disponibles en la biblioteca, nos puede llevar un poco de tiempo.</strong><br><br>
                            <a href="">Ver todos los documentos digitales</a> -->
                            <img src="{{ url('img/reforma.jpg') }}" class="img-responsive">
                        </div>
                    </div>

                </div>

                <div class="col-lg-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title title-card">Información de contacto</h3>
                        </div>
                        <div class="panel-body">
                            <div class="text-center">
                                <p><strong>Director David A. Aguilera</strong></p>
                                <p>Teléfono: 4255460</p>
                                <p>Whatsapp: 387 212 6226</p>
                                <p>Email: <a href="mailto:bibexa@unsa.edu.ar">bibexa@unsa.edu.ar</a></p>
                                <p>Av. Bolivia 5150 - 4400<br>Salta - Argentina</p>
                            </div>
                        </div>
                    </div>
                    <img src="img/unsa_logo.png" width="160px" class="img-responsive img-center">
                </div>
            </div>
        </div>
    </div>

    <br>
    

@stop