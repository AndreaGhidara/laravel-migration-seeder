<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//aggiungo i treni
use App\Models\Train;

class PageControlle extends Controller
{
    //Creo una quary
    public function index(){
        $trains=Train::all();
        return view('welcome', compact('trains'));
    }
}
