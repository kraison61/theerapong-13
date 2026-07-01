<?php

namespace App\Http\Controllers;
use App\Models\Service;

class AdminController extends Controller
{
    public function index()
    {
        $services = Service::all()->map(fn($s) => [
            'id'          => $s->id,
            'title'       => $s->title,
            'slug'        => $s->slug,
            'icon'        => $s->icon_name,
            'description' => $s->description,
            'dur'         => $s->dur,
            'status'      => $s->is_active ? 'active' : 'inactive',
        ]);

        return view('admin.index', compact('services'));
    }
}
