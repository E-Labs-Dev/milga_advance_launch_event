<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GameReferenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\GameReference::factory(10)->create();
    }
}
