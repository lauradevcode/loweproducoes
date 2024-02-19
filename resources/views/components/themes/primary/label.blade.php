@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-primary-700']) }}>
    {{ $value ?? $slot }}
</label>
