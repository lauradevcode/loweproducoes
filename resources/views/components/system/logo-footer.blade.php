@php /** @var \App\Models\Event $event */ @endphp
@php use App\Enums\LayoutRegisterType; @endphp
<div class="mx-auto flex gap-4 flex-col">
    @if(!empty($event->title_footer) && $event->layout_register === LayoutRegisterType::LayoutPadrao)
        <div class="w-full mx-auto sm:max-w-xl">
            <h1 class="text-xl text-white font-bold font-black uppercase text-center" id="title-footer">
                {{ $event->title_footer }}
            </h1>
        </div>
    @endif
    <div class="flex flex-col lg:flex-row justify-center items-center gap-4">
        @foreach($event->eventFooters as $eventFooter)
            <div class="px-4 my-2">
                <img src="{{ $eventFooter->image_url }}" alt="{{ $eventFooter->image }}"
                     class="align-self-center w-full mx-auto sm:max-h-[150px]">
            </div>
        @endforeach
    </div>
</div>
