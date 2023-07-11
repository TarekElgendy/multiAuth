<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Setting::create([
            'num1' => '011142117402',
            'email' => 'super@admin.com',

            'ar'=>[

                'title'=>'عنوان الموقع  ',
                'address'=>'مكان المشروع',
            ],
            'en'=>[
                'title'=>'Title Website ',

                'address'=>'address English',
            ]
        ]);
    }
}
