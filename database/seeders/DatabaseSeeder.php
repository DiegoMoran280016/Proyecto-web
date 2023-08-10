<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Local;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * 
     */
    public function run()
    {
        Local::factory(20) -> create();
    }
}
