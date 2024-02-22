<?php

namespace Database\Seeders;

use Database\Factories\projectFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// importazione model
use App\Models\project;

class projectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        project::factory()->count(20)->create();
    }
}
