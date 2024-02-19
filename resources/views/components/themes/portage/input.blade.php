@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'text-black border-portage-300 focus:border-portage-300 focus:ring focus:ring-portage-200 focus:ring-opacity-50 rounded-md shadow-sm']) !!}>
