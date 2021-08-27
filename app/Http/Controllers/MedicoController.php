<?php

namespace App\Http\Controllers;

use App\Models\Medico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables as DataTables;

class MedicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //Medicos
        if($request->ajax()){
            $medicos =DB::select('call db_medicos()');
            return DataTables::of($medicos)
            ->addIndexColumn('')
            ->addColumn('action', function($medicos){
                $acciones ='<a href="javascript:void(0)" onclick="listaMedicos('.$medicos->id.')" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" name="delete"  class="delete btn btn-danger btn-sm">Delete</a>';
                return $acciones;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
        return view('admin.medicos');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Guardar Datos
        $medicos = new Medico;
        $medicos->nombre = $request->input('nombreMedico');
        $medicos->observaciones = $request->input('observacion');
        $medicos->save();
        return redirect()->route('medicos.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //presentar datos medicos
        $medicos = DB::select('call listaMedicos(?)',[$id]);
        return response()->json($medicos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medico $medico)
    {
        //
        $pacientes =DB::select('call updateMedicos(?,?,?)',
                                [$request->id, $request->nombre,$request->observaciones]);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medico $medico)
    {
        //
    }
}
