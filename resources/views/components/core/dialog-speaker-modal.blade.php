@props(['id' => null, 'maxWidth' => null])

<x-core.speaker-modal :id="$id" :maxWidth="$maxWidth" {{ $attributes }}>
    <div class="flex flex-col justify-between w-full mt-2">
        <div class="flex flex-col w-full">
            <div class="mt-3 sm:ml-4">
                <h3 class="relative z-20 font-bold text-xl lg:text-3xl text-center text-eden-500 uppercase">
                    {{ $title }}
                </h3>
                <div class="mt-1">
                    {{ $content }}
                </div>
            </div>
        </div>
    </div>
</x-core.speaker-modal>
