<?php

namespace App\Http\Controllers;

use App\Models\TipoCultivo;
use Illuminate\Http\Request;

class TipoCultivoController extends Controller
{

    public function index()
    {
        $cultivos = TipoCultivo::all();
        return view('cultivos.index', compact('cultivos'));
    }


    public function create()
    {
        return view('cultivos.create');
    }


    public function store(Request $request)
    {
         $request->validate(['name' => 'required|string|max:255',]);

    TipoCultivo::create(['name' => $request->name]);

    return redirect()->route('cultivos.index');
    }


    public function show(string $id)
    {
        //
    }


    public function edit(TipoCultivo $cultivo)
    {
        return view('cultivos.edit', compact('cultivo'));
    }


    public function update(Request $request, TipoCultivo $cultivo)
    {
            $request->validate(['name' => 'required|string|max:255',]);

    $cultivo->update(['name' => $request->name]);

    return redirect()->route('cultivos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
