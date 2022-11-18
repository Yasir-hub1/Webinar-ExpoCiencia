<?php

namespace Database\Seeders;

use App\Models\Profesion;
use Illuminate\Database\Seeder;

class ProfesionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prof=[
            [
                'nombre'=>'Docente',
            ],
            [
                'nombre'=>'Estudiante',
            ],
            [
                'nombre'=>'Ing. Sistemas',
            ],
            [
                'nombre'=>'Ing. Software',
            ],
            [
                'nombre'=>'Ing. Informatico ',
            ],
            [
                'nombre'=>'Full Stack Javascript ',
            ],
            [
                'nombre'=>'DevOs ',
            ],
            [
                'nombre'=>'Ing. Mecánico ',
            ],
            [
                'nombre'=>'Ing. Redes y telecomunicaciones',
            ],
            [
                'nombre'=>'Otros',
            ],
        ];
        foreach ($prof as $profes) {
            Profesion::create($profes);
        }
    }
}
