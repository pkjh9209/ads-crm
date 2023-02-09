<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBbsWritedefaultTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bbs_write_default', function (Blueprint $table) {
            $table->id();
            $table->int('parent_id')->autoIncrement();

            $table->string('board_subject');
            $table->int('board_level_list');
            $table->int('board_level_read');
            $table->int('board_level_write');
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
        Schema::dropIfExists('bbs_write_default');
    }
}
