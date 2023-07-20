<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = [
            ['name' => 'Algeria', 'french_name' => 'Algérie', 'code' => 213],
            ['name' => 'Angola', 'french_name' => 'Angola', 'code' => 244],
            ['name' => 'Benin', 'french_name' => 'Bénin', 'code' => 229],
            ['name' => 'Botswana', 'french_name' => 'Botswana', 'code' => 267],
            ['name' => 'Burkina Faso', 'french_name' => 'Burkina Faso', 'code' => 226],
            ['name' => 'Burundi', 'french_name' => 'Burundi', 'code' => 257],
            ['name' => 'Cameroon', 'french_name' => 'Cameroun', 'code' => 237],
            ['name' => 'Cape Verde', 'french_name' => 'Cap-Vert', 'code' => 238],
            ['name' => 'Central African Republic', 'french_name' => 'République centrafricaine', 'code' => 236],
            ['name' => 'Chad', 'french_name' => 'Tchad', 'code' => 235],
            ['name' => 'Comoros', 'french_name' => 'Comores', 'code' => 269],
            ['name' => "Côte d'Ivoire", 'french_name' => "Côte d'Ivoire", 'code' => 225],
            ['name' => 'Democratic Republic of the Congo', 'french_name' => 'République démocratique du Congo', 'code' => 243],
            ['name' => 'Djibouti', 'french_name' => 'Djibouti', 'code' => 253],
            ['name' => 'Egypt', 'french_name' => 'Égypte', 'code' => 20],
            ['name' => 'Equatorial Guinea', 'french_name' => 'Guinée équatoriale', 'code' => 240],
            ['name' => 'Eritrea', 'french_name' => 'Érythrée', 'code' => 291],
            ['name' => 'Eswatini', 'french_name' => 'Eswatini', 'code' => 268],
            ['name' => 'Ethiopia', 'french_name' => 'Éthiopie', 'code' => 251],
            ['name' => 'Gabon', 'french_name' => 'Gabon', 'code' => 241],
            ['name' => 'Gambia', 'french_name' => 'Gambie', 'code' => 220],
            ['name' => 'Ghana', 'french_name' => 'Ghana', 'code' => 233],
            ['name' => 'Guinea', 'french_name' => 'Guinée', 'code' => 224],
            ['name' => 'Guinea-Bissau', 'french_name' => 'Guinée-Bissau', 'code' => 245],
            ['name' => 'Kenya', 'french_name' => 'Kenya', 'code' => 254],
            ['name' => 'Lesotho', 'french_name' => 'Lesotho', 'code' => 266],
            ['name' => 'Liberia', 'french_name' => 'Libéria', 'code' => 231],
            ['name' => 'Libya', 'french_name' => 'Libye', 'code' => 218],
            ['name' => 'Madagascar', 'french_name' => 'Madagascar', 'code' => 261],
            ['name' => 'Malawi', 'french_name' => 'Malawi', 'code' => 265],
            ['name' => 'Mali', 'french_name' => 'Mali', 'code' => 223],
            ['name' => 'Mauritania', 'french_name' => 'Mauritanie', 'code' => 222],
            ['name' => 'Mauritius', 'french_name' => 'Maurice', 'code' => 230],
            ['name' => 'Mayotte', 'french_name' => 'Mayotte', 'code' => 262],
            ['name' => 'Morocco', 'french_name' => 'Maroc', 'code' => 212],
            ['name' => 'Mozambique', 'french_name' => 'Mozambique', 'code' => 258],
            ['name' => 'Namibia', 'french_name' => 'Namibie', 'code' => 264],
            ['name' => 'Niger', 'french_name' => 'Niger', 'code' => 227],
            ['name' => 'Nigeria', 'french_name' => 'Nigéria', 'code' => 234],
            ['name' => 'Republic of the Congo', 'french_name' => 'République du Congo', 'code' => 242],
            ['name' => 'Réunion', 'french_name' => 'Réunion', 'code' => 262],
            ['name' => 'Rwanda', 'french_name' => 'Rwanda', 'code' => 250],
            ['name' => 'Saint Helena, Ascension and Tristan da Cunha', 'french_name' => 'Sainte-Hélène, Ascension et Tristan da Cunha', 'code' => 290],
            ['name' => 'São Tomé and Príncipe', 'french_name' => 'São Tomé-et-Principe', 'code' => 239],
            ['name' => 'Senegal', 'french_name' => 'Sénégal', 'code' => 221],
            ['name' => 'Seychelles', 'french_name' => 'Seychelles', 'code' => 248],
            ['name' => 'Sierra Leone', 'french_name' => 'Sierra Leone', 'code' => 232],
            ['name' => 'Somalia', 'french_name' => 'Somalie', 'code' => 252],
            ['name' => 'South Africa', 'french_name' => 'Afrique du Sud', 'code' => 27],
            ['name' => 'South Sudan', 'french_name' => 'Soudan du Sud', 'code' => 211],
            ['name' => 'Sudan', 'french_name' => 'Soudan', 'code' => 249],
            ['name' => 'Tanzania', 'french_name' => 'Tanzanie', 'code' => 255],
            ['name' => 'Togo', 'french_name' => 'Togo', 'code' => 228],
            ['name' => 'Tunisia', 'french_name' => 'Tunisie', 'code' => 216],
            ['name' => 'Uganda', 'french_name' => 'Ouganda', 'code' => 256],
            ['name' => 'Western Sahara', 'french_name' => 'Sahara occidental', 'code' => 212],
            ['name' => 'Zambia', 'french_name' => 'Zambie', 'code' => 260],
            ['name' => 'Zimbabwe', 'french_name' => 'Zimbabwe', 'code' => 263],
        ];

        DB::table('countries')->insert($countries);
    }
}
