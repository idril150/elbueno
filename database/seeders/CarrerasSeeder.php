<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarrerasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $carreras = [
            'Ingeniería en Sistemas Computacionales',
            'Ingeniería Industrial',
            'Ingeniería Electrónica',
            'Ingeniería Mecánica',
            'Ingeniería Bioquímica',
            'Ingeniería en Gestión Empresarial',
            'Ingeniería Química',
            'Licenciatura en Administración',
            'Licenciatura en Contaduría'
        ];

        foreach ($carreras as $carrera) {
            DB::table('carreras')->insert([
                'nombre' => $carrera,
            ]);
        }
    }
}
