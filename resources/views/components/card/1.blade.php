<div {{ $attributes->merge(['class' => 'bg-gradient-to-br relative flex from-primary-400 to-primary-700 p-px rounded-md']) }}>
    <mouse-spotlight data-mouse-light="rgba(240, 139, 133, 0.15)" class="bg-black mouse-light space-y-2 absolute inset-0 block p-4 md:p-6 lg-p-8 shadow-2xl shadow-primary-500/10 rounded-md w-full">
        {{ $slot }}
    </mouse-spotlight>
</div>
