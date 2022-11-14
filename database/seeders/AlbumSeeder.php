<?php

namespace Database\Seeders;

use App\Models\Album;
use App\Models\Genre;
use App\Models\Interpreter;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i = 0; $i < 500; $i++) {

            $interpreter = Interpreter::factory()->create();

            $album = Album::factory()
                ->count((fake()->randomDigit()) + 1)
                ->for($interpreter)
                ->create();
        }
    }
}
