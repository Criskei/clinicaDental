<?php

namespace App\Http\Controllers;

use App\Models\cita;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $citas = cita::with('paciente.usuario', 'dentista.usuario', 'estado')->get();
        return Inertia::render('Admi/Citas', ['citas' => $citas]);
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
        $cita = cita::with('paciente.usuario', 'dentista.usuario', 'estado')->find($id);

        $pagos = $cita->pagos()
            ->with([
                'metodo_pago',
                'tipo_pago'
            ])
            ->get();

        $tratamientos = $cita->citas_historiales()
            ->with([
                'historial_medico.tratamiento',
                'historial_medico.diente',
                'historial_medico.receta_medica',
                'historial_medico.estado',
                'historial_medico.tipo_historial'
            ])
            ->get();


        $productos = $cita->productos()->get();

        return Inertia::render('Admi/CitaInfo', [
            'cita' => $cita,
            'pagos' => $pagos,
            'tratamientos' => $tratamientos,
            'productos' => $productos
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cita $cita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, cita $cita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cita $cita)
    {
        //
    }
}
