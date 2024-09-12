<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendedor;

class VendedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vendedor = Vendedor::all();
        return view('vendedores.index', ['vendedores' => $vendedor]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('vendedores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $vendedor = new Vendedor();
        $vendedor->nombre = $request->nombre;
        $vendedor->telefono = $request->telefono;
        $vendedor->dni = $request->dni;
        $vendedor->codigo = $request->codigo;
        $vendedor->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $vendedor = Vendedor::find($id);
        return view('vendedores.show', ['vendedor' => $vendedor]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $vendedor = Vendedor::find($id);
        return view('vendedores.edit', ['vendedor' => $vendedor]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $vendedor = Vendedor::find($id);
        $vendedor->nombre = $request->nombre;
        $vendedor->telefono = $request->telefono;
        $vendedor->dni = $request->dni;
        $vendedor->codigo = $request->codigo;
        $vendedor->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $vendedor = Vendedor::find($id);
        $vendedor->delete();
    }
}
