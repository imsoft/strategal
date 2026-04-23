@extends('layouts.app')

@section('title', 'Strategal - Inicio')

@section('body-class', 'page-home')

@section('content')
    <!-- Hero: mensaje primero, logo compacto; CTA secundario con variant secondary (evita texto blanco sobre blanco con dark: del SO) -->
    <section
        class="strategal-hero-surface relative overflow-hidden border-b border-stone-300/60 pt-14 pb-16 text-stone-900 sm:pt-16 sm:pb-20 lg:pb-24"
        aria-labelledby="hero-heading"
    >
        <div class="pointer-events-none absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-[#002B5C]/25 to-transparent"></div>

        <div class="relative z-10 mx-auto w-full max-w-3xl px-5 sm:max-w-4xl sm:px-8">
            <div class="flex flex-col items-center gap-8 sm:gap-10">
                <article class="strategal-copy-card strategal-hero-copy w-full px-6 py-8 text-center sm:px-10 sm:py-10 animate-fade-in-up">
                    <p class="text-[0.7rem] font-semibold uppercase tracking-[0.32em] text-[#002B5C]/70 sm:text-xs">
                        Servicios legales
                    </p>

                    <h1
                        id="hero-heading"
                        class="text-pretty mt-4 font-semibold leading-tight tracking-tight text-[#062042] sm:mt-5"
                        style="font-family: Montserrat, ui-sans-serif, system-ui, sans-serif;"
                    >
                        <span class="block text-[clamp(1.4rem,4.2vw,2rem)] sm:text-[clamp(1.5rem,3.5vw,2.125rem)]">
                            Soluciones legales estratégicas
                        </span>
                        <span class="mt-2 block text-base font-medium leading-snug text-[#123a62] sm:mt-3 sm:text-lg">
                            para empresas con visión de crecimiento
                        </span>
                    </h1>

                    <p class="mx-auto mt-6 max-w-lg text-pretty text-[0.95rem] leading-relaxed text-stone-600 sm:mt-8 sm:text-base">
                        Firma enfocada en el sector empresarial: asesoría integral, cercana y con resultados medibles.
                    </p>

                    <div class="mt-8 flex w-full max-w-md flex-col gap-3 sm:mx-auto sm:mt-9 sm:max-w-none sm:flex-row sm:flex-wrap sm:justify-center sm:gap-4">
                        <x-button
                            href="{{ route('contact') }}"
                            variant="primary"
                            class="inline-flex min-h-[3rem] w-full min-w-0 justify-center px-8 py-3 text-sm shadow-[0_2px_12px_rgba(0,43,92,0.25)] sm:w-auto sm:min-w-[11.5rem]"
                        >
                            Contáctanos
                        </x-button>
                        <x-button
                            href="{{ route('practice-areas') }}"
                            variant="secondary"
                            class="inline-flex min-h-[3rem] w-full min-w-0 justify-center px-8 py-3 text-sm sm:w-auto sm:min-w-[11.5rem]"
                        >
                            Nuestros servicios
                        </x-button>
                    </div>
                </article>

                <div class="animate-fade-in-up delay-100 w-full max-w-[220px] shrink-0 sm:max-w-[240px]">
                    <a
                        href="{{ route('home') }}"
                        class="strategal-hero-logo-card group mx-auto block rounded-xl bg-white p-4 shadow-[0_2px_12px_rgba(0,43,92,0.08)] ring-1 ring-stone-200/90 transition-shadow duration-300 hover:shadow-[0_8px_28px_rgba(0,43,92,0.12)] sm:rounded-2xl sm:p-5"
                    >
                        <img
                            src="{{ asset('images/logo/logotipo.jpg') }}"
                            alt="Strategal Servicios Legales"
                            class="mx-auto h-auto max-h-[3.75rem] w-auto max-w-full object-contain sm:max-h-[4.25rem]"
                            width="260"
                            height="90"
                            loading="eager"
                        >
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Video: embed 16:9 + marco centrado -->
    <section class="strategal-video-surface border-b border-stone-300/50 bg-[#e2e0d8] py-16 sm:py-20" aria-label="Video institucional">
        <div class="mx-auto w-full max-w-4xl px-5 sm:px-8">
            <header class="strategal-copy-card strategal-copy-card--video mx-auto max-w-xl px-7 py-8 text-center sm:px-9 sm:py-9">
                <div class="mb-5 flex items-center justify-center gap-3 sm:gap-4">
                    <span class="h-px w-8 bg-[#002B5C]/35 sm:w-12" aria-hidden="true"></span>
                    <p class="text-[0.65rem] font-semibold uppercase tracking-[0.38em] text-stone-500 sm:text-xs">
                        Conoce nuestra firma
                    </p>
                    <span class="h-px w-8 bg-[#002B5C]/35 sm:w-12" aria-hidden="true"></span>
                </div>
                <h2 class="text-xl font-semibold tracking-tight text-[#062042] sm:text-2xl">Video institucional</h2>
                <p class="mx-auto mt-3 max-w-md text-pretty text-[0.95rem] leading-relaxed text-stone-600">
                    Presentación de Strategal en YouTube. Si no ves el reproductor, abre el enlace inferior.
                </p>
            </header>

            <div class="mx-auto mt-10 w-full max-w-3xl sm:mt-12 lg:max-w-4xl">
                <div class="strategal-youtube-frame w-full max-w-full">
                    <div class="strategal-youtube-embed overflow-hidden rounded-2xl bg-black shadow-[0_12px_40px_rgba(0,0,0,0.18)] ring-1 ring-black/15">
                        <iframe
                            src="https://www.youtube.com/embed/MEP_H0KwK00?rel=0&amp;modestbranding=1"
                            title="Strategal Servicios Legales — video en YouTube"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen
                            referrerpolicy="strict-origin-when-cross-origin"
                            loading="lazy"
                        ></iframe>
                    </div>
                </div>
            </div>

            <p class="mt-8 text-center">
                <a
                    href="https://youtu.be/MEP_H0KwK00"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="inline-flex items-center gap-1.5 text-sm font-semibold text-[#002B5C] underline decoration-[#002B5C]/50 underline-offset-[6px] transition-colors hover:text-[#001433] hover:decoration-[#001433]"
                >
                    Ver en YouTube
                    <span aria-hidden="true" class="text-base">→</span>
                </a>
            </p>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-20 bg-white dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <img
                        src="{{ asset('images/inicio/equipo-strategal-soluciones-legales.jpg') }}"
                        alt="Equipo Strategal — soluciones legales"
                        class="rounded-lg shadow-xl w-full h-auto object-cover"
                    >
                </div>

                <div>
                    <x-section-heading subtitle="Sobre Nosotros" title="Experiencia y Confianza" :centered="false">
                        Somos una firma de abogados comprometida con la excelencia en el servicio legal.
                    </x-section-heading>

                    <div class="space-y-4 text-gray-700 dark:text-gray-300">
                        <p class="leading-relaxed">
                            En <strong class="text-[#002B5C] dark:text-blue-400">Strategal</strong>, contamos con amplia experiencia en el sector empresarial, especializándonos en ofrecer soluciones oportunas e integrales.
                        </p>
                        <p class="leading-relaxed">
                            Nuestros servicios abarcan las principales ramas del derecho: Administrativo, Corporativo, Laboral, Fiscal y Propiedad Intelectual, brindando asesoría, consultoría y defensa legal.
                        </p>
                        <p class="leading-relaxed">
                            Nos caracterizamos por contar con abogados especialistas en cada una de las áreas que comprenden nuestros servicios, garantizando atención personalizada y resultados efectivos.
                        </p>
                    </div>

                    <div class="mt-8">
                        <x-button href="{{ route('about') }}" variant="primary">
                            Conoce más sobre nosotros
                        </x-button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Practice Areas Section -->
    <section class="py-20 bg-gray-50 dark:bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <x-section-heading subtitle="Nuestros Servicios" title="Áreas de Práctica">
                Soluciones legales especializadas para cada necesidad de su empresa
            </x-section-heading>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 stagger-children">
                <x-practice-area-card
                    class="animate-fade-in-up"
                    :plainIcon="true"
                    icon="{{ asset('images/iconos-de-servicios/derecho-administrativo.png') }}"
                    title="Derecho Administrativo"
                    description="Asesoría integral en trámites y procedimientos ante autoridades administrativas, defensa en controversias y obtención de permisos."
                    :href="route('practice-areas') . '#administrativo'"
                />

                <x-practice-area-card
                    class="animate-fade-in-up"
                    :plainIcon="true"
                    icon="{{ asset('images/iconos-de-servicios/derecho-corporativo.png') }}"
                    title="Derecho Corporativo"
                    description="Constitución de sociedades, gobierno corporativo, fusiones y adquisiciones, contratos comerciales y cumplimiento normativo."
                    :href="route('practice-areas') . '#corporativo'"
                />

                <x-practice-area-card
                    class="animate-fade-in-up"
                    :plainIcon="true"
                    icon="{{ asset('images/iconos-de-servicios/derecho-laboral.png') }}"
                    title="Derecho Laboral"
                    description="Asesoría en relaciones laborales, elaboración de contratos, defensa en juicios laborales y cumplimiento de obligaciones patronales."
                    :href="route('practice-areas') . '#laboral'"
                />

                <x-practice-area-card
                    class="animate-fade-in-up"
                    :plainIcon="true"
                    icon="{{ asset('images/iconos-de-servicios/derecho-fiscal.png') }}"
                    title="Derecho Fiscal"
                    description="Planeación fiscal, defensa ante autoridades fiscales, auditorías y cumplimiento de obligaciones tributarias."
                    :href="route('practice-areas') . '#fiscal'"
                />

                <x-practice-area-card
                    class="animate-fade-in-up"
                    :plainIcon="true"
                    icon="{{ asset('images/iconos-de-servicios/derecho-propiedad-intelectual.png') }}"
                    title="Propiedad Intelectual"
                    description="Registro y protección de marcas, patentes, derechos de autor, licencias y defensa de derechos de propiedad industrial."
                    :href="route('practice-areas') . '#propiedad'"
                />

                <x-practice-area-card
                    class="animate-fade-in-up"
                    icon="https://api.dicebear.com/7.x/icons/svg?seed=family&icon=home"
                    title="Derecho Familiar, Civil y Mercantil"
                    description="Asesoría integral en asuntos familiares, civiles y mercantiles con enfoque en soluciones efectivas y personalizadas."
                    :href="route('practice-areas') . '#familiar'"
                />
            </div>

            <div class="text-center mt-12">
                <x-button href="{{ route('practice-areas') }}" variant="primary">
                    Ver todas las áreas de práctica
                </x-button>
            </div>
        </div>
    </section>

    <!-- Value Added Section -->
    <section class="py-20 bg-white dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <x-section-heading subtitle="Valor Agregado" title="Especialización y Experiencia">
                Creemos con firmeza que cada área del derecho es única
            </x-section-heading>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 stagger-children">
                <x-feature-card
                    class="animate-scale-in"
                    title="Especialización"
                    description="Contamos con abogados especialistas en cada una de las áreas que comprenden nuestros servicios, garantizando el más alto nivel de conocimiento y experiencia.">
                    <x-slot name="icon">
                        <svg class="w-8 h-8 text-[#002B5C] dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </x-slot>
                </x-feature-card>

                <x-feature-card
                    class="animate-scale-in"
                    title="Atención Personalizada"
                    description="Cada cliente es único y merece un servicio adaptado a sus necesidades específicas. Ofrecemos soluciones integrales y oportunas.">
                    <x-slot name="icon">
                        <svg class="w-8 h-8 text-[#002B5C] dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </x-slot>
                </x-feature-card>

                <x-feature-card
                    class="animate-scale-in"
                    title="Resultados Efectivos"
                    description="Nuestro compromiso es lograr los mejores resultados para nuestros clientes a través de estrategias legales sólidas y bien fundamentadas.">
                    <x-slot name="icon">
                        <svg class="w-8 h-8 text-[#002B5C] dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </x-slot>
                </x-feature-card>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-20 bg-[#002B5C] text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 text-center stagger-children">
                <div class="animate-fade-in-up">
                    <div class="text-5xl font-bold mb-2">10+</div>
                    <div class="text-gray-300">Años de Experiencia</div>
                </div>
                <div class="animate-fade-in-up">
                    <div class="text-5xl font-bold mb-2">500+</div>
                    <div class="text-gray-300">Casos Exitosos</div>
                </div>
                <div class="animate-fade-in-up">
                    <div class="text-5xl font-bold mb-2">6</div>
                    <div class="text-gray-300">Áreas de Práctica</div>
                </div>
                <div class="animate-fade-in-up">
                    <div class="text-5xl font-bold mb-2">100%</div>
                    <div class="text-gray-300">Compromiso</div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-900">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-6">
                ¿Necesita Asesoría Legal?
            </h2>
            <p class="text-xl text-gray-700 dark:text-gray-300 mb-8">
                Contáctenos hoy y permítanos ayudarle a resolver sus necesidades legales con profesionalismo y experiencia.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <x-button href="{{ route('contact') }}" variant="primary" class="text-lg px-8 py-4">
                    Agendar Consulta
                </x-button>
                <x-button href="tel:3324043589" variant="outline" class="text-lg px-8 py-4">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                    33 24 04 35 89
                </x-button>
            </div>
        </div>
    </section>
@endsection
