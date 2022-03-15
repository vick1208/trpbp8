<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeCont extends Controller
{
    //class method untuk halaman home
    public function index(){
        $datasek=[
            'nama_sek' => 'SMA Semangat Bangsa',
            'kota'=>'Surakarta' 
        ];
        return view('home',$datasek);
    }
    
    //class method untuk halaman about
    public function about(){
        return view('about');
    }
}
