<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\project;
use App\Models\type;

class projectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // la make costruisce i post ma non li salva nel database
        project::factory()->count(30)->make()->each( function ($project)  {
            $type = type :: inRandomOrder() -> first();
            $project -> type() -> associate($type);

            $project -> save();
        });
    }
}
