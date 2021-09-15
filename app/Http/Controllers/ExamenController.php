<?php

namespace App\Http\Controllers;

use App\Models\Examen;
use App\Models\Categoria;
use App\Models\Laboratorio;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables as DataTables;

class ExamenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            $examenes = DB::select('call db_examenes_p()');
            
       
            return DataTables::of($examenes)
            ->addIndexColumn('')
            ->addColumn('action', function ($examenes){
                $acciones ='<a href="javascript:void(0)" onclick="listaMedicos('.$examenes->id.')" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" name="delete"  class="delete btn btn-danger btn-sm">Delete</a>';
                return $acciones;
            })
            ->rawColumns(['action'])
            ->make(true);
        }

        return view('admin.examenes');
    }
/**
     * Enviar los datps
     */
    public function getDatosExamenes()
    {
            $examenes = DB::select('CALL db_examenes_p()');
            return response()->json($examenes);
    }
    public function getDatosExamenes1($categoria_id)
    {
            $examenes = DB::select('CALL examenessPrueba(?)]', [$categoria_id]);
            return response()->json($examenes);
    }
    public function getDatosExamenes2($categoria_id)
    {
        $examenes = Examen::with('category') -> get();
        return $examenes;

    }

    /**
     * Metodo para capturar datos
     */
    public function capturaDatos(){

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $examenes = new Examen;
        $examenes->nombre = $request->input('nombre');
        $examenes->categoria_id = $request->input('comboCategoria');
        $examenes->laboratorio_id = $request->input('comboLaboratorio');
        $examenes->formato = $request->input('formato');
        $examenes->unidadMedida = $request->input('medida');
        $examenes->precio1 = $request->input('precio1');
        $examenes->precio2 = $request->input('precio2');
        $examenes->valReferencia1 = $request->input('valRef1');
        $examenes->valReferencia2 = $request->input('valRef2');
        $examenes->valReferencia3 = $request->input('valRef3');
        $examenes->valReferencia4 = $request->input('valRef4');
        $examenes->valReferencia5 = $request->input('valRef5');
        $examenes->valReferencia6 = $request->input('valRef6');
        $examenes->valReferencia7 = $request->input('valRef7');
        $examenes->valReferencia8 = $request->input('valRef8');
        $examenes->save();
        return redirect()->route('examenes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Examen  $examen
     * @return \Illuminate\Http\Response
     */
    public function show(Examen $examen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Examen  $examen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Examen $examen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Examen  $examen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Examen $examen)
    {
        //
    }
}
