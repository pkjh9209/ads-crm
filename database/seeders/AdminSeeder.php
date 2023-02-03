<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 관리자 정보 삭제함 배포후 넣을것 id,email,password
        DB::table('admins')->insert([
            'adm_id'     => '',
            'adm_name' => '마스터관리자',
            'adm_email'    => '',
            'adm_password' => bcrypt(''),
            'adm_level' => 10,
        ]);
    }
}
