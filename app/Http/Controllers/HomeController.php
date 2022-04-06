<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;

class HomeController extends Controller
{
    public function index(){
        return view('welcome',[
            'title' => Home::first()->title,
            'name' => Home::first()->name,
            'kuliah' => Home::first()->name,
            'gambarku' => Home::first()->gambarku
        ]);
    }
}
