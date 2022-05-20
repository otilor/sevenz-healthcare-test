<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::updateOrCreate([
            'name' => $name = 'X-Ray',
            'slug' => Str::slug($name)
        ]);

        Category::updateOrCreate([
            'name' => $name = 'Ultrasound',
            'slug' => Str::slug($name)
        ]);

        Category::updateOrCreate([
            'name' => $name = 'CT Scan',
            'slug' => Str::slug($name)
        ]);
    }
}
