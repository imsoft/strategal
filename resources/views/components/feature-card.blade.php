@props([
    'icon' => '',
    'title' => '',
    'description' => ''
])

<div {{ $attributes->merge(['class' => 'flex flex-col items-center text-center p-6 bg-white dark:bg-gray-800 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 hover-lift']) }}>
    <div class="w-16 h-16 flex items-center justify-center bg-[#002B5C]/10 rounded-full mb-4">
        {!! $icon !!}
    </div>

    <h3 class="text-xl font-bold text-[#002B5C] dark:text-white mb-3">
        {{ $title }}
    </h3>

    <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
        {{ $description }}
    </p>
</div>
