<?php

namespace App\Http\Controllers;

use App\Models\Cafes;
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
        $cafes = Cafes::create([
            'name' => 'Brasil',
            'location' => 'Portugal',
            'description' => 'strong coffe'
        ]);
    }
    public function delivery()
    {
        return view('delivery');
    }
    public function responsabilidade()
    {
        return view('responsabilidade');
    }

    public function admin()
    {

        $cafes = Cafes::create([
            'name' => 'Brasil',
            'location' => 'Portugal',
            'description' => 'strong coffe'
        ]);

        dd($cafes);
    }
}
