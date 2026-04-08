@props([
    'variant' => 'primary',
    'href' => null,
    'type' => 'button'
])

@php
$classes = match($variant) {
    'primary' => 'bg-[#002B5C] hover:bg-[#001a3a] text-white',
    'secondary' => 'bg-white hover:bg-gray-50 text-[#002B5C] border-2 border-[#002B5C]',
    'outline' => 'bg-transparent hover:bg-[#002B5C] hover:text-white text-[#002B5C] dark:text-white border-2 border-[#002B5C] dark:border-white',
    default => 'bg-[#002B5C] hover:bg-[#001a3a] text-white'
};

$baseClasses = 'inline-flex items-center justify-center px-6 py-3 rounded-md font-semibold transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-[#002B5C] focus:ring-offset-2';
@endphp

@if($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => "$baseClasses $classes"]) }}>
        {{ $slot }}
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => "$baseClasses $classes"]) }}>
        {{ $slot }}
    </button>
@endif
