@extends('layouts.app')

@section('title', 'Áreas de Práctica - Strategal')

@section('content')
    <!-- Hero Section -->
    <section class="bg-gradient-to-br from-[#002B5C] to-[#001a3a] text-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">
                Áreas de Práctica
            </h1>
            <p class="text-xl text-gray-200 max-w-3xl mx-auto">
                Soluciones legales especializadas en cada rama del derecho empresarial
            </p>
        </div>
    </section>

    <!-- Practice Areas Detail -->
    <section class="py-20 bg-white dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 bg-white dark:bg-gray-900">
            <!-- Derecho Administrativo -->
            <div id="administrativo" class="mb-20 scroll-mt-24">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <img src="{{ asset('images/areas-de-practica/administrativo.jpeg') }}" alt="Derecho Administrativo" class="rounded-lg shadow-xl w-full h-auto object-cover">
                    </div>
                    <div>
                        <div class="inline-flex items-center justify-center w-16 h-16 bg-[#002B5C]/10 dark:bg-white/10 rounded-full mb-6">
                            <svg class="w-8 h-8 text-[#002B5C] dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"/>
                            </svg>
                        </div>
                        <h2 class="text-3xl md:text-4xl font-bold text-[#002B5C] dark:text-white mb-4">
                            Derecho Administrativo
                        </h2>
                        <p class="text-gray-700 dark:text-gray-300 mb-6 leading-relaxed">
                            Brindamos asesoría integral en todos los aspectos del derecho administrativo, ayudando a empresas y particulares en sus relaciones con las autoridades gubernamentales.
                        </p>
                        <h3 class="text-xl font-semibold text-[#002B5C] dark:text-blue-400 mb-3">Servicios:</h3>
                        <ul class="space-y-3 text-gray-700 dark:text-gray-300">
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-green-500 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span>Trámites y procedimientos ante autoridades administrativas</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-green-500 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span>Defensa en controversias administrativas</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-green-500 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span>Obtención de permisos, licencias y autorizaciones</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-green-500 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span>Recursos de revisión y juicios de nulidad</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <hr class="border-gray-200 dark:border-gray-700 my-20">

            <!-- Derecho Corporativo -->
            <div id="corporativo" class="mb-20 scroll-mt-24">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div class="order-2 lg:order-1">
                        <div class="inline-flex items-center justify-center w-16 h-16 bg-[#002B5C]/10 dark:bg-white/10 rounded-full mb-6">
                            <svg class="w-8 h-8 text-[#002B5C] dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <h2 class="text-3xl md:text-4xl font-bold text-[#002B5C] dark:text-white mb-4">
                            Derecho Corporativo
                        </h2>
                        <p class="text-gray-700 dark:text-gray-300 mb-6 leading-relaxed">
                            Asesoramos a empresas en todas las etapas de su vida corporativa, desde su constitución hasta operaciones complejas de fusión y adquisición.
                        </p>
                        <h3 class="text-xl font-semibold text-[#002B5C] dark:text-blue-400 mb-3">Servicios:</h3>
                        <ul class="space-y-3 text-gray-700 dark:text-gray-300">
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-green-500 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span>Constitución y restructuración de sociedades</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-green-500 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span>Gobierno corporativo y cumplimiento normativo</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-green-500 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span>Fusiones, adquisiciones y joint ventures</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-green-500 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span>Contratos comerciales y negociación</span>
                            </li>
                        </ul>
                    </div>
                    <div class="order-1 lg:order-2">
                        <img src="{{ asset('images/areas-de-practica/corporativo.jpeg') }}" alt="Derecho Corporativo" class="rounded-lg shadow-xl w-full h-auto object-cover">
                    </div>
                </div>
            </div>

            <hr class="border-gray-200 dark:border-gray-700 my-20">

            <!-- Derecho Laboral -->
            <div id="laboral" class="mb-20 scroll-mt-24">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <img src="{{ asset('images/areas-de-practica/laboral.jpeg') }}" alt="Derecho Laboral" class="rounded-lg shadow-xl w-full h-auto object-cover">
                    </div>
                    <div>
                        <div class="inline-flex items-center justify-center w-16 h-16 bg-[#002B5C]/10 dark:bg-white/10 rounded-full mb-6">
                            <svg class="w-8 h-8 text-[#002B5C] dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                        </div>
                        <h2 class="text-3xl md:text-4xl font-bold text-[#002B5C] dark:text-white mb-4">
                            Derecho Laboral
                        </h2>
                        <p class="text-gray-700 dark:text-gray-300 mb-6 leading-relaxed">
                            Protegemos los intereses de empleadores y empleados, garantizando el cumplimiento de la legislación laboral y la resolución efectiva de conflictos.
                        </p>
                        <h3 class="text-xl font-semibold text-[#002B5C] dark:text-blue-400 mb-3">Servicios:</h3>
                        <ul class="space-y-3 text-gray-700 dark:text-gray-300">
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-green-500 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span>Elaboración y revisión de contratos individuales y colectivos</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-green-500 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span>Defensa en juicios laborales y conciliaciones</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-green-500 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span>Cumplimiento de obligaciones patronales</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-green-500 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span>Reglamentos internos de trabajo</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <hr class="border-gray-200 dark:border-gray-700 my-20">

            <!-- Derecho Fiscal -->
            <div id="fiscal" class="mb-20 scroll-mt-24">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div class="order-2 lg:order-1">
                        <div class="inline-flex items-center justify-center w-16 h-16 bg-[#002B5C]/10 dark:bg-white/10 rounded-full mb-6">
                            <svg class="w-8 h-8 text-[#002B5C] dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <h2 class="text-3xl md:text-4xl font-bold text-[#002B5C] dark:text-white mb-4">
                            Derecho Fiscal
                        </h2>
                        <p class="text-gray-700 dark:text-gray-300 mb-6 leading-relaxed">
                            Optimizamos la carga tributaria de nuestros clientes y los defendemos ante las autoridades fiscales, garantizando el cumplimiento de la legislación vigente.
                        </p>
                        <h3 class="text-xl font-semibold text-[#002B5C] dark:text-blue-400 mb-3">Servicios:</h3>
                        <ul class="space-y-3 text-gray-700 dark:text-gray-300">
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-green-500 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span>Planeación y estrategia fiscal</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-green-500 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span>Defensa ante autoridades fiscales (SAT)</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-green-500 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span>Auditorías y revisiones fiscales</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-green-500 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span>Cumplimiento de obligaciones tributarias</span>
                            </li>
                        </ul>
                    </div>
                    <div class="order-1 lg:order-2">
                        <img src="{{ asset('images/areas-de-practica/fiscal.jpeg') }}" alt="Derecho Fiscal" class="rounded-lg shadow-xl w-full h-auto object-cover">
                    </div>
                </div>
            </div>

            <hr class="border-gray-200 dark:border-gray-700 my-20">

            <!-- Propiedad Intelectual -->
            <div id="propiedad" class="mb-20 scroll-mt-24">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <img src="{{ asset('images/areas-de-practica/propiedad-intelectual.jpeg') }}" alt="Derecho de Propiedad Intelectual" class="rounded-lg shadow-xl w-full h-auto object-cover">
                    </div>
                    <div>
                        <div class="inline-flex items-center justify-center w-16 h-16 bg-[#002B5C]/10 dark:bg-white/10 rounded-full mb-6">
                            <svg class="w-8 h-8 text-[#002B5C] dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                            </svg>
                        </div>
                        <h2 class="text-3xl md:text-4xl font-bold text-[#002B5C] dark:text-white mb-4">
                            Derecho de Propiedad Intelectual
                        </h2>
                        <p class="text-gray-700 dark:text-gray-300 mb-6 leading-relaxed">
                            Protegemos los activos intangibles de su empresa, desde el registro hasta la defensa de sus derechos de propiedad industrial e intelectual.
                        </p>
                        <h3 class="text-xl font-semibold text-[#002B5C] dark:text-blue-400 mb-3">Servicios:</h3>
                        <ul class="space-y-3 text-gray-700 dark:text-gray-300">
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-green-500 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span>Registro de marcas, patentes y modelos de utilidad</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-green-500 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span>Protección de derechos de autor</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-green-500 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span>Licencias y transferencias de tecnología</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-green-500 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span>Defensa contra infracciones y uso indebido</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <hr class="border-gray-200 dark:border-gray-700 my-20">

            <!-- Derecho Familiar, Civil y Mercantil -->
            <div id="familiar" class="mb-20 scroll-mt-24">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div class="order-2 lg:order-1">
                        <div class="inline-flex items-center justify-center w-16 h-16 bg-[#002B5C]/10 dark:bg-white/10 rounded-full mb-6">
                            <svg class="w-8 h-8 text-[#002B5C] dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                            </svg>
                        </div>
                        <h2 class="text-3xl md:text-4xl font-bold text-[#002B5C] dark:text-white mb-4">
                            Derecho Familiar, Civil y Mercantil
                        </h2>
                        <p class="text-gray-700 dark:text-gray-300 mb-6 leading-relaxed">
                            Ofrecemos asesoría integral en asuntos familiares, civiles y mercantiles con un enfoque personalizado y soluciones efectivas.
                        </p>
                        <h3 class="text-xl font-semibold text-[#002B5C] dark:text-blue-400 mb-3">Servicios:</h3>
                        <ul class="space-y-3 text-gray-700 dark:text-gray-300">
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-green-500 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span>Divorcios, pensión alimenticia y patria potestad</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-green-500 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span>Sucesiones y testamentos</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-green-500 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span>Contratos civiles y mercantiles</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-green-500 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span>Arrendamiento y bienes inmuebles</span>
                            </li>
                        </ul>
                    </div>
                    <div class="order-1 lg:order-2">
                        <img src="{{ asset('images/areas-de-practica/familiar-civil-mercantil.jpeg') }}" alt="Derecho Familiar, Civil y Mercantil" class="rounded-lg shadow-xl w-full h-auto object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-white dark:bg-gray-900">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6 text-[#002B5C] dark:text-white">
                ¿Necesita Asesoría en Alguna de Estas Áreas?
            </h2>
            <p class="text-xl text-gray-700 dark:text-gray-300 mb-8">
                Contáctenos hoy y permítanos ayudarle con sus necesidades legales
            </p>
            <x-button href="{{ route('contact') }}" variant="primary" class="text-lg px-8 py-4">
                Contactar Ahora
            </x-button>
        </div>
    </section>
@endsection
