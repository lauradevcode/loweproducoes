@php
    use LukaPeharda\TailwindCssColorPaletteGenerator\Color;use LukaPeharda\TailwindCssColorPaletteGenerator\PaletteGenerator;
@endphp
@props(['color'])
@if(!empty($color))
    @php
        $paletteGenerator = new PaletteGenerator();
        $paletteGenerator->setBaseColor(Color::fromHex($color));
        $palette = $paletteGenerator->getPalette();
    @endphp
    <style>:root { @foreach($palette as $key => $color) {!! '--color-primary-' . $key . ': #' . $color->getHex() . ';' !!} @endforeach }</style>
@endif
