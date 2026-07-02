@extends('admin.layouts.app')

@section('admin-content')
<div
    class="flex h-screen overflow-hidden"
    x-init="services = {{ Js::from($services) }}; users = {{ Js::from($users) }};"
>
    <x-admin.mobile-overlay />
    <x-admin.sidebar />
    <x-admin.main-content />
</div>

<x-admin.delete-modal />
@endsection