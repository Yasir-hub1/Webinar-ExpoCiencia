<?php

namespace Database\Seeders;

use App\Models\Pais;
use Illuminate\Database\Seeder;

class PaisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pais=[
            [
                'nombrePais'=>'Afghanistan',
            ],
            [
                'nombrePais'=>'Åland Islands',
            ],
            [
                'nombrePais'=>'Albania',
            ],
            [
                'nombrePais'=>'Algeria',
            ],
            [
                'nombrePais'=>'American Samoa',
            ],
            [
                'nombrePais'=>'Andorra',
            ],
            [
                'nombrePais'=>'Angola',
            ],
            [
                'nombrePais'=>'Anguilla',
            ],
            [
                'nombrePais'=>'Antarctica',
            ],
            [
                'nombrePais'=>'Antigua and Barbuda',
            ],
            [
                'nombrePais'=>'Argentina',
            ],
            [
                'nombrePais'=>'Armenia',
            ],
            [
                'nombrePais'=>'Aruba',
            ],
            [
                'nombrePais'=>'Australia',
            ],
            [
                'nombrePais'=>'Austria',
            ],
            [
                'nombrePais'=>'Azerbaijan',
            ],
            [
                'nombrePais'=>'Bahamas',
            ],
            [
                'nombrePais'=>'Bahrain',
            ],
            [
                'nombrePais'=>'Bangladesh',
            ],
            [
                'nombrePais'=>'Barbados',
            ],
            [
                'nombrePais'=>'Belarus',
            ],
            [
                'nombrePais'=>'Belgium',
            ],
            [
                'nombrePais'=>'Belize',
            ],
            [
                'nombrePais'=>'Benin',
            ],
            [
                'nombrePais'=>'Bermuda',
            ],
            [
                'nombrePais'=>'Bhutan',
            ],
            [
                'nombrePais'=>'Bolivia',
            ],
            [
                'nombrePais'=>'Bonaire, Sint Eustatius and Saba',
            ],
            [
                'nombrePais'=>'Bosnia and Herzegovina',
            ],
            [
                'nombrePais'=>'Botswana',
            ],
            [
                'nombrePais'=>'Bouvet Island',
            ],
            [
                'nombrePais'=>'Brazil',
            ],
            [
                'nombrePais'=>'British Indian Ocean Territory',
            ],
            [
                'nombrePais'=>'Brunei Darussalam',
            ],
            [
                'nombrePais'=>'Bulgaria',
            ],
            [
                'nombrePais'=>'Burkina Faso',
            ],
            [
                'nombrePais'=>'Burundi',
            ],
            [
                'nombrePais'=>'Cabo Verde',
            ],
            [
                'nombrePais'=>'Cambodia',
            ],
            [
                'nombrePais'=>'Cameroon',
            ],
            [
                'nombrePais'=>'Canada',
            ],
            [
                'nombrePais'=>'Cayman Islands',
            ],
            [
                'nombrePais'=>'Central African Republic',
            ],
            [
                'nombrePais'=>'Chad',
            ],
            [
                'nombrePais'=>'Chile',
            ],
            [
                'nombrePais'=>'China',
            ],
            [
                'nombrePais'=>'Christmas Island',
            ],
            [
                'nombrePais'=>'Colombia',
            ],
            [
                'nombrePais'=>'Costa Rica',
            ],
            [
                'nombrePais'=>'Croatia',
            ],
            [
                'nombrePais'=>'Cuba',
            ],
            [
                'nombrePais'=>'Dominica',
            ],
            [
                'nombrePais'=>'Dominican Republic',
            ],
            [
                'nombrePais'=>'Ecuador',
            ],
            [
                'nombrePais'=>'Egypt',
            ],
            [
                'nombrePais'=>'El Salvador',
            ],
            [
                'nombrePais'=>'Finland',
            ],
            [
                'nombrePais'=>'France',
            ],
            [
                'nombrePais'=>'French Guiana',
            ],
            [
                'nombrePais'=>'Georgia',
            ],
            [
                'nombrePais'=>'Germany',
            ],
            [
                'nombrePais'=>'Greece',
            ],
            [
                'nombrePais'=>'Guatemala',
            ],
            [
                'nombrePais'=>'Haiti',
            ],
            [
                'nombrePais'=>'Honduras',
            ],
            [
                'nombrePais'=>'Hong Kong',
            ],
            [
                'nombrePais'=>'Hungary',
            ],
            [
                'nombrePais'=>'Iceland',
            ],
            [
                'nombrePais'=>'India',
            ],
            [
                'nombrePais'=>'Indonesia',
            ],
            [
                'nombrePais'=>'Italy',
            ],
            [
                'nombrePais'=>'Japan',
            ],
            [
                'nombrePais'=>'Madagascar',
            ],
            [
                'nombrePais'=>'Malaysia',
            ],
            [
                'nombrePais'=>'Mexico',
            ],
            [
                'nombrePais'=>'New Zealand',
            ],
            [
                'nombrePais'=>'Nicaragua',
            ],
            [
                'nombrePais'=>'Nigeria',
            ],
            [
                'nombrePais'=>'North Korea',
            ],
            [
                'nombrePais'=>'Paraguay',
            ],
            [
                'nombrePais'=>'Peru',
            ],
            [
                'nombrePais'=>'Philippines',
            ],
            [
                'nombrePais'=>'Poland',
            ],
            [
                'nombrePais'=>'Portugal',
            ],
            [
                'nombrePais'=>'Puerto Rico',
            ],
            [
                'nombrePais'=>'Romania',
            ],
            [
                'nombrePais'=>'Russian Federation',
            ],
            [
                'nombrePais'=>'Samoa',
            ],
            [
                'nombrePais'=>'Singapore',
            ],
            [
                'nombrePais'=>'South Africa',
            ],
            [
                'nombrePais'=>'South Korea',
            ],
            [
                'nombrePais'=>'Spain',
            ],
            [
                'nombrePais'=>'Taiwan',
            ],
            [
                'nombrePais'=>'United States',
            ],
            [
                'nombrePais'=>'Uruguay',
            ],
            [
                'nombrePais'=>'Venezuela',
            ],
            [
                'nombrePais'=>'Vietnam',
            ],
            [
                'nombrePais'=>'Virgin Islands, British',
            ],
            [
                'nombrePais'=>'Virgin Islands, U.S.',
            ],
            [
                'nombrePais'=>'Yemen',
            ],
            [
                'nombrePais'=>'Zambia',
            ],
            [
                'nombrePais'=>'Zimbabwe',
            ],



        ];
        foreach ($pais as $paises) {
            Pais::create($paises);
        }
    }
}
