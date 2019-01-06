@extends('layouts.app')

@section('body')
<div class="container">
<div class="card border">
	<div class="card-header">
		<div class="card-title">
			<h4>Consultas</h4>
		</div>
	</div>
	<div class="card-body">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Doutor</th>
				<th>Paciente</th>
				<th>Hora</th>
				<th>Data</th>
			</tr>
		</thead>

		<tbody>
			@foreach($consultas as $consulta)
			@if($consulta['doctor_id'] == $doctor->id) 
			<tr>
				<td>{{$doctor->name}}</td>
				<td>{{$consulta['user_id']}}</td>
				<td>{{$consulta['time']}}</td>
				<td>{{$consulta['date']}}</td>
			@endif
			</tr>
			@endforeach
		</tbody>
	</table>
	</div>
<div>
<div>	
@endsection