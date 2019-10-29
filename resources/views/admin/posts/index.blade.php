@extends('admin.layout')

@section('header')
	<h1>
   		Novedades
        <small>Listado</small>
   	</h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Listado de novedades</li>
    </ol>
@stop

@section('content')

    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">Listado de novedades</h3>
            <button class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Crear Novedad</button>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="posts-table" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Titulo</th>
                        <th>Extracto</th>
                        <th>Categoria</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td width="500px">{{ str_limit($post->excerpt, 100) }}</td>
                        <td>{{ $post->category->name }}</td>
                        <td>
                            <a href="#" class="btn btn-info"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="btn btn-danger"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.box-body -->
    </div>

@stop

@push('styles')
    <!-- DataTables -->
    {!! Html::style('adminlte/plugins/datatables/dataTables.bootstrap.css') !!}
@endpush

@push('scripts')
    <!-- DataTables -->
    {!! Html::script('adminlte/plugins/datatables/jquery.dataTables.min.js') !!}
    {!! Html::script('adminlte/plugins/datatables/dataTables.bootstrap.min.js') !!}

    <script>
        $(function () {
            $('#posts-table').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false
            });
        });
    </script>
@endpush