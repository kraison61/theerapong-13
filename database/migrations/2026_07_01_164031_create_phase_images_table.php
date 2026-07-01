<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('phase_images', function (Blueprint $table) {
            $table->id();
            // ผูก Foreign Key กับตาราง project_phases (เมื่องวดงานถูกลบ รูปจะถูกลบตาม)
            $table->foreignId('project_phase_id')->constrained('project_phases')->cascadeOnDelete();

            $table->string('image_path'); // เก็บที่อยู่ไฟล์รูปภาพ
            $table->text('description')->nullable(); // คำบรรยายรูปภาพ
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('phase_images');
    }
};
