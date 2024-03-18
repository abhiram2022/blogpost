<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $categories = collect(
            [
                'health',
                'techonology',
                'science',
                'sports'
            ]
        );

        $categories->each(function ($c) {
            \App\Models\Category::create([
                'name' => $c,
                'slug' => Str::slug($c)
            ]);
        });
    }
}
