<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;
use Illuminate\Support\Str;

class ContactForm extends Component
{
    #[Validate('required|min:2', message: 'กรุณากรอกชื่อ-นามสกุลอย่างน้อย 2 ตัวอักษร')]
    public string $name = '';

    #[Validate('required|regex:/^[0-9\-\s]{9,}$/', message: 'กรุณากรอกเบอร์โทรศัพท์ให้ถูกต้อง')]
    public string $phone = '';

    #[Validate('required', message: 'กรุณาเลือกประเภทงาน')]
    public string $service = '';

    public string $budget = '500,000 – 1,000,000 บาท';

    public string $detail = '';

    #[Validate('accepted', message: 'กรุณายอมรับนโยบายความเป็นส่วนตัว')]
    public bool $accepted = false;

    public bool $submitted = false;

    // เพิ่มตัวแปรสำหรับเก็บรหัสส่วนลด
    public string $discountCode = '';

    public array $budgetOptions = [
        'ต่ำกว่า 100,000 บาท',
        '100,000 – 500,000 บาท',
        '500,000 – 1,000,000 บาท',
        '1,000,000 – 3,000,000 บาท',
        'มากกว่า 3,000,000 บาท',
    ];

    public array $serviceOptions = [
        'กำแพงกันดิน',
        'รั้วบ้าน',
        'ถนน & ทางเข้าบ้าน',
        'ลานคอนกรีต / ลานจอดรถ',
        'ระบบระบายน้ำ',
        'ปรับพื้นที่ / ถมดิน',
        'งานอื่นๆ / รวมหลายงาน',
    ];

    public function mount(): void
    {
        // สุ่มรหัสส่วนลดเมื่อ Component ถูกโหลดครั้งแรก
        $this->discountCode = 'TP-' . strtoupper(Str::random(5));
    }

    public function submit(): void
    {
        $this->validate();

        // TODO: ส่งอีเมล / บันทึกฐานข้อมูล
        // อย่าลืมนำ $this->discountCode ไปบันทึกลงฐานข้อมูลหรือแนบไปกับ Email ด้วย
        // \Illuminate\Support\Facades\Mail::to('work@theeraphong.co.th')
        //     ->send(new \App\Mail\QuoteRequested(array_merge($this->only('name','phone','service','budget','detail'), ['discount_code' => $this->discountCode])));

        $this->reset(['name', 'phone', 'service', 'detail', 'accepted']);
        $this->submitted = true;

        // หากต้องการสุ่มรหัสใหม่หลังส่งฟอร์มเสร็จ สามารถเรียกใช้บรรทัดล่างนี้ได้
        // $this->discountCode = 'TP-' . strtoupper(Str::random(5));
    }

    /**
     * Livewire v4: real-time validation ใช้ #[Validate] บน property
     * ร่วมกับ wire:model.live — updated* hooks ยังใช้ได้แต่ไม่จำเป็น
     */
    public function render(): \Illuminate\Contracts\View\View
    {
        return view('livewire.contact-form');
    }
}