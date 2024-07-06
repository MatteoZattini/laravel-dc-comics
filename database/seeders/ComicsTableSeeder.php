<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $data = config("data");
        $fumetti = $data["comics"];

        for ($i=0; $i < count($fumetti); $i++) {
            
            $fumetto = $fumetti[$i];
            
            $comic = new Comic();
            $comic->title = $fumetto["title"];
            $comic->description = $fumetto["description"];
            $comic->thumb = $fumetto["thumb"];
            $comic->price = $fumetto["price"];
            $comic->series = $fumetto["series"];
            $comic->sale_date = $fumetto["sale_date"];
            $comic->type = $fumetto["type"];
            $comic->save();
        }

        // foreach ($fumetti as $fumetto) {
            
        //     $comic = new Comic();
        //     $comic->title = $fumetto["title"];
        // }

    }
}
