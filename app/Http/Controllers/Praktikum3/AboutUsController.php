<?php

namespace App\Http\Controllers\Praktikum3;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function about(){
        return view('about');
    }
}
