@extends('layouts.app')

@section('title', ' — ธีรพงษ์การช่าง')
@section('description', 'รับเหมาก่อสร้างครบวงจร กำแพงกันดิน รั้วบ้าน ถนน ลานคอนกรีต บางใหญ่ นนทบุรี และกรุงเทพฯ')

@section('content')
    <!-- ============ SERVICE HERO ============ -->
    <x-service.hero :service="$service" />

    <!-- ============ TRUST STRIP ============ -->
    <x-trust />

    <!-- ============ OVERVIEW + SCOPE ============ -->
    <x-service.overview :service="$service" />

    <!-- ============ PRICING TABLE (compare all services) ============ -->
    <x-service.pricing-table :services="$services" :current="$slug" />

    <!-- ============ FINANCING CAROUSEL (3 finance partners) ============ -->
    {{-- <x-service.financing :partners="$finance" /> --}}
    <x-affiliate />

    <!-- ============ PROCESS ============ -->
    <x-service.process />
    <!-- ============ RELATED PROJECTS ============ -->
    <x-service.related-projects :service="$service" :projects="$related" />

    <!-- ============ SERVICE-SPECIFIC FAQ ============ -->
    <x-service.faq :faqs="$service['faq']" />

    <!-- ============ OTHER SERVICES ============ -->
    <x-service.other-services :services="$services" :current="$slug" />

@endsection
