<div class="flex-1 flex flex-col overflow-hidden">
        
        <!-- Top Bar -->
        <header class="h-16 bg-white border-b border-slate-200 flex items-center justify-between px-4 sm:px-6 flex-shrink-0">
            <div class="flex items-center gap-3">
                <button @click="mobileMenuOpen = true" class="lg:hidden p-2 rounded-lg hover:bg-slate-100">
                    <svg class="w-5 h-5 text-slate-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                </button>
                
                <div class="hidden sm:flex items-center gap-2 text-sm">
                    <span class="text-slate-500">Admin</span>
                    <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    <span class="font-medium text-slate-900" x-text="pageTitle"></span>
                </div>
                <span class="sm:hidden font-semibold text-slate-900" x-text="pageTitle"></span>
            </div>

            <div class="flex items-center gap-2 sm:gap-3">
                <div class="relative hidden md:block">
                    <svg class="w-4 h-4 absolute left-3 top-1/2 -translate-y-1/2 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                    <input type="text" placeholder="ค้นหา..." class="pl-9 pr-4 py-2 w-64 bg-slate-100 border border-transparent rounded-lg text-sm focus:outline-none focus:bg-white focus:border-amber-500 transition">
                </div>
                <button class="md:hidden p-2 rounded-lg hover:bg-slate-100">
                    <svg class="w-5 h-5 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                </button>
                
                <button class="relative p-2 rounded-lg hover:bg-slate-100">
                    <svg class="w-5 h-5 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/></svg>
                    <span class="absolute top-1 right-1 w-2 h-2 bg-red-500 rounded-full"></span>
                </button>
            </div>
        </header>

        <!-- Page Content -->
        <main class="flex-1 overflow-y-auto p-4 sm:p-6">

            <!-- ============ DASHBOARD PAGE ============ -->
            <div x-show="currentPage === 'dashboard'" x-transition>
                <div class="mb-6">
                    <h1 class="text-xl sm:text-2xl font-bold text-slate-900">ภาพรวมระบบ</h1>
                    <p class="text-sm text-slate-500 mt-1">ยินดีต้อนรับกลับมา! นี่คือสรุปข้อมูลล่าสุด</p>
                </div>

                <!-- Stats Grid -->
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-3 sm:gap-4 mb-6">
                    <div class="bg-white rounded-xl p-4 sm:p-5 border border-slate-200">
                        <div class="flex items-center justify-between mb-3">
                            <div class="w-9 h-9 sm:w-10 sm:h-10 rounded-lg bg-amber-100 flex items-center justify-center">
                                <svg class="w-4 h-4 sm:w-5 sm:h-5 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"/></svg>
                            </div>
                            <span class="text-xs text-emerald-600 font-semibold">+12.5%</span>
                        </div>
                        <div class="text-lg sm:text-2xl font-bold text-slate-900">฿284,500</div>
                        <div class="text-xs text-slate-500 mt-1">รายได้เดือนนี้</div>
                    </div>

                    <div class="bg-white rounded-xl p-4 sm:p-5 border border-slate-200">
                        <div class="flex items-center justify-between mb-3">
                            <div class="w-9 h-9 sm:w-10 sm:h-10 rounded-lg bg-blue-100 flex items-center justify-center">
                                <svg class="w-4 h-4 sm:w-5 sm:h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg>
                            </div>
                            <span class="text-xs text-emerald-600 font-semibold">+8.2%</span>
                        </div>
                        <div class="text-lg sm:text-2xl font-bold text-slate-900">47</div>
                        <div class="text-xs text-slate-500 mt-1">งานที่เสร็จแล้ว</div>
                    </div>

                    <div class="bg-white rounded-xl p-4 sm:p-5 border border-slate-200">
                        <div class="flex items-center justify-between mb-3">
                            <div class="w-9 h-9 sm:w-10 sm:h-10 rounded-lg bg-purple-100 flex items-center justify-center">
                                <svg class="w-4 h-4 sm:w-5 sm:h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            </div>
                            <span class="text-xs text-emerald-600 font-semibold">+23</span>
                        </div>
                        <div class="text-lg sm:text-2xl font-bold text-slate-900">1,284</div>
                        <div class="text-xs text-slate-500 mt-1">สมาชิกทั้งหมด</div>
                    </div>

                    <div class="bg-white rounded-xl p-4 sm:p-5 border border-slate-200">
                        <div class="flex items-center justify-between mb-3">
                            <div class="w-9 h-9 sm:w-10 sm:h-10 rounded-lg bg-emerald-100 flex items-center justify-center">
                                <svg class="w-4 h-4 sm:w-5 sm:h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                            </div>
                            <span class="text-xs text-amber-600 font-semibold">5 pending</span>
                        </div>
                        <div class="text-lg sm:text-2xl font-bold text-slate-900">98.2%</div>
                        <div class="text-xs text-slate-500 mt-1">ความพึงพอใจ</div>
                    </div>
                </div>

                <!-- Recent Activity -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 sm:gap-6">
                    <div class="lg:col-span-2 bg-white rounded-xl border border-slate-200 p-4 sm:p-5">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="font-semibold text-slate-900">งานล่าสุด</h3>
                            <button class="text-xs text-amber-600 hover:text-amber-700 font-medium">ดูทั้งหมด</button>
                        </div>
                        <div class="space-y-3">
                            <div class="flex items-center gap-3 p-3 rounded-lg hover:bg-slate-50 cursor-pointer transition">
                                <div class="w-10 h-10 rounded-lg bg-amber-100 flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/></svg>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <div class="font-medium text-sm text-slate-900">ซ่อมแอร์บ้านคุณสมชาย</div>
                                    <div class="text-xs text-slate-500">วันนี้ · 14:30</div>
                                </div>
                                <span class="text-xs bg-emerald-100 text-emerald-700 px-2 py-1 rounded-full whitespace-nowrap">เสร็จแล้ว</span>
                            </div>

                            <div class="flex items-center gap-3 p-3 rounded-lg hover:bg-slate-50 cursor-pointer transition">
                                <div class="w-10 h-10 rounded-lg bg-blue-100 flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <div class="font-medium text-sm text-slate-900">ติดตั้งระบบไฟฟ้าโรงงาน ABC</div>
                                    <div class="text-xs text-slate-500">วันนี้ · 09:15</div>
                                </div>
                                <span class="text-xs bg-amber-100 text-amber-700 px-2 py-1 rounded-full whitespace-nowrap">กำลังทำ</span>
                            </div>

                            <div class="flex items-center gap-3 p-3 rounded-lg hover:bg-slate-50 cursor-pointer transition">
                                <div class="w-10 h-10 rounded-lg bg-purple-100 flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <div class="font-medium text-sm text-slate-900">นัดตรวจระบบประปา - คุณวิภา</div>
                                    <div class="text-xs text-slate-500">เมื่อวาน · 16:45</div>
                                </div>
                                <span class="text-xs bg-slate-100 text-slate-700 px-2 py-1 rounded-full whitespace-nowrap">รอดำเนินการ</span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl border border-slate-200 p-4 sm:p-5">
                        <h3 class="font-semibold text-slate-900 mb-4">บริการยอดนิยม</h3>
                        <div class="space-y-4">
                            <div>
                                <div class="flex justify-between text-sm mb-1">
                                    <span class="text-slate-700">ซ่อมแอร์</span>
                                    <span class="font-semibold text-slate-900">45%</span>
                                </div>
                                <div class="h-2 bg-slate-100 rounded-full overflow-hidden">
                                    <div class="h-full bg-amber-500 rounded-full" style="width: 45%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between text-sm mb-1">
                                    <span class="text-slate-700">ติดตั้งไฟฟ้า</span>
                                    <span class="font-semibold text-slate-900">30%</span>
                                </div>
                                <div class="h-2 bg-slate-100 rounded-full overflow-hidden">
                                    <div class="h-full bg-blue-500 rounded-full" style="width: 30%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between text-sm mb-1">
                                    <span class="text-slate-700">งานประปา</span>
                                    <span class="font-semibold text-slate-900">15%</span>
                                </div>
                                <div class="h-2 bg-slate-100 rounded-full overflow-hidden">
                                    <div class="h-full bg-purple-500 rounded-full" style="width: 15%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between text-sm mb-1">
                                    <span class="text-slate-700">อื่นๆ</span>
                                    <span class="font-semibold text-slate-900">10%</span>
                                </div>
                                <div class="h-2 bg-slate-100 rounded-full overflow-hidden">
                                    <div class="h-full bg-emerald-500 rounded-full" style="width: 10%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ============ SERVICES PAGE ============ -->
            <div x-show="currentPage === 'services'" x-transition>
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 mb-6">
                    <div>
                        <h1 class="text-xl sm:text-2xl font-bold text-slate-900">จัดการบริการ</h1>
                        <p class="text-sm text-slate-500 mt-1">จัดการรายการบริการที่แสดงบนหน้าเว็บไซต์</p>
                    </div>
                    <button class="bg-amber-500 hover:bg-amber-600 text-slate-900 font-semibold px-4 py-2 rounded-lg text-sm flex items-center justify-center gap-2 transition cursor-pointer">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                        เพิ่มบริการใหม่
                    </button>
                </div>

                <!-- Filters -->
                <div class="bg-white rounded-xl border border-slate-200 p-4 mb-4">
                    <div class="flex flex-col sm:flex-row gap-3">
                        <div class="relative flex-1">
                            <svg class="w-4 h-4 absolute left-3 top-1/2 -translate-y-1/2 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                            <input type="text" placeholder="ค้นหาชื่อบริการ..." class="w-full pl-9 pr-4 py-2 bg-slate-50 border border-slate-200 rounded-lg text-sm focus:outline-none focus:border-amber-500">
                        </div>
                        <select class="px-3 py-2 bg-slate-50 border border-slate-200 rounded-lg text-sm focus:outline-none focus:border-amber-500">
                            <option>ทุกสถานะ</option>
                            <option>ใช้งานอยู่</option>
                            <option>ปิดใช้งาน</option>
                        </select>
                        <select class="px-3 py-2 bg-slate-50 border border-slate-200 rounded-lg text-sm focus:outline-none focus:border-amber-500">
                            <option>ทุกหมวดหมู่</option>
                            <option>งานซ่อม</option>
                            <option>งานติดตั้ง</option>
                            <option>งานบำรุงรักษา</option>
                        </select>
                    </div>
                </div>

                <!-- Table -->
                <div class="bg-white rounded-xl border border-slate-200 overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="w-full min-w-[640px]">
                            <thead class="bg-slate-50 border-b border-slate-200">
                                <tr>
                                    <th class="w-10 p-4"><input type="checkbox" class="rounded border-slate-300"></th>
                                    <th class="text-left p-4 text-xs font-semibold text-slate-600 uppercase">บริการ</th>
                                    <th class="text-left p-4 text-xs font-semibold text-slate-600 uppercase hidden md:table-cell">หมวดหมู่</th>
                                    <th class="text-left p-4 text-xs font-semibold text-slate-600 uppercase">ราคา</th>
                                    <th class="text-left p-4 text-xs font-semibold text-slate-600 uppercase">สถานะ</th>
                                    <th class="text-right p-4 text-xs font-semibold text-slate-600 uppercase">จัดการ</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100">
                                <template x-for="service in services" :key="service.id">
                                    <tr class="hover:bg-slate-50 transition">
                                        <td class="p-4"><input type="checkbox" class="rounded border-slate-300"></td>
                                        <td class="p-4">
                                            <div class="flex items-center gap-3">
                                                <img :src="service.image" class="w-12 h-12 rounded-lg object-cover">
                                                <div>
                                                    <div class="font-medium text-slate-900" x-text="service.name"></div>
                                                    <div class="text-xs text-slate-500" x-text="service.desc"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-4 text-sm text-slate-600 hidden md:table-cell" x-text="service.category"></td>
                                        <td class="p-4 text-sm font-medium text-slate-900" x-text="service.price"></td>
                                        <td class="p-4">
                                            <label class="relative inline-flex items-center cursor-pointer">
                                                <input type="checkbox" :checked="service.active" class="sr-only peer">
                                                <div class="w-11 h-6 bg-slate-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-slate-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-amber-500"></div>
                                            </label>
                                        </td>
                                        <td class="p-4">
                                            <div class="flex items-center justify-end gap-1">
                                                <button class="p-2 rounded-lg hover:bg-slate-100 text-slate-600 transition cursor-pointer">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                                                </button>
                                                <button @click="deleteModal = true; deleteId = service.id" class="p-2 rounded-lg hover:bg-red-50 text-red-600 transition cursor-pointer">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                </template>
                            </tbody>
                        </table>
                    </div>

                    <div class="px-4 py-3 border-t border-slate-200 bg-slate-50 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-2">
                        <div class="text-sm text-slate-500">แสดง 1-5 จาก 12 รายการ</div>
                        <div class="flex gap-1">
                            <button class="px-3 py-1 text-sm bg-white border border-slate-200 rounded-lg hover:bg-slate-50">ก่อนหน้า</button>
                            <button class="px-3 py-1 text-sm bg-amber-500 text-slate-900 font-semibold rounded-lg">1</button>
                            <button class="px-3 py-1 text-sm bg-white border border-slate-200 rounded-lg hover:bg-slate-50">2</button>
                            <button class="px-3 py-1 text-sm bg-white border border-slate-200 rounded-lg hover:bg-slate-50">ถัดไป</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ============ ARTICLES PAGE ============ -->
            <div x-show="currentPage === 'articles'" x-transition>
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-3 sm:gap-4 mb-6">
                    <div class="bg-white rounded-xl p-4 border border-slate-200">
                        <div class="text-xs text-slate-500 uppercase font-semibold">ทั้งหมด</div>
                        <div class="text-xl sm:text-2xl font-bold text-slate-900 mt-1">24</div>
                    </div>
                    <div class="bg-white rounded-xl p-4 border border-slate-200">
                        <div class="text-xs text-emerald-600 uppercase font-semibold">เผยแพร่แล้ว</div>
                        <div class="text-xl sm:text-2xl font-bold text-emerald-700 mt-1">18</div>
                    </div>
                    <div class="bg-white rounded-xl p-4 border border-slate-200">
                        <div class="text-xs text-amber-600 uppercase font-semibold">ฉบับร่าง</div>
                        <div class="text-xl sm:text-2xl font-bold text-amber-700 mt-1">4</div>
                    </div>
                    <div class="bg-white rounded-xl p-4 border border-slate-200">
                        <div class="text-xs text-blue-600 uppercase font-semibold">กำหนดเวลา</div>
                        <div class="text-xl sm:text-2xl font-bold text-blue-700 mt-1">2</div>
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 mb-4">
                    <h1 class="text-xl sm:text-2xl font-bold text-slate-900">บทความ</h1>
                    <button class="bg-amber-500 hover:bg-amber-600 text-slate-900 font-semibold px-4 py-2 rounded-lg text-sm flex items-center justify-center gap-2 transition cursor-pointer">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                        เขียนบทความใหม่
                    </button>
                </div>

                <!-- Tabs -->
                <div class="flex gap-1 border-b border-slate-200 mb-4 overflow-x-auto">
                    <button class="px-4 py-2 text-sm font-medium text-amber-600 border-b-2 border-amber-500 whitespace-nowrap cursor-pointer">ทั้งหมด</button>
                    <button class="px-4 py-2 text-sm font-medium text-slate-500 hover:text-slate-700 whitespace-nowrap cursor-pointer">งานซ่อม</button>
                    <button class="px-4 py-2 text-sm font-medium text-slate-500 hover:text-slate-700 whitespace-nowrap cursor-pointer">งานติดตั้ง</button>
                    <button class="px-4 py-2 text-sm font-medium text-slate-500 hover:text-slate-700 whitespace-nowrap cursor-pointer">เคล็ดลับ</button>
                    <button class="px-4 py-2 text-sm font-medium text-slate-500 hover:text-slate-700 whitespace-nowrap cursor-pointer">ข่าวสาร</button>
                </div>

                <!-- Articles List -->
                <div class="space-y-3">
                    <template x-for="article in articles" :key="article.id">
                        <div class="bg-white rounded-xl border border-slate-200 p-4 hover:shadow-md transition cursor-pointer">
                            <div class="flex items-start gap-4">
                                <img :src="article.image" class="w-20 h-20 sm:w-24 sm:h-24 rounded-lg object-cover flex-shrink-0">
                                <div class="flex-1 min-w-0">
                                    <div class="flex items-start justify-between gap-2 sm:gap-4">
                                        <div class="min-w-0 flex-1">
                                            <h3 class="font-semibold text-slate-900 truncate" x-text="article.title"></h3>
                                            <p class="text-sm text-slate-500 mt-1 line-clamp-2" x-text="article.excerpt"></p>
                                            <div class="flex flex-wrap items-center gap-2 sm:gap-3 mt-3 text-xs text-slate-500">
                                                <span class="flex items-center gap-1">
                                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                                                    <span x-text="article.author"></span>
                                                </span>
                                                <span class="flex items-center gap-1">
                                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                                    <span x-text="article.date"></span>
                                                </span>
                                                <span class="flex items-center gap-1">
                                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                                    <span x-text="article.views"></span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="flex flex-col items-end gap-2 flex-shrink-0">
                                            <span 
                                                :class="{
                                                    'bg-emerald-100 text-emerald-700': article.status === 'published',
                                                    'bg-amber-100 text-amber-700': article.status === 'draft',
                                                    'bg-blue-100 text-blue-700': article.status === 'scheduled'
                                                }"
                                                class="text-xs font-medium px-2 py-1 rounded-full whitespace-nowrap"
                                                x-text="article.statusLabel">
                                            </span>
                                            <button class="p-1.5 rounded-lg hover:bg-slate-100 text-slate-600 cursor-pointer">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"/></svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
            </div>

            <!-- ============ GALLERY PAGE ============ -->
            <div x-show="currentPage === 'gallery'" x-transition>
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 mb-6">
                    <div>
                        <h1 class="text-xl sm:text-2xl font-bold text-slate-900">แกลเลอรีรูปภาพ</h1>
                        <p class="text-sm text-slate-500 mt-1">128 ไฟล์ · ใช้พื้นที่ 2.4 GB</p>
                    </div>
                    <button class="bg-amber-500 hover:bg-amber-600 text-slate-900 font-semibold px-4 py-2 rounded-lg text-sm flex items-center justify-center gap-2 transition cursor-pointer">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"/></svg>
                        อัปโหลดรูปภาพ
                    </button>
                </div>

                <!-- Folder Tabs -->
                <div class="flex gap-1 border-b border-slate-200 mb-4 overflow-x-auto">
                    <button class="px-4 py-2 text-sm font-medium text-amber-600 border-b-2 border-amber-500 whitespace-nowrap cursor-pointer">ทั้งหมด</button>
                    <button class="px-4 py-2 text-sm font-medium text-slate-500 hover:text-slate-700 whitespace-nowrap cursor-pointer">บริการ</button>
                    <button class="px-4 py-2 text-sm font-medium text-slate-500 hover:text-slate-700 whitespace-nowrap cursor-pointer">ผลงาน</button>
                    <button class="px-4 py-2 text-sm font-medium text-slate-500 hover:text-slate-700 whitespace-nowrap cursor-pointer">บทความ</button>
                    <button class="px-4 py-2 text-sm font-medium text-slate-500 hover:text-slate-700 whitespace-nowrap cursor-pointer">ยังไม่จัดหมวด</button>
                </div>

                <!-- Gallery Grid -->
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-3 sm:gap-4">
                    <template x-for="img in galleryImages" :key="img.id">
                        <div class="group relative aspect-square rounded-xl overflow-hidden bg-slate-100 cursor-pointer">
                            <img :src="img.url" :alt="img.name" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" loading="lazy">
                            
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent opacity-0 group-hover:opacity-100 transition flex flex-col justify-end p-3">
                                <div class="text-white text-xs truncate" x-text="img.name"></div>
                                <div class="text-white/70 text-xs" x-text="img.size"></div>
                                
                                <div class="absolute top-2 right-2 flex gap-1">
                                    <button class="p-1.5 bg-white/90 hover:bg-white rounded-lg transition cursor-pointer">
                                        <svg class="w-3.5 h-3.5 text-slate-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                                    </button>
                                    <button @click="deleteModal = true" class="p-1.5 bg-white/90 hover:bg-white rounded-lg transition cursor-pointer">
                                        <svg class="w-3.5 h-3.5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                    </button>
                                </div>
                            </div>

                            <input type="checkbox" class="absolute top-2 left-2 rounded border-white opacity-0 group-hover:opacity-100 transition">
                        </div>
                    </template>
                </div>
            </div>

            <!-- ============ USERS PAGE ============ -->
            <div x-show="currentPage === 'users'" x-transition>
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 mb-6">
                    <h1 class="text-xl sm:text-2xl font-bold text-slate-900">จัดการสมาชิก</h1>
                    <button class="bg-amber-500 hover:bg-amber-600 text-slate-900 font-semibold px-4 py-2 rounded-lg text-sm flex items-center justify-center gap-2 transition cursor-pointer">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/></svg>
                        เพิ่มสมาชิก
                    </button>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-4 sm:gap-6">
                    <!-- User List -->
                    <div class="lg:col-span-7">
                        <div class="bg-white rounded-xl border border-slate-200 p-4 mb-4">
                            <div class="flex flex-col sm:flex-row gap-3">
                                <div class="relative flex-1">
                                    <svg class="w-4 h-4 absolute left-3 top-1/2 -translate-y-1/2 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                                    <input type="text" placeholder="ค้นหาชื่อ, อีเมล, เบอร์โทร..." class="w-full pl-9 pr-4 py-2 bg-slate-50 border border-slate-200 rounded-lg text-sm focus:outline-none focus:border-amber-500">
                                </div>
                                <select class="px-3 py-2 bg-slate-50 border border-slate-200 rounded-lg text-sm">
                                    <option>ทุกบทบาท</option>
                                    <option>ลูกค้า</option>
                                    <option>ช่าง</option>
                                    <option>แอดมิน</option>
                                </select>
                                <select class="px-3 py-2 bg-slate-50 border border-slate-200 rounded-lg text-sm">
                                    <option>ทุกสถานะ</option>
                                    <option>ใช้งาน</option>
                                    <option>ถูกแบน</option>
                                </select>
                            </div>
                        </div>

                        <div class="bg-white rounded-xl border border-slate-200 overflow-hidden">
                            <div class="overflow-x-auto">
                                <table class="w-full min-w-[500px]">
                                    <thead class="bg-slate-50 border-b border-slate-200">
                                        <tr>
                                            <th class="text-left p-4 text-xs font-semibold text-slate-600 uppercase">สมาชิก</th>
                                            <th class="text-left p-4 text-xs font-semibold text-slate-600 uppercase">บทบาท</th>
                                            <th class="text-left p-4 text-xs font-semibold text-slate-600 uppercase">สถานะ</th>
                                            <th class="text-left p-4 text-xs font-semibold text-slate-600 uppercase hidden md:table-cell">สมัครเมื่อ</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-slate-100">
                                        <template x-for="user in users" :key="user.id">
                                            <tr 
                                                @click="selectedUser = user"
                                                :class="selectedUser?.id === user.id ? 'bg-amber-50' : 'hover:bg-slate-50'"
                                                class="cursor-pointer transition">
                                                <td class="p-4">
                                                    <div class="flex items-center gap-3">
                                                        <div class="w-10 h-10 rounded-full flex items-center justify-center font-bold text-white flex-shrink-0" :class="user.avatarColor" x-text="user.initial"></div>
                                                        <div class="min-w-0">
                                                            <div class="font-medium text-slate-900 truncate" x-text="user.name"></div>
                                                            <div class="text-xs text-slate-500 truncate" x-text="user.email"></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="p-4">
                                                    <span 
                                                        :class="{
                                                            'bg-red-100 text-red-700': user.role === 'admin',
                                                            'bg-blue-100 text-blue-700': user.role === 'technician',
                                                            'bg-slate-100 text-slate-700': user.role === 'customer'
                                                        }"
                                                        class="text-xs font-medium px-2 py-1 rounded-full whitespace-nowrap"
                                                        x-text="user.roleLabel">
                                                    </span>
                                                </td>
                                                <td class="p-4">
                                                    <span 
                                                        :class="user.active ? 'bg-emerald-100 text-emerald-700' : 'bg-red-100 text-red-700'"
                                                        class="text-xs font-medium px-2 py-1 rounded-full whitespace-nowrap"
                                                        x-text="user.active ? '● ใช้งาน' : '● ถูกแบน'">
                                                    </span>
                                                </td>
                                                <td class="p-4 text-sm text-slate-500 hidden md:table-cell" x-text="user.joined"></td>
                                            </tr>
                                        </template>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- User Detail -->
                    <div class="lg:col-span-5">
                        <template x-if="selectedUser">
                            <div class="bg-white rounded-xl border border-slate-200 p-5 lg:sticky lg:top-4">
                                <div class="text-center pb-4 border-b border-slate-100">
                                    <div class="w-20 h-20 rounded-full mx-auto flex items-center justify-center font-bold text-2xl text-white" :class="selectedUser.avatarColor" x-text="selectedUser.initial"></div>
                                    <h3 class="font-bold text-lg text-slate-900 mt-3" x-text="selectedUser.name"></h3>
                                    <p class="text-sm text-slate-500" x-text="selectedUser.email"></p>
                                    <p class="text-sm text-slate-500" x-text="selectedUser.phone"></p>
                                    <div class="flex justify-center gap-2 mt-4">
                                        <button class="px-3 py-1.5 text-sm bg-slate-100 hover:bg-slate-200 rounded-lg transition flex items-center gap-1 cursor-pointer">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                            ส่งอีเมล
                                        </button>
                                        <button class="px-3 py-1.5 text-sm bg-red-50 hover:bg-red-100 text-red-700 rounded-lg transition flex items-center gap-1 cursor-pointer">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"/></svg>
                                            แบน
                                        </button>
                                    </div>
                                </div>

                                <div class="grid grid-cols-3 gap-3 py-4 border-b border-slate-100">
                                    <div class="text-center">
                                        <div class="text-lg sm:text-xl font-bold text-slate-900" x-text="selectedUser.orders"></div>
                                        <div class="text-xs text-slate-500">คำสั่งซื้อ</div>
                                    </div>
                                    <div class="text-center">
                                        <div class="text-lg sm:text-xl font-bold text-slate-900" x-text="selectedUser.spent"></div>
                                        <div class="text-xs text-slate-500">ยอดซื้อ (฿)</div>
                                    </div>
                                    <div class="text-center">
                                        <div class="text-lg sm:text-xl font-bold text-slate-900" x-text="selectedUser.lastLogin"></div>
                                        <div class="text-xs text-slate-500">เข้าล่าสุด</div>
                                    </div>
                                </div>

                                <div class="pt-4">
                                    <h4 class="font-semibold text-sm text-slate-900 mb-3">กิจกรรมล่าสุด</h4>
                                    <div class="space-y-3">
                                        <div class="flex gap-3">
                                            <div class="w-8 h-8 rounded-full bg-emerald-100 flex items-center justify-center flex-shrink-0">
                                                <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                            </div>
                                            <div class="flex-1">
                                                <div class="text-sm text-slate-900">สั่งซื้อบริการซ่อมแอร์</div>
                                                <div class="text-xs text-slate-500">2 ชั่วโมงที่แล้ว</div>
                                            </div>
                                        </div>
                                        <div class="flex gap-3">
                                            <div class="w-8 h-8 rounded-full bg-blue-100 flex items-center justify-center flex-shrink-0">
                                                <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
                                            </div>
                                            <div class="flex-1">
                                                <div class="text-sm text-slate-900">สอบถามข้อมูลผ่านแชท</div>
                                                <div class="text-xs text-slate-500">เมื่อวาน</div>
                                            </div>
                                        </div>
                                        <div class="flex gap-3">
                                            <div class="w-8 h-8 rounded-full bg-amber-100 flex items-center justify-center flex-shrink-0">
                                                <svg class="w-4 h-4 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/></svg>
                                            </div>
                                            <div class="flex-1">
                                                <div class="text-sm text-slate-900">ให้คะแนน 5 ดาว</div>
                                                <div class="text-xs text-slate-500">3 วันที่แล้ว</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </template>
                        <template x-if="!selectedUser">
                            <div class="bg-white rounded-xl border border-slate-200 p-8 sm:p-12 text-center">
                                <svg class="w-12 h-12 text-slate-300 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                                <p class="text-slate-500">เลือกสมาชิกเพื่อดูรายละเอียด</p>
                            </div>
                        </template>
                    </div>
                </div>
            </div>

        </main>
    </div>