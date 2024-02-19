@props(['disabled' => false])

<p {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-portage-300 focus:border-portage-300 focus:ring focus:ring-portage-200 focus:ring-opacity-50 rounded-md shadow-sm disabled:opacity-25']) !!}>
    {{ $slot }}
</p>
