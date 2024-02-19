@php use App\Enums\LayoutRegisterType; @endphp
@props(['event'])
@php /** @var \App\Models\Event $event */@endphp
<div class="w-full mx-auto flex flex-col gap-4">
    @if($event->layout_register->is(LayoutRegisterType::LayoutPadrao))
        <div>
            @if(!empty($event->logo))
                <img src="{{ $event->logo_url ?? Vite::useBuildDirectory("build")->asset('resources/images/logo-boss-negativo.png') }}"
                     alt="{{ config('app.name') }}" class="mx-auto sm:max-w-sm">
            @else
                <h1 class="text-3xl text-white font-bold font-black uppercase m-5 text-center" id="title">
                    {{ $event->name }}
                </h1>
            @endif
        </div>
    @endif
    <x-system.cards.event>
        {{ $slot }}
    </x-system.cards.event>
    @if(count($event->eventFooters) > 0)
        <x-system.logo-footer :event="$event"/>
    @endif
</div>
