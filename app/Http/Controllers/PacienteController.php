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
        $pacientes = paciente::join('usuarios', 'pacientes.usuario_id', '=', 'usuarios.usuario_id')
            ->select('*')
            ->get();
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
        $usuario = User::join('pacientes', 'usuarios.usuario_id', '=', 'pacientes.usuario_id')
            ->where('paciente_id', $id)
            ->first();
        $paciente = paciente::find($id);

        $query = historiales_medico::where('paciente_id', $id)
            ->with('paciente', 'dentista.usuario', 'tratamiento', 'diente', 'receta_medica', 'estado', 'tipo_historial', 'citas_historiales');

        //dd($query->toSql(), $query->getBindings());

        $tratamientos = $query->get();

        $citas = cita::where('paciente_id', $id)
            ->with('dentista.usuario', 'estado', 'citas_historiales.historial_medico.tratamiento')
            ->get();

        return Inertia::render('Admi/PacienteInfo', [
            'usuario' => $usuario,
            'paciente' => $paciente,
            'tratamientos' => $tratamientos,
            'citas' => $citas
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
