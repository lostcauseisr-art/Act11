@extends('layouts.marketing')

@section('logo')
    <div class="flex items-center gap-3">
        <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-amber-300 text-lg font-bold text-slate-950">
            LP
        </div>
        <div>
            <p class="text-sm font-semibold uppercase tracking-[0.3em] text-amber-200">Launch Pad</p>
            <p class="text-sm text-slate-400">Execution snapshot</p>
        </div>
    </div>
@endsection

@section('content')
    <section class="grid gap-8 lg:grid-cols-[0.9fr_1.1fr] lg:items-center">
        <div class="rounded-3xl border border-white/10 bg-white/5 p-8">
            <p class="text-sm font-medium uppercase tracking-[0.3em] text-amber-200">Current Focus</p>
            <div class="mt-4 space-y-4 text-slate-300">
                <p>Authentication is scaffolded with Laravel Breeze.</p>
                <p>Admin authorization is enforced on a protected route.</p>
                <p>Shared UI is centralized in a custom Blade layout and two reusable components.</p>
            </div>
        </div>

        <div class="space-y-6">
            <x-section-title title="Ship the essentials, then scale the surface area." class="max-w-2xl" />
            <p class="max-w-2xl text-lg leading-8 text-slate-300">
                This second view injects different content into the same layout while reusing the title and button components through props and slots.
            </p>
            <x-dynamic-button :href="route('admin.area')" class="bg-amber-300 hover:bg-amber-200">
                Open admin area
            </x-dynamic-button>
        </div>
    </section>
@endsection
