<?php

namespace App\Http\Controllers;

use App\Doctor;
use Illuminate\Http\Request;
use DB;
use App\Appointment;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = Doctor::all();
        return view('Doctor/doctor', compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Doctor/new_doctor');
    }

    public function pesquisa(){
        return view('Doctor/pesquisa');
    }

    public function pesquisaDoutor(Request $request){
        $nome = $request->get('nome');
        //$doctors = DB::table('doctors')->Where('name', 'LIKE', '%' . $nome . '%')->get();
        
        $doctors = Doctor::Where('name', 'LIKE', '%' . $nome . '%')->get();
        return view('Doctor/pesquisa', compact('doctors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $doctor = new Doctor;
        $doctor->name = $request->get('name');
        $doctor->email = $request->get('email');
        $doctor->save();

        return redirect('doctor');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $doctor = Doctor::find($id);
        $consultas = Appointment::all();
        return view('Doctor/consultas', compact('consultas'), compact('doctor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctor = Doctor::find($id);
        return view('Doctor/edit_doctor', compact('doctor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $doctor = Doctor::find($id);
        $doctor->name = $request->get('name');
        $doctor->email = $request->get('email');
        $doctor->save();

        return redirect('doctor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doctor = Doctor::find($id);
        $doctor->delete();
        return redirect('doctor');
    }
}
