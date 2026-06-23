<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        // ==========================================
        // กลุ่มที่ 1: Master Tables (ไม่มี Foreign Key)
        // ==========================================
        Schema::create('service_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->timestamps();
        });

        Schema::create('labor_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('parent_id')->nullable()->constrained('labor_categories')->cascadeOnDelete();
            $table->timestamps();
        });

        // ==========================================
        // กลุ่มที่ 2: Core Tables (อ้างอิงกลับไปที่ตารางกลุ่มที่ 1 และ users)
        // ==========================================
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_category_id')->constrained('service_categories')->cascadeOnDelete();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->string('h1')->nullable();
            $table->longText('content')->nullable();
            $table->decimal('rating_value', 3, 2)->default(5.00);
            $table->integer('review_count')->default(0);
            $table->string('schema_type')->nullable();
            $table->boolean('is_active')->default(1);
            $table->timestamps();
        });

        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            // อ้างอิง user_id ไปที่ตาราง users
            $table->foreignId('user_id')->nullable()->constrained('users')->nullOnDelete();
            $table->string('name');
            $table->string('slug')->unique()->nullable();
            $table->text('description')->nullable();
            $table->string('status', 50)->default('active');
            $table->timestamps();
        });

        Schema::create('labor_costs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('labor_categories')->cascadeOnDelete();
            $table->string('item_name');
            $table->string('unit', 50);
            $table->decimal('cost_per_unit', 10, 2)->default(0.00);
            $table->string('remark')->nullable();
            $table->string('document_ref', 100)->default('ว 809');
            $table->timestamps();
        });

        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_category_id')->constrained('service_categories')->cascadeOnDelete();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('description');
            $table->longText('content');
            $table->string('cover_image')->nullable();
            $table->timestamps();
        });

        // ==========================================
        // กลุ่มที่ 3: Detail Tables (อ้างอิงกลับไปที่ Services และ Projects)
        // ==========================================
        Schema::create('service_prices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_id')->constrained('services')->cascadeOnDelete();
            $table->string('sku', 100)->nullable();
            $table->string('name');
            $table->text('description')->nullable();
            $table->enum('price_type', ['fixed', 'starting_at', 'range', 'call_to_ask', 'variable'])->default('fixed');
            $table->decimal('price', 10, 2)->nullable();
            $table->decimal('max_price', 10, 2)->nullable();
            $table->decimal('discount_price', 10, 2)->nullable();
            $table->string('unit', 50)->nullable();
            $table->string('price_currency', 3)->default('THB');
            $table->date('price_valid_until')->nullable();
            $table->string('availability')->default('https://schema.org/InStock');
            $table->integer('sort_order')->default(0);
            $table->boolean('is_active')->default(1);
            $table->timestamps();
        });

        Schema::create('project_phases', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->constrained('projects')->cascadeOnDelete();
            $table->integer('phase_number');
            $table->string('title');
            $table->string('status', 50)->default('pending');
            $table->timestamps();
        });

        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_id')->constrained('services')->cascadeOnDelete();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('location')->nullable();
            $table->decimal('project_length', 8, 2)->nullable();
            $table->longText('content')->nullable();
            $table->string('cover_image')->nullable();
            $table->date('completion_date')->nullable();
            $table->timestamps();
        });

        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_id')->constrained('services')->cascadeOnDelete();
            $table->string('author_name');
            $table->tinyInteger('rating')->default(5);
            $table->text('review_text');
            $table->string('location')->nullable();
            $table->timestamps();
        });

        Schema::create('faqs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_id')->constrained('services')->cascadeOnDelete();
            $table->string('question');
            $table->text('answer');
            $table->integer('sort_order')->default(0);
            $table->boolean('is_active')->default(1);
            $table->timestamps();
        });

        // ==========================================
        // กลุ่มที่ 4: ตารางเก็บรูปภาพอเนกประสงค์ (Polymorphic)
        // ==========================================
        Schema::create('image_uploads', function (Blueprint $table) {
            $table->id();
            $table->morphs('imageable'); // สร้าง imageable_id และ imageable_type ให้อัตโนมัติ
            $table->string('img_url');
            $table->string('location')->nullable();
            $table->timestamp('worked_date')->nullable();
            $table->timestamps();

            $table->index(['location', 'created_at']);
        });
    }

    public function down(): void
    {
        // ย้อนกลับการสร้าง ลบจากล่างขึ้นบน
        Schema::dropIfExists('image_uploads');
        Schema::dropIfExists('faqs');
        Schema::dropIfExists('reviews');
        Schema::dropIfExists('portfolios');
        Schema::dropIfExists('project_phases');
        Schema::dropIfExists('service_prices');
        Schema::dropIfExists('blogs');
        Schema::dropIfExists('labor_costs');
        Schema::dropIfExists('projects');
        Schema::dropIfExists('services');
        Schema::dropIfExists('labor_categories');
        Schema::dropIfExists('service_categories');
    }
};