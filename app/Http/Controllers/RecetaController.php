<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RecetaModel;

class RecetaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //$recetaPaginate = RecetaModel::paginate(10);
        //Obtener todos los registros.
       // return response()->json(['receta'=>$recetaPaginate]);

        $titulo = $request->input('titulo');
        $recetaWhere = RecetaModel::where('titulo',$titulo)->paginate(10);
        return response()->json(['receta' => $recetaWhere]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $receta = RecetaModel::create(['titulo'=>$request->titulo,'descripcion'=>$request->descripcion,'instrucciones'=>$request->instrucciones,'tipoAlimentoId'=>$request->tipoAlimentoId]);
        return response()->json(['titulo'=> $receta]);
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        try {
            $receta = RecetaModel::with('categoriaModel')->findOrFail($id);
            return response()->json($receta);
        } catch (ModelNotFoundException $th) {
            return response()->json(['error' => 'No existe esta receta'],404);
        }

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
