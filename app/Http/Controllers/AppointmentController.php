<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appointment;

use Auth;
use DB;
use App\Doctor;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('Consulta/new_consulta');
    }

    public function consultaIndividual($id){
        $consultas = Appointment::all();    
        return view('Consulta/minha_consulta', compact('consultas'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $consulta = new Appointment;
        $consulta->user_id = Auth::id();
        $consulta->doctor_id = $request->get('doctor_id');
        $consulta->time = $request->get('time');
        $consulta->date = $request->get('date');
        $consulta->save();

        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consulta = Appointment::find($id);
        $doctors = Doctor::all();
        return view('Consulta/edit_consulta', compact('consulta'), compact('doctors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $consulta = Appointment::find($id);
        $consulta->user_id = Auth::id();
        $consulta->doctor_id = $request->get('doctor_id');
        $consulta->time = $request->get('time');
        $consulta->date = $request->get('date');
        $consulta->save();

        return redirect('home');        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $consulta = Appointment::find($id);
        $consulta->delete();

        return redirect('consultaIndividual/'.Auth::id());
    }
}
