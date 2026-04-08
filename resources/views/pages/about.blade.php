@extends('layouts.app')

@section('title', 'Sobre Nosotros - Strategal')

@section('content')
    <!-- Hero Section -->
    <section class="bg-gradient-to-br from-[#002B5C] to-[#001a3a] text-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">
                Sobre Nosotros
            </h1>
            <p class="text-xl text-gray-200 max-w-3xl mx-auto">
                Conoce más sobre nuestra firma y nuestro compromiso con la excelencia legal
            </p>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-20 bg-white dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-20">
                <div>
                    <img
                        src="{{ asset('images/inicio/apreton-mano-experiencia-confianza.jpeg') }}"
                        alt="Strategal — experiencia y confianza"
                        class="rounded-lg shadow-xl w-full h-auto object-cover"
                    >
                </div>
                <div>
                    <x-section-heading subtitle="Nuestra Firma" title="¿Quiénes Somos?" :centered="false">
                        Firma de abogados comprometida con la excelencia en el servicio legal
                    </x-section-heading>

                    <div class="space-y-4 text-gray-700 dark:text-gray-300">
                        <p class="leading-relaxed">
                            <strong class="text-[#002B5C] dark:text-blue-400">Strategal</strong> es una firma de abogados con amplia experiencia en el sector empresarial, enfocados en ofrecer soluciones oportunas e integrales, principalmente en las ramas del Derecho Administrativo, Corporativo, Laboral, Fiscal y Propiedad Intelectual.
                        </p>
                        <p class="leading-relaxed">
                            Nuestros servicios incluyen asesoría, consultoría y defensa legal, brindados a través de un equipo de profesionales altamente capacitados y especializados en cada área del derecho.
                        </p>
                        <p class="leading-relaxed">
                            Nos caracterizamos por contar con abogados especialistas en cada una de las áreas que comprenden nuestros servicios, lo que nos permite ofrecer atención personalizada y soluciones efectivas adaptadas a las necesidades específicas de cada cliente.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision -->
    <section class="py-20 bg-gray-50 dark:bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <!-- Mission -->
                <div class="bg-white dark:bg-gray-900 rounded-lg shadow-lg p-8">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-[#002B5C]/10 dark:bg-white/10 rounded-full flex items-center justify-center mr-4">
                            <svg class="w-8 h-8 text-[#002B5C] dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <h2 class="text-3xl font-bold text-[#002B5C] dark:text-white">Misión</h2>
                    </div>
                    <p class="text-gray-700 dark:text-gray-300 leading-relaxed text-lg">
                        Ofrecer servicios legales de la más alta calidad, con un enfoque integral y personalizado, apoyando a nuestros clientes en la toma de decisiones estratégicas y en la resolución efectiva de sus asuntos legales, siempre con ética, profesionalismo y compromiso.
                    </p>
                </div>

                <!-- Vision -->
                <div class="bg-white dark:bg-gray-900 rounded-lg shadow-lg p-8">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-[#002B5C]/10 dark:bg-white/10 rounded-full flex items-center justify-center mr-4">
                            <svg class="w-8 h-8 text-[#002B5C] dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg>
                        </div>
                        <h2 class="text-3xl font-bold text-[#002B5C] dark:text-white">Visión</h2>
                    </div>
                    <p class="text-gray-700 dark:text-gray-300 leading-relaxed text-lg">
                        Ser reconocidos como una de las firmas de abogados líderes en México, distinguiéndonos por nuestra excelencia profesional, especialización técnica y compromiso con el éxito de nuestros clientes, contribuyendo al desarrollo sostenible de las empresas y la sociedad.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Values -->
    <section class="py-20 bg-white dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <x-section-heading subtitle="Nuestros Principios" title="Valores">
                Los pilares que guían nuestro trabajo diario
            </x-section-heading>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center p-6">
                    <div class="w-20 h-20 bg-[#002B5C]/10 dark:bg-white/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-10 h-10 text-[#002B5C] dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-[#002B5C] dark:text-white mb-3">Integridad</h3>
                    <p class="text-gray-600 dark:text-gray-300">Actuamos con honestidad y ética en cada caso</p>
                </div>

                <div class="text-center p-6">
                    <div class="w-20 h-20 bg-[#002B5C]/10 dark:bg-white/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-10 h-10 text-[#002B5C] dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-[#002B5C] dark:text-white mb-3">Excelencia</h3>
                    <p class="text-gray-600 dark:text-gray-300">Buscamos la máxima calidad en nuestro trabajo</p>
                </div>

                <div class="text-center p-6">
                    <div class="w-20 h-20 bg-[#002B5C]/10 dark:bg-white/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-10 h-10 text-[#002B5C] dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-[#002B5C] dark:text-white mb-3">Compromiso</h3>
                    <p class="text-gray-600 dark:text-gray-300">Dedicados al éxito de nuestros clientes</p>
                </div>

                <div class="text-center p-6">
                    <div class="w-20 h-20 bg-[#002B5C]/10 dark:bg-white/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-10 h-10 text-[#002B5C] dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-[#002B5C] dark:text-white mb-3">Innovación</h3>
                    <p class="text-gray-600 dark:text-gray-300">Soluciones creativas y efectivas</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="py-20 bg-gray-50 dark:bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <x-section-heading subtitle="Ventajas Competitivas" title="¿Por Qué Elegirnos?">
                Lo que nos hace diferentes y nos distingue en el mercado
            </x-section-heading>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white dark:bg-gray-900 p-8 rounded-lg shadow-md">
                    <div class="text-5xl font-bold text-[#002B5C] mb-4">01</div>
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Especialización</h3>
                    <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                        Cada área del derecho es única, por ello contamos con abogados especialistas en cada una de las áreas que comprenden nuestros servicios.
                    </p>
                </div>

                <div class="bg-white dark:bg-gray-900 p-8 rounded-lg shadow-md">
                    <div class="text-5xl font-bold text-[#002B5C] mb-4">02</div>
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Experiencia Comprobada</h3>
                    <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                        Más de 10 años de experiencia en el sector empresarial nos respaldan, con cientos de casos exitosos resueltos.
                    </p>
                </div>

                <div class="bg-white dark:bg-gray-900 p-8 rounded-lg shadow-md">
                    <div class="text-5xl font-bold text-[#002B5C] mb-4">03</div>
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Atención Personalizada</h3>
                    <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                        Cada cliente es único y merece un servicio adaptado a sus necesidades específicas, ofreciendo soluciones integrales.
                    </p>
                </div>

                <div class="bg-white dark:bg-gray-900 p-8 rounded-lg shadow-md">
                    <div class="text-5xl font-bold text-[#002B5C] mb-4">04</div>
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Enfoque Integral</h3>
                    <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                        Ofrecemos soluciones completas que abarcan todas las áreas del derecho necesarias para su empresa.
                    </p>
                </div>

                <div class="bg-white dark:bg-gray-900 p-8 rounded-lg shadow-md">
                    <div class="text-5xl font-bold text-[#002B5C] mb-4">05</div>
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Respuesta Oportuna</h3>
                    <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                        Entendemos la importancia del tiempo en los asuntos legales y respondemos con agilidad y eficiencia.
                    </p>
                </div>

                <div class="bg-white dark:bg-gray-900 p-8 rounded-lg shadow-md">
                    <div class="text-5xl font-bold text-[#002B5C] mb-4">06</div>
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Resultados Comprobables</h3>
                    <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                        Nuestro compromiso es lograr los mejores resultados mediante estrategias legales sólidas y fundamentadas.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-20 bg-white dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <x-section-heading subtitle="Nuestro Equipo" title="Abogados Especialistas">
                Profesionales altamente capacitados en cada área del derecho
            </x-section-heading>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-gray-50 dark:bg-gray-800 rounded-lg overflow-hidden shadow-md hover:shadow-xl transition-shadow">
                    <img src="{{ asset('images/socios/geovanni-arce.jpg') }}" alt="Geovanni Arce" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Geovanni Arce</h3>
                        <p class="text-[#002B5C] dark:text-blue-400 font-semibold mb-3">Derecho Administrativo</p>
                        <p class="text-gray-600 dark:text-gray-300 text-sm">
                            Expertos en trámites gubernamentales y defensa ante autoridades administrativas.
                        </p>
                    </div>
                </div>

                <div class="bg-gray-50 dark:bg-gray-800 rounded-lg overflow-hidden shadow-md hover:shadow-xl transition-shadow">
                    <img src="{{ asset('images/socios/jessica-leyva.jpg') }}" alt="Jessica Leyva" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Jessica Leyva</h3>
                        <p class="text-[#002B5C] dark:text-blue-400 font-semibold mb-3">Derecho Corporativo</p>
                        <p class="text-gray-600 dark:text-gray-300 text-sm">
                            Profesionales en gobierno corporativo, fusiones y adquisiciones empresariales.
                        </p>
                    </div>
                </div>

                <div class="bg-gray-50 dark:bg-gray-800 rounded-lg overflow-hidden shadow-md hover:shadow-xl transition-shadow">
                    <img src="{{ asset('images/socios/humberto-madrid.jpg') }}" alt="Humberto Madrid" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Humberto Madrid</h3>
                        <p class="text-[#002B5C] dark:text-blue-400 font-semibold mb-3">Derecho Laboral</p>
                        <p class="text-gray-600 dark:text-gray-300 text-sm">
                            Expertos en relaciones laborales y defensa en juicios ante tribunales laborales.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-[#002B5C] to-[#001a3a] text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">
                ¿Listo para Trabajar con Nosotros?
            </h2>
            <p class="text-xl text-gray-200 mb-8">
                Permítanos ser su aliado legal y ayudarle a alcanzar sus objetivos
            </p>
            <x-button href="{{ route('contact') }}" variant="secondary" class="text-lg px-8 py-4">
                Contáctanos Hoy
            </x-button>
        </div>
    </section>
@endsection
