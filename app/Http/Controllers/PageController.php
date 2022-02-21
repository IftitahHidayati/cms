<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Hi! Selamat Datang';
    }

    public function about(){
        return 'Iftitah Hidayati - 2041720006';
    }

    public function articles($id){
        return 'Ini adalah halaman dengan ID: '.$id;
    }
}
