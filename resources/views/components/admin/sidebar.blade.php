<aside 
        :class="mobileMenuOpen ? 'translate-x-0' : '-translate-x-full'"
        class="fixed lg:static inset-y-0 left-0 w-64 bg-slate-900 text-slate-100 flex flex-col flex-shrink-0 z-50 transform transition-transform duration-300 lg:translate-x-0">
        
        <!-- Brand -->
        <div class="h-16 flex items-center justify-between px-6 border-b border-slate-800 flex-shrink-0">
            <div class="flex items-center gap-3">
                <div class="w-9 h-9 rounded-lg bg-amber-500 flex items-center justify-center font-bold text-slate-900">TP</div>
                <div>
                    <div class="font-semibold text-sm">ธีรพงษ์การช่าง</div>
                    <div class="text-xs text-slate-400">Admin Panel</div>
                </div>
            </div>
            <button @click="mobileMenuOpen = false" class="lg:hidden p-1 rounded hover:bg-slate-800 cursor-pointer">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
        </div>

        <!-- Navigation -->
        <nav class="flex-1 overflow-y-auto py-4 px-3 space-y-6">
            <div>
                <div class="text-xs font-semibold text-slate-500 uppercase px-3 mb-2">ภาพรวม</div>
                <button 
                    @click="currentPage = 'dashboard'; mobileMenuOpen = false"
                    :class="currentPage === 'dashboard' ? 'bg-slate-800 text-amber-400' : 'text-slate-300 hover:bg-slate-800/50'"
                    class="w-full flex items-center gap-3 px-3 py-2 rounded-lg text-sm transition cursor-pointer">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                    <span>Dashboard</span>
                </button>
            </div>

            <div>
                <div class="text-xs font-semibold text-slate-500 uppercase px-3 mb-2">จัดการเนื้อหา</div>
                <div class="space-y-1">
                    <button 
                        @click="currentPage = 'services'; mobileMenuOpen = false"
                        :class="currentPage === 'services' ? 'bg-slate-800 text-amber-400' : 'text-slate-300 hover:bg-slate-800/50'"
                        class="w-full flex items-center justify-between px-3 py-2 rounded-lg text-sm transition cursor-pointer">
                        <span class="flex items-center gap-3">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            <span>บริการ</span>
                        </span>
                        <span class="bg-amber-500 text-slate-900 text-xs font-bold px-2 py-0.5 rounded-full">12</span>
                    </button>

                    <button 
                        @click="currentPage = 'articles'; mobileMenuOpen = false"
                        :class="currentPage === 'articles' ? 'bg-slate-800 text-amber-400' : 'text-slate-300 hover:bg-slate-800/50'"
                        class="w-full flex items-center gap-3 px-3 py-2 rounded-lg text-sm transition cursor-pointer">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/></svg>
                        <span>บทความ</span>
                    </button>

                    <button 
                        @click="currentPage = 'gallery'; mobileMenuOpen = false"
                        :class="currentPage === 'gallery' ? 'bg-slate-800 text-amber-400' : 'text-slate-300 hover:bg-slate-800/50'"
                        class="w-full flex items-center gap-3 px-3 py-2 rounded-lg text-sm transition cursor-pointer">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        <span>แกลเลอรี</span>
                    </button>
                </div>
            </div>

            <div>
                <div class="text-xs font-semibold text-slate-500 uppercase px-3 mb-2">ระบบ</div>
                <button 
                    @click="currentPage = 'users'; mobileMenuOpen = false"
                    :class="currentPage === 'users' ? 'bg-slate-800 text-amber-400' : 'text-slate-300 hover:bg-slate-800/50'"
                    class="w-full flex items-center gap-3 px-3 py-2 rounded-lg text-sm transition cursor-pointer">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                    <span>สมาชิก</span>
                </button>
            </div>
        </nav>

        <!-- User Profile -->
        <div class="p-3 border-t border-slate-800 flex-shrink-0">
            <div class="flex items-center gap-3 px-2 py-2 rounded-lg hover:bg-slate-800/50 cursor-pointer">
                <div class="w-9 h-9 rounded-full bg-gradient-to-br from-amber-400 to-amber-600 flex items-center justify-center font-bold text-slate-900">A</div>
                <div class="flex-1 min-w-0">
                    <div class="text-sm font-medium truncate">Admin</div>
                    <div class="text-xs text-slate-400 truncate">work@theeraphong.co.th</div>
                </div>
                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4"/></svg>
            </div>
        </div>
    </aside>