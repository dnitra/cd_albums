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

        $detail = Album::where("id", $id)
            ->get();

         

        return view("detail", compact("detail"));
    }
}
