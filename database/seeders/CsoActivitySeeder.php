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
                'name' => "{{__('csoActivity.Women empowerment')}}",
            ],
            [
                'name' => "{{__('csoActivity.Youth empowerment')}}",
            ],
            [
                'name' => "{{__('csoActivity.Environmental protection')}}",
            ],
            [
                'name' => "{{__('csoActivity.Governance')}}",
            ],
            [
                'name' => "{{__('csoActivity.Water')}}",
            ],
            [
                'name' => "{{__('csoActivity.Human rights')}}",
            ],
            [
                'name' => "{{__('csoActivity.Child protection')}}",
            ],
            [
                'name' => "{{__('csoActivity.Peace Building')}}",
            ],
            [
                'name' => "{{__('csoActivity.Humanitarian response')}}",
            ],
            [
                'name' => "{{__('csoActivity.GBV prevention/response')}}",
            ],
            [
                'name' => "{{__('csoActivity.Education')}}",
            ],
            [
                'name' => "{{__('csoActivity.CSO strengthening')}}",
            ],
            [
                'name' => "{{__('csoActivity.ICT')}}",
            ],
            [
                'name' => "{{__('csoActivity.Climate protection')}}",
            ],
            [
                'name' => "{{__('csoActivity.Food security')}}",
            ],
            [
                'name' => "{{__('csoActivity.Animal protection')}}",
            ],
            [
                'name' => "{{__('csoActivity.Marine life protection')}}",
            ],
            [
                'name' => "{{__('csoActivity.Renewable energy')}}",
            ],
            [
                'name' => "{{__('csoActivity.Waste management')}}",
            ],
            [
                'name' => "{{__('csoActivity.others')}}",
            ],
        ]);
    }
}
