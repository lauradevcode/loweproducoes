@props(['disabled' => false])

<textarea rows="4" style="background: #fff; max-width: 100%;"
        {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-violent-violet-300 focus:border-violent-violet-300 focus:ring focus:ring-violent-violet-200 focus:ring-opacity-50 rounded-md shadow-sm']) !!}>

</textarea>
