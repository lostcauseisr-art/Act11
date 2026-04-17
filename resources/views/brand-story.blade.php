@extends('layouts.marketing')

@section('logo')
    <div class="space-y-1">
        <p class="text-xs font-semibold uppercase tracking-[0.35em] text-cyan-300">Northstar Lab</p>
        <p class="text-sm text-slate-400">Studio identity board</p>
    </div>
@endsection

@section('content')
    <section class="grid gap-8 lg:grid-cols-[1.2fr_0.8fr] lg:items-end">
        <div class="space-y-6">
            <x-section-title title="We build products that feel sharp before they feel big." />
            <p class="max-w-2xl text-lg leading-8 text-slate-300">
                This view uses the custom Blade layout and fills both dynamic sections with its own logo treatment and content block.
            </p>
            <x-dynamic-button :href="route('launch.plan')">
                Review launch plan
            </x-dynamic-button>
        </div>

        <div class="rounded-3xl border border-cyan-400/20 bg-white/5 p-8 shadow-2xl shadow-cyan-950/30">
            <p class="text-sm font-medium uppercase tracking-[0.3em] text-cyan-300">Design Signals</p>
            <ul class="mt-4 space-y-3 text-slate-300">
                <li>Clear messaging with a focused promise.</li>
                <li>Lean visual language that highlights momentum.</li>
                <li>Reusable Blade pieces for faster page assembly.</li>
            </ul>
        </div>
    </section>
@endsection
