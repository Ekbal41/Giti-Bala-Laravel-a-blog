@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 uppercase tracking-wide font-bold underline decoration-2 hover:underline    text-sm font-medium leading-5 text-white  transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 uppercase tracking-wide font-bold hover:underline   decoration-2   text-sm font-medium leading-5 text-white transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
