@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-portage-700']) }}>
    {{ $value ?? $slot }}
</label>
