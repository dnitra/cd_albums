<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Genre;
use App\Models\Interpreter;


class Album extends Model
{
    use HasFactory;

    public function genre()
    {

        return $this->belongsTo(Genre::class);
    }

    public function interpreter()
    {

        return $this->belongsTo(Interpreter::class);
    }
}
