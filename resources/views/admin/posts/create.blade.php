@extends('admin.layout')

@section('header')
	<h1>
   		Novedades
        <small>Crear publicacion</small>
   	</h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="{{ route('admin.posts.index') }}"><i class="fa fa-list"></i> Lista de novedades</a></li>
        <li class="active">Crear</li>
    </ol>
@stop

@section('content')
<div class="row">
	<form method="POST" action="{{ route('admin.posts.store') }}">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="col-md-8">	
		<div class="box">
			<div class="box-body">
				<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
					<label>Titulo de la publicacion</label>
					<input type="text" name="title" class="form-control" placeholder="Ingrese aqui el titulo de la novedad" value="{{ old('title') }}">
					{!! $errors->first('title', '<span class="help-block">:message</span>') !!}
				</div>

				<div class="form-group {{ $errors->has('body') ? 'has-error' : ''}}">
					<label>Contenido de la publicacion</label>
					<textarea rows="10" name="body" id="editor" class="form-control" placeholder="Ingrese el contenido completo de la publicacion">{{ old('body') }}</textarea>
					{!! $errors->first('body', '<span class="help-block">:message</span>') !!}
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="box">
			<div class="box-body">
				<!-- Date -->
				<div class="form-group">
					<label>Fecha de publicacion</label>
					<div class="input-group date">
						<div class="input-group-addon">
							<i class="fa fa-calendar"></i>
						</div>
						<input name="published_at" type="text" class="form-control pull-right" id="datepicker" value="{{ old('published_at') }}">
					</div>
				</div>

				<div class="form-group {{ $errors->has('category') ? 'has-error' : '' }}">
					<label>Categorias</label>
					<select name="category" class="form-control">
						<option value="">Seleccione una categoria</option>
						@foreach($categories as $category)
							<option value="{{ $category->id }}" {{ old('category') == $category->id ? 'selected' : '' }}
							>{{ $category->name }}</option>
						@endforeach
					</select>
					{!! $errors->first('category', '<span class="help-block">:message</span>') !!}
				</div>

				<div class="form-group {{ $errors->has('tags') ? 'has-error' : '' }}">
					<label>Etiquetas</label>
					<select name="tags[]" class="form-control select2" multiple="multiple" data-placeholder="Selecciona una o mas etiquetas" style="width: 100%;">
						@foreach($tags as $tag)
							<option {{ collect(old('tags'))->contains($tag->id) ? 'selected' : ''}} value="{{ $tag->id }}"
							>{{ $tag->name }}</option>
						@endforeach
					</select>
					{!! $errors->first('tags', '<span class="help-block">:message</span>') !!}
				</div>

				<div class="form-group {{ $errors->has('excerpt') ? 'has-error' : '' }}">
					<label>Extracto de la publicacion</label>
					<textarea name="excerpt" class="form-control" placeholder="Extracto de la publicacion">{{ old('excerpt') }}</textarea>
					{!! $errors->first('excerpt', '<span class="help-block">:message</span>') !!}
				</div>
				
				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-block">Guardar Publicacion</button>
				</div>

			</div>
		</div>
	</div>
	</form>
</div>
@stop

@push('styles')
	{!! Html::style('adminlte/plugins/select2/select2.min.css') !!}
	{!! Html::style('adminlte/plugins/datepicker/datepicker3.css') !!}
@endpush

@push('scripts')
	{!! Html::script('adminlte/plugins/select2/select2.full.min.js') !!}
	<script src="//cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
	{!! Html::script('adminlte/plugins/datepicker/bootstrap-datepicker.js') !!}
	<script type="text/javascript">
		// Select Multiple
		$(".select2").select2(); 
		// CK Editor
		CKEDITOR.replace('editor'); 
		// Date picker
		$('#datepicker').datepicker({
			autoclose: true
		});
	</script>
@endpush


