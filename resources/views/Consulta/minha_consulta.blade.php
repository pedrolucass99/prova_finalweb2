@extends('layouts.app')

@section('body')
<div class="container">
<div class="card border">
	<div class="card-header">
		<div class="card-title">
			<h4>Minhas Consultas</h4>
		</div>
	</div>
	<div class="card-body">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Doutor</th>
				<th>Hora</th>
				<th>Data</th>
				<th colspan="2">Ações</th>
			</tr>
		</thead>

		<tbody>
			@foreach($consultas as $consulta)
			@if($consulta['user_id'] == Auth::id())
			<tr>
				<td>{{$consulta['doctor_id']}}</td>
				<td>{{$consulta['time']}}</td>
				<td>{{$consulta['date']}}</td>
				<td><a href="{{action('AppointmentController@edit', $consulta['id'])}}" class="btn btn-sm btn-secondary">Editar</a></td>
				<td><a href="consultaRm/{{$consulta['id']}}" class="btn btn-sm btn-danger">Remover</a></td>
			</tr>
			@endif
			@endforeach
		</tbody>
	</table>
	</div>

	<div class="card-footer">
		<a href="{{url('home')}}" class="btn btn-sm btn-info">Nova Consulta</a>
	</div>
<div>
<div>	
@endsection