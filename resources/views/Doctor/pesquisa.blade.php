@extends('layouts.app')

@section('body')
	<div class="container">
	<div class="card border">
		<div class="card-header">
			<div class="card-title">
				<h3>Pesquisa de Doutor</h3>
			</div>
		</div>

		<div class="card-body">
			<form action="{{url('doctorPesquisa')}}" method="POST">
			@csrf
				<div class="form-group">
					<label>Nome do Doutor</label>
					<input class="form-control" type="search" aria-label="Search" name="nome">
      			</div>
      			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
			</form>
		</div>
	</div>
	</div>

	<br>
	<br>
	@if(isset($doctors))
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
					<th colspan="1">Ações</th>
				</tr>
		
			</thead>

			<tbody>
				@foreach($doctors as $doctor)
				<tr>
					<td>{{$doctor['name']}}</td>
					<td><a href="{{action('DoctorController@show', $doctor['id'])}}" class="btn btn-sm btn-secondary">Consultas</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
		</div>
<div>
<div>	
	@endif
@endsection