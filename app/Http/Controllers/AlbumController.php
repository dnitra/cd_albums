<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    //

    public function index()
    {

        $albums = Album::paginate(15);

        return view("index", compact("albums"));
    }

    public function show($id)
    {

        $album = Album::findOrFail($id);



        return view("detail", compact("album"));
    }
}
