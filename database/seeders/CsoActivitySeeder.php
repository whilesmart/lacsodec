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
            ],
            [
                'name' => 'Youth empowerment',
            ],
            [
                'name' => 'Environmental protection',
            ],
            [
                'name' => 'Governance',
            ],
            [
                'name' => 'Water',
            ],
            [
                'name' => 'Human rights',
            ],
            [
                'name' => 'Child protection',
            ],
            [
                'name' => 'Peace Building',
            ],
            [
                'name' => 'Humanitarian response',
            ],
            [
                'name' => 'GBV prevention/response',
            ],
            [
                'name' => 'Education',
            ],
            [
                'name' => 'CSO strengthening',
            ],
            [
                'name' => 'ICT',
            ],
            [
                'name' => 'Climate protection',
            ],
            [
                'name' => 'Food security',
            ],
            [
                'name' => 'Animal protection',
            ],
            [
                'name' => 'Marine life protection',
            ],
            [
                'name' => 'Renewable energy',
            ],
            [
                'name' => 'Waste management',
            ],
            [
                'name' => 'others',
            ],
        ]);
    }
}
