<div x-show="mobileMenuOpen" x-transition:enter="duration-300 ease-out scale-100"
     x-transition:enter-start="opacity-50 scale-110" x-transition:enter-end="opacity-100 scale-100"
     x-transition:leave="transition duration-75 ease-in scale-100" x-transition:leave-start="opacity-100 scale-100"
     x-transition:leave-end="opacity-0 scale-100"
     class="absolute inset-x-0 top-0 transition origin-top transform lg:hidden">
    <div class="shadow-lg">
        <div class="bg-portage-500 divide-y-2 shadow-xs divide-flush-orange-50">
            <div class="pt-6 pb-6 space-y-6">
                <div class="flex items-center justify-between px-8 mt-1">
                    <div>
                        <img src="{{ Vite::useBuildDirectory("build")->asset('resources/images/logo-loweproducoes.png') }}" alt=""
                             style="max-height: 75px;">
                    </div>
                    <div class="-mr-2">
                        <button @click="mobileMenuOpen = false" type="button"
                                class="inline-flex items-center justify-center p-2 text-flush-orange-400 transition duration-150 ease-in-out rounded-md hover:text-flush-orange-500 hover:bg-flush-orange-100 focus:outline-none focus:bg-flush-orange-100 focus:text-flush-orange-500">
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                <div>
                    <nav class="grid row-gap-8">
                        <a href="{{ route('home') }}#schedule"
                           class="flex items-center px-8 py-3 space-x-3 transition duration-150 ease-in-out rounded-md hover:bg-flush-orange-50 text-white hover:text-black uppercase">
                            <div class="text-base font-medium leading-6">
                                Sobre
                            </div>
                        </a>
                        <a href="{{ route('home') }}#director"
                           class="flex items-center px-8 py-3 space-x-3 transition duration-150 ease-in-out rounded-md hover:bg-flush-orange-50 text-white hover:text-black uppercase">
                            <div class="text-base font-medium leading-6">
                                Alguns de Nossos Clientes
                            </div>
                        </a>
                        <a href="{{ route('home') }}#scientific-work"
                           class="flex items-center px-8 py-3 space-x-3 transition duration-150 ease-in-out rounded-md hover:bg-flush-orange-50 text-white hover:text-black uppercase">
                            <div class="text-base font-medium leading-6">
                                Galeria
                            </div>
                        </a>
                        <a href="{{ route('home') }}#contact"
                           class="flex items-center px-8 py-3 space-x-3 transition duration-150 ease-in-out rounded-md hover:bg-flush-orange-50 text-white hover:text-black uppercase">
                            <div class="text-base font-medium leading-6">
                                Contato
                            </div>
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
