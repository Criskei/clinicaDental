<?php

namespace App\Http\Controllers;

use App\Models\cita;
use App\Models\historiales_medico;
use App\Models\paciente;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Psy\Readline\Hoa\Console;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pacientes = paciente::with('usuario')->get();
        return Inertia::render('Admi/Paciente', ['pacientes' => $pacientes]);
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
        $paciente = Paciente::with('usuario')->find($id);

        if ($paciente) {
            $usuario = $paciente->usuario;

            $tratamientos = $paciente->historiales_medicos()
                ->with([
                    'paciente',
                    'dentista.usuario',
                    'tratamiento',
                    'diente',
                    'receta_medica',
                    'estado',
                    'tipo_historial',
                    'citas_historiales'
                ])
                ->get();

            $citas = $paciente->citas()
                ->with([
                    'dentista.usuario',
                    'estado',
                    'citas_historiales.historial_medico.tratamiento'
                ])
                ->get();

            $documentos = $paciente->documentos_clinicos()
                ->with([
                    'dentista.usuario',
                    'categoria_documento'
                ])
                ->get();
        } else {
            // Manejar el caso en que el paciente no sea encontrado
            $usuario = null;
            $paciente = null;
            $tratamientos = collect();
            $citas = collect();
            $documentos = collect();
        }


        return Inertia::render('Admi/PacienteInfo', [
            'usuario' => $usuario,
            'paciente' => $paciente,
            'tratamientos' => $tratamientos,
            'citas' => $citas,
            'documentos' => $documentos
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(paciente $paciente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, paciente $paciente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(paciente $paciente)
    {
        //
    }
}
