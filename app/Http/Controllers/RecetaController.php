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
    public function index()
    {
        $recetaPaginate = Receta::paginate(10);
        //Obtener todos los registros.
        return response()->json(['receta'=>$recetaPaginate]);
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
        $receta = Receta::create(['titulo'=>$request->titulo,'descripcion'=>$request->descripcion,'instrucciones'=>$request->instrucciones,'tipoAlimentoId'=>$request->tipoAlimentoI]);
        return response()->json(['titulo'=> $receta]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $titulo = $request->query('titulo');
        $recetaWhere = Receta::where('titulo',$titulo)->get();
        return response()->json(['receta' => $recetaWhere]);

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
