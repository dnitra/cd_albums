<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Album;

class Interpreter extends Model
{
    use HasFactory;


    public function albums()
    {

        return $this->hasMany(Album::class);
    }
}
