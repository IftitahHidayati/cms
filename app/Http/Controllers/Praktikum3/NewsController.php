<?php

namespace App\Http\Controllers\Praktikum3;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news($id){
        return 'ini adalah '.$id;
        // return view('news');
    }
}
