<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLichSuMuaCreditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lich_su_mua_credit', function (Blueprint $table) {
            $table->increments('id');            
            $table->integer('credit');
            $table->integer('so_tien');
            $table->timestamps();
        });
        Schema::table('lich_su_mua_credit',function($table){
            $table->integer('nguoi_choi_id')->unsigned();
            $table->foreign('nguoi_choi_id')->references('id')->on('nguoi_choi');
            $table->integer('goi_credit_id')->unsigned();
            $table->foreign('goi_credit_id')->references('id')->on('goi_credit');
        });        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lich_su_mua_credit');
    }
}
