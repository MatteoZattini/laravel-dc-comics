<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $dati = config("data");
        return view('home', $dati);
    }
}
