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

        for ($i=0; $i < count($data["comics"]); $i++) { 
            
            $comic = new Comic();
            $comic->title = $data["comics"][$i]["title"];
            $comic->description = $data["comics"][$i]["description"];
            $comic->thumb = $data["comics"][$i]["thumb"];
            $comic->price = $data["comics"][$i]["price"];
            $comic->series = $data["comics"][$i]["series"];
            $comic->sale_date = $data["comics"][$i]["sale_date"];
            $comic->type = $data["comics"][$i]["type"];
            $comic->save();
        }

    }
}
