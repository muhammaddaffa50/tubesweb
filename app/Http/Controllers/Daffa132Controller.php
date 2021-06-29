<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\news1;
use App\Models\news2;
use App\Models\news3;
use App\Models\news4;
use App\Models\news5;
use App\Models\news6;
use App\Models\news7;
use App\Models\news8;
class Daffa132Controller extends Controller
{

    public function author()
    {
        return view('admin.authors');
    }

    public function news()
    {
        return view('admin.news');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function argapura()
    {
        $news = News::all();
        return view('argapura', compact("news"));
    }

    public function buthak()
    {
        $news1 = news1::all();
        return view('buthak', compact("news1"));
    }

    public function arjuno()
    {
        $news2 = news2::all();
        return view('arjuno', compact("news2"));
    }

    public function pundak()
    {
        $news3 = news3::all();
        return view('pundak', compact("news3"));
    }

    public function sumeru()
    {
        $news4 = news4::all();
        return view('sumeru', compact("news4"));
    }
    
    public function bromo()
    {
        $news5 = news5::all();
        return view('bromo', compact("news5"));
    }

    public function kawi()
    {
        $news6 = news6::all();
        return view('kawi', compact("news6"));
    }

    public function liman()
    {
        $news7 = news7::all();
        return view('liman', compact("news7"));
    }

    public function lawu()
    {
        $news8 = news8::all();
        return view('lawu', compact("news8"));
    }

}
