@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'text-black border-wave-300 focus:border-wave-300 focus:ring focus:ring-wave-200 focus:ring-opacity-50 rounded-md shadow-sm']) !!}>
