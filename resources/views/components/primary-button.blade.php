<button {{ $attributes->merge(['class' => 'inline-flex items-center px-4 py-2 bg-blue-600 text-black border border-transparent rounded-md font-semibold text-xs uppercase tracking-widest hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>

