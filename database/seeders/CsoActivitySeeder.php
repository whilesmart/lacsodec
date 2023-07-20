<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CsoActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cso_activity_domains')->insert([
            [
                'name' => 'Women empowerment',
                'french_name' => 'Autonomisation des femmes',
            ],
            [
                'name' => 'Youth empowerment',
                'french_name' => 'Autonomisation des jeunes',
            ],
            [
                'name' => 'Environmental protection',
                'french_name' => 'Protection environnementale',
            ],
            [
                'name' => 'Governance',
                'french_name' => 'Gouvernance',
            ],
            [
                'name' => 'Water',
                'french_name' => 'Eau',
            ],
            [
                'name' => 'Human rights',
                'french_name' => 'Droits humains',
            ],
            [
                'name' => 'Child protection',
                'french_name' => "Protection de l'enfance",
            ],
            [
                'name' => 'Peace Building',
                'french_name' => 'Construction de la paix',
            ],
            [
                'name' => 'Humanitarian response',
                'french_name' => 'Réponse humanitaire',
            ],
            [
                'name' => 'GBV prevention/response',
                'french_name' => 'Prévention/réponse à la VBG',
            ],
            [
                'name' => 'Education',
                'french_name' => 'Education',
            ],
            [
                'name' => 'CSO strengthening',
                'french_name' => 'Renforcement des OSC',
            ],
            [
                'name' => 'ICT',
                'french_name' => 'TIC',
            ],
            [
                'name' => 'Climate protection',
                'french_name' => 'Protection climatique',
            ],
            [
                'name' => 'Food security',
                'french_name' => 'La sécurité alimentaire',
            ],
            [
                'name' => 'Animal protection',
                'french_name' => 'Protection des animaux',
            ],
            [
                'name' => 'Marine life protection',
                'french_name' => 'Protection de la vie marine',
            ],
            [
                'name' => 'Renewable energy',
                'french_name' => 'Énergie renouvelable',
            ],
            [
                'name' => 'Waste management',
                'french_name' => 'La gestion des déchets',
            ],
            [
                'name' => 'others',
                'french_name' => 'autres',
            ],
        ]);
    }
}
