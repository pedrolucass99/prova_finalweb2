@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           <div class="card border">
               <div class="card-header">
                   <h3>Editar consulta</h3>
               </div>

               <div class="card-body">
                   <form action="{{action('AppointmentController@update', $consulta->id)}}" method="POST">
                       @csrf

                       <div class="form-group">
                       <label>Doutor</label>
                            <select class="form-control" name="doctor_id">
                                <option value="{{$consulta->doctor_id}}">{{$consulta->doctor_id}}</option>
                                @foreach($doctors as $doctor)
                                    <option value="{{$doctor['id']}}">{{$doctor['name']}}</option>
                                @endforeach     
                            </select>
                        </div>

                       <div class="form-group">
                           <label>Hora</label>
                           <input type="time" name="time" class="form-control" value="{{$consulta->time}}">
                       </div>

                       <div class="form-group">
                           <label>Data</label>
                           <input type="date" name="date" class="form-control" value="{{$consulta->date}}">
                       </div>

                       <button type="submit" class="btn btn-sm btn-primary">Salvar</button>
                   </form>
               </div>
           </div>
        </div>
    </div>
</div>
@endsection
