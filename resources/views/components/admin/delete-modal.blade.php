<div 
    x-show="deleteModal" 
    x-transition:enter="transition ease-out duration-200"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in duration-150"
    class="fixed inset-0 z-[60] flex items-center justify-center p-4 bg-black/50"
    @keydown.escape.window="deleteModal = false">
    
    <div 
        x-show="deleteModal"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100"
        @click.away="deleteModal = false"
        class="bg-white rounded-xl shadow-xl max-w-md w-full p-6">
        
        <div class="flex items-start gap-4">
            <div class="w-12 h-12 rounded-full bg-red-100 flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                </svg>
            </div>
            <div class="flex-1">
                <h3 class="font-semibold text-lg text-slate-900">ยืนยันการลบ?</h3>
                <p class="text-sm text-slate-500 mt-1">การดำเนินการนี้ไม่สามารถย้อนกลับได้ ข้อมูลจะถูกลบออกถาวร</p>
            </div>
        </div>
        
        <div class="flex flex-col-reverse sm:flex-row justify-end gap-2 mt-6">
            <button 
                @click="deleteModal = false"
                class="px-4 py-2 text-sm font-medium text-slate-700 bg-slate-100 hover:bg-slate-200 rounded-lg transition cursor-pointer">
                ยกเลิก
            </button>
            <button 
                @click="deleteModal = false"
                class="px-4 py-2 text-sm font-medium text-white bg-red-600 hover:bg-red-700 rounded-lg transition cursor-pointer">
                ลบรายการ
            </button>
        </div>
    </div>
</div>