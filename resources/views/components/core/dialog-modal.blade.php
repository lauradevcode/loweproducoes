@props(['id' => null, 'maxWidth' => null])

<x-modal :id="$id" :maxWidth="$maxWidth" {{ $attributes }}>
    <div class="flex flex-col justify-between w-full mt-2">
        <div class="flex flex-col w-full">
            <div class="text-lg">
                {{ $title }}
            </div>
            @if(!empty($content))
                <div class="mt-4">
                    {{ $content }}
                </div>
            @endif
        </div>
    </div>
    @if(!empty($footer))
        <div class="mt-5 sm:mt-6 flex flex-row justify-between">
            {{ $footer }}
        </div>
    @endif
</x-modal>
