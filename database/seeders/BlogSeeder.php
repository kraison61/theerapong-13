<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\ServiceCategory;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    public function run(): void
    {
        $catId = fn(string $slug) => ServiceCategory::where('slug', $slug)->value('id');

        $blogs = [
            // กำแพงกันดิน / structural-and-wall
            [
                'service_category_id' => $catId('structural-and-wall'),
                'slug'        => 'retaining-wall-types',
                'title'       => '5 ประเภทกำแพงกันดิน ที่เจ้าของที่ดินต้องรู้',
                'description' => 'เปรียบเทียบกำแพงกันดินแต่ละแบบ — คสล., บล็อกประสาน, เสาเข็ม พร้อมข้อดีข้อเสียและงบประมาณโดยประมาณ',
                'cover_image' => 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=1000&q=80&auto=format&fit=crop',
                'content'     => '<p>การเลือกประเภทกำแพงกันดินที่เหมาะสมเป็นสิ่งสำคัญอย่างยิ่ง เพราะกำแพงกันดินที่ไม่ได้คุณภาพอาจพังได้โดยไม่ทันตั้งตัว บทความนี้รวบรวมข้อมูลทั้ง 5 ประเภทหลักไว้ให้คุณเปรียบเทียบ</p><h2>1. กำแพงกันดินคอนกรีตเสริมเหล็ก (คสล.)</h2><p>เหมาะสำหรับงานขนาดใหญ่ที่ต้องรับแรงดันดินสูง ออกแบบโดยวิศวกร ทนทานยาวนาน 50+ ปี</p><h2>2. กำแพงบล็อกประสาน</h2><p>ราคาประหยัด สวยงาม เหมาะกับงานบ้านพักอาศัยและที่ดินความสูงไม่เกิน 2 เมตร</p>',
            ],
            [
                'service_category_id' => $catId('structural-and-wall'),
                'slug'        => 'retaining-wall-cost-guide',
                'title'       => 'งบกำแพงกันดิน 2568 — ราคาต่อตร.ม. และปัจจัยที่ต้องพิจารณา',
                'description' => 'คู่มือคำนวณงบประมาณกำแพงกันดิน พร้อมตัวอย่างการคำนวณจริง ราคาวัสดุและค่าแรงในปี 2568',
                'cover_image' => 'https://images.unsplash.com/photo-1531834685032-c74464ae3c97?w=1000&q=80&auto=format&fit=crop',
                'content'     => '<p>หนึ่งในคำถามยอดฮิตของเจ้าของที่ดินคือ "กำแพงกันดินราคาเท่าไหร่?" บทความนี้จะอธิบายปัจจัยที่ส่งผลต่อราคาและวิธีคำนวณเบื้องต้น</p><h2>ปัจจัยหลักที่กำหนดราคา</h2><ul><li>ความสูงของกำแพง</li><li>ประเภทดินและสภาพหน้างาน</li><li>ระยะทางการเข้าถึงเครื่องจักร</li><li>ความจำเป็นในการใช้วิศวกร</li></ul>',
            ],
            [
                'service_category_id' => $catId('structural-and-wall'),
                'slug'        => 'bored-pile-foundation-guide',
                'title'       => 'เข็มเจาะสำหรับกำแพงกันดิน — เมื่อไหร่ต้องใช้และราคาเท่าไหร่',
                'description' => 'อธิบายว่าเมื่อไหร่งานกำแพงกันดินจำเป็นต้องใช้เข็มเจาะ พร้อมข้อมูลราคาและข้อควรระวัง',
                'cover_image' => 'https://images.unsplash.com/photo-1590674867551-11c3a2e92ec7?w=1000&q=80&auto=format&fit=crop',
                'content'     => '<p>ดินอ่อนในกรุงเทพและปริมณฑลมักต้องการเข็มเจาะเพื่อรับน้ำหนักโครงสร้าง บทความนี้ช่วยให้คุณตัดสินใจได้ถูกต้อง</p>',
            ],
            // รั้วบ้าน / architectural-and-exterior
            [
                'service_category_id' => $catId('architectural-and-exterior'),
                'slug'        => 'fence-material-comparison',
                'title'       => 'รั้วบ้าน 2568: เปรียบเทียบวัสดุ 4 ชนิด — คุ้มค่าอะไรสุด?',
                'description' => 'เปรียบเทียบรั้วคอนกรีตสำเร็จรูป, รั้วก่ออิฐ, รั้วเหล็ก และรั้วไม้ระแนง ข้อดีข้อเสีย อายุการใช้งาน และราคาต่อเมตรวิ่ง',
                'cover_image' => 'https://images.unsplash.com/photo-1517089596392-fb9a9033e05b?w=1000&q=80&auto=format&fit=crop',
                'content'     => '<p>การเลือกรั้วบ้านไม่ใช่แค่เรื่องสวยงาม แต่ยังเกี่ยวข้องกับความปลอดภัย ความทนทาน และงบประมาณระยะยาว</p><h2>รั้วคอนกรีตสำเร็จรูป</h2><p>ติดตั้งรวดเร็ว อายุการใช้งาน 30+ ปี ราคาเริ่มต้น 850 บาท/ม.วิ่ง</p><h2>รั้วก่ออิฐมอญ</h2><p>สวยคลาสสิก ปรับแต่งได้หลากหลาย ราคาเริ่มต้น 1,400 บาท/ม.วิ่ง</p>',
            ],
            [
                'service_category_id' => $catId('architectural-and-exterior'),
                'slug'        => 'precast-fence-installation-guide',
                'title'       => 'ขั้นตอนติดตั้งรั้วสำเร็จรูปให้แข็งแกร่งและสวยงาม',
                'description' => 'คู่มือการติดตั้งรั้วคอนกรีตสำเร็จรูปอย่างถูกวิธี ตั้งแต่วางผัง ฝังเสา จนถึงการตรวจรับงาน',
                'cover_image' => 'https://images.unsplash.com/photo-1503387762-592deb58ef4e?w=1000&q=80&auto=format&fit=crop',
                'content'     => '<p>รั้วสำเร็จรูปที่ดีต้องอาศัยทั้งวัสดุคุณภาพและช่างฝีมือที่มีประสบการณ์ บทความนี้อธิบายขั้นตอนการติดตั้งอย่างละเอียด</p>',
            ],
            // ถนน/ทางเข้า / systems-and-infrastructure
            [
                'service_category_id' => $catId('systems-and-infrastructure'),
                'slug'        => 'concrete-road-thickness-guide',
                'title'       => 'ถนนคอนกรีตหนาเท่าไหร่? คู่มือเลือกความหนาตามน้ำหนักรถ',
                'description' => 'อธิบายมาตรฐานความหนาถนนคอนกรีต ตั้งแต่รถเก๋งไปถึงรถบรรทุก 40 ตัน พร้อมตัวอย่างและตารางเปรียบเทียบ',
                'cover_image' => 'https://images.unsplash.com/photo-1565008553300-5b9c0a6f8b8a?w=1000&q=80&auto=format&fit=crop',
                'content'     => '<p>ความหนาคอนกรีตถนนที่ไม่เพียงพอเป็นสาเหตุหลักที่ทำให้ถนนแตกร้าวก่อนเวลา บทความนี้ช่วยให้คุณเลือกความหนาที่เหมาะสม</p><h2>มาตรฐานความหนา</h2><ul><li>รถเก๋ง/รถกระบะ: 10–12 ซม.</li><li>รถบรรทุก 10 ตัน: 15 ซม.</li><li>รถพ่วง 40 ตัน: 20–25 ซม.</li></ul>',
            ],
            [
                'service_category_id' => $catId('systems-and-infrastructure'),
                'slug'        => 'road-concrete-crack-prevention',
                'title'       => 'ทำไมถนนคอนกรีตถึงแตกร้าว? และวิธีป้องกันที่ถูกต้อง',
                'description' => 'สาเหตุหลัก 5 ประการที่ทำให้ถนนคอนกรีตแตกร้าวก่อนเวลา พร้อมวิธีป้องกันตั้งแต่ขั้นตอนการก่อสร้าง',
                'cover_image' => 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=1000&q=80&auto=format&fit=crop',
                'content'     => '<p>ถนนคอนกรีตที่ดีควรอยู่ได้ 20–30 ปี แต่หากก่อสร้างไม่ถูกวิธี อาจแตกร้าวภายใน 2–3 ปี</p><h2>สาเหตุหลัก</h2><ol><li>ฐานรองรับไม่แน่น</li><li>คอนกรีตกำลังอัดต่ำ</li><li>ไม่ตัดรอยยาแนว</li><li>บ่มคอนกรีตไม่นานพอ</li><li>น้ำหนักเกินมาตรฐาน</li></ol>',
            ],
            // ลานคอนกรีต
            [
                'service_category_id' => $catId('systems-and-infrastructure'),
                'slug'        => 'concrete-yard-surface-types',
                'title'       => 'ผิวลานคอนกรีต 4 แบบ เลือกแบบไหนดีสำหรับบ้านและโรงงาน',
                'description' => 'เปรียบเทียบผิวคอนกรีตขัดเรียบ, ขัดมัน, สกรีด และ Stamped Concrete พร้อมราคาและข้อควรระวัง',
                'cover_image' => 'https://images.unsplash.com/photo-1541888946425-d81bb19480c5?w=1000&q=80&auto=format&fit=crop',
                'content'     => '<p>ผิวลานคอนกรีตมีผลต่อทั้งความสวยงาม ความปลอดภัย และค่าบำรุงรักษาระยะยาว</p>',
            ],
            // ระบบระบายน้ำ
            [
                'service_category_id' => $catId('systems-and-infrastructure'),
                'slug'        => 'drainage-planning-guide',
                'title'       => 'วางแผนระบบระบายน้ำก่อนสร้างบ้าน — สิ่งที่ต้องรู้',
                'description' => 'คู่มือวางแผนระบบระบายน้ำสำหรับที่ดินเปล่าและโครงการก่อสร้างใหม่ เพื่อป้องกันปัญหาน้ำท่วมขัง',
                'cover_image' => 'https://images.unsplash.com/photo-1590674867551-11c3a2e92ec7?w=1000&q=80&auto=format&fit=crop',
                'content'     => '<p>ระบบระบายน้ำที่ดีควรออกแบบก่อนเริ่มก่อสร้างอาคาร ไม่ใช่แก้ปัญหาภายหลัง</p><h2>สิ่งที่ต้องประเมิน</h2><ul><li>ปริมาณน้ำฝนเฉลี่ยในพื้นที่</li><li>ระดับพื้นดินและทิศทางน้ำไหล</li><li>จุดระบายน้ำออก</li><li>ประเภทท่อและขนาด</li></ul>',
            ],
            [
                'service_category_id' => $catId('systems-and-infrastructure'),
                'slug'        => 'drain-channel-vs-pipe',
                'title'       => 'รางน้ำ vs ท่อฝัง — เลือกระบบระบายน้ำแบบไหนเหมาะกับงานของคุณ',
                'description' => 'เปรียบเทียบข้อดีข้อเสียของรางน้ำเปิดและท่อระบายน้ำฝัง พร้อมคำแนะนำการเลือกตามประเภทงาน',
                'cover_image' => 'https://images.unsplash.com/photo-1517089596392-fb9a9033e05b?w=1000&q=80&auto=format&fit=crop',
                'content'     => '<p>การเลือกระหว่างรางน้ำและท่อฝังขึ้นอยู่กับหลายปัจจัย ทั้งพื้นที่ งบประมาณ และความสะดวกในการบำรุงรักษา</p>',
            ],
            // ถมดิน / structural-and-wall
            [
                'service_category_id' => $catId('structural-and-wall'),
                'slug'        => 'land-fill-soil-types',
                'title'       => 'ดินถม 3 ประเภท — ดินลูกรัง ดินทราย ดินทั่วไป ต่างกันอย่างไร',
                'description' => 'อธิบายความแตกต่างของดินถมแต่ละประเภท ราคา ข้อดีข้อเสีย และงานไหนควรใช้ดินชนิดไหน',
                'cover_image' => 'https://images.unsplash.com/photo-1531834685032-c74464ae3c97?w=1000&q=80&auto=format&fit=crop',
                'content'     => '<p>ดินถมแต่ละประเภทมีคุณสมบัติต่างกัน การเลือกให้ถูกชนิดช่วยประหยัดงบและได้งานที่มีคุณภาพ</p><h2>ดินลูกรัง</h2><p>เหมาะสำหรับงานถมพื้นที่ที่ต้องการความแน่น บดอัดได้ดี ราคาอยู่ที่ 280–350 บาท/ลบ.ม.</p>',
            ],
            [
                'service_category_id' => $catId('structural-and-wall'),
                'slug'        => 'land-fill-compaction-standard',
                'title'       => 'มาตรฐานการบดอัดดิน — ทำไมค่า CBR ถึงสำคัญ?',
                'description' => 'อธิบายค่า CBR และ Compaction Test ในงานถมดิน ทำไมลูกค้าควรขอรายงานทดสอบทุกครั้ง',
                'cover_image' => 'https://images.unsplash.com/photo-1503387762-592deb58ef4e?w=1000&q=80&auto=format&fit=crop',
                'content'     => '<p>การบดอัดดินที่ไม่ได้มาตรฐานเป็นต้นเหตุของการทรุดตัวและความเสียหายของโครงสร้างในภายหลัง</p>',
            ],
            // บทความทั่วไป
            [
                'service_category_id' => $catId('architectural-and-exterior'),
                'slug'        => 'how-to-check-contractor',
                'title'       => 'เช็กลิสต์ 10 ข้อ ก่อนจ้างผู้รับเหมาก่อสร้าง',
                'description' => 'วิธีตรวจสอบผู้รับเหมาอย่างรอบคอบ ไม่ให้โดนทิ้งงาน พร้อมแบบฟอร์มสัญญาเบื้องต้น',
                'cover_image' => 'https://images.unsplash.com/photo-1541888946425-d81bb19480c5?w=1000&q=80&auto=format&fit=crop',
                'content'     => '<p>การจ้างผู้รับเหมาที่ไม่น่าเชื่อถืออาจส่งผลเสียหายทั้งทรัพย์สินและเวลา บทความนี้รวม 10 ข้อที่ต้องตรวจก่อนเซ็นสัญญา</p><ol><li>ตรวจสอบใบอนุญาตก่อสร้าง</li><li>ขอดูผลงานที่ผ่านมา</li><li>ถามเรื่องวิศวกรควบคุมงาน</li><li>ตรวจสอบการประกันผลงาน</li><li>อ่านสัญญาอย่างละเอียด</li></ol>',
            ],
            [
                'service_category_id' => $catId('systems-and-infrastructure'),
                'slug'        => 'construction-permit-guide',
                'title'       => 'ขออนุญาตก่อสร้างรั้วและกำแพง — ขั้นตอนและเอกสารที่ต้องเตรียม',
                'description' => 'อธิบายขั้นตอนการขออนุญาตก่อสร้างรั้วและกำแพงกันดินตาม พ.ร.บ. ควบคุมอาคาร พร้อมเอกสารที่ต้องเตรียม',
                'cover_image' => 'https://images.unsplash.com/photo-1590674867551-11c3a2e92ec7?w=1000&q=80&auto=format&fit=crop',
                'content'     => '<p>รั้วและกำแพงกันดินสูงเกิน 1 เมตรในพื้นที่ควบคุมอาคารต้องขออนุญาตก่อนก่อสร้าง บทความนี้อธิบายขั้นตอนทั้งหมด</p>',
            ],
            [
                'service_category_id' => $catId('structural-and-wall'),
                'slug'        => 'rainy-season-construction-tips',
                'title'       => 'ก่อสร้างช่วงหน้าฝน — 7 ข้อที่ผู้รับเหมามืออาชีพต้องรู้',
                'description' => 'เคล็ดลับการก่อสร้างในฤดูฝน ทั้งการเตรียมพื้นที่ การเทคอนกรีต และการป้องกันความเสียหาย',
                'cover_image' => 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=1000&q=80&auto=format&fit=crop',
                'content'     => '<p>การก่อสร้างในหน้าฝนมีความท้าทายมากกว่าปกติ แต่หากวางแผนดี ก็สามารถทำงานได้อย่างมีประสิทธิภาพและได้คุณภาพ</p>',
            ],
        ];

        foreach ($blogs as $blog) {
            Blog::updateOrCreate(['slug' => $blog['slug']], $blog);
        }
    }
}
