<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Yajra\DataTables\Facades\DataTables as DataTables;


class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            $categorias = DB::select('CALL dbcategorias()');
            return DataTables::of($categorias)
                ->addIndexColumn('')
                ->addColumn('action', function($categorias){
                    $acciones ='<a href="javascript:void(0)" onclick="editarCategoria('.$categorias->id.')" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" name="delete" id="'.$categorias->id.'" class="delete btn btn-danger btn-sm">Delete</a>';
                    //$acciones .='<button type="button" name="delete" id="" class="btn btn-danger btn-sm>Eliminar</button>';
                    return $acciones;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.categorias');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //lamar al procedimiendo almacenado
        $categorias = DB::select('call createCategoria(?,?)',[$request->nombre, $request->descripcion]);

        return view('admin.categorias');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $categorias = DB::select('call listaCategoria(?)',[$id]);
        return response()->json($categorias);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $categorias = DB::select('call updateCategorias(?,?,?)',[$request->id, $request->nombre, $request->descripcion]);
        return back();


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $categorias = DB::select('call deleteCategoria(?)',[$id]);
        return back();
    }
}
