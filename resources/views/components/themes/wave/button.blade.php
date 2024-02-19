<button {{ $attributes->merge(['class' => 'inline-flex items-center px-4 py-2 bg-wave-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-wave-700 active:bg-wave-900 focus:outline-none focus:border-wave-900 focus:shadow-outline-wave disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
