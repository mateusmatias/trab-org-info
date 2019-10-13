<?php


namespace App\Http\Controllers;


use Illuminate\Support\Facades\File;

class HomeController
{
    public function index()
    {
        return view('index');
    }
}