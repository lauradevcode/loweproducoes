@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-wave-700']) }}>
    {{ $value ?? $slot }}
</label>
