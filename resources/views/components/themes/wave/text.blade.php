@props(['disabled' => false])

<p {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-wave-300 focus:border-wave-300 focus:ring focus:ring-wave-200 focus:ring-opacity-50 rounded-md shadow-sm disabled:opacity-25']) !!}>
    {{ $slot }}
</p>
