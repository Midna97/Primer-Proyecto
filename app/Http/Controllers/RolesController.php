<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Roles;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $roles = $request->input('rol');
        $rolesWhere = Roles::where('rol',$roles)->paginate(10);
        return response()->json(['rol' => $rolesWhere]);

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
        $roles = Roles::create(['id'=>$request->id,'rol'=>$request->rol]);
        return response()->json(['rol'=> $roles]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $roles = Roles::with('user')->findOrFail($id);
            return response()->json($roles);
        } catch (ModelNotFoundException $th) {
            return response()->json(['error' => 'No existe el rol'],404);
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
