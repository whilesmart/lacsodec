<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contact_infos')->insert([
            [
                'form_email_address' => 'johndoe@gmail.com',
                'listed_email_address' => 'johndoe@gmail.com',
                'phone_number' => '+237656000000',
                'location' => 'Buea, Molyko',
            ],
        ]);
    }
}
