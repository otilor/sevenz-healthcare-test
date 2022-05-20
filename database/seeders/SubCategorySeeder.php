<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $firstCategory = Category::query()->where('name', '=', 'X-Ray')->first()->pluck('id');
        $secondCategory = Category::query()->where('name', '=', 'Ultrasound')->first()->pluck('id');
        $thirdCategory = Category::query()->where('name', '=', 'CT Scan')->first()->pluck('id');

        $subCategories = [
            [
                'name' => $name = 'Chest',
                'slug' => Str::slug($name),
                'category_id' => $firstCategory,
            ],
            [
                'name' => $name = 'Lumbo Sacral Vertebrae',
                'slug' => Str::slug($name),
                'category_id' => $firstCategory,
            ],
            [
                'name' => $name = 'Pelvic Joint',
                'slug' => Str::slug($name),
                'category_id' => $firstCategory,
            ],
            [
                'name' => $name = 'Humerus',
                'slug' => Str::slug($name),
                'category_id' => $firstCategory,
            ],
            [
                'name' => $name = 'Fingers',
                'slug' => Str::slug($name),
                'category_id' => $firstCategory
            ],
            [
                'name' => $name = 'Cervical Vertebrae',
                'slug' => Str::slug($name),
                'category_id' => $firstCategory
            ],
            [
                'name' => $name = 'Thoraco Lumbar Vertebrae',
                'slug' => Str::slug($name),
                'category_id' => $firstCategory
            ],
            [
                'name' => $name = 'Elbow Joint',
                'slug' => Str::slug($name),
                'category_id' => $firstCategory
            ],
            [
                'name' => $name = 'Hip Joint',
                'slug' => Str::slug($name),
                'category_id' => $firstCategory
            ],


            [
                'name' => $name = 'Obstetric',
                'slug' => Str::slug($name),
                'category_id' => $secondCategory
            ],
            [
                'name' => $name = 'Breast',
                'slug' => Str::slug($name),
                'category_id' => $secondCategory
            ],
            [
                'name' => $name = 'Abdionial',
                'slug' => Str::slug($name),
                'category_id' => $secondCategory
            ],
            [
                'name' => $name = 'Prostrate',
                'slug' => Str::slug($name),
                'category_id' => $secondCategory
            ],
            [
                'name' => $name = 'Thyroid',
                'slug' => Str::slug($name),
                'category_id' => $secondCategory
            ],


            [
                'name' => $name = 'Head',
                'slug' => Str::slug($name),
                'category_id' => $thirdCategory
            ],
            [
                'name' => $name = 'Neck',
                'slug' => Str::slug($name),
                'category_id' => $thirdCategory
            ]
        ];

        foreach($subCategories as $subCategory) {
            SubCategory::updateOrCreate($subCategory);
        }
    }
}
