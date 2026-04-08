@props([
    'title' => '',
    'subtitle' => '',
    'centered' => true
])

<div {{ $attributes->merge(['class' => $centered ? 'text-center mb-12' : 'mb-12']) }}>
    @if($subtitle)
        <p class="text-[#002B5C] dark:text-white font-semibold text-sm uppercase tracking-wider mb-2">{{ $subtitle }}</p>
    @endif

    <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-[#1b1b18] dark:text-white mb-4">
        {{ $title }}
    </h2>

    @if($slot->isNotEmpty())
        <p class="text-lg text-gray-600 dark:text-gray-300 max-w-3xl {{ $centered ? 'mx-auto' : '' }}">
            {{ $slot }}
        </p>
    @endif
</div>
