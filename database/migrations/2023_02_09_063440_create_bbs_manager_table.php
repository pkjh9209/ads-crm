<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBbsManagerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bbs_manager', function (Blueprint $table) {
            $table->id();
            $table->string('board_name')->unique()->comment('게시판명');
            $table->string('board_subject')->comment('게시판이름');
            $table->integer('board_level_list')->comment('리스트권한');
            $table->integer('board_level_read')->comment('읽기권한');
            $table->integer('board_level_write')->comment('쓰기권한');
            $table->integer('board_drop')->comment('삭제여부');
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
        Schema::dropIfExists('bbs_manager');
    }
}
