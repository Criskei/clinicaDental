<?php

namespace App\Http\Controllers;

use App\Models\dentista;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DentistaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dentistas = dentista::join('usuarios', 'dentistas.usuario_id', '=', 'usuarios.usuario_id')
            ->select('*')
            ->get();
        return Inertia::render('Admi/Dentista', ['dentistas' => $dentistas]);
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
    public function show(dentista $dentista)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(dentista $dentista)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, dentista $dentista)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(dentista $dentista)
    {
        //
    }
}
