<!DOCTYPE html>

<html>
<head>
	<title>Biblioteca Facultad de Ciencias Exactas - UNSa</title>
	<style>
    	body {
      		font-family: Arial, Helvetica, sans-serif;
      		font-size: 12px	;
    	}
    	@page {
      		margin: 90px 50px;
    	}
	    header {
	    	position: fixed;
	      	left: 0px;
	   		top: -90px;
	   		right: 0px;
	      	height: 80px;
	      	background-color: #ddd;
	      	text-align: center;
	    }
	    header h2 {
	      	margin: 10px 0;
	    }
	    header h3 {
	      	margin: 0 0 5px 0;
	    }
	    footer {
	      	position: fixed;
	      	left: 0px;
	      	bottom: -50px;
	      	right: 0px;
	      	height: 10px;
	      	border-bottom: 2px solid #ddd;
	    }
	    footer .page:after {
	      	
	    }
	    footer table {
	      	width: 100%;
	    }
	    footer p {
	      	text-align: right;
	    }
	    footer .izq {
	      	text-align: left;
	    }
	</style>
</head>
<body>

  	<header>
    	<h2>Universidad Nacional de Salta</h2>
		<h3>Facultad de Ciencias Exactas - BIBEXA</h3>
  	</header>

  	<footer>
    	<table>
      		<tr>
        	<td>
            	<p class="izq">
              	<a href="http://bibexa.unsa.edu.ar/" target="_blank">www.bibexa.unsa.edu.ar</a>
            	</p>
        	</td>
        	<td>
          		<p class="page">
            	Avenida Bolivia 5150 CP 4400 - Salta
          		</p>
        	</td>
      		</tr>
    	</table>
  	</footer>

  	<div id="content">
  		<p align="right">Salta, {{ \Carbon\Carbon::now()->format('d/m/Y') }} </p>
		<p><strong>Señor:<br>
		Director de la Biblioteca de la Fac. de Ciencias Exactas<br>
		David A. AGUILERA<br>
		PRESENTE</strong></p>
		<hr>
		<p>----- Me dirijo a Ud. a los efectos de solicitarle ser inscripto como socio de BIBEXA para hacer uso del servicio de préstamo a domicilio del material bibliográfico. Declaro conocer el Reglamento vigente de la biblioteca y me comprometo a cumplirlo.</p>
	</div>
	<br>
	<div id="content">
		<p><strong>DATOS PERSONALES Y ACADEMICOS</strong></p>
		<hr>
		<table>
			<tr>
			<td>
  			<p>
  			<strong>Apellido y Nombres:</strong> {{ $partner->empr_nom }}, {{ $partner->empr_prenom }} 
  			<img align='right' src="{{ url('/bibexa_sistem/fotos-personales/' . $partner->empr_cb . '.jpg') }}" width="130" height="130" alt="Sin foto"/><br/>
  			<strong>DNI:</strong> {{ $partner->empr_cb }}<br>
  			<strong>Año de Nacimiento:</strong> {{ $partner->empr_year }}<br>
  			<strong>Domicilio:</strong> {{ $partner->empr_adr1 }} <strong>Barrio:</strong> {{ $partner->empr_adr2 }}<br>
  			<strong>Ciudad:</strong> {{ $partner->empr_ville }} <strong>Provincia:</strong> {{ $partner->empr_pays }}<br>
  			<strong>Celular:</strong> {{ $partner->empr_tel1 }} <strong>Whatsapp:</strong> Si / No<br> 
  			<strong>Telefono:</strong> {{ $partner->empr_tel2 }}<br>
  			<strong>Email:</strong> {{ $partner->empr_mail }}<br>
  			<br><br>
  			<strong>Departamento:</strong> {{ $department }}<br>
  			<strong>Carrera:</strong> {{ $career }} | 
  			<strong>Libreta Universitaria:</strong> _______________________<br>
  			<strong>Año de cursando:</strong> {{ $year }}
  			</p> 

			<tr>
				<td>
					<div align="right">_______________________</div>
				</td>
			</tr>
			<tr>
				<td>
					<div align="right">Firma del solicitante</div>
				</td>
			</tr>


			<tr>
				<td>
					<p><strong>COMPLETAR POR GARANTE <hr>
					</strong></p>
				</td>
			</tr>

			<tr>
				<td>----- Para el eventual caso de que el alumno/a Geron, Enzo Norberto no cumpliera con los requisitos exigidos por el Reglamento de la Biblioteca, me constituyo en fiador del mismo, responsabilizandome de las actuaciones que hubiere lugar; a tal efecto declaro ser:
				<p>
	  			<strong>Apellido y Nombres:</strong> _______________________<br>
	  			<strong>DNI:</strong> _______________________<br>
	  			<strong>ALUMNO REG. - DOCENTE - PAU. de la Facultad de:</strong> _______________________<br>
	  			<strong>Cursando el: </strong> _________ <strong>año, de la carrera </strong> _______________________<br>
	  			<strong>Carnet de Biblioteca Nº:</strong> _______________________<br>
	  			</p></td>
			</tr>
			<tr>
				<td>
					<div align="right">_______________________</div>
				</td>
			</tr>
			<tr>
				<td>
					<div align="right">Firma del garante</div>
				</td>
			</tr>

			<tr>
				<td><p><strong>DEPARTAMENTO DE ALUMNOS</strong><hr></p></td>
			</tr>
			<tr>
				<td><br>----- Certifica que el Sr./Srta.______________________________________________ Libreta Universitaria: _________________</td>
			</tr>
			<tr>
				<td>
				Es alumno de la Facultad, cursando el _______________________ año de la carrera _____________________________________
				</td>
			</tr>
		</table>
	</div>


</body>
</html>