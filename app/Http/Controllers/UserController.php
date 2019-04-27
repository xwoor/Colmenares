<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('pages.index');
    }
    public function pagina1(){
        return view('pages.pagina1');
    }
    public function pagina2(){
        return view('pages.pagina2');
    }
    public function pagina3(){
        return view('pages.pagina3');
    }
    public function pagina4(){
        return view('pages.pagina4');
    }
}
