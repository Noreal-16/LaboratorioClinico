<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Yajra\DataTables\Facades\DataTables as DataTables;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            $pacientes = DB::select('call DBPacientes()');
            return DataTables::of($pacientes)
                ->addIndexColumn('')
                ->addColumn('action', function ($pacientes){
                    $acciones ='<a href="javascript:void(0)" onclick="listarPacientes('.$pacientes->id.')" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" name="delete" id="" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $acciones;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.pacientes');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Guardar datos de paciente
        $paciente = new Paciente;
        $paciente->nombreP = $request->input('nombre');
        $paciente->apellido = $request->input('apellido');
        $paciente->sexo = $request->input('sexo');
        $paciente->cedula = $request->input('cedula');
        $paciente->fechaNacimiento = $request->input('fecha');
        $paciente->edad = $request->input('edad');
        $paciente->direccion = $request->input('direccion');
        $paciente->telefono = $request->input('telefono');
        $paciente->correo = $request->input('correo');
        $paciente->observaciones = $request->input('observacion');
        $paciente->save();
        return redirect()->route('pacientes.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Metodo para listar Pacientes
        $pacientes =DB::select('call listaPaciente(?)',[$id]);
        return response()->json($pacientes);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //Actualizar Pacientes
        $pacientes = DB::select('call updatePacientes(?,?,?,?,?,?,?,?,?,?,?)',
                                [$request->id,$request->nombreP,$request->apellido,$request->sexo,$request->cedula,$request->fechaNacimiento,$request->edad,$request->direccion,$request->telefono,$request->correo,$request->observaciones]);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paciente $paciente)
    {
        //
    }
}
