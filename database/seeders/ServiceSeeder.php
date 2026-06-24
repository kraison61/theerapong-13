<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'งานโครงสร้างและกันดิน', 'slug' => 'structural-and-wall'],
            ['name' => 'งานสถาปัตยกรรมและภายนอก', 'slug' => 'architectural-and-exterior'],
            ['name' => 'งานระบบและโครงสร้างพื้นฐาน', 'slug' => 'systems-and-infrastructure'],
        ];

        foreach ($categories as $cat) {
            \App\Models\ServiceCategory::updateOrCreate(['slug' => $cat['slug']], $cat);
        }

        $catStructural = \App\Models\ServiceCategory::where('slug', 'structural-and-wall')->first()->id;
        $catArchitectural = \App\Models\ServiceCategory::where('slug', 'architectural-and-exterior')->first()->id;
        $catSystems = \App\Models\ServiceCategory::where('slug', 'systems-and-infrastructure')->first()->id;

        $services = [
            [
                'service_category_id' => $catStructural,
                'title' => 'กำแพงกันดิน',
                'icon_name' => 'bi-bricks',
                'slug' => 'wall',
                'description' => 'กำแพงคอนกรีตเสริมเหล็กที่คำนวณโครงสร้างโดยวิศวกร ป้องกันดินสไลด์และน้ำกัดเซาะอย่างถาวร',
                'h1' => 'บริการรับทำกำแพงกันดิน มาตรฐานวิศวกรรม',
                'content' => 'เนื้อหาหลักของบริการกำแพงกันดิน...',
                'dur' => '14–30 วัน',
                'rating_value' => 4.9,
                'review_count' => 125,
                'schema_type' => 'Service',
                'is_active' => true,
            ],
            [
                'service_category_id' => $catArchitectural,
                'title' => 'รั้วบ้าน',
                'icon_name' => 'bi-grid-3x3',
                'slug' => 'fence',
                'description' => 'รั้วสำเร็จรูป รั้วก่ออิฐ และรั้วโมเดิร์น พร้อมประตูรีโมท',
                'h1' => 'รับทำรั้วบ้านทุกรูปแบบ ดีไซน์ทันสมัย แข็งแรง',
                'dur' => '7–21 วัน',
                'rating_value' => 4.8,
                'review_count' => 89,
                'schema_type' => 'Service',
                'is_active' => true,
            ],
            [
                'service_category_id' => $catSystems,
                'title' => 'ถนน & ทางเข้าบ้าน',
                'icon_name' => 'bi-signpost-split',
                'slug' => 'road',
                'description' => 'ถนนคอนกรีตเสริมเหล็ก ถนนแอสฟัลต์ และ Stamped Concrete',
                'h1' => 'รับทำถนนและทางเข้าบ้าน คุณภาพสูง ไม่ทรุด',
                'dur' => '5–15 วัน',
                'rating_value' => 4.7,
                'review_count' => 56,
                'schema_type' => 'Service',
                'is_active' => true,
            ],
            [
                'service_category_id' => $catSystems,
                'title' => 'ลานคอนกรีต & ลานจอดรถ',
                'icon_name' => 'bi-square',
                'slug' => 'slab',
                'description' => 'ลานคอนกรีตขัดมัน ขัดเงา หรือ Polished Concrete ทนทาน',
                'h1' => 'รับทำลานจอดรถและลานคอนกรีตอเนกประสงค์',
                'dur' => '3–10 วัน',
                'rating_value' => 4.9,
                'review_count' => 78,
                'schema_type' => 'Service',
                'is_active' => true,
            ],
            [
                'service_category_id' => $catSystems,
                'title' => 'ระบบระบายน้ำ',
                'icon_name' => 'bi-water',
                'slug' => 'drain',
                'description' => 'วางท่อระบายน้ำ บ่อพัก บ่อดักไขมัน และ Sump pit',
                'h1' => 'วางระบบระบายน้ำรอบบ้าน แก้ปัญหาน้ำท่วมขัง',
                'dur' => '3–12 วัน',
                'rating_value' => 4.6,
                'review_count' => 42,
                'schema_type' => 'Service',
                'is_active' => true,
            ],
            [
                'service_category_id' => $catStructural,
                'title' => 'ปรับพื้นที่ & ถมดิน',
                'icon_name' => 'bi-landmark',
                'slug' => 'land',
                'description' => 'ถมดิน บดอัด ปรับระดับ พร้อมรถแบคโฮและรถบดหน้างาน',
                'h1' => 'บริการถมดินและปรับพื้นที่ บดอัดแน่นตามมาตรฐาน',
                'dur' => '5–15 วัน',
                'rating_value' => 4.8,
                'review_count' => 95,
                'schema_type' => 'Service',
                'is_active' => true,
            ],
            [
                'service_category_id' => $catStructural,
                'title' => 'งานเข็มเจาะมาตรฐาน',
                'icon_name' => 'bi-puzzle',
                'slug' => 'bored-pile',
                'description' => 'บริการทำเข็มเจาะสำหรับฐานรากอาคารและกำแพงกันดิน',
                'h1' => 'รับทำเข็มเจาะ ป้องกันการทรุดตัวของโครงสร้าง',
                'dur' => '10–20 วัน',
                'rating_value' => 4.9,
                'review_count' => 67,
                'schema_type' => 'Service',
                'is_active' => true,
            ],
            [
                'service_category_id' => $catArchitectural,
                'title' => 'โรงจอดรถโครงเหล็ก',
                'icon_name' => 'bi-garage',
                'slug' => 'garage-roof',
                'description' => 'ออกแบบและติดตั้งหลังคาโรงจอดรถ ดีไซน์โมเดิร์น',
                'h1' => 'รับทำโรงจอดรถ สวย ทนทาน เข้ากับตัวบ้าน',
                'dur' => '7–14 วัน',
                'rating_value' => 4.7,
                'review_count' => 34,
                'schema_type' => 'Service',
                'is_active' => true,
            ],
            [
                'service_category_id' => $catArchitectural,
                'title' => 'แต่งสวน & ปูพื้นภายนอก',
                'icon_name' => 'bi-flower',
                'slug' => 'landscaping',
                'description' => 'บริการปรับปรุงภูมิทัศน์ ปูบล็อกทางเดิน และจัดสวน',
                'h1' => 'รับจัดสวนและปูพื้นภายนอกบ้าน พื้นที่พักผ่อนส่วนตัว',
                'dur' => '10–20 วัน',
                'rating_value' => 4.8,
                'review_count' => 29,
                'schema_type' => 'Service',
                'is_active' => true,
            ],
            [
                'service_category_id' => $catSystems,
                'title' => 'ระบบไฟส่องสว่างภายนอก',
                'icon_name' => 'bi-lightbulb',
                'slug' => 'outdoor-lighting',
                'description' => 'ติดตั้งระบบไฟสนามและไฟทางเดินรอบอาคาร',
                'h1' => 'รับติดตั้งระบบไฟส่องสว่างภายนอก เพิ่มความปลอดภัย',
                'dur' => '5–10 วัน',
                'rating_value' => 4.5,
                'review_count' => 18,
                'schema_type' => 'Service',
                'is_active' => true,
            ],
        ];

        foreach ($services as $serviceData) {
            $service = \App\Models\Service::updateOrCreate(['slug' => $serviceData['slug']], $serviceData);

            // Seed Prices for each service
            $service->prices()->updateOrCreate([
                'name' => 'ราคาเริ่มต้น',
            ], [
                'price_type' => 'starting_at',
                'price' => rand(500, 5000),
                'unit' => 'ตร.ม.',
                'is_active' => true,
            ]);

            // Seed FAQs for each service
            $service->faqs()->updateOrCreate([
                'question' => 'ใช้เวลาดำเนินการนานเท่าไหร่?',
            ], [
                'answer' => 'โดยปกติจะใช้เวลาประมาณ 7-30 วัน ขึ้นอยู่กับขนาดและระดับความยากของงาน',
                'sort_order' => 1,
                'is_active' => true,
            ]);

            $service->faqs()->updateOrCreate([
                'question' => 'มีการรับประกันงานไหม?',
            ], [
                'answer' => 'เรารับประกันโครงสร้าง 1-2 ปี และรับประกันความพึงพอใจในงานผิว 90 วัน',
                'sort_order' => 2,
                'is_active' => true,
            ]);
        }
    }
}
