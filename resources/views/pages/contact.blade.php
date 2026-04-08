@extends('layouts.app')

@section('title', 'Contacto - Strategal')

@section('content')
    <!-- Hero Section -->
    <section class="bg-gradient-to-br from-[#002B5C] to-[#001a3a] text-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">
                Contáctanos
            </h1>
            <p class="text-xl text-gray-200 max-w-3xl mx-auto">
                Estamos aquí para ayudarte. Envíanos un mensaje y nos pondremos en contacto contigo lo antes posible.
            </p>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-20 bg-gray-50 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-8">
                    <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-6">
                        Envíanos un Mensaje
                    </h2>

                    @if(session('success'))
                        <div class="mb-6 p-4 bg-green-50 dark:bg-green-900/20 border border-green-200 dark:border-green-800 rounded-lg">
                            <p class="text-green-800 dark:text-green-200">{{ session('success') }}</p>
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="mb-6 p-4 bg-red-50 dark:bg-red-900/20 border border-red-200 dark:border-red-800 rounded-lg">
                            <p class="text-red-800 dark:text-red-200">{{ session('error') }}</p>
                        </div>
                    @endif

                    @if($errors->any())
                        <div class="mb-6 p-4 bg-red-50 dark:bg-red-900/20 border border-red-200 dark:border-red-800 rounded-lg">
                            <ul class="list-disc list-inside text-red-800 dark:text-red-200 space-y-1">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('contact.send') }}" method="POST" class="space-y-6">
                        @csrf
                        <div>
                            <label for="name" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">
                                Nombre Completo *
                            </label>
                            <input
                                type="text"
                                id="name"
                                name="name"
                                value="{{ old('name') }}"
                                required
                                class="w-full px-4 py-3 rounded-md border @error('name') border-red-500 @else border-gray-300 dark:border-gray-600 @enderror bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:ring-2 focus:ring-[#002B5C] focus:border-transparent transition-colors"
                                placeholder="Tu nombre completo"
                            >
                            @error('name')
                                <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="email" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">
                                    Email *
                                </label>
                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    required
                                    class="w-full px-4 py-3 rounded-md border @error('email') border-red-500 @else border-gray-300 dark:border-gray-600 @enderror bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:ring-2 focus:ring-[#002B5C] focus:border-transparent transition-colors"
                                    placeholder="tu@email.com"
                                >
                                @error('email')
                                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="phone" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">
                                    Teléfono *
                                </label>
                                <input
                                    type="tel"
                                    id="phone"
                                    name="phone"
                                    value="{{ old('phone') }}"
                                    required
                                    class="w-full px-4 py-3 rounded-md border @error('phone') border-red-500 @else border-gray-300 dark:border-gray-600 @enderror bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:ring-2 focus:ring-[#002B5C] focus:border-transparent transition-colors"
                                    placeholder="33 1234 5678"
                                >
                                @error('phone')
                                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="service" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">
                                Área de Interés *
                            </label>
                            <select
                                id="service"
                                name="service"
                                required
                                class="w-full px-4 py-3 rounded-md border @error('service') border-red-500 @else border-gray-300 dark:border-gray-600 @enderror bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:ring-2 focus:ring-[#002B5C] focus:border-transparent transition-colors"
                            >
                                <option value="">Selecciona un área</option>
                                <option value="administrativo" {{ old('service') == 'administrativo' ? 'selected' : '' }}>Derecho Administrativo</option>
                                <option value="corporativo" {{ old('service') == 'corporativo' ? 'selected' : '' }}>Derecho Corporativo</option>
                                <option value="laboral" {{ old('service') == 'laboral' ? 'selected' : '' }}>Derecho Laboral</option>
                                <option value="fiscal" {{ old('service') == 'fiscal' ? 'selected' : '' }}>Derecho Fiscal</option>
                                <option value="propiedad" {{ old('service') == 'propiedad' ? 'selected' : '' }}>Propiedad Intelectual</option>
                                <option value="familiar" {{ old('service') == 'familiar' ? 'selected' : '' }}>Derecho Familiar, Civil y Mercantil</option>
                                <option value="otro" {{ old('service') == 'otro' ? 'selected' : '' }}>Otro</option>
                            </select>
                            @error('service')
                                <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">
                                Mensaje *
                            </label>
                            <textarea
                                id="message"
                                name="message"
                                rows="5"
                                required
                                class="w-full px-4 py-3 rounded-md border @error('message') border-red-500 @else border-gray-300 dark:border-gray-600 @enderror bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:ring-2 focus:ring-[#002B5C] focus:border-transparent transition-colors resize-none"
                                placeholder="Cuéntanos sobre tu caso o consulta..."
                            >{{ old('message') }}</textarea>
                            @error('message')
                                <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <div class="flex items-start">
                                <input
                                    type="checkbox"
                                    id="privacy"
                                    name="privacy"
                                    {{ old('privacy') ? 'checked' : '' }}
                                    required
                                    class="mt-1 h-4 w-4 text-[#002B5C] border-gray-300 rounded focus:ring-[#002B5C]"
                                >
                                <label for="privacy" class="ml-3 text-sm text-gray-600 dark:text-gray-400">
                                    Acepto el tratamiento de mis datos personales de acuerdo con la política de privacidad *
                                </label>
                            </div>
                            @error('privacy')
                                <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                            @enderror
                        </div>

                        <x-button type="submit" variant="primary" class="w-full justify-center text-lg py-4">
                            Enviar Mensaje
                        </x-button>
                    </form>
                </div>

                <!-- Contact Information -->
                <div class="space-y-8">
                    <!-- Contact Details -->
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-8">
                        <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-6">
                            Información de Contacto
                        </h2>

                        <div class="space-y-6">
                            <!-- Address -->
                            <div class="flex items-start">
                                <div class="flex-shrink-0 w-12 h-12 bg-[#002B5C]/10 dark:bg-white/10 rounded-full flex items-center justify-center">
                                    <svg class="w-6 h-6 text-[#002B5C] dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-1">Dirección</h3>
                                    <p class="text-gray-600 dark:text-gray-300">
                                        Puerto de Todos los Santos 162<br>
                                        Monumental, Guadalajara<br>
                                        Jalisco, México
                                    </p>
                                </div>
                            </div>

                            <!-- Phone -->
                            <div class="flex items-start">
                                <div class="flex-shrink-0 w-12 h-12 bg-[#002B5C]/10 dark:bg-white/10 rounded-full flex items-center justify-center">
                                    <svg class="w-6 h-6 text-[#002B5C] dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-1">Teléfono</h3>
                                    <a href="tel:3324043589" class="text-[#002B5C] dark:text-blue-400 hover:underline text-lg">
                                        33 24 04 35 89
                                    </a>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="flex items-start">
                                <div class="flex-shrink-0 w-12 h-12 bg-[#002B5C]/10 dark:bg-white/10 rounded-full flex items-center justify-center">
                                    <svg class="w-6 h-6 text-[#002B5C] dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-1">Email</h3>
                                    <a href="mailto:contacto@strategalsl.com" class="text-[#002B5C] dark:text-blue-400 hover:underline">
                                        contacto@strategalsl.com
                                    </a>
                                </div>
                            </div>

                            <!-- Website -->
                            <div class="flex items-start">
                                <div class="flex-shrink-0 w-12 h-12 bg-[#002B5C]/10 dark:bg-white/10 rounded-full flex items-center justify-center">
                                    <svg class="w-6 h-6 text-[#002B5C] dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-1">Sitio Web</h3>
                                    <a href="https://www.strategalsl.com" target="_blank" rel="noopener" class="text-[#002B5C] dark:text-blue-400 hover:underline">
                                        www.strategalsl.com
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Social Media -->
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-8">
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">
                            Síguenos en Redes Sociales
                        </h2>

                        <div class="grid grid-cols-2 gap-4">
                            <a
                                href="https://www.youtube.com/@StrategalServicioslegales"
                                target="_blank"
                                rel="noopener"
                                class="flex items-center justify-center px-4 py-3 bg-red-600 hover:bg-red-700 text-white rounded-lg transition-colors duration-300"
                            >
                                <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                                </svg>
                                YouTube
                            </a>

                            <a
                                href="https://www.instagram.com/strategal_abogados/"
                                target="_blank"
                                rel="noopener"
                                class="flex items-center justify-center px-4 py-3 bg-gradient-to-r from-purple-600 to-pink-600 hover:from-purple-700 hover:to-pink-700 text-white rounded-lg transition-colors duration-300"
                            >
                                <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                </svg>
                                Instagram
                            </a>

                            <a
                                href="https://www.facebook.com/Strategalsl"
                                target="_blank"
                                rel="noopener"
                                class="flex items-center justify-center px-4 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition-colors duration-300"
                            >
                                <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                </svg>
                                Facebook
                            </a>

                            <a
                                href="https://www.tiktok.com/@strategal_abogados"
                                target="_blank"
                                rel="noopener"
                                class="flex items-center justify-center px-4 py-3 bg-gray-900 hover:bg-black text-white rounded-lg transition-colors duration-300"
                            >
                                <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/>
                                </svg>
                                TikTok
                            </a>
                        </div>
                    </div>

                    <!-- Office Hours -->
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-8">
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">
                            Horario de Atención
                        </h2>

                        <div class="space-y-3 text-gray-700 dark:text-gray-300">
                            <div class="flex justify-between">
                                <span class="font-semibold">Lunes - Viernes:</span>
                                <span>9:00 AM - 6:00 PM</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="font-semibold">Sábado:</span>
                                <span>10:00 AM - 2:00 PM</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="font-semibold">Domingo:</span>
                                <span>Cerrado</span>
                            </div>
                        </div>

                        <div class="mt-6 p-4 bg-blue-50 dark:bg-blue-900/20 rounded-lg">
                            <p class="text-sm text-gray-700 dark:text-gray-300">
                                <strong class="text-[#002B5C] dark:text-blue-400">Nota:</strong> También ofrecemos citas fuera de horario bajo previo acuerdo.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="py-20 bg-white dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <x-section-heading subtitle="Ubicación" title="Encuéntranos">
                Visítanos en nuestra oficina en Guadalajara
            </x-section-heading>

            <div class="rounded-lg overflow-hidden shadow-xl">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3732.6574!2d-103.39!3d20.67!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjDCsDQwJzEyLjAiTiAxMDPCsDIzJzI0LjAiVw!5e0!3m2!1sen!2smx!4v1234567890"
                    width="100%"
                    height="450"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    class="w-full"
                ></iframe>
            </div>
        </div>
    </section>
@endsection
