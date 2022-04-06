<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biodata;

class biodatacontroller extends Controller
{
    public function biodata(){
        return view('biodata',[
            'title' => Biodata::find(1)->title,
            'name' => Biodata::find(1)->name,
            'panggilan' => Biodata::find(1)->panggilan,
            'kota' => Biodata::find(1)->kota,
            'kuliah' => Biodata::find(1)->kuliah,
            'semester' => Biodata::find(1)->semester,
            'alamat' => Biodata::find(1)->alamat,
            'ttl' => Biodata::find(1)->ttl,
            'nim' => Biodata::find(1)->nim,
            'jurusan' => Biodata::find(1)->jurusan,
            'agama'=> Biodata::find(1)->agama,
            'umur' => Biodata::find(1)->umur,
            'email' => Biodata::find(1)->email
        ]);
    }
}
