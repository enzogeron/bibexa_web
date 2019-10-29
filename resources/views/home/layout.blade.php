<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <link rel="icon" href="{{ url('img/favicon.png') }}" type="image/x-icon" />
    <link rel="shortcut icon" href="{{ url('img/favicon.png') }}" type="image/x-icon" />
    <meta name="description" content="Biblioteca de la Facultad de Ciencias Exactas - UNSa">
    <meta name="author" content="Enzo Geron">
    <title>Bibexa - Biblioteca de la Facultad de Ciencias Exactas</title>

    <meta property="og:description" content="La biblioteca de los estudiates." />
    <meta property="og:site_name" content="biblioteca.exa.unsa.edu.ar" />
    <meta property="og:url" content="http://biblioteca.exa.unsa.edu.ar/" />
    <meta property="og:title" content="Bibexa - Biblioteca de la Facultad de Ciencias Exactas" />
    <meta property="fb:admins" content="1718954994805971" />
    <meta property="og:image" content="http://biblioteca.exa.unsa.edu.ar/img/facebook.jpg" />
    <meta property="author" content="Enzo Geron" />
    <meta property="keywords" content="libros, matematica, quimica, informatica, fisica, unsa, revistas, facultad ciencias exactas, investigacion, tesis, seminarios, prestamos, bibexa" />

    <!--Bootstrap-->
    {!! Html::style('css/bootstrap.min.css') !!}
    <!--Material Desing-->
    {!! Html::style('css/bootstrap-material-design.min.css') !!}
    {!! Html::style('css/ripples.min.css') !!}

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    {!! Html::style('css/desing.css') !!}

    @stack('styles')

</head>

