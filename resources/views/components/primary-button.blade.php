<button {{ $attributes->merge(['type' => 'submit', 'class' => 'bg-white text-[#377037] transition hover:bg-white/70 focus:outline-none focus:ring-2 font-semibold py-2 px-4 tracking-widest rounded drop-shadow ease-in-out duration-150 hover:scale-105 border-transparent uppercase']) }}>
    {{ $slot }}
</button>
