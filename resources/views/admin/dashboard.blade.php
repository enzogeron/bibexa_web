@extends('admin.layout')

@section('content')

	<h1>Dashboard</h1>

	<h4>Usuario autenticada: {{ auth()->user()->email }}</h4>

@endsection