@props(['disabled' => false])

<p {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-web-orange-300 focus:border-web-orange-300 focus:ring focus:ring-web-orange-200 focus:ring-opacity-50 rounded-md shadow-sm disabled:opacity-25']) !!}>
    {{ $slot }}
</p>
