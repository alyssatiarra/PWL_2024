<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello(){
        return 'Hello World';
    }
    public function index(){
        return 'Selamat Datang';
    }
    public function about(){
        return 'Nama : Alyssa Tiarra B | NIM : 2241760052';
    }
    public function articles($id){
        return 'Halaman ke-'.$id;
    }
    public function modif($id){
        return 'Selamat datang <br>
                Nama : Alyssa Tiarra B <br> 
                NIM : 2241760052
                Halaman ke-'.$id;
    }
    // prak 3
    // public function greeting(){
    //     return view('blog.hello', ['name' => 'Alyssa']);
    // }
    public function greeting(){
        return view('blog.hello')
            -> with('name', 'Andi')
            -> with('occupation', 'Astronaut');
    }
}
