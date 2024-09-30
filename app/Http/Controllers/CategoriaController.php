<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CategoriaModel;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $catPaginate = Categoria::paginate(10);
        //Obtener todos los registros.
        return response()->json(['categoria'=>$catPaginate]);

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
        $cat = Categoria::create(['description'=>$request->description]);
        return response()->json(['description'=> $cat]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $cat = $request->query('id');
        $catWhere = Categoria::where('categoria',$id)->get();
        return response()->json(['id' => $catWhere]);
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
