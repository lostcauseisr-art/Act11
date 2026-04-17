@props(['href' => '#'])

<a
    href="{{ $href }}"
    {{ $attributes->merge(['class' => 'inline-flex items-center rounded-full bg-cyan-400 px-5 py-3 text-sm font-semibold uppercase tracking-[0.2em] text-slate-950 transition hover:bg-cyan-300']) }}
>
    {{ $slot }}
</a>
