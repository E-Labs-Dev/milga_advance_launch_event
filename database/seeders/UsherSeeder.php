<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Usher::factory(1)->create();
    }
}
