<?php

namespace App\Http\Controllers;

use App\Models\esemeny;
use App\Http\Requests\StoreesemenyRequest;
use App\Http\Requests\UpdateesemenyRequest;
use illuminate\http\Request;

class EsemenyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return esemeny::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreesemenyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $esemeny = esemeny::findOrFail($id);

        if (!$esemeny) {
            return response()->json([
                'message' => 'Esemény nem található!'
            ],404);
        }

        return response()->json($esemeny);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
        'esemeny_nev' => 'required | string',
        ]);

        $esemeny = esemeny::findOrFail($id);

        $esemeny->update(['esemeny_nev' => $request->input('esemeny_nev')]);
        return response()->json([
        'message' => 'Esemény sikeresen frissítve',
        'data' => $esemeny
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $esemeny = esemeny::findOrFail($id);
        $esemeny->delete();

        return response()->json([
            'message'=>'Esemény sikeresen törölve!'
        ]);
    }
}
