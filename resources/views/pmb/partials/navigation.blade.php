<div class="container">
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3 text-center">
			<a href="{{ route('editar_socio') }}" class="{{ request()->is('pmb/editar_socio*') ? 'active_link' : '' }}">
				<i class="fa fa-edit"></i>
				<span>Modificar datos</span>
			</a>
			<a href="{{ route('formulario') }}" class="{{ request()->is('pmb/formulario*') ? 'active_link' : '' }}">
				<i class="fa fa-file"></i>
				<span>Imprimir Formulario</span>
			</a>
			<a href="{{ route('password_socio') }}" class="{{ request()->is('pmb/password_socio*') ? 'active_link' : '' }}">
				<i class="fa fa-key"></i>
				<span>Cambiar contraseña</span>
			</a>
			<a href="{{ route('salir') }}" class="{{ request()->is('pmb/salir*') ? 'active_link' : '' }}">
				<i class="fa fa-times"></i>
				<span>Cerrar sesion</span>
			</a>
			<hr>
		</div>
	</div>
</div>