@extends('layouts.app')

@section('body')
	<div class="container">
	<div class="card border">
		<div class="card-header">
			<div class="card-title">
				<h3>Cadastro de Doutor</h3>
			</div>
		</div>

		<div class="card-body">
			<form action="{{url('doctor')}}" method="POST">
				@csrf
				<div class="form-group">
					<label>Nome</label>
					<input type="tetx" name="name" class="form-control">
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="text" name="email" class="form-control">
				</div>
				<button type="submir" class="btn btn-sm btn-primary">Salvar</button>
			</form>
		</div>
	</div>


	</div>
@endsection