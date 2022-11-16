<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;
use App\Models\Interpreter;

class AlbumController extends Controller
{
    //

    public function index()
    {


        $albums = Album::orderBy('title')->paginate(20);
        return view("index", compact("albums"));
    }
    public function filterAlbums()
    {
        $request = request();

        $string = $request->post("string");

        $albums = Album::orderBy("title")
            ->where("title", 'like', '%' . $string . '%')
            ->paginate(20);

        return view("index", compact("albums"));
    }

    public function showAlbumDetail($id)
    {

        $album = Album::findOrFail($id);



        return view("detail", compact("album"));
    }
}
