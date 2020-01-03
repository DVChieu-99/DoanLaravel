<?php

use Illuminate\Database\Seeder;

class ThemNguoiChoi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $count = 1;
      while($count < 21) {
        $tenDangNhap = 'user'. $count;
        App\nguoi_choi::create([
          'ten_dang_nhap' => $tenDangNhap,
          'mat_khau'		=> Hash::make('123456'),
          'mail'			=> $tenDangNhap . '@gmail.com',
          'hinh_dai_dien'	=> $tenDangNhap . '.jpg',
          'diem_cao_nhat'	=> rand(1000, 5000),
          'credit'		=> rand(100, 5000)
        ]);
        $count++;
      }
    }
}
