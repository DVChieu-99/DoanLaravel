<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('test','QuanTriVienController@layThongTin');

Route::middleware('guest:web')->group(function(){
	Route::get('dang-nhap','QuanTriVienController@dangNhap')->name('dang-nhap');
	Route::post('dang-nhap','QuanTriVienController@xuLyDangNhap')->name('xu-ly-dang-nhap');
});

Route::middleware('auth:web')->group(function(){

	Route::get('/', function () {
		return view('TrangChu.trangchu');
	})->name('trang-chu');

	// Route::prefix('trang-chu')->group(function() {
	// 	Route::name('TrangChu.')->group(function() {
	// 		Route::get('/','TrangChuController@index')->name('trangchu');
	// 	});
	// });
	Route::get('dang-xuat','QuanTriVienController@dangXuat')->name('dang-xuat');

	Route::prefix('linh-vuc')->group(function() {
		Route::name('linh-vuc.')->group(function() {
			Route::get('/','LinhVucController@index')->name('danh-sach');
			Route::get('them-moi','LinhVucController@create')->name('them-moi');
			Route::post('them-moi','LinhVucController@store')->name('xu-ly-them-moi');
			Route::get('cap-nhat/{id}','LinhVucController@edit')->name('cap-nhat');
			Route::post('cap-nhat/{id}','LinhVucController@update')->name('xu-ly-cap-nhat');
			Route::get('xoa/{id}','LinhVucController@destroy')->name('xoa');
			Route::get('bin','LinhVucController@bin')->name('bin');
			Route::get('restore/{id}','LinhVucController@restore')->name('restore');
		});
	});


	Route::prefix('cau-hoi')->group(function() {
		Route::name('cau-hoi.')->group(function() {
			Route::get('/','CauHoiController@index')->name('danh-sach');
			Route::get('them-moi','CauHoiController@create')->name('them-moi');
			Route::post('them-moi','CauHoiController@store')->name('xu-ly-them-moi');
			Route::get('cap-nhat/{id}','CauHoiController@edit')->name('cap-nhat');
			Route::get('bin','CauHoiController@bin')->name('bin');
			Route::get('restore/{id}','CauHoiController@restore')->name('restore');
			Route::post('cap-nhat/{id}','CauHoiController@update')->name('xu-ly-cap-nhat');
			Route::get('xoa/{id}','CauHoiController@destroy')->name('xoa');
		});
	});
	Route::prefix('goi-credit')->group(function() {
		Route::name('goi-credit.')->group(function() {
			Route::get('/','GoiCreditController@index')->name('danh-sach');
			Route::get('them-moi','GoiCreditController@create')->name('them-moi');
			Route::post('them-moi','GoiCreditController@store')->name('xu-ly-them-moi');
			Route::get('cap-nhat/{id}','GoiCreditController@edit')->name('cap-nhat');
			Route::post('cap-nhat/{id}','GoiCreditController@update')->name('xu-ly-cap-nhat');
			Route::get('xoa/{id}','GoiCreditController@destroy')->name('xoa');
			Route::get('bin','GoiCreditController@bin')->name('bin');
			Route::get('restore/{id}','GoiCreditController@restore')->name('restore');
		});
	});

	Route::prefix('NguoiChoi')->group(function() {
		Route::name('NguoiChoi.')->group(function() {
			Route::get('/','NguoiChoiController@index')->name('danh-sach');
			Route::get('them-moi','NguoiChoiController@create')->name('them-moi');
			Route::post('them-moi','NguoiChoiController@store')->name('xu-ly-them-moi');
			Route::get('cap-nhat/{id}','NguoiChoiController@edit')->name('cap-nhat');
			Route::post('cap-nhat/{id}','NguoiChoiController@update')->name('xu-ly-cap-nhat');
			Route::get('xoa/{id}','NguoiChoiController@destroy')->name('xoa');
			Route::get('bin','NguoiChoiController@bin')->name('bin');
			Route::get('restore/{id}','NguoiChoiController@restore')->name('restore');
		});
	});


	Route::prefix('QuanTriVien')->group(function() {
		Route::name('QuanTriVien.')->group(function() {
			Route::get('/','QuanTriVienController@index')->name('danh-sach');
			Route::get('them-moi','QuanTriVienController@create')->name('them-moi');
			Route::post('them-moi','QuanTriVienController@store')->name('xu-ly-them-moi');
			Route::get('cap-nhat/{id}','QuanTriVienController@edit')->name('cap-nhat');
			Route::post('cap-nhat/{id}','QuanTriVienController@update')->name('xu-ly-cap-nhat');
			Route::get('bin','QuanTriVienController@bin')->name('bin');
			Route::get('restore/{id}','QuanTriVienController@restore')->name('restore');
			Route::get('xoa/{id}','QuanTriVienController@destroy')->name('xoa');
		});
	});


	Route::prefix('CauHinhApp')->group(function() {
		Route::name('CauHinhApp.')->group(function() {
			Route::get('/','CauHinhAppController@index')->name('danh-sach');
			Route::get('them-moi','CauHinhAppController@create')->name('them-moi');
			Route::post('them-moi','CauHinhAppController@store')->name('xu-ly-them-moi');
			Route::get('cap-nhat/{id}','CauHinhAppController@edit')->name('cap-nhat');
			Route::post('cap-nhat/{id}','CauHinhAppController@update')->name('xu-ly-cap-nhat');
			Route::get('xoa/{id}','CauHinhAppController@destroy')->name('xoa');
		});
	});

	Route::prefix('LuotChoi')->group(function() {
		Route::name('LuotChoi.')->group(function() {
			Route::get('/','LuotChoiController@index')->name('danh-sach');
			Route::get('them-moi','LuotChoiController@create')->name('them-moi');
			Route::post('them-moi','LuotChoiController@store')->name('xu-ly-them-moi');
			Route::get('cap-nhat/{id}','LuotChoiController@edit')->name('cap-nhat');
			Route::post('cap-nhat/{id}','LuotChoiController@update')->name('xu-ly-cap-nhat');
			Route::get('xoa/{id}','LuotChoiController@destroy')->name('xoa');
		});
	});

	Route::prefix('ChiTietLuotChoi')->group(function() {
		Route::name('ChiTietLuotChoi.')->group(function() {
			Route::get('/','ChiTietLuotChoiController@index')->name('danh-sach');
			Route::get('them-moi','ChiTietLuotChoiController@create')->name('them-moi');
			Route::post('them-moi','ChiTietLuotChoiController@store')->name('xu-ly-them-moi');
			Route::get('cap-nhat/{id}','ChiTietLuotChoiController@edit')->name('cap-nhat');
			Route::post('cap-nhat/{id}','ChiTietLuotChoiController@update')->name('xu-ly-cap-nhat');
			Route::get('xoa/{id}','ChiTietLuotChoiController@destroy')->name('xoa');
		});
	});
});
