<button {{ $attributes->merge(['class' => 'inline-flex items-center px-4 py-2 bg-portage-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-portage-700 active:bg-portage-900 focus:outline-none focus:border-portage-900 focus:shadow-outline-portage disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
