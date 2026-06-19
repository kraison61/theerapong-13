<?php

if (!function_exists('unsplash')) {
    /**
     * สร้าง URL รูปจาก Unsplash — แทน helper img() เดิมใน JavaScript
     */
    function unsplash(string $id, int $w = 1000): string
    {
        return "https://images.unsplash.com/photo-{$id}?w={$w}&q=80&auto=format&fit=crop";
    }
}
