@props([
    'disabled' => false,
    'id',
    'label',
])
<div class="relative">
    <input type="text" id="{{ $id }}" placeholder=" " {!! $attributes->merge(['class' => 'block px-2.5 pb-2.5 pt-4 w-full text-sm text-black bg-transparent rounded-lg border-1 border-wave-300 appearance-none focus:outline-none focus:ring focus:ring-wave-200 focus:ring-opacity-50 rounded-md shadow-sm focus:border-wave-300 peer']) !!}/>
    <label for="{{ $id }}"
           class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-wave-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">
        {{ $label }}
    </label>
</div>
