<?php

namespace App\Http\Controllers;

use App\Models\producto;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = producto::with('categoria')->get();
        return Inertia::render('Admi/Producto', ['productos' => $productos]);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $producto = producto::with('categoria')->find($id);
        $categoria = $producto->categoria;

        $proveedores = $producto->proveedores()->get();

        $tratamientos = $producto->tratamientos()->get();

        $citas = $producto->citas()->get();

        return Inertia::render('Admi/ProductoInfo', [
            'producto' => $producto,
            'categoria' => $categoria,
            'proveedores' => $proveedores,
            'tratamientos' => $tratamientos,
            'citas' => $citas
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(producto $producto)
    {
        //
    }
}
