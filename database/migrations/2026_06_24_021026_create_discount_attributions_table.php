<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('discount_attributions', function (Blueprint $table) {
            $table->id();
            $table->string('code', 50)->unique()->comment('รหัสส่วนลดที่ระบบสุ่มสร้างอัตโนมัติ');

            // ข้อมูลฝั่งเว็บไซต์ (บันทึกตอนระบบสร้างรหัสบนหน้าเว็บ)
            $table->string('source_page')->comment('หน้าเว็บต้นทาง เช่น /services/home-renovation');
            $table->string('utm_source')->nullable()->comment('ที่มาของทราฟฟิก เช่น facebook, google_ads');
            $table->ipAddress('ip_address')->nullable()->comment('IP ของผู้รับรหัสเพื่อป้องกันการปั๊มโค้ด');

            // ข้อมูลฝั่งระบบหลังบ้าน (บันทึกตอนนำโค้ดมาใช้งานหรือสร้างใบเสนอราคา)
            $table->string('customer_name')->nullable()->comment('ชื่อลูกค้าที่นำโค้ดมาใช้ (กรณีไม่มีในระบบก่อนหน้า)');
            // ผูกกับตาราง projects หรือ quotations ที่เคยออกแบบไว้
            $table->foreignId('project_id')->nullable()->constrained('projects')->nullOnDelete();

            // สถานะและการควบคุม
            $table->enum('status', ['generated', 'applied', 'expired'])->default('generated');
            $table->decimal('discount_amount', 10, 2)->default(0.00)->comment('มูลค่าส่วนลดที่ได้รับจริง');
            $table->timestamp('used_at')->nullable()->comment('เวลาที่ลูกค้านำโค้ดมาใช้งานจริง');
            $table->timestamp('expires_at')->nullable()->comment('วันหมดอายุของโค้ด');
            $table->timestamps();

            // การทำ Index เพื่อให้ค้นหาโค้ดและรายงานผลได้อย่างรวดเร็ว
            $table->index('code');
            $table->index('status');
            $table->index('source_page');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discount_attributions');
    }
};