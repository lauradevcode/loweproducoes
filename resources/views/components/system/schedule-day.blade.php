@props([
    'date',
    'hour',
    'color',
    'textColor' => 'white',
])
<div class="flex flex-col gap-2 justify-center items-center">
    <div class="flex flex-col justify-center items-center gap-4 pb-2 border-b-2 border-{{ $color }}-500">
        <div class="text-{{ $textColor }} bg-{{ $color }}-500 font-bold text-xl px-8 py-4 rounded-full">
            {{ $date }}
        </div>
        <div class="text-{{ $color }}-500 font-bold text-xl">
            {{ $hour }}
        </div>
    </div>
</div>