<?php

namespace Database\Seeders;

use App\Models\Portfolio;
use App\Models\Service;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    public function run(): void
    {
        $svcId = fn(string $slug) => Service::where('slug', $slug)->value('id');

        $portfolios = [
            [
                'service_id'      => $svcId('wall'),
                'slug'            => 'wall-ratchaphruek',
                'title'           => 'กำแพงกันดิน คสล. โครงการราชพฤกษ์ 480 ม.',
                'location'        => 'นนทบุรี — ราชพฤกษ์',
                'project_length'  => 480.00,
                'cover_image'     => 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=1000&q=80&auto=format&fit=crop',
                'completion_date' => '2025-03-15',
                'content'         => '<p>งานกำแพงกันดินคอนกรีตเสริมเหล็ก ความสูง 3.5 เมตร ความยาว 480 เมตร ออกแบบโดยวิศวกรผู้มีใบ กว. รองรับแรงดันดินจากโครงการข้างเคียง แล้วเสร็จใน 8 สัปดาห์ตามกำหนด</p>',
            ],
            [
                'service_id'      => $svcId('wall'),
                'slug'            => 'wall-minburi-canal',
                'title'           => 'กำแพงกันดินริมคลอง มีนบุรี 120 ม.',
                'location'        => 'มีนบุรี — คลองสามวา',
                'project_length'  => 120.00,
                'cover_image'     => 'https://images.unsplash.com/photo-1590674867551-11c3a2e92ec7?w=1000&q=80&auto=format&fit=crop',
                'completion_date' => '2024-11-20',
                'content'         => '<p>กำแพงกันดินริมคลองสาธารณะ ออกแบบพิเศษรับแรงน้ำหลาก ความสูง 4 เมตร ฐานตอกเข็มเจาะ Ø35 ซม. ลึก 12 เมตร ป้องกันการกัดเซาะระยะยาว</p>',
            ],
            [
                'service_id'      => $svcId('fence'),
                'slug'            => 'fence-pathum-thani',
                'title'           => 'รั้วสำเร็จรูปหมู่บ้าน ปทุมธานี 850 ม.',
                'location'        => 'ปทุมธานี — คลองหลวง',
                'project_length'  => 850.00,
                'cover_image'     => 'https://images.unsplash.com/photo-1517089596392-fb9a9033e05b?w=1000&q=80&auto=format&fit=crop',
                'completion_date' => '2025-01-10',
                'content'         => '<p>ติดตั้งรั้วคอนกรีตสำเร็จรูปความสูง 2 เมตร ความยาวรวม 850 เมตร พร้อมประตูทางเข้าหลัก 2 จุด และประตูฉุกเฉิน 3 จุด แล้วเสร็จใน 3 สัปดาห์</p>',
            ],
            [
                'service_id'      => $svcId('fence'),
                'slug'            => 'fence-brick-nonthaburi',
                'title'           => 'รั้วก่ออิฐมอญ บ้านพักอาศัย นนทบุรี',
                'location'        => 'นนทบุรี — บางใหญ่',
                'project_length'  => 65.00,
                'cover_image'     => 'https://images.unsplash.com/photo-1503387762-592deb58ef4e?w=1000&q=80&auto=format&fit=crop',
                'completion_date' => '2024-09-05',
                'content'         => '<p>รั้วก่ออิฐมอญเสริมเสา คสล. ความสูง 2.2 เมตร ฉาบเรียบสองด้าน ทาสีตามที่เจ้าของบ้านกำหนด พร้อมประตูเหล็กดัดลายไทยประยุกต์</p>',
            ],
            [
                'service_id'      => $svcId('road'),
                'slug'            => 'road-bangna-warehouse',
                'title'           => 'ถนนคอนกรีตโกดัง บางนา 1,200 ตร.ม.',
                'location'        => 'บางนา — กม.23',
                'project_length'  => 1200.00,
                'cover_image'     => 'https://images.unsplash.com/photo-1531834685032-c74464ae3c97?w=1000&q=80&auto=format&fit=crop',
                'completion_date' => '2025-02-28',
                'content'         => '<p>ถนนคอนกรีตเสริมเหล็กภายในโกดัง หนา 20 ซม. รองรับรถโฟล์คลิฟท์น้ำหนัก 5 ตัน ตีเส้นและป้ายจราจรตามมาตรฐานโรงงาน</p>',
            ],
            [
                'service_id'      => $svcId('road'),
                'slug'            => 'road-don-mueang-entrance',
                'title'           => 'ทางเข้าโครงการหมู่บ้าน ดอนเมือง 350 ม.',
                'location'        => 'ดอนเมือง — กรุงเทพฯ',
                'project_length'  => 350.00,
                'cover_image'     => 'https://images.unsplash.com/photo-1541888946425-d81bb19480c5?w=1000&q=80&auto=format&fit=crop',
                'completion_date' => '2025-05-30',
                'content'         => '<p>ถนนคอนกรีตทางเข้าโครงการกว้าง 8 เมตร ยาว 350 เมตร หนา 15 ซม. ไฟส่องสว่าง Solar Cell ระยะ 25 เมตร พร้อมป้ายชื่อโครงการ</p>',
            ],
            [
                'service_id'      => $svcId('slab'),
                'slug'            => 'slab-suphanburi-rice-mill',
                'title'           => 'ลานคอนกรีตโรงสีข้าว สุพรรณบุรี 6,200 ตร.ม.',
                'location'        => 'สุพรรณบุรี — เมือง',
                'project_length'  => 6200.00,
                'cover_image'     => 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=1000&q=80&auto=format&fit=crop',
                'completion_date' => '2024-08-15',
                'content'         => '<p>ลานคอนกรีตเสริมเหล็กรับน้ำหนักรถบรรทุก 40 ตัน หนา 25 ซม. ตาข่ายเหล็ก Ø12 มม. ระยะ 15x15 ซม. ขัดผิวเรียบด้วยเครื่องขัด Trowel เสร็จใน 3 สัปดาห์</p>',
            ],
            [
                'service_id'      => $svcId('drain'),
                'slug'            => 'drain-bang-yai',
                'title'           => 'ระบบระบายน้ำ บางใหญ่ 800 ม.',
                'location'        => 'บางใหญ่ — นนทบุรี',
                'project_length'  => 800.00,
                'cover_image'     => 'https://images.unsplash.com/photo-1590674867551-11c3a2e92ec7?w=1000&q=80&auto=format&fit=crop',
                'completion_date' => '2024-06-30',
                'content'         => '<p>วางท่อระบายน้ำคอนกรีตเสริมเหล็ก Ø80 ซม. ยาว 800 เมตร บ่อพักน้ำ 18 บ่อ ฝาปิดตะแกรงเหล็กหล่อ แก้ปัญหาน้ำท่วมขังได้ 100%</p>',
            ],
            [
                'service_id'      => $svcId('land'),
                'slug'            => 'land-lat-krabang-industrial',
                'title'           => 'ถมดินนิคมอุตสาหกรรม ลาดกระบัง 50,000 ลบ.ม.',
                'location'        => 'ลาดกระบัง — กรุงเทพฯ',
                'project_length'  => 50000.00,
                'cover_image'     => 'https://images.unsplash.com/photo-1531834685032-c74464ae3c97?w=1000&q=80&auto=format&fit=crop',
                'completion_date' => '2024-12-20',
                'content'         => '<p>งานถมดินลูกรัง 50,000 ลบ.ม. บดอัดเป็น 5 ชั้น ทดสอบค่า CBR ทุกชั้น พร้อมรายงานผลทดสอบโดยห้องปฏิบัติการรับรอง เสร็จตามกำหนด 12 สัปดาห์</p>',
            ],
            [
                'service_id'      => $svcId('bored-pile'),
                'slug'            => 'bored-pile-samut-prakan',
                'title'           => 'เข็มเจาะฐานรากโรงงาน สมุทรปราการ 240 ต้น',
                'location'        => 'สมุทรปราการ — เมือง',
                'project_length'  => 240.00,
                'cover_image'     => 'https://images.unsplash.com/photo-1517089596392-fb9a9033e05b?w=1000&q=80&auto=format&fit=crop',
                'completion_date' => '2025-04-10',
                'content'         => '<p>เจาะเข็ม Ø35 ซม. ลึก 18 เมตร จำนวน 240 ต้น สำหรับฐานรากโรงงาน ดำเนินงานพร้อมกัน 3 เครื่องจักร แล้วเสร็จใน 6 สัปดาห์</p>',
            ],
        ];

        foreach ($portfolios as $p) {
            Portfolio::updateOrCreate(['slug' => $p['slug']], $p);
        }
    }
}
