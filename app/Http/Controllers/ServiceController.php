<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return $this->show($request, null);
    }

    /**
     * Show the form for creating a new resource.
     */

    public function show(Request $request, ?string $slug = null)
    {
        $services = config('catalog.services');
        $projects = config('catalog.projects');

        // fallback ถ้าไม่มี slug หรือ slug ไม่ถูกต้อง — เหมือนของเดิมที่ default = 'wall'
        if (!$slug || !isset($services[$slug])) {
            $slug = 'wall';
        }
        $service = $services[$slug];
        $related = $service['projCat'] === 'all'
            ? $projects
            : array_values(array_filter($projects, fn($p) => $p['cat'] === $service['projCat']));

        $related = array_slice($related ?: $projects, 0, 3);

        return view('pages.services.services', [
            'services' => $services,
            'slug' => $slug,
            'service' => $service,
            'related' => $related,
            'finance' => config('catalog.finance'),
            'formServices' => config('catalog.form_services'),
        ]);
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

}
