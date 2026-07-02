<div 
        x-show="mobileMenuOpen" 
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-200"
        @click="mobileMenuOpen = false"
        class="fixed inset-0 bg-black/50 z-40 lg:hidden cursor-pointer">
    </div>