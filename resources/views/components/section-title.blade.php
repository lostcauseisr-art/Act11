@props(['title'])

<h1 {{ $attributes->merge(['class' => 'text-4xl font-semibold tracking-tight text-white sm:text-5xl']) }}>
    {{ $title }}
</h1>
