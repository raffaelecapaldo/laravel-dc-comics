<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('dbseeder.comics');
        foreach ($comics as $comic) {
            $newComic = new Comic();
            $newComic->title = $comic['title'];
            $newComic->description = $comic['description'];
            $newComic->thumb = $comic['thumb'];
            $newComic->price = floatval($comic['price']);
            $newComic->series = $comic['series'];
            $newComic->sale_date = $comic['sale_date'];

            $newComic->type = $comic['type'];
            foreach ($comic['artists'] as $key => $artist) {
                if ($key === count($comic['artists']) - 1) {
                    $newComic->artists .= $artist;
                } else {
                    $newComic->artists .= $artist . ', ';
                }
            }

        foreach ($comic['writers'] as $key => $writer) {
            if ($key === count($comic['writers']) - 1) {
                $newComic->writers .= $writer;
            } else {
                $newComic->writers .= $writer . ', ';
            }
        }

        $newComic->save();
    }}
}
