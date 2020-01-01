<?php

use Illuminate\Database\Seeder;

class ThemLinhVuc extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      App\linh_vuc::create([
        'ten_linh_vuc'=>'Thể thao',
      ]);
      App\linh_vuc::create([
        'ten_linh_vuc'=>'Lịch sử',
      ]);
      App\linh_vuc::create([
        'ten_linh_vuc'=>'Âm nhạc - Phim',
      ]);
      App\linh_vuc::create([
        'ten_linh_vuc'=>'Địa lý',
      ]);
      App\linh_vuc::create([
        'ten_linh_vuc'=>'Văn học',
      ]);
      App\linh_vuc::create([
        'ten_linh_vuc'=>'Y học',
      ]);
      App\linh_vuc::create([
        'ten_linh_vuc'=>'Văn hóa - Sự kiện',
      ]);
      App\linh_vuc::create([
        'ten_linh_vuc'=>'Khoa học tự nhiên',
      ]);
    }
}
