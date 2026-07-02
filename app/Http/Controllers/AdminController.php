<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $services = Service::with(['category', 'prices'])
            ->latest()
            ->get()
            ->map(fn ($s) => [
                'id'       => $s->id,
                'name'     => $s->title,
                'desc'     => $s->description,
                'category' => $s->category?->name ?? '-',
                'price'    => $s->prices->first()
                    ? '฿' . number_format($s->prices->first()->price) . '/' . $s->prices->first()->unit
                    : '-',
                'active'   => $s->is_active,
                'image'    => $s->images()->first()?->img_url
                    ?? 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=100&h=100&fit=crop',
            ]);

        $users = User::latest()->get()->map(fn ($u) => [
            'id'          => $u->id,
            'name'        => $u->name,
            'email'       => $u->email,
            'phone'       => $u->tel ?? '-',
            'role'        => $u->role ?? 'customer',
            'roleLabel'   => $u->role === 'admin' ? 'แอดมิน' : 'ลูกค้า',
            'active'      => true,
            'joined'      => $u->created_at?->format('d/m/Y'),
            'initial'     => mb_substr($u->name, 0, 1),
            'avatarColor' => 'bg-blue-500',
            'orders'      => 0,
            'spent'       => '0',
            'lastLogin'   => '-',
        ]);

        return view('admin.index', compact('services', 'users'));
    }
}