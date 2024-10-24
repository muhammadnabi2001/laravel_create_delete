<?php

namespace Database\Seeders;

use App\Models\like;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class likeseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        like::factory(50)->create();
    }
}
