@props(['for'])

@error($for)
    <div {{ $attributes->merge(['class' => 'text-sm text-red-600']) }}>{!! $message !!}</div>
@enderror
