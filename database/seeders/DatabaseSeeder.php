<?php

namespace Database\Seeders;

use App\Models\Item;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Sequence;
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
        User::factory()->create();

        Item::factory()->count(5)->state(new Sequence(
            ['name' => 'Tribu Standard'],
            ['name' => 'Tribu Premium'],
            ['name' => 'Tribu Kids'],
            ['name' => 'Tribu Box'],
            ['name' => 'Tribu Gift'],
        ))->create();
    }
}
