<?php


namespace App\Http\Controllers;


use App\Models\Municipio;
use Illuminate\Support\Facades\File;

class HomeController
{
    public function index()
    {
        $municipios = Municipio::whereNotNull('area')->with(['desflorestamento', 'modelo'])->get();

        return view('index', ['municipios' => $municipios]);
    }
}