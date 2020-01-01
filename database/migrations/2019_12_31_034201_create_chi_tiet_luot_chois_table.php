<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChiTietLuotChoisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chi_tiet_luot_choi', function (Blueprint $table) {
            $table->increments('id');                        
            $table->string('phuong_an');
            $table->integer('diem');
            $table->timestamps();
        });
        Schema::table('chi_tiet_luot_choi', function ($table) {
            $table->integer('cau_hoi_id')->unsigned();
            $table->foreign('cau_hoi_id')->references('id')->on('cau_hoi');
            $table->integer('luot_choi_id')->unsigned();
            $table->foreign('luot_choi_id')->references('id')->on('luot_choi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chi_tiet_luot_choi');
    }
}
