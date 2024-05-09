<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebController extends Controller
{
    //
    public function index()
    {
        return view('frontend.index');
    }
    public function konten($kategori, $slug)
    {
        return view('frontend.konten', compact('kategori', 'slug'));
    }
    public function kontenList($kategori)
    {
        return view('frontend.konten-list', compact('kategori'));
    }
    public function kontenListFile($kategori)
    {
        return view('frontend.konten-list-file', compact('kategori'));
    }
}
