<?php

namespace Database\Seeders;

use App\Models\Idioma;
use Illuminate\Database\Seeder;

class IdiomaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $idioma =
            [
                [
                    "nombreIdioma" => "Inglés"
                ],
                [
                    "nombreIdioma" => "Chino"
                ], [
                    "nombreIdioma" => "mandarín"
                ],
                [
                    "nombreIdioma" => "Hindi"
                ],
                [
                    "nombreIdioma" => "Español"
                ],
                [
                    "nombreIdioma" => "Francés"
                ],
                [
                    "nombreIdioma" => "Árabe"
                ],
                [
                    "nombreIdioma" => "Bengalí"
                ],
                [
                    "nombreIdioma" => "Ruso"
                ],
                [
                    "nombreIdioma" => "Portugués"
                ],
                [
                    "nombreIdioma" => "Urdu"
                ],

            ];
        foreach ($idioma as $idiomas) {
            Idioma::create($idiomas);
        }
    }
}
