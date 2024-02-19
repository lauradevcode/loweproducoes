<div x-data="{ mobileMenuOpen: false }" class="fixed w-full z-30" style="background-color: rgba(0,0,0,0.75);">
    <div class="px-5 mx-auto max-w-7xl relative flex items-center justify-between py-4">
        <a href="{{ route('home') }}"
           class="inline-flex items-center text-2xl font-bold text-black-800 mr-2">
            <img src="{{ Vite::useBuildDirectory("build")->asset('resources/images/logo-loweproducoes.png') }}" alt=""
                 class="h-full max-h-[4rem] lg:max-h-[4.5rem]">
        </a>
        @include('menus.guest')
        <button @click="mobileMenuOpen = true" type="button"
                class="inline-flex items-center lg:hidden bg-portage-200 hover:bg-portage-300 text-portage-500 active:text-portage-700 text-sm md:text-base font-semibold rounded-lg gap-2 px-2.5 py-2">
            <svg class="w-6 h-6 fill-current" style="transform: scale(-1,1)" stroke="currentColor"
                 viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M4 6h16M4 12h8m-8 6h16"></path>
            </svg>
        </button>
    </div>
    @include('menus.guest-mobile')
</div>
<section class="relative w-full py-6 sm:py-8 lg:py-24">
    <div class="relative z-20">
        <div class="px-4 lg:px-10 my-24 mx-auto max-w-7xl flex flex-col lg:flex-row items-start gap-8">
            <div class="max-w-screen-sm flex flex-col gap-y-24">
                <h1 class="text-6xl">
                    A sua <span class="underline">full service</span> no <span
                            class="text-portage-500">DISTRITO FEDERAL</span>
                </h1>
                <div>
                    <x-themes.portage.a>
                        Fale conosco
                    </x-themes.portage.a>
                </div>
            </div>
        </div>
    </div>
    <div class="absolute inset-0 z-10 flex items-end w-full h-full bg-cover"
         data-vide-bg="mp4: https://loweproducoes.nyc3.cdn.digitaloceanspaces.com/static/home.mp4, poster: https://loweproducoes.nyc3.cdn.digitaloceanspaces.com/static/home.jpg"
         data-vide-options="loop: true, muted: true, position: 0% 0%"></div>
</section>
