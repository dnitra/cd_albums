<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $genres = [
            "Rock",
            "Jazz",
            "Electronic Dance Music",
            "Dubstep",
            "Techno",
            "Rhythm and Blues (R&B)",
            "Country",
            "Pop",
            "Indie Rock",
            "Electro"
        ];

        foreach($genres as $genre_name){
            $genre = new Genre();
            $genre->name = $genre_name;
            $genre->save();

        }
    }
}
