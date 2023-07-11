<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */





    public function seedSection()
    {
        \App\Models\Section::create([
            'image' => 'default.png',
            'ar' => [
                'title' => ' طلب سعر تصنيع	',
                'description' => 'وصف بالعربي ',
            ],
            'en' => [
                'title' => 'طلب سعر تصنيع	',
                'description' => "Des English ",
            ]

        ]);

        \App\Models\Section::create([
            'image' => 'default.png',
            'ar' => [
                'title' => ' تصنيف رئيسي 1	',
                'description' => 'وصف بالعربي ',
            ],
            'en' => [
                'title' => 'تصنيف رئيسي 1	',
                'description' => "Des English ",
            ]

        ]);
        \App\Models\Section::create([
            'image' => 'default.png',
            'ar' => [
                'title' => ' تصنيف رئيسي 2	',
                'description' => 'وصف بالعربي ',
            ],
            'en' => [
                'title' => 'تصنيف رئيسي 2	',
                'description' => "Des English ",
            ]

        ]);
    }

    public function seedMajorCategory()
    {
        $arr_ar = [
            'صناعة',
            'مواد',
            'شهادة',
            'رقابة جودة',
            'لغة',
            'أساليب الانتاج',
            'ميزات طريقة الإنتاج',
            'الطرق المعتمدة',
            'معلومات اضافية',

        ];
        $arr_en = [
            'industry',
            'Material',
            'certificate',
            'Quality control',
            'language',
            'production methods',
            'production method features',
            'approved methods',
            'additional information',

        ];
        foreach ($arr_ar as $key => $value) {


            \App\Models\MajorCategory::create([
                'image' => 'default.png',
                'ar' => [
                    'title' => $value,

                ],
                'en' => [
                    'title' => $arr_en[$key],

                ]

            ]);
        }
    }

    public function seedListMajor()
    {
        $arr6 = [ //6 //
            'أدوات التصنيع',
            'التصنيع باستخدام الحاسب الآلي العام',
            'صناعة حادة ',
            'صناعة خفيفة',
            'صناعة اختبار',
        ];
        $arr7 = [ //7//
            'المونيوم',
            'نحاس',
            'قصدير',
            'عاج',
            'رصاص',

        ];
        $arr8 = [ //8//
            '   لا توجد شهادات ، لكننا نطبق معايير التصنيع الشهادة قيد التقدم',
            ' ISO 13485',
            '   (طبي)',
            '   ISO 9001',
            '   ISO 9003',

        ];
        $arr9 = [ //9// Quality control
            '1 مراقب   جودة',
            '2 مراقين جودة',
            '3 مراقين جودة',
            '4 مراقين جودة',
            '5 مراقين جودة',
        ];
        $arr10 = [ //10// language
            'انجليزي',
            'عربي',
            'الماني',
            'فرنساوي',
            'ايطالي',

        ];
        $arr11 = [ //11// production methods
            'الديكور  ',
            'الاضائة  ',
            'التسليح  ',
            'التنعيم  ',
            'أساليب أخرى  ',
        ];
        $arr12 = [ //12// production methods
            'الديكور  ',
            'الاضائة  ',
            'التسليح  ',
            'التنعيم  ',
            'أساليب أخرى  ',
        ];

        $arr13 = [ //13// approved methods
            'approved 1',
            'approved 2',
            'approved 3',
            'approved 4',
            'approved 5',


        ];


        $this->loopFor($arr6, 6);
        $this->loopFor($arr7, 7);
        $this->loopFor($arr8, 8);
        $this->loopFor($arr9, 9);
        $this->loopFor($arr10, 10);
        $this->loopFor($arr11, 11);
        $this->loopFor($arr12, 12);
        $this->loopFor($arr13, 13);
    }

    public function loopFor($arr, $id)
    {
        foreach ($arr as $key => $value) {
            \App\Models\Major::create([
                'major_category_id' => $id,
                'ar' => [
                    'title' => $value,
                ],
                'en' => [
                    'title' => $value,
                ]

            ]);
        }
    }
    public function run()
    {
        $this->seedListMajor();
    }
}
