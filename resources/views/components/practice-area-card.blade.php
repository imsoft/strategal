@props([
    'icon' => '',
    'title' => '',
    'description' => '',
    'href' => '#',
    'plainIcon' => false,
])

<div {{ $attributes->merge(['class' => 'group bg-white dark:bg-gray-800 rounded-lg shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden hover-lift']) }}>
    <div class="p-8">
        <div class="flex justify-center mb-6">
            <div class="w-20 h-20 flex items-center justify-center bg-[#002B5C]/10 dark:bg-white/10 rounded-full group-hover:bg-[#002B5C] dark:group-hover:bg-white transition-colors duration-300">
                <img
                    src="{{ $icon }}"
                    alt="{{ $title }}"
                    @class([
                        'w-14 h-14 object-contain transition-all duration-300',
                        'brightness-0 dark:brightness-0 dark:invert opacity-70 dark:opacity-100 group-hover:brightness-0 group-hover:invert' => ! $plainIcon,
                        'opacity-90 group-hover:opacity-100 group-hover:scale-105' => $plainIcon,
                    ])
                >
            </div>
        </div>

        <h3 class="text-xl font-bold text-[#002B5C] dark:text-white text-center mb-4 group-hover:text-[#001a3a] transition-colors">
            {{ $title }}
        </h3>

        <p class="text-gray-600 dark:text-gray-300 text-center mb-6 leading-relaxed">
            {{ $description }}
        </p>

        <div class="text-center">
            <a href="{{ $href }}" class="inline-flex items-center text-[#002B5C] dark:text-white hover:text-[#001a3a] dark:hover:text-gray-200 font-semibold group-hover:underline">
                Más información
                <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </a>
        </div>
    </div>
</div>
