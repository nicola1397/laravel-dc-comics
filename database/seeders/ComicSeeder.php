<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comic = new Comic;
        $comic->title;
        $comic->description;
        $comic->thumb;
        $comic->price;
        $comic->series;
        $comic->sale_date;
        $comic->type;
        $comic->save();
    }
}
