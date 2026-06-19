@extends('layouts.app')

@section('title', 'ธีรพงษ์การช่าง — รับเหมาก่อสร้างครบวงจร')
@section('description', 'รับเหมากำแพงกันดิน รั้วบ้าน ถนน ลานคอนกรีต งานปรับพื้นที่ บางใหญ่ นนทบุรี · ประสบการณ์ 18 ปี รับประกัน 2 ปี')

@section('content')

    {{-- ============ UTILITY BAR ============ --}}
    <x-utility-bar />

    {{-- ============ NAV (Alpine.js สำหรับ mobile toggle) ============ --}}
    <x-nav />

    <x-breadcrumb />

    {{-- ============ HERO ============ --}}
    <x-hero />

    {{-- ============ TRUST STRIP ============ --}}
    <x-trust />

    {{-- ============ SERVICES ============ --}}
    <x-services :services="$services" />

    {{-- ============ STATS ============ --}}
    <x-stats />

    {{-- ============ PROJECTS (Livewire) ============ --}}
    <livewire:project-grid />

    {{-- ============ PROCESS ============ --}}
    <x-process :process="$process" />

    {{-- ============ TESTIMONIALS (Livewire) ============ --}}
    <livewire:testimonials />

    {{-- ============ FAQ (Flux Accordion) ============ --}}
    <x-faq :faqs="$faqs" />


@endsection