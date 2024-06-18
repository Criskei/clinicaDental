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
        $dentistas = dentista::with('usuario')->get();
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
    public function show($id)
    {
        $dentista = dentista::with('usuario')->find($id);

        if ($dentista) {
            $usuario = $dentista->usuario;

            $especialidades = $dentista->especialidades()->get();

            $citas = $dentista->citas()
                ->with([
                    'paciente.usuario',
                    'estado'
                ])
                ->get();

            $tratamientos = $dentista->historiales_medicos()
                ->with([
                    'paciente.usuario',
                    'tratamiento',
                    'diente',
                    'receta_medica',
                    'estado',
                    'tipo_historial',
                    'citas_historiales'
                ])
                ->get();

            $documentos = $dentista->documentos_clinicos()
                ->with([
                    'paciente.usuario',
                    'categoria_documento'
                ])
                ->get();

            $ausencias = $dentista->motivos()->get();
        } else {
            // Manejar el caso en que el paciente no sea encontrado
            $usuario = null;
            $dentista = null;
            $citas = collect();
            $tratamientos = collect();
            $especialidades = collect();
            $documentos = collect();
            $ausencias = collect();
        }


        return Inertia::render('Admi/DentistaInfo', [
            'usuario' => $usuario,
            'dentista' => $dentista,
            'tratamientos' => $tratamientos,
            'citas' => $citas,
            'documentos' => $documentos,
            'especialidades'=>$especialidades,
            'ausencias'=>$ausencias,
        ]);
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
