@props(['disabled' => false])

<p {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-primary-300 focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 rounded-md shadow-sm disabled:opacity-25']) !!}>
    {{ $slot }}
</p>
