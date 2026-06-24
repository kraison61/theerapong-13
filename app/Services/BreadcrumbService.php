<?php

namespace App\Services;
use Illuminate\Support\Str;

class BreadcrumbService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function generate(): array
    {
        $segments = request()->segments();
        $breadcrumbs = [['label' => 'หน้าแรก', 'url' => url('/')]];
        $url = '';

        foreach ($segments as $index => $segment) {
            $url .= '/' . $segment;
            
            // กรณีเป็นเลข ID (เช่น /services/123) ให้พยายามหาชื่อ Model
            // หากไม่ใช่เลข ให้ใช้ค่าจาก URL แล้วทำ Slug ให้เป็นข้อความปกติ
            $label = is_numeric($segment) 
                ? $this->resolveModelName($segments[$index - 1] ?? 'item', $segment) 
                : Str::title(str_replace('-', ' ', $segment));

            $breadcrumbs[] = [
                'label' => $label,
                'url' => url($url)
            ];
        }

        return $breadcrumbs;
    }

    protected function resolveModelName(string $type, $id): string
    {
        // ตัวอย่าง: ถ้า URL คือ /services/5 จะไปหา Model Service ที่มี ID 5
        try {
            $modelClass = 'App\\Models\\' . Str::studly(Str::singular($type));
            if (class_exists($modelClass)) {
                return $modelClass::findOrFail($id)->name ?? 'รายการที่ ' . $id;
            }
        } catch (\Exception $e) {
            return 'รายการที่ ' . $id;
        }
        return 'รายการที่ ' . $id;
    }
}
