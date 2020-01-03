<?php

use Illuminate\Database\Seeder;

class ThemGoiCredit extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\goi_credit::create([
          'ten_goi'=>'gói 100',
          'so_tien'=>'10',
          'credit'=>'100'
        ]);
        App\goi_credit::create([
          'ten_goi'=>'gói 500',
          'so_tien'=>'50',
          'credit'=>'500'
        ]);
        App\goi_credit::create([
          'ten_goi'=>'gói 1000',
          'so_tien'=>'900',
          'credit'=>'1000'
        ]);
        App\goi_credit::create([
          'ten_goi'=>'gói 3000',
          'so_tien'=>'275',
          'credit'=>'3000'
        ]);
    }
}
