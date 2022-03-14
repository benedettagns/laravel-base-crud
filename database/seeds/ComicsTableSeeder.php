<?php

use App\Comic;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        $comics = config('comics');

        foreach ($comics as $item) {

            $comic = new Comic;
            $comic->title = $item['title'];
            $comic->series = $item['series'];
            $comic->type = $item['type'];
            $comic->sale_date = $item['sale_date'];
            $comic->price = $item['price'];
            $comic->thumb = $item['thumb'];
            $comic->description = $item['description'];

            $comic->save();
        }
    }
}
