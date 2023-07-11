<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       \App\Models\Category::create([
            'section_id' => 1,
            'ar'=>[
                'title'=>' نماذج اولية سريعة',
                'description'=>'وصف بالعربي ',
            ],
            'en'=>[
                'title'=>' نماذج اولية سريعة',

                'description'=>"Des English ",
            ]

        ]);
        \App\Models\Category::create([
            'section_id' => 1,
            'ar'=>[
                'title'=>' قطع ومنتجات منخفضة ومتوسطة الإنتاج	',
                'description'=>'وصف بالعربي ',
            ],
            'en'=>[
                'title'=>'قطع ومنتجات منخفضة ومتوسطة الإنتاج',
                'description'=>"Des English ",
            ]

        ]);




        \App\Models\Category::create([
            'section_id' => 1,
            'ar'=>[
                'title'=>' إنتاج بكميات كبيرة	',
                'description'=>'وصف بالعربي ',
            ],
            'en'=>[
                'title'=>'إنتاج بكميات كبيرة',
                'description'=>"Des English ",
            ]

        ]);


    }
}
