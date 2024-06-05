<?php

namespace Database\Seeders;

use App\Models\diente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        diente::insert([
            ['nombre_diente' => 'Incisivo Central Superior Derecho', 'descripcion' => 'Diente número 11, ubicado en el cuadrante superior derecho.'],
            ['nombre_diente' => 'Incisivo Lateral Superior Derecho', 'descripcion' => 'Diente número 12, ubicado al lado del incisivo central derecho.'],
            ['nombre_diente' => 'Canino Superior Derecho', 'descripcion' => 'Diente número 13, ubicado al lado del incisivo lateral derecho.'],
            ['nombre_diente' => 'Primer Premolar Superior Derecho', 'descripcion' => 'Diente número 14, ubicado al lado del canino superior derecho.'],
            ['nombre_diente' => 'Segundo Premolar Superior Derecho', 'descripcion' => 'Diente número 15, ubicado al lado del primer premolar superior derecho.'],
            ['nombre_diente' => 'Primer Molar Superior Derecho', 'descripcion' => 'Diente número 16, ubicado al lado del segundo premolar superior derecho.'],
            ['nombre_diente' => 'Segundo Molar Superior Derecho', 'descripcion' => 'Diente número 17, ubicado al lado del primer molar superior derecho.'],
            ['nombre_diente' => 'Tercer Molar Superior Derecho', 'descripcion' => 'Diente número 18, conocido como muela del juicio, ubicado al final de la arcada superior derecha.'],
            ['nombre_diente' => 'Incisivo Central Superior Izquierdo', 'descripcion' => 'Diente número 21, ubicado en el cuadrante superior izquierdo.'],
            ['nombre_diente' => 'Incisivo Lateral Superior Izquierdo', 'descripcion' => 'Diente número 22, ubicado al lado del incisivo central izquierdo.'],
            ['nombre_diente' => 'Canino Superior Izquierdo', 'descripcion' => 'Diente número 23, ubicado al lado del incisivo lateral izquierdo.'],
            ['nombre_diente' => 'Primer Premolar Superior Izquierdo', 'descripcion' => 'Diente número 24, ubicado al lado del canino superior izquierdo.'],
            ['nombre_diente' => 'Segundo Premolar Superior Izquierdo', 'descripcion' => 'Diente número 25, ubicado al lado del primer premolar superior izquierdo.'],
            ['nombre_diente' => 'Primer Molar Superior Izquierdo', 'descripcion' => 'Diente número 26, ubicado al lado del segundo premolar superior izquierdo.'],
            ['nombre_diente' => 'Segundo Molar Superior Izquierdo', 'descripcion' => 'Diente número 27, ubicado al lado del primer molar superior izquierdo.'],
            ['nombre_diente' => 'Tercer Molar Superior Izquierdo', 'descripcion' => 'Diente número 28, conocido como muela del juicio, ubicado al final de la arcada superior izquierda.'],
            ['nombre_diente' => 'Incisivo Central Inferior Derecho', 'descripcion' => 'Diente número 41, ubicado en el cuadrante inferior derecho.'],
            ['nombre_diente' => 'Incisivo Lateral Inferior Derecho', 'descripcion' => 'Diente número 42, ubicado al lado del incisivo central inferior derecho.'],
            ['nombre_diente' => 'Canino Inferior Derecho', 'descripcion' => 'Diente número 43, ubicado al lado del incisivo lateral inferior derecho.'],
            ['nombre_diente' => 'Primer Premolar Inferior Derecho', 'descripcion' => 'Diente número 44, ubicado al lado del canino inferior derecho.'],
            ['nombre_diente' => 'Segundo Premolar Inferior Derecho', 'descripcion' => 'Diente número 45, ubicado al lado del primer premolar inferior derecho.'],
            ['nombre_diente' => 'Primer Molar Inferior Derecho', 'descripcion' => 'Diente número 46, ubicado al lado del segundo premolar inferior derecho.'],
            ['nombre_diente' => 'Segundo Molar Inferior Derecho', 'descripcion' => 'Diente número 47, ubicado al lado del primer molar inferior derecho.'],
            ['nombre_diente' => 'Tercer Molar Inferior Derecho', 'descripcion' => 'Diente número 48, conocido como muela del juicio, ubicado al final de la arcada inferior derecha.'],
            ['nombre_diente' => 'Incisivo Central Inferior Izquierdo', 'descripcion' => 'Diente número 31, ubicado en el cuadrante inferior izquierdo.'],
            ['nombre_diente' => 'Incisivo Lateral Inferior Izquierdo', 'descripcion' => 'Diente número 32, ubicado al lado del incisivo central inferior izquierdo.'],
            ['nombre_diente' => 'Canino Inferior Izquierdo', 'descripcion' => 'Diente número 33, ubicado al lado del incisivo lateral inferior izquierdo.'],
            ['nombre_diente' => 'Primer Premolar Inferior Izquierdo', 'descripcion' => 'Diente número 34, ubicado al lado del canino inferior izquierdo.'],
            ['nombre_diente' => 'Segundo Premolar Inferior Izquierdo', 'descripcion' => 'Diente número 35, ubicado al lado del primer premolar inferior izquierdo.'],
            ['nombre_diente' => 'Primer Molar Inferior Izquierdo', 'descripcion' => 'Diente número 36, ubicado al lado del segundo premolar inferior izquierdo.'],
            ['nombre_diente' => 'Segundo Molar Inferior Izquierdo', 'descripcion' => 'Diente número 37, ubicado al lado del primer molar inferior izquierdo.'],
            ['nombre_diente' => 'Tercer Molar Inferior Izquierdo', 'descripcion' => 'Diente número 38, conocido como muela del juicio, ubicado al final de la arcada inferior izquierda.'],
            ['nombre_diente' => 'Dientes Superiores', 'descripcion' => 'Todos los dientes de la arcada superior.'],
            ['nombre_diente' => 'Dientes Inferiores', 'descripcion' => 'Todos los dientes de la arcada inferior.'],
            ['nombre_diente' => 'General', 'descripcion' => 'Dientes en general']
        ]);
    }
}
