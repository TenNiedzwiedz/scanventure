@props(['active'])

@php
$classes = ($active ?? false)
    ? 'inline-flex items-center px-1 pt-1 border-b-2 border-pink-600 font-medium leading-5 text-pink-500 focus:outline-none focus:border-pink-700 transition'
    : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent font-medium leading-5 text-gray-300 hover:text-pink-500 hover:border-gray-300 focus:outline-none focus:text-pink-700 focus:border-pink-300 transition';
@endphp

<Link {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</Link>
