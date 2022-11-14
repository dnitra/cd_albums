<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    //

    public function index(){

        $albums = Album::get();
        return view("index",compact("album"));
    }
}
