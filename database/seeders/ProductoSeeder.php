<?php

namespace Database\Seeders;

use App\Models\producto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        producto::insert([
            // Instrumental Dental
            [
                'categoria_id' => 1, // Instrumental Dental
                'foto' => 'url_de_la_foto',
                'nombre' => 'Espejo Dental',
                'descripcion' => 'Instrumento utilizado para inspeccionar los dientes.',
                'cantidad' => 100,
                'cantidad_min' => 20,
                'activo' => 1
            ],
            [
                'categoria_id' => 1, // Instrumental Dental
                'foto' => 'url_de_la_foto',
                'nombre' => 'Sonda Exploradora',
                'descripcion' => 'Instrumento utilizado para detectar caries y problemas dentales.',
                'cantidad' => 150,
                'cantidad_min' => 30,
                'activo' => 1
            ],

            // Restauración
            [
                'categoria_id' => 2, // Restauración
                'foto' => 'url_de_la_foto',
                'nombre' => 'Resina Compuesta',
                'descripcion' => 'Material utilizado para restaurar dientes cariados.',
                'cantidad' => 200,
                'cantidad_min' => 50,
                'activo' => 1
            ],
            [
                'categoria_id' => 2, // Restauración
                'foto' => 'url_de_la_foto',
                'nombre' => 'Amalgama Dental',
                'descripcion' => 'Material de restauración utilizado para obturaciones.',
                'cantidad' => 100,
                'cantidad_min' => 20,
                'activo' => 1
            ],

            // Impresión
            [
                'categoria_id' => 3, // Impresión
                'foto' => 'url_de_la_foto',
                'nombre' => 'Alginato',
                'descripcion' => 'Material de impresión para tomar moldes dentales.',
                'cantidad' => 300,
                'cantidad_min' => 50,
                'activo' => 1
            ],
            [
                'categoria_id' => 3, // Impresión
                'foto' => 'url_de_la_foto',
                'nombre' => 'Silicona de Adición',
                'descripcion' => 'Material de impresión de alta precisión.',
                'cantidad' => 200,
                'cantidad_min' => 40,
                'activo' => 1
            ],

            // Profilaxis
            [
                'categoria_id' => 4, // Profilaxis
                'foto' => 'url_de_la_foto',
                'nombre' => 'Pasta Profiláctica',
                'descripcion' => 'Pasta utilizada para la limpieza dental profesional.',
                'cantidad' => 500,
                'cantidad_min' => 100,
                'activo' => 1
            ],
            [
                'categoria_id' => 4, // Profilaxis
                'foto' => 'url_de_la_foto',
                'nombre' => 'Cepillos de Profilaxis',
                'descripcion' => 'Cepillos utilizados para la limpieza dental profesional.',
                'cantidad' => 400,
                'cantidad_min' => 80,
                'activo' => 1
            ],

            // Desinfección y Esterilización
            [
                'categoria_id' => 5, // Desinfección y Esterilización
                'foto' => 'url_de_la_foto',
                'nombre' => 'Autoclave',
                'descripcion' => 'Equipo utilizado para esterilizar instrumentos dentales.',
                'cantidad' => 10,
                'cantidad_min' => 2,
                'activo' => 1
            ],
            [
                'categoria_id' => 5, // Desinfección y Esterilización
                'foto' => 'url_de_la_foto',
                'nombre' => 'Solución Desinfectante',
                'descripcion' => 'Líquido utilizado para desinfectar superficies y equipos.',
                'cantidad' => 100,
                'cantidad_min' => 20,
                'activo' => 1
            ],

            // Endodoncia
            [
                'categoria_id' => 6, // Endodoncia
                'foto' => 'url_de_la_foto',
                'nombre' => 'Limas Endodónticas',
                'descripcion' => 'Instrumentos utilizados para el tratamiento de conductos radiculares.',
                'cantidad' => 200,
                'cantidad_min' => 40,
                'activo' => 1
            ],
            [
                'categoria_id' => 6, // Endodoncia
                'foto' => 'url_de_la_foto',
                'nombre' => 'Sellador de Conductos',
                'descripcion' => 'Material utilizado para sellar los conductos radiculares.',
                'cantidad' => 150,
                'cantidad_min' => 30,
                'activo' => 1
            ],

            // Ortodoncia
            [
                'categoria_id' => 7, // Ortodoncia
                'foto' => 'url_de_la_foto',
                'nombre' => 'Brackets Metálicos',
                'descripcion' => 'Componentes utilizados para la corrección dental.',
                'cantidad' => 300,
                'cantidad_min' => 60,
                'activo' => 1
            ],
            [
                'categoria_id' => 7, // Ortodoncia
                'foto' => 'url_de_la_foto',
                'nombre' => 'Arcos Ortodónticos',
                'descripcion' => 'Arcos utilizados para mover los dientes a la posición correcta.',
                'cantidad' => 250,
                'cantidad_min' => 50,
                'activo' => 1
            ],

            // Higiene Bucal
            [
                'categoria_id' => 8, // Higiene Bucal
                'foto' => 'url_de_la_foto',
                'nombre' => 'Cepillos Dentales',
                'descripcion' => 'Cepillos utilizados para la higiene dental diaria.',
                'cantidad' => 1000,
                'cantidad_min' => 200,
                'activo' => 1
            ],
            [
                'categoria_id' => 8, // Higiene Bucal
                'foto' => 'url_de_la_foto',
                'nombre' => 'Hilo Dental',
                'descripcion' => 'Hilo utilizado para la limpieza interdental.',
                'cantidad' => 800,
                'cantidad_min' => 160,
                'activo' => 1
            ],

            // Anestésicos
            [
                'categoria_id' => 9, // Anestésicos
                'foto' => 'url_de_la_foto',
                'nombre' => 'Lidocaína',
                'descripcion' => 'Anestésico local utilizado para procedimientos dentales.',
                'cantidad' => 500,
                'cantidad_min' => 100,
                'activo' => 1
            ],
            [
                'categoria_id' => 9, // Anestésicos
                'foto' => 'url_de_la_foto',
                'nombre' => 'Articaína',
                'descripcion' => 'Anestésico local de alta eficacia.',
                'cantidad' => 400,
                'cantidad_min' => 80,
                'activo' => 1
            ],

            // Protección Personal
            [
                'categoria_id' => 10, // Protección Personal
                'foto' => 'url_de_la_foto',
                'nombre' => 'Guantes de Nitrilo',
                'descripcion' => 'Guantes utilizados para proteger las manos durante los procedimientos.',
                'cantidad' => 1000,
                'cantidad_min' => 200,
                'activo' => 1
            ],
            [
                'categoria_id' => 10, // Protección Personal
                'foto' => 'url_de_la_foto',
                'nombre' => 'Mascarillas Quirúrgicas',
                'descripcion' => 'Mascarillas utilizadas para proteger contra infecciones.',
                'cantidad' => 800,
                'cantidad_min' => 160,
                'activo' => 1
            ],

            // Cirugía Oral
            [
                'categoria_id' => 11, // Cirugía Oral
                'foto' => 'url_de_la_foto',
                'nombre' => 'Bisturí Dental',
                'descripcion' => 'Instrumento utilizado para incisiones durante cirugías orales.',
                'cantidad' => 150,
                'cantidad_min' => 30,
                'activo' => 1
            ],
            [
                'categoria_id' => 11, // Cirugía Oral
                'foto' => 'url_de_la_foto',
                'nombre' => 'Elevadores Dentales',
                'descripcion' => 'Instrumentos utilizados para la extracción de dientes.',
                'cantidad' => 100,
                'cantidad_min' => 20,
                'activo' => 1
            ],

            // Radiología
            [
                'categoria_id' => 12, // Radiología
                'foto' => 'url_de_la_foto',
                'nombre' => 'Placas de Radiografía',
                'descripcion' => 'Placas utilizadas para tomar radiografías dentales.',
                'cantidad' => 500,
                'cantidad_min' => 100,
                'activo' => 1
            ],
            [
                'categoria_id' => 12, // Radiología
                'foto' => 'url_de_la_foto',
                'nombre' => 'Fijador de Radiografía',
                'descripcion' => 'Solución utilizada para fijar imágenes radiográficas.',
                'cantidad' => 300,
                'cantidad_min' => 60,
                'activo' => 1
            ],

            // Blanqueamiento Dental
            [
                'categoria_id' => 13, // Blanqueamiento Dental
                'foto' => 'url_de_la_foto',
                'nombre' => 'Gel Blanqueador',
                'descripcion' => 'Gel utilizado para blanquear los dientes.',
                'cantidad' => 200,
                'cantidad_min' => 40,
                'activo' => 1
            ],
            [
                'categoria_id' => 13, // Blanqueamiento Dental
                'foto' => 'url_de_la_foto',
                'nombre' => 'Kit de Blanqueamiento',
                'descripcion' => 'Kit completo para el blanqueamiento dental.',
                'cantidad' => 150,
                'cantidad_min' => 30,
                'activo' => 1
            ],

            // Accesorios y Consumibles
            [
                'categoria_id' => 14, // Accesorios y Consumibles
                'foto' => 'url_de_la_foto',
                'nombre' => 'Vasos Desechables',
                'descripcion' => 'Vasos utilizados para enjuague bucal en el consultorio.',
                'cantidad' => 1000,
                'cantidad_min' => 200,
                'activo' => 1
            ],
            [
                'categoria_id' => 14, // Accesorios y Consumibles
                'foto' => 'url_de_la_foto',
                'nombre' => 'Batas Desechables',
                'descripcion' => 'Batas utilizadas para procedimientos clínicos.',
                'cantidad' => 500,
                'cantidad_min' => 100,
                'activo' => 1
            ]
        ]);
    }
}
