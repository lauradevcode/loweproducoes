<div class="w-full mx-auto flex flex-col gap-4">
    <div>
        <img src="{{ Vite::useBuildDirectory("build")->asset('resources/images/logo-boss-negativo.png') }}"
             alt="{{ config('app.name') }}" class="mx-auto sm:max-w-sm">
    </div>
    <x-system.cards.checkin>
        {{ $slot }}
    </x-system.cards.checkin>
</div>