<body>

    <div class="header">
        <nav class="navbar navbar-inverse navbar-static-top" style="background-color: #009688;">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu_main">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!--<a class="navbar-brand" href="{{ url('/') }}"><img src="{{ url('img/raton.png') }}" alt="">
                    </a> -->
                </div>
                <div id="menu_main" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="{{ request()->is('/*') ? 'active' : '' }}"><a href="{{ url('/') }}">INICIO</a></li>
                        <li class="{{ request()->is('institucional/*') ? 'active' : '' }}">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">INSTITUCIONAL <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li class="{{ request()->is('institucional/historia*') ? 'active' : '' }}"><a href="{{ url('institucional/historia') }}">HISTORIA</a></li>
                                <li class="{{ request()->is('institucional/mision*') ? 'active' : '' }}"><a href="{{ url('institucional/mision') }}">MISIÓN</a></li>
                                <li class="{{ request()->is('institucional/personal*') ? 'active' : '' }}"><a href="{{ url('institucional/personal') }}">PERSONAL</a></li>
                                <li class="{{ request()->is('institucional/fotos*') ? 'active' : '' }}"><a href="{{ url('institucional/fotos') }}">GALERÍA DE FOTOS</a></li>
                            </ul>
                        </li>
                        <li  class="{{ request()->is('novedades*') ? 'active' : '' }}"><a href="{{ url('novedades') }}">NOVEDADES</a></li>
                        <li class="{{ request()->is('socios*') ? 'active' : '' }}"><a href="{{ url('socios') }}">SOCIOS</a></li>
                        <li><a href="http://biblioteca.exa.unsa.edu.ar/pmb/opac_css/" target="_blank">CATÁLOGO</a></li>
                        <li class="{{ request()->is('ayuda/*') ? 'active' : '' }}">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">AYUDA <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <!-- <li><a href="{{ url('preguntas-frecuentes') }}">PREGUNTAS FRECUENTES</a></li>
                                 <li><a href="{{ url('tutoriales') }}">TUTORIALES</a></li> -->
                                <li class="{{ request()->is('ayuda/guia-de-usuario*') ? 'active' : '' }}"><a href="{{ url('ayuda/guia-de-usuarios') }}">GUÍA DEL USUARIO</a></li>
                                <li class="{{ request()->is('ayuda/ubicacion*') ? 'active' : '' }}"><a href="{{ url('ayuda/ubicacion') }}">CÓMO LLEGAR</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
            <!--/.container-fluid -->
        </nav>
    </div>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Errores al ingresar los datos.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    @if ($message = Session::get('error'))
        <div class="alert alert-danger">
            <p>{{ $message }}</p>
        </div>
    @endif

    @yield('content')
    
    <footer class="footer_edit">
        <div class="footer" id="footer">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3  col-md-2 col-sm-4 col-xs-6">
                        <h3>Facultades UNSa</h3>
                        <ul>
                            <li><a href="http://exactas.unsa.edu.ar/web2/" target="_blank">Fac. de Ciencias Exactas</a></li>
                            <li><a href="http://hum.unsa.edu.ar/web/" target="_blank">Fac. de Humanidades</a></li>
                            <li><a href="http://www.ing.unsa.edu.ar/" target="_blank">Fac. de Ingeniería</a></li>
                            <li><a href="http://natura.unsa.edu.ar/web/index.php" target="_blank">Fac. de Ciencias Naturales</a></li>
                            <li><a href="http://fsalud.unsa.edu.ar/salud/" target="_blank">Fac. de Ciencias de la Salud</a></li>
                            <li><a href="http://www.economicas.unsa.edu.ar/web/index.php" target="_blank">Fac. de Ciencias Económicas, Jurídicas y Sociales</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3  col-md-2 col-sm-4 col-xs-6">
                        <h3>Sitios de interes</h3>
                        <ul>
                            <li><a href="https://cece.unsa.edu.ar/">Centro de Estudiantes de Ciencias Exactas</a></li>
                            <li><a href="http://comedor.unsa.edu.ar/">Comedor Universitario</a></li>
                            <li><a href="https://alumnos-exa.unsa.edu.ar/alumnos/?__o=" target="_blank">Gestión de Alumnos SIU-GUARANÍ</a></li>
                            <li><a href="http://bo.unsa.edu.ar/" target="_blank">Boletín Oficial de la UNSa</a></li>
                            <li><a href="http://di.unsa.edu.ar/" target="_blank">Departamento de Informática</a></li>
                            <li><a href="http://quimica.unsa.edu.ar/" target="_blank">Departamento de Química</a></li>
                            <li><a href="https://gdu.unsa.edu.ar/" target="_blank">Grupo de Desarrollo Universitario</a></li>
                            <li><a href="http://gupi.unsa.edu.ar/" target="_blank">Guía Universitaria Para Ingresantes</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3  col-md-4 col-sm-4 col-xs-12">
                        <h3>Bibexa - Facultad de Ciencias Exactas</h3>
                        <img src="{{ url('img/bibexa.png') }}" width="180px" class="img-responsive img-center">
                        </p>
                    </div>

                    <div class="col-lg-3  col-md-3 col-sm-6 col-xs-12 ">
                        <h3>Comparte esta pagina, por favor</h3><br>                        
                        <div class="sharethis-inline-share-buttons"></div>
                    </div>

                </div>
                <!--/.row--> 
            </div>
            <!--/.container--> 
        </div>
        <!--/.footer-->

        <div class="footer-bottom">
            <div class="container">
                <p class="pull-left"> © 2018 Seminario de la Tec. Universitaria en Programación - <a href="http://enzogeron.com" target="_blank">Enzo Geron</a></p>
            </div>
        </div>
        <!--/.footer-bottom-->

    </footer>

    {!! Html::script('js/main.js') !!}
    {!! Html::script('js/jquery-3.1.1.min.js') !!}
    {!! Html::script('js/bootstrap.min.js') !!}
    {!! Html::script('js/material.min.js') !!}
    {!! Html::script('js/ripples.min.js') !!}

    <script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=59fdd64bfa1bed0012e94223&product=inline-share-buttons"></script>

    <script>
        $(function () {
            $.material.init();
        });
    </script>

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.10&appId=333487633784751';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    @stack('scripts')

</body>

</html>