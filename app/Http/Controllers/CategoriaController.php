<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Categoria::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate the request
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'nullable',
        ]);
        $categoria = Categoria::create($request->all());

        //return the created category
        return response()->json([
            'mensage' => 'Categoria creada exitosamente',
            'categoria' => $categoria
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //        $categoria = Categoria::find($id);
        $categoria = Categoria::findOrFail($id);

        if (!$categoria) {
            return response()->json([
                'message' => 'Categoria no encontrada'
            ], 404);
        }
        return response()->json([
            'message' => 'Categoria encontrada',
            'categoria' => $categoria
        ], 202);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //validate the request
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'nullable',
        ]);
        //
        $categoria = Categoria::find($id);

        if (!$categoria) {
            return response()->json([
                'message' => 'Categoria no encontrada'
            ], 404);
        }
        
        $categoria->update($request->all());
        return response()->json([
            'message' => 'Categoria actualizada exitosamente',
            'categoria' => $categoria
        ], 203);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $categoria = Categoria::find($id);
        if (!$categoria) {
            return response()->json([
                'message' => 'Categoria no encontrada'
            ], 404);
        }
        $categoria->delete();
        return response()->json([
            'message' => 'Categoria eliminada exitosamente'
        ], 204);
    }
}
