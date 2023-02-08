<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Admin::create([
            'adm_id'     => '',
            'adm_name'    => '',
            'adm_email' => '',
            'adm_password' => bcrypt(''),
            'adm_level' => 10,
        ]);
    }
}
