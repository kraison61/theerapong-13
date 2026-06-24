@extends('layouts.app')

@section('title', ' — ธีรพงษ์การช่าง')
@section('description', 'รับเหมาก่อสร้างครบวงจร กำแพงกันดิน รั้วบ้าน ถนน ลานคอนกรีต บางใหญ่ นนทบุรี และกรุงเทพฯ')

@section('content')
    <!-- ============ SERVICE HERO ============ -->
    <x-service.hero :service="$service" />

    <!-- ============ TRUST STRIP ============ -->
    <div class="border-y border-line bg-white">
        <div class="mx-auto max-w-7xl px-6 py-7 flex flex-wrap items-center justify-between gap-4">
            <span class="text-xs font-semibold uppercase tracking-[0.12em] text-muted">มาตรฐานงานทุกสัญญา</span>
            <div class="flex flex-wrap gap-2.5">
                <span
                    class="inline-flex items-center gap-2 rounded-full border border-line px-3.5 py-2 text-[15px] text-ink2"><i
                        class="bi bi-shield-check text-accent"></i> มอก. 109</span>
                <span
                    class="inline-flex items-center gap-2 rounded-full border border-line px-3.5 py-2 text-[15px] text-ink2"><i
                        class="bi bi-award-fill text-accent"></i> ใบอนุญาตชั้น ค</span>
                <span
                    class="inline-flex items-center gap-2 rounded-full border border-line px-3.5 py-2 text-[15px] text-ink2"><i
                        class="bi bi-people-fill text-accent"></i> สมาชิก ส.อ.ท.</span>
                <span
                    class="inline-flex items-center gap-2 rounded-full border border-line px-3.5 py-2 text-[15px] text-ink2"><i
                        class="bi bi-cone-striped text-accent"></i> จป. วิชาชีพ</span>
                <span
                    class="inline-flex items-center gap-2 rounded-full border border-line px-3.5 py-2 text-[15px] text-ink2"><i
                        class="bi bi-bank2 text-accent"></i> ขึ้นทะเบียนภาครัฐ</span>
            </div>
        </div>
    </div>

    <!-- ============ OVERVIEW + SCOPE ============ -->
    <x-service.overview :service="$service" />

    <!-- ============ PRICING TABLE (compare all services) ============ -->
    <x-service.pricing-table :services="$services" :current="$slug" />

    <!-- ============ FINANCING CAROUSEL (3 finance partners) ============ -->
    <x-service.financing :partners="$finance" />

    <!-- ============ PROCESS ============ -->
    <x-service.process />
    <!-- ============ RELATED PROJECTS ============ -->
    <x-service.related-projects :service="$service" :projects="$related" />

    <!-- ============ SERVICE-SPECIFIC FAQ ============ -->
    <x-service.faq :faqs="$service['faq']" />

    <!-- ============ OTHER SERVICES ============ -->
    <x-service.other-services :services="$services" :current="$slug" />

@endsection