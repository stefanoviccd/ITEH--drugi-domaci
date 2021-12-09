<?php

namespace Database\Seeders;

use App\Models\Presenter;
use App\Models\Studio;
use App\Models\TVShow;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(5)->create();
         Presenter::factory(5)->create();
         Studio::factory(5)->create();
         TVShow::factory(5)->create();
         
    }
}
