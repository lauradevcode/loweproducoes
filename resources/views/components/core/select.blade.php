@props(['disabled' => false])

<select {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-violent-violet-300 focus:border-violent-violet-300 focus:ring focus:ring-violent-violet-200 focus:ring-opacity-50 rounded-md shadow-sm']) !!}>
    {{ $slot }}
</select>
