<a {{ $attributes->merge(['class' => 'inline-flex items-center px-4 py-2 bg-web-orange-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-web-orange-700 active:bg-web-orange-900 focus:outline-none focus:border-web-orange-900 focus:shadow-outline-web-orange disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</a>
