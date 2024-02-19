<div class="w-full mx-auto flex flex-col gap-4">
    <div>
        <img src="{{ Vite::useBuildDirectory("build")->asset('resources/images/logo-boss-negativo.png') }}" alt=""
             class="mx-auto" style="max-height: 240px">
    </div>
    <x-system.cards.home>
        {{ $slot }}
    </x-system.cards.home>
</div>
