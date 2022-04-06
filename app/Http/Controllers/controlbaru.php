<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\baru;

class controlbaru extends Controller
{
    public function about(){
        return view('about',[
            'title' => baru::title(1),
            'name' => baru::data(0),
            'panggilan' => baru::data(1),
            'kota' => baru::data(3),
            'kuliah' => baru::data(4),
            'semester' => baru::data(5),
            'alamat' => baru::data(6),
            'ttl' => baru::data(7),
            'nim' =>baru::data(8),
            'jurusan' => baru::data(9)
        ]);
    }
    public function biodata(){
        return view('biodata',[
            'title' => baru::title(2),
            'name' => baru::data(0),
            'panggilan' => baru::data(1),
            'kota' => baru::data(3),
            'kuliah' => baru::data(4),
            'semester' => baru::data(5),
            'alamat' => baru::data(6),
            'ttl' => baru::data(7),
            'nim' =>baru::data(8),
            'jurusan' => baru::data(9),
            'agama'=>baru::data(10),
            'umur' => baru::data(11),
            'email' => baru::data(2)
        ]);
    }
    public function contact(){
        return view('contact',[
            'title' => baru::title(3),
            'name' => baru::data(0),
            'email' => baru::contact(1),
            'github' => baru::contact(2)
        ]);
    }
}
