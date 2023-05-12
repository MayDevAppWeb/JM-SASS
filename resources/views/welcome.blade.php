<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>J&M S.A.S</title>
    @vite('resources/css/app.css')
</head>

<body>

    {{-- header --}}
    <div class="header" id="header">
        <header class="text-gray-600 body-font">
            <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
                <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2"
                        class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
                        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                    </svg>
                    <span class="ml-3 text-xl">J&M S.A.S</span>
                </a>
                <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">
                    <a class="mr-5 hover:text-gray-900">Inicio</a>
                    <a class="mr-5 hover:text-gray-900">Servicios</a>
                    <a class="mr-5 hover:text-gray-900">Acerca de</a>
                    <a class="mr-5 hover:text-gray-900">Contacto</a>
                </nav>
            </div>
        </header>
    </div>
    {{-- fin heade --}}

    {{-- picture principal inicio --}}
    <div class="fondo-principal" id="fondo-principal">
        <div style="backface-visibility: hidden">
            <img src="img/imagen-principal.jpg" class="block w-full" alt="..." />
            <div class="absolute inset-x-[15%] bottom-5 hidden py-0 text-center text-white md:block">
                <h1 class="font-bold text-2xl text-black italic">Construmental S.A.S</h1>
            </div>
        </div>
    </div>
    {{-- picture principal fin --}}

    {{-- section servicios 1 inicio --}}
    <div class="servicios" id="servicios">
        {{-- section 1 de  servicios inicio --}}
        <section class="text-gray-600 body-font">
            <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
                <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
                    <img class="object-cover object-center rounded-xl" alt="hero" src="img/seccion1.png">
                </div>
                <div
                    class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-10 flex flex-col md:items-start md:text-left items-center text-center">
                    <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Actividades de alto
                        riesgo
                    </h1>
                    {{-- list de los servicios que ofrece --}}
                    <div class="mt-15">
                        <p class="mb-4 leading-relaxed">Ofrecemos los siguientes servicios:</p>
                        <p class="mb-4 leading-relaxed">
                            <i class="fa-solid fa-arrow-right"></i>
                            Trabajos en Alturas
                        </p>
                        <p class="mb-4 leading-relaxed">
                            <i class="fa-solid fa-arrow-right"></i>
                            Trabajos en Caliente
                        </p>
                        <p class="mb-4 leading-relaxed">
                            <i class="fa-solid fa-arrow-right"></i>
                            Trabajos en Espacios Confinados
                        </p>
                        <p class="mb-4 leading-relaxed">
                            <i class="fa-solid fa-arrow-right"></i>
                            Trabajos en Subestaciones Eléctricas
                        </p>
                        <p class="mb-4 leading-relaxed">
                            <i class="fa-solid fa-arrow-right"></i>
                            Excavaciones y Demoliciones
                        </p>
                        <p class="mb-4 leading-relaxed">
                            <i class="fa-solid fa-arrow-right"></i>
                            Izaje de Cargas
                        </p>
                        <p class="mb-4 leading-relaxed">
                            <i class="fa-solid fa-arrow-right"></i>
                            Trabajos en Tuberías a Presión
                        </p>
                    </div>
                    {{-- list de los servicios que ofrece fin --}}

                </div>
            </div>
        </section>
        {{-- section 1 de  servicios fin --}}

        {{-- section 2 de servicios inicio --}}
        <section class="text-gray-600 body-font">
            <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
                <div
                    class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                    <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Remodelaciones y
                        Adecuaciones
                    </h1>
                    {{-- list de los servicios que ofrece --}}
                    <div class="mt-15">
                        <p class="mb-4 leading-relaxed">Ofrecemos los siguientes servicios:</p>
                        <p class="mb-4 leading-relaxed">
                            <i class="fa-solid fa-arrow-right"></i>
                            Muros, techos Drywall y Superboard.
                        </p>
                        <p class="mb-4 leading-relaxed">
                            <i class="fa-solid fa-arrow-right"></i>
                            Techos en PVC.
                        </p>
                        <p class="mb-4 leading-relaxed">
                            <i class="fa-solid fa-arrow-right"></i>
                            Cubiertas y Techos.
                        </p>
                        <p class="mb-4 leading-relaxed">
                            <i class="fa-solid fa-arrow-right"></i>
                            Acabados en Baños y Cocinas.
                        </p>
                        <p class="mb-4 leading-relaxed">
                            <i class="fa-solid fa-arrow-right"></i>
                            Instalacion de pisos en Porcelanato, Laminado, Madera, PVC, Vinilo y LInea Konker.
                        </p>
                        <p class="mb-4 leading-relaxed">
                            <i class="fa-solid fa-arrow-right"></i>
                            Instalacion electricas Iluminacion y Ambientacion.
                        </p>
                    </div>
                    {{-- list de los servicios que ofrece fin --}}
                </div>
                <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
                    <img class="object-cover object-center rounded-xl" alt="hero" src="img/seccion2.png">
                </div>
            </div>
        </section>
        {{-- section 2 de servicios fin --}}

        {{-- section 3 de  servicios inicio --}}
        <section class="text-gray-600 body-font">
            <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
                <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
                    <img class="object-cover object-center rounded-xl" alt="hero" src="img/seccion3.png">
                </div>
                <div
                    class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-10 flex flex-col md:items-start md:text-left items-center text-center">
                    <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Mantenimiento de
                        Edificios
                    </h1>
                    {{-- list de los servicios que ofrece --}}
                    <div class="mt-15">
                        <p class="mb-4 leading-relaxed">Ofrecemos los siguientes servicios:</p>
                        <p class="mb-4 leading-relaxed">
                            <i class="fa-solid fa-arrow-right"></i>
                            Impermeabilizaciones.
                        </p>
                        <p class="mb-4 leading-relaxed">
                            <i class="fa-solid fa-arrow-right"></i>
                            Limpieza de Fachadas.
                        </p>
                        <p class="mb-4 leading-relaxed">
                            <i class="fa-solid fa-arrow-right"></i>
                            LImpieza interna de Paredes, Techos y Pisos.
                        </p>
                        <p class="mb-4 leading-relaxed">
                            <i class="fa-solid fa-arrow-right"></i>
                            Instalaciones Hidrosanitarias.
                        </p>
                    </div>
                    {{-- list de los servicios que ofrece fin --}}

                </div>
            </div>
        </section>
        {{-- section 3 de  servicios fin --}}

        {{-- section 4 de servicios inicio --}}
        <section class="text-gray-600 body-font">
            <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
                <div
                    class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                    <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Obra Civil
                    </h1>
                    {{-- list de los servicios que ofrece --}}
                    <div class="mt-15">
                        <p class="mb-4 leading-relaxed">Ofrecemos los siguientes servicios:</p>
                        <p class="mb-4 leading-relaxed">
                            <i class="fa-solid fa-arrow-right"></i>
                            Diseño y Montaje de oficinas.
                        </p>
                        <p class="mb-4 leading-relaxed">
                            <i class="fa-solid fa-arrow-right"></i>
                            Montajes PTL.
                        </p>
                        <p class="mb-4 leading-relaxed">
                            <i class="fa-solid fa-arrow-right"></i>
                            Suministroy montajesde Mallade Seguridad.
                        </p>
                        <p class="mb-4 leading-relaxed">
                            <i class="fa-solid fa-arrow-right"></i>
                            Redes Eléctricasy cableadoestructurado.
                        </p>
                        <p class="mb-4 leading-relaxed">
                            <i class="fa-solid fa-arrow-right"></i>
                            Suministro e instalaciónde redes luminariasy fuentes de energeia.
                        </p>
                        <p class="mb-4 leading-relaxed">
                            <i class="fa-solid fa-arrow-right"></i>
                            Remodelaciones.
                        </p>
                        <p class="mb-4 leading-relaxed">
                            <i class="fa-solid fa-arrow-right"></i>
                            Adecuaciones.
                        </p>
                        <p class="mb-4 leading-relaxed">
                            <i class="fa-solid fa-arrow-right"></i>
                            Obras o Proyectos nuevos.
                        </p>
                        <p class="mb-4 leading-relaxed">
                            <i class="fa-solid fa-arrow-right"></i>
                            Obras de acabados en seco.
                        </p>
                        <p class="mb-4 leading-relaxed">
                            <i class="fa-solid fa-arrow-right"></i>
                            Cuartos Frios
                        </p>
                        <p class="mb-4 leading-relaxed">
                            <i class="fa-solid fa-arrow-right"></i>
                            Montaje de Estanaterias Certificadas.
                        </p>
                    </div>
                    {{-- list de los servicios que ofrece fin --}}
                </div>
                <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
                    <img class="object-cover object-center rounded-xl" alt="hero" src="img/seccion4.png">
                </div>
            </div>
        </section>
        {{-- section 4 de servicios fin --}}
    </div>
    {{-- section servicios fin --}}

    {{-- footer inicio --}}
    <div class="footer" id="footer">
    <footer class="text-gray-600 body-font">
        <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
          <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
              <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
            </svg>
            <span class="ml-3 text-xl">J&M S.A.S</span>
          </a>
          <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">© 2023 J&M S.A.S —
            <a href="https://twitter.com/knyttneve" class="text-gray-600 ml-1" rel="noopener noreferrer" target="_blank">@MayDevAppWeb</a>
          </p>
          <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
            <a class="text-gray-500">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
              </svg>
            </a>
            <a class="ml-3 text-gray-500">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
              </svg>
            </a>
            <a class="ml-3 text-gray-500">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
              </svg>
            </a>
            <a class="ml-3 text-gray-500">
              <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                <circle cx="4" cy="4" r="2" stroke="none"></circle>
              </svg>
            </a>
          </span>
        </div>
      </footer>
    </div>
    {{-- footer fin --}}

</body>
<script src="https://kit.fontawesome.com/45f76979a6.js" crossorigin="anonymous"></script>

</html>
