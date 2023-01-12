<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array_comics = config('db.comics');
        foreach ($array_comics as $comic_item) {
            $new_comic = new Comic();
            $new_comic->title = $comic_item->title;
            $new_comic->text = $comic_item->description;
            $new_comic->string = $comic_item->thumb;
            $new_comic->float = $comic_item->price;
            $new_comic->string = $comic_item->series;
            $new_comic->date = $comic_item->sale_date;
            $new_comic->string = $comic_item->type;
        }
    }
}
