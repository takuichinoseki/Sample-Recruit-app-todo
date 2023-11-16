<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\skills;


class SkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        skills::create([
            'name' => 'Excel'
        ]);

        skills::create([
            'name' => 'Word'
        ]);

        skills::create([
            'name' => 'PowerPoint'
        ]);
    }
}
