<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome',[
        'title' => 'welcome',
        'name' => 'Reynaldi Fakhri Pratama',
        'kuliah' => 'Politeknik Negeri Malang',
        'gambarku' => 'fotoku.jpg'
    ]);
});

Route::get('/about', function () {
    return view('about',[
        'title' => 'about',
        'name' => 'Reynaldi Fakhri Pratama',
        'panggilan' => 'aldi',
        'kota' => 'Malang',
        'kuliah' => 'Politeknik Negeri Malang',
        'semester' => '4',
        'alamat' => 'JL. Semanggi barat 21A',
        'ttl' => '6 agustus 2000',
        'nim' =>'2041720209',
        'jurusan' => 'Teknik Informatika'
    ]);
});
Route::get('/biodata', function () {
    return view('biodata',[
        'title' => 'biodata',
        'name' => 'Reynaldi Fakhri Pratama',
        'email' => 'reynaldifp2000@gmail.com',
        'kota' => 'Malang',
        'kuliah' => 'Politeknik Negeri Malang',
        'semester' => '4',
        'alamat' => 'JL. Semanggi barat 21A',
        'ttl' => '6 agustus 2000',
        'nim' =>'2041720209',
        'jurusan' => 'Teknik Informatika',
        'agama'=>'islam',
        'umur' => 'umur'

    ]);
});
Route::get('/contact',function(){
    return view('contact',[
        'title' => 'contact',
        'name' => 'Reynaldi Fakhri Pratama',
        'email' => 'reynaldifp2000@gmail.com',
        'github' => 'https://github.com/renaldi-oss'
    ]);
});