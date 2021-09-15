<?php

namespace App\Http\Controllers;

use App\Models\Laboratorio;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables as DataTables;

class LaboratorioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            $laboratorios = DB::select('call db_Laboratorios()');
            return DataTables::of($laboratorios)
            ->addIndexColumn('')
            ->addColumn('action', function ($laboratorios){
                $acciones ='<a href="javascript:void(0)" onclick="listaLaboratorios('.$laboratorios->id.')" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" name="delete"  class="delete btn btn-danger btn-sm">Delete</a>';
                return $acciones;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
        return view('admin.laboratorios');
    }
    /**
     * enviar datos de laboratorio
     */
    public function getDatosLaboratorio(Request $request){
        if($request->ajax()){
            $laboratorios = DB::select('call db_Laboratorios()');
            return response()->json($laboratorios);
        }
    }
    /**
     * enviar datos de laboratorio ACTUALIZAR
     */
    public function getDatosLaboratorio1(Request $request){
        if($request->ajax()){
            $laboratorios = DB::select('call db_Laboratorios()');
            return response()->json($laboratorios);
        }
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $laboratorios = new Laboratorio;
        $laboratorios->nombreL = $request->input('nombreLaboratorio');
        $laboratorios->descripcion= $request->input('descripcion');
        $laboratorios->save();
        return redirect()->route('laboratorios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Laboratorio  $laboratorio
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $laboratorios = DB::select('call listaLaboratorios(?)',[$id]);
        return response()->json($laboratorios);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Laboratorio  $laboratorio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $laboratorios = DB::select('call updateLaboratorios(?,?,?)',
                                    [$request->id, $request->nombreL, $request->descripcion]);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Laboratorio  $laboratorio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laboratorio $laboratorio)
    {
        //
    }
}
