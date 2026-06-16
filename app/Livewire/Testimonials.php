<?php

namespace App\Livewire;

use Livewire\Attributes\Computed;
use Livewire\Component;

class Testimonials extends Component
{
    public int $activeTab = 0;

    private const TABS = ['บ้านพักอาศัย', 'โครงการหมู่บ้าน', 'เจ้าของที่ดิน'];

    /**
     * @var list<list<array{initial:string,name:string,project:string,text:string}>>
     */
    private const DATA = [
        // Tab 0 — บ้านพักอาศัย
        [
            ['initial' => 'ก', 'name' => 'คุณกชกร เลิศมงคล',      'project' => 'รั้วบ้านโมเดิร์น · ราชพฤกษ์',        'text' => 'ทีมงานเป็นมืออาชีพมาก สื่อสารตรงไปตรงมา ราคาที่เสนอตรงตามที่จ่ายจริง รั้วโมเดิร์นที่ทำให้สวยมากค่ะ'],
            ['initial' => 'ส', 'name' => 'คุณสมชาย ภักดี',         'project' => 'กำแพงกันดิน · บางใหญ่',              'text' => 'กำแพงกันดินสูง 2.5 ม. ทำเสร็จก่อนกำหนด 3 วัน วิศวกรเข้ามาตรวจหน้างานทุกสัปดาห์ ราคายุติธรรมครับ'],
            ['initial' => 'ป', 'name' => 'คุณปรียา วงศ์เจริญ',    'project' => 'ลานจอดรถ · นนทบุรี',                 'text' => 'ลานคอนกรีตขัดมันสวยตามแบบ ใช้จอดรถมา 2 ปี ไม่มีร้าวเลย คุ้มมาก แนะนำต่อให้เพื่อนบ้านแล้วค่ะ'],
        ],
        // Tab 1 — โครงการหมู่บ้าน
        [
            ['initial' => 'ธ', 'name' => 'คุณธีระ — Site Manager', 'project' => 'หมู่บ้านนวธารา · นวนคร',             'text' => 'รั้วโครงการ 156 ม. ทำใน 24 วัน ไม่มีดราม่ากับลูกบ้าน เก็บงานเรียบร้อย ทำสัญญารอบสอง 2 โครงการแล้วครับ'],
            ['initial' => 'ว', 'name' => 'คุณวีระชัย สุขใจ',       'project' => 'โครงการบ้านเดี่ยว · ปทุมธานี',       'text' => 'งานถนนคอนกรีต 850 ตร.ม. ส่งมอบทันก่อนเปิดโครงการ เอกสารครบ ใบ กว. เซ็นถูกต้อง ทำงานง่ายมาก'],
        ],
        // Tab 2 — เจ้าของที่ดิน
        [
            ['initial' => 'ม', 'name' => 'คุณมานพ ใจดี',            'project' => 'ถมที่ดิน 4 ไร่ · บางบัวทอง',        'text' => 'ถมที่ 4 ไร่ บดอัดดีมาก ราคาคิดตามคิวจริงไม่โกง ขึ้นบ้านได้สบายๆ ไม่ทรุด ผ่านมา 3 ปียังแน่นเหมือนเดิม'],
            ['initial' => 'อ', 'name' => 'คุณอุไรวรรณ ทองดี',      'project' => 'ระบบระบายน้ำ · ลาดกระบัง',          'text' => 'วางท่อระบายน้ำรอบที่ดิน 86 เมตร แก้ปัญหาน้ำท่วมขังที่เป็นมานาน ทีมงานชี้แจงทุกขั้นตอน ราคาเป็นธรรม'],
        ],
    ];

    #[Computed]
    public function tabs(): array
    {
        return self::TABS;
    }

    #[Computed]
    public function testimonials(): array
    {
        return self::DATA[$this->activeTab] ?? self::DATA[0];
    }

    public function setTab(int $tab): void
    {
        $this->activeTab = $tab;
    }

    public function render(): \Illuminate\Contracts\View\View
    {
        return view('livewire.testimonials');
    }
}
