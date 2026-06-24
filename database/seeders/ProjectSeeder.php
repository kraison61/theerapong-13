<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::first() ?? User::create([
            'name'     => 'Admin',
            'email'    => 'admin@theeraphong.com',
            'password' => bcrypt('password'),
        ]);

        $projects = [
            [
                'slug'        => 'ratchaphruek-housing',
                'name'        => 'โครงการบ้านจัดสรร ราชพฤกษ์',
                'description' => 'งานกำแพงกันดิน คสล. และรั้วสำเร็จรูปรอบโครงการ ความยาวรวม 480 เมตร',
                'status'      => 'completed',
                'phases'      => [
                    ['phase_number' => 1, 'title' => 'สำรวจ ออกแบบ และเตรียมหน้างาน',           'status' => 'completed'],
                    ['phase_number' => 2, 'title' => 'งานโครงสร้างกำแพงกันดิน คสล.',            'status' => 'completed'],
                    ['phase_number' => 3, 'title' => 'ติดตั้งรั้วสำเร็จรูปและประตูทางเข้า',    'status' => 'completed'],
                ],
            ],
            [
                'slug'        => 'bangna-warehouse',
                'name'        => 'โกดังสินค้า บางนา กม.23',
                'description' => 'งานถนนคอนกรีตภายในโรงงาน ลานจอดรถ และระบบระบายน้ำ พื้นที่รวม 4,800 ตร.ม.',
                'status'      => 'completed',
                'phases'      => [
                    ['phase_number' => 1, 'title' => 'เตรียมพื้นที่ ถมดิน บดอัด',              'status' => 'completed'],
                    ['phase_number' => 2, 'title' => 'เทถนนคอนกรีตและลานจอดรถ',               'status' => 'completed'],
                    ['phase_number' => 3, 'title' => 'วางระบบระบายน้ำและตีเส้นจราจร',          'status' => 'completed'],
                ],
            ],
            [
                'slug'        => 'nonthaburi-villa',
                'name'        => 'บ้านพักอาศัย นนทบุรี (คุณสมชาย)',
                'description' => 'งานกำแพงกันดินบล็อกประสาน รั้วก่ออิฐ และลานจอดรถ 2 คัน',
                'status'      => 'completed',
                'phases'      => [
                    ['phase_number' => 1, 'title' => 'กำแพงกันดินบล็อกประสาน',  'status' => 'completed'],
                    ['phase_number' => 2, 'title' => 'รั้วก่ออิฐมอญและประตูรีโมท', 'status' => 'completed'],
                    ['phase_number' => 3, 'title' => 'ลานคอนกรีตจอดรถ',           'status' => 'completed'],
                ],
            ],
            [
                'slug'        => 'samut-prakan-factory',
                'name'        => 'โรงงานอุตสาหกรรม สมุทรปราการ',
                'description' => 'งานถนนภายในโรงงาน ลานพักสินค้า และระบบระบายน้ำเสีย พื้นที่ 12,000 ตร.ม.',
                'status'      => 'active',
                'phases'      => [
                    ['phase_number' => 1, 'title' => 'ถมดินและบดอัดแน่น',         'status' => 'completed'],
                    ['phase_number' => 2, 'title' => 'เทพื้นคอนกรีตลานพักสินค้า', 'status' => 'in_progress'],
                    ['phase_number' => 3, 'title' => 'ระบบระบายน้ำและป้ายจราจร',  'status' => 'pending'],
                ],
            ],
            [
                'slug'        => 'pathum-thani-housing-estate',
                'name'        => 'หมู่บ้านจัดสรร ปทุมธานี เฟส 2',
                'description' => 'งานรั้วสำเร็จรูป กำแพงกันดิน และถนนภายในโครงการ 85 แปลง',
                'status'      => 'active',
                'phases'      => [
                    ['phase_number' => 1, 'title' => 'สำรวจและออกแบบระบบระบายน้ำ', 'status' => 'completed'],
                    ['phase_number' => 2, 'title' => 'กำแพงกันดินและรั้วรอบแปลง',  'status' => 'in_progress'],
                    ['phase_number' => 3, 'title' => 'ถนนคอนกรีตและไฟส่องสว่าง',  'status' => 'pending'],
                ],
            ],
            [
                'slug'        => 'minburi-retaining-wall',
                'name'        => 'กำแพงกันดิน คลองสามวา มีนบุรี',
                'description' => 'งานกำแพงกันดิน คสล. ริมคลอง ออกแบบโดยวิศวกร รับแรงน้ำท่วม ยาว 120 เมตร',
                'status'      => 'completed',
                'phases'      => [
                    ['phase_number' => 1, 'title' => 'สำรวจหน้างาน วิเคราะห์แรงน้ำ',    'status' => 'completed'],
                    ['phase_number' => 2, 'title' => 'ตอกเข็ม เทฐาน คสล.',               'status' => 'completed'],
                    ['phase_number' => 3, 'title' => 'เทผนัง คสล. และงานฉาบ',            'status' => 'completed'],
                ],
            ],
            [
                'slug'        => 'lat-krabang-industrial',
                'name'        => 'นิคมอุตสาหกรรม ลาดกระบัง',
                'description' => 'งานปรับพื้นที่ ถมดิน 50,000 ลบ.ม. และบดอัดแน่นตามมาตรฐาน ก่อนก่อสร้างอาคาร',
                'status'      => 'completed',
                'phases'      => [
                    ['phase_number' => 1, 'title' => 'รื้อถอนสิ่งปลูกสร้างเดิม', 'status' => 'completed'],
                    ['phase_number' => 2, 'title' => 'ถมดินลูกรังชั้นที่ 1-3',    'status' => 'completed'],
                    ['phase_number' => 3, 'title' => 'บดอัดและทดสอบ CBR',          'status' => 'completed'],
                ],
            ],
            [
                'slug'        => 'bang-yai-drainage',
                'name'        => 'ระบบระบายน้ำ ตำบลบางใหญ่',
                'description' => 'วางระบบท่อระบายน้ำหลักขนาด Ø60–100 ซม. ยาว 800 เมตร พร้อมบ่อพัก 18 บ่อ',
                'status'      => 'completed',
                'phases'      => [
                    ['phase_number' => 1, 'title' => 'ออกแบบและขออนุญาต',         'status' => 'completed'],
                    ['phase_number' => 2, 'title' => 'ขุดร่องและวางท่อ',           'status' => 'completed'],
                    ['phase_number' => 3, 'title' => 'ก่อบ่อพักและกลบดิน',         'status' => 'completed'],
                ],
            ],
            [
                'slug'        => 'don-mueang-airport-road',
                'name'        => 'ทางเข้าโครงการ ดอนเมือง',
                'description' => 'ถนนคอนกรีตทางเข้าโครงการหมู่บ้าน กว้าง 8 เมตร ยาว 350 เมตร พร้อมไฟส่องสว่างและป้าย',
                'status'      => 'active',
                'phases'      => [
                    ['phase_number' => 1, 'title' => 'ขุดและเตรียมฐาน',         'status' => 'completed'],
                    ['phase_number' => 2, 'title' => 'เทคอนกรีตและตัดรอยยา',    'status' => 'in_progress'],
                    ['phase_number' => 3, 'title' => 'ตีเส้นและติดป้ายจราจร',   'status' => 'pending'],
                ],
            ],
            [
                'slug'        => 'suphanburi-concrete-yard',
                'name'        => 'ลานคอนกรีตโรงสีข้าว สุพรรณบุรี',
                'description' => 'ลานคอนกรีตเสริมเหล็กรับน้ำหนักรถบรรทุก 40 ตัน พื้นที่ 6,200 ตร.ม.',
                'status'      => 'completed',
                'phases'      => [
                    ['phase_number' => 1, 'title' => 'เตรียมพื้น บดอัดฐานรองรับ',    'status' => 'completed'],
                    ['phase_number' => 2, 'title' => 'วางตาข่ายเหล็กและเทคอนกรีต',   'status' => 'completed'],
                    ['phase_number' => 3, 'title' => 'ขัดผิวและตัดรอยยา',             'status' => 'completed'],
                ],
            ],
        ];

        foreach ($projects as $data) {
            $phases = $data['phases'];
            unset($data['phases']);
            $data['user_id'] = $user->id;

            $project = Project::updateOrCreate(['slug' => $data['slug']], $data);

            foreach ($phases as $phase) {
                $project->phases()->updateOrCreate(
                    ['phase_number' => $phase['phase_number']],
                    $phase
                );
            }
        }
    }
}
