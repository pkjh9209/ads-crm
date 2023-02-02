<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('adm_id')->unique()->comment('어드민 아이디');
            $table->string('adm_name')->comment('어드민 이름');
            $table->string('adm_level')->comment('어드민 레벨');
            $table->string('adm_email')->comment('어드민 이메일');
            $table->string('adm_password')->comment('어드민 비밀번호');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
