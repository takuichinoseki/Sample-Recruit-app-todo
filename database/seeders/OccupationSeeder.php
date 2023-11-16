<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\occupations;


class OccupationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        occupations::create([
            'name' => '事務'
        ]);

        occupations::create([
            'name' => '販売・サービス'
        ]);

        occupations::create([
            'name' => '飲食'
        ]);

        occupations::create([
            'name' => 'IT・エンジニア'
        ]);

        occupations::create([
            'name' => 'WEB・クリエイター'
        ]);

        occupations::create([
            'name' => '医療・介護'
        ]);

        occupations::create([
            'name' => '工場・物流'
        ]);
    }
}
