<?php

namespace Database\Seeders;

use App\Models\Cso;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CsoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cso::factory()->count(20)->create();
    }
}
