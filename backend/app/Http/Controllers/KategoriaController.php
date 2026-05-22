<?php

namespace App\Http\Controllers;

use App\Models\kategoria;
use App\Http\Requests\StorekategoriaRequest;
use App\Http\Requests\UpdatekategoriaRequest;
use illuminate\http\Request;

class KategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return kategoria::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorekategoriaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kategoria = kategoria::findOrFail($id);

        if (!$kategoria) {
            return response()->json([
                'message' => 'Kategória nem található!'
            ],404);
        }

        return response()->json($kategoria);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
        'kategoria_nev' => 'required | string',
        ]);

        $category = kategoria::findOrFail($id);

        $category->update(['kategoria_nev' => $request->input('kategoria_nev')]);
        return response()->json([
        'message' => 'Kategória sikeresen frissítve',
        'data' => $category
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kategoria = kategoria::findOrFail($id);
        $kategoria->delete();

        return response()->json([
            'message'=>'Kategória sikeresen törölve!'
        ]);
    }
}
