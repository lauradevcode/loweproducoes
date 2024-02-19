@props(['disabled' => false])

<textarea rows="4" style="background: #fff; max-width: 100%;"
        {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-primary-300 focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 rounded-md shadow-sm']) !!}>

</textarea>
