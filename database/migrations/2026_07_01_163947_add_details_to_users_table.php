<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // เพิ่มคอลัมน์ใหม่ โดยใส่ nullable() เพื่อไม่ให้ error กับข้อมูลเดิมที่มีอยู่
            $table->enum('role', ['admin', 'customer'])->default('customer')->after('id');
            $table->string('tel')->nullable()->after('password');
            $table->text('address')->nullable()->after('tel');
            $table->text('other_contact')->nullable()->after('address');
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // หากสั่ง rollback ให้ลบคอลัมน์เหล่านี้ทิ้ง
            $table->dropColumn(['role', 'tel', 'address', 'other_contact']);
        });
    }
};
