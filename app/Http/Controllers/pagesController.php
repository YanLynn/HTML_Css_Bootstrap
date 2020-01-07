<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function index()
    {
       return view('index');
    }
    public function html()
    {
        return view('html');
    }
    public function css()
    {
        return view('css');
    }
    public function bootstrap()
    {
        return view('bootstrap');
    }
}
