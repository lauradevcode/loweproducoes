@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'text-black border-web-orange-300 focus:border-web-orange-300 focus:ring focus:ring-web-orange-200 focus:ring-opacity-50 rounded-md shadow-sm']) !!}>
