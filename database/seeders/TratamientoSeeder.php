<?php

namespace Database\Seeders;

use App\Models\tratamiento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TratamientoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        tratamiento::insert([
            // Endodoncia
            [
                'especialidad_id' => 1, // Endodoncia
                'nombre_tratamiento' => 'Tratamiento de Conducto',
                'descripcion' => 'Eliminación de la pulpa dental infectada y sellado del conducto radicular.',
                'precio' => 800.00,
                'duracion' => 90, // Duración en minutos
                'activo' => 1
            ],
            [
                'especialidad_id' => 1, // Endodoncia
                'nombre_tratamiento' => 'Retratamiento de Conducto',
                'descripcion' => 'Retratamiento de un conducto previamente tratado.',
                'precio' => 900.00,
                'duracion' => 120, // Duración en minutos
                'activo' => 1
            ],

            // Periodoncia
            [
                'especialidad_id' => 2, // Periodoncia
                'nombre_tratamiento' => 'Limpieza Profunda de Encías',
                'descripcion' => 'Eliminación de sarro y placa bacteriana debajo de las encías.',
                'precio' => 200.00,
                'duracion' => 60, // Duración en minutos
                'activo' => 1
            ],
            [
                'especialidad_id' => 2, // Periodoncia
                'nombre_tratamiento' => 'Injerto de Encías',
                'descripcion' => 'Procedimiento para cubrir raíces expuestas y mejorar la salud de las encías.',
                'precio' => 700.00,
                'duracion' => 90, // Duración en minutos
                'activo' => 1
            ],

            // Ortodoncia
            [
                'especialidad_id' => 3, // Ortodoncia
                'nombre_tratamiento' => 'Brackets Metálicos',
                'descripcion' => 'Corrección de alineación dental mediante brackets metálicos.',
                'precio' => 1500.00,
                'duracion' => 90, // Duración en minutos
                'activo' => 1
            ],
            [
                'especialidad_id' => 3, // Ortodoncia
                'nombre_tratamiento' => 'Invisalign',
                'descripcion' => 'Alineadores transparentes para corregir la posición de los dientes.',
                'precio' => 2000.00,
                'duracion' => 60, // Duración en minutos
                'activo' => 1
            ],

            // Odontopediatría
            [
                'especialidad_id' => 4, // Odontopediatría
                'nombre_tratamiento' => 'Selladores de Fisuras',
                'descripcion' => 'Aplicación de selladores para prevenir caries en dientes de niños.',
                'precio' => 100.00,
                'duracion' => 30, // Duración en minutos
                'activo' => 1
            ],
            [
                'especialidad_id' => 4, // Odontopediatría
                'nombre_tratamiento' => 'Fluorización',
                'descripcion' => 'Aplicación de flúor para fortalecer el esmalte dental.',
                'precio' => 50.00,
                'duracion' => 15, // Duración en minutos
                'activo' => 1
            ],

            // Prostodoncia
            [
                'especialidad_id' => 5, // Prostodoncia
                'nombre_tratamiento' => 'Prótesis Parcial Removible',
                'descripcion' => 'Prótesis para reemplazar varios dientes perdidos.',
                'precio' => 800.00,
                'duracion' => 120, // Duración en minutos
                'activo' => 1
            ],
            [
                'especialidad_id' => 5, // Prostodoncia
                'nombre_tratamiento' => 'Prótesis Total',
                'descripcion' => 'Prótesis para reemplazar todos los dientes en una arcada.',
                'precio' => 1200.00,
                'duracion' => 150, // Duración en minutos
                'activo' => 1
            ],

            // Cirugía Oral y Maxilofacial
            [
                'especialidad_id' => 6, // Cirugía Oral y Maxilofacial
                'nombre_tratamiento' => 'Extracción de Muelas del Juicio',
                'descripcion' => 'Extracción quirúrgica de las muelas del juicio.',
                'precio' => 300.00,
                'duracion' => 60, // Duración en minutos
                'activo' => 1
            ],
            [
                'especialidad_id' => 6, // Cirugía Oral y Maxilofacial
                'nombre_tratamiento' => 'Cirugía Ortognática',
                'descripcion' => 'Cirugía para corregir deformidades de la mandíbula.',
                'precio' => 5000.00,
                'duracion' => 240, // Duración en minutos
                'activo' => 1
            ],

            // Odontología General
            [
                'especialidad_id' => 7, // Odontología General
                'nombre_tratamiento' => 'Limpieza Dental',
                'descripcion' => 'Limpieza de dientes para eliminar sarro y placa.',
                'precio' => 100.00,
                'duracion' => 30, // Duración en minutos
                'activo' => 1
            ],
            [
                'especialidad_id' => 7, // Odontología General
                'nombre_tratamiento' => 'Empaste Dental',
                'descripcion' => 'Relleno de cavidades causadas por caries.',
                'precio' => 80.00,
                'duracion' => 45, // Duración en minutos
                'activo' => 1
            ],
            [
                'especialidad_id' => 7, // Odontología General
                'nombre_tratamiento' => 'Extracción Dental',
                'descripcion' => 'Extracción de un diente dañado o afectado.',
                'precio' => 150.00,
                'duracion' => 60, // Duración en minutos
                'activo' => 1
            ],

            // Odontología Estética
            [
                'especialidad_id' => 8, // Odontología Estética
                'nombre_tratamiento' => 'Blanqueamiento Dental',
                'descripcion' => 'Tratamiento para aclarar el color de los dientes.',
                'precio' => 200.00,
                'duracion' => 45, // Duración en minutos
                'activo' => 1
            ],
            [
                'especialidad_id' => 8, // Odontología Estética
                'nombre_tratamiento' => 'Carillas Dentales',
                'descripcion' => 'Laminados delgados de porcelana para mejorar la apariencia dental.',
                'precio' => 1000.00,
                'duracion' => 90, // Duración en minutos
                'activo' => 1
            ],

            // Implantología
            [
                'especialidad_id' => 9, // Implantología
                'nombre_tratamiento' => 'Implante Dental',
                'descripcion' => 'Colocación de implantes dentales para reemplazar dientes perdidos.',
                'precio' => 2000.00,
                'duracion' => 180, // Duración en minutos
                'activo' =>1
            ],
            [
                'especialidad_id' => 9, // Implantología
                'nombre_tratamiento' => 'Colocación de Corona sobre Implante',
                'descripcion' => 'Colocación de una corona dental sobre un implante previamente colocado.',
                'precio' => 1200.00,
                'duracion' => 90, // Duración en minutos
                'activo' => 1
            ],

            // Patología Oral y Maxilofacial
            [
                'especialidad_id' => 10, // Patología Oral y Maxilofacial
                'nombre_tratamiento' => 'Biopsia Oral',
                'descripcion' => 'Extracción de tejido para análisis patológico.',
                'precio' => 300.00,
                'duracion' => 45, // Duración en minutos
                'activo' => 1
            ],
            [
                'especialidad_id' => 10, // Patología Oral y Maxilofacial
                'nombre_tratamiento' => 'Tratamiento de Lesiones Bucales',
                'descripcion' => 'Tratamiento de diversas lesiones y enfermedades en la boca.',
                'precio' => 250.00,
                'duracion' => 60, // Duración en minutos
                'activo' => 1
            ],

            // Radiología Oral y Maxilofacial
            [
                'especialidad_id' => 11, // Radiología Oral y Maxilofacial
                'nombre_tratamiento' => 'Radiografía Panorámica',
                'descripcion' => 'Imagen panorámica de la mandíbula y los dientes.',
                'precio' => 50.00,
                'duracion' => 15, // Duración en minutos
                'activo' => 1
            ],
            [
                'especialidad_id' => 11, // Radiología Oral y Maxilofacial
                'nombre_tratamiento' => 'Tomografía Computarizada',
                'descripcion' => 'Imágenes detalladas de los huesos y tejidos blandos de la boca.',
                'precio' => 300.00,
                'duracion' => 30, // Duración en minutos
                'activo' => 1
            ],

            // Odontología Geriátrica
            [
                'especialidad_id' => 12, // Odontología Geriátrica
                'nombre_tratamiento' => 'Cuidado Dental Geriátrico',
                'descripcion' => 'Tratamientos dentales especializados para personas mayores.',
                'precio' => 100.00,
                'duracion' => 60, // Duración en minutos
                'activo' => 1
            ],
            [
                'especialidad_id' => 12, // Odontología Geriátrica
                'nombre_tratamiento' => 'Prótesis Dentales para Mayores',
                'descripcion' => 'Prótesis adaptadas a las necesidades de los pacientes geriátricos.',
                'precio' => 1000.00,
                'duracion' => 90, // Duración en minutos
                'activo' => 1
            ],

            // Odontología Forense
            [
                'especialidad_id' => 13, // Odontología Forense
                'nombre_tratamiento' => 'Identificación Forense Dental',
                'descripcion' => 'Identificación de individuos a través de registros dentales.',
                'precio' => 0.00,
                'duracion' => 120, // Duración en minutos
                'activo' => 1
            ],
            [
                'especialidad_id' => 13, // Odontología Forense
                'nombre_tratamiento' => 'Análisis de Mordeduras',
                'descripcion' => 'Análisis de marcas de mordeduras para casos forenses.',
                'precio' => 0.00,
                'duracion' => 90, // Duración en minutos
                'activo' => 1
            ],

            // Odontología Deportiva
            [
                'especialidad_id' => 14, // Odontología Deportiva
                'nombre_tratamiento' => 'Protector Bucal Deportivo',
                'descripcion' => 'Fabricación de protectores bucales personalizados para atletas.',
                'precio' => 150.00,
                'duracion' => 30, // Duración en minutos
                'activo' => 1
            ],
            [
                'especialidad_id' => 14, // Odontología Deportiva
                'nombre_tratamiento' => 'Tratamiento de Lesiones Dentales en Deportistas',
                'descripcion' => 'Tratamiento especializado para lesiones dentales comunes en deportes.',
                'precio' => 300.00,
                'duracion' => 60, // Duración en minutos
                'activo' => 1
            ]
        ]);
    }
}
