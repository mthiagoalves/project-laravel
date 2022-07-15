<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        return view('welcome');
    }
    public function menu()
    {
        return view('menu');
    }
    public function cafe()
    {
        return view('cafe');
    }
    public function delivery()
    {
        return view('delivery');
    }
    public function responsabilidade()
    {
        return view('responsabilidade');
    }
}
