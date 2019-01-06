@extends('layouts.app')

@section('body')
<div class="container">
<div class="card border">
	<div class="card-header">
		<div class="card-title">
			<h4>Doutores</h4>
		</div>
	</div>
	<div class="card-body">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Nome</th>
				<th>Email</th>
				<th colspan="2">Ações</th>
			</tr>
		</thead>

		<tbody>
			@foreach($doctors as $doctor)
			<tr>
				<td>{{$doctor['name']}}</td>
				<td>{{$doctor['email']}}</td>
				<td><a href="{{action('DoctorController@edit', $doctor['id'])}}" class="btn btn-sm btn-secondary">Editar</a></td>
				<td><a href="doctorRm/{{$doctor['id']}}" class="btn btn-sm btn-danger">Remover</a></td>
			</tr>
			@endforeach
		</tbody>
	</table>
	</div>

	<div class="card-footer">
		<a href="{{action('DoctorController@create')}}" class="btn btn-sm btn-info">Novo Doutor</a>
	</div>
<div>
<div>	
@endsection