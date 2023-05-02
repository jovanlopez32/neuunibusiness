@extends('layouts.master')

@section('title', 'Nosotros')

@section('content')



<div class="snap-y snap-mandatory h-screen overflow-y-scroll scroll-smooth">

    <div class="snap-center snap-always  w-full h-screen flex flex-wrap items-center justify-center px-5">
        <div class=" md:w-2/5 text-custom-white animate__animated animate__fadeInUp">
            <img src="./assets/images/logo/neuuni/neuuni_iso_white.svg" class=" object-contain w-8 md:w-10" alt="">
            <h1 class=" text-2xl md:text-3xl my-7 font-extrabold">¿Qué es Neuuni for business?</h1>
            <p class=" text-sm md:text-base my-7 font-semibold">Es la esfera de Neuuni Universidad diseñada para la mejora continua de tu compañia, con beneficios para tus colaboradores, herramientas disponibles para evaluaciones más eficientes y capacitaciones o conferencias desarrolladas para favorecer el crecimiento del capital humano de tu empresa. </p>
            <i class='bx bx-chevron-down animate-bounce text-3xl' ></i>
        </div>
    </div>


    <div class="snap-center snap-always  w-full h-screen flex flex-wrap items-center justify-center px-5">
        <div class=" md:w-2/5 text-custom-white animate__animated animate__fadeInUp">
            <i class='bx bxs-graduation text-4xl' ></i>
            <div class="my-7">
                <h1 class=" text-2xl md:text-3xl font-extrabold">Oferta Educativa</h1>
                <small>Selecciona alguna opcion para saber mas informacion.</small>
            </div>
            <div class=" flex flex-wrap gap-x-10 items-center justify-start">
                <a href="licenciaturas" class="my-7 px-5 h-fit bg-black-secondary hover-gradient p-2 rounded-md grow"><p class=" text-sm md:text-base font-semibold">Licenciaturas</p></a>
                <a href="maestrias" class="my-7 px-5 h-fit bg-black-secondary hover-gradient p-2 rounded-md grow"><p class=" text-sm md:text-base font-semibold">Maestrias</p></a>
                <a href="doctorado" class="my-7 px-5 h-fit bg-black-secondary hover-gradient p-2 rounded-md grow"><p class=" text-sm md:text-base font-semibold">Doctorado</p></a>
            </div>
            <i class='bx bx-chevron-down animate-bounce text-3xl' ></i>
        </div>
    </div>


    <div class="snap-center snap-always  w-full h-screen flex flex-wrap items-center justify-center px-5">
        <div class=" md:w-2/5 text-custom-white animate__animated animate__fadeInUp">
            <i class='bx bx-stats text-4xl' ></i>
            <h1 class=" text-2xl md:text-3xl my-7 font-extrabold">Modelo educativo </h1>
            <p class=" text-sm md:text-base my-7 font-semibold">Empleamos herramientas educativas innovadoras para generar un aprendizaje practico - teorico
                con contenidos flexibles y trascendentes que permiten el autoaprendizaje por medio de competencias diseñadas para desarrollar habilidades para los retos actuales. </p>
                <i class='bx bx-chevron-down animate-bounce text-3xl' ></i>
        </div>
    </div>

    <div class="snap-center snap-always  w-full h-screen flex flex-wrap items-center justify-center px-5">
        <div class=" md:w-2/5 text-custom-white animate__animated animate__fadeInUp">
            <i class='bx bx-trophy text-4xl' ></i>
            <h1 class=" text-2xl md:text-3xl my-7 font-extrabold">Innovación y transformación digital</h1>
            <p class=" text-sm md:text-base my-7 font-semibold">Somos la primera universidad con un ecosistema digital diseñado pedagógicamente para mejorar el talento de tu empresa.</p>
            <i class='bx bx-chevron-down animate-bounce text-3xl' ></i>
        </div>
    </div>
    <div class="snap-center snap-always  w-full h-screen flex flex-wrap items-center justify-center px-5">
        <div class=" md:w-2/5 text-custom-white animate__animated animate__fadeInUp">
            <i class='bx bxs-analyse text-4xl'></i>
            <h1 class=" text-2xl md:text-3xl my-7 font-extrabold">Rutas de aprendizaje personalizadas</h1>
            <p class=" text-sm md:text-base my-7 font-semibold">Llevamos tus capacitaciones a otro nivel con herramientas diseñadas a la medida de tus necesidades y desafios, con evaluaciones más efectivas, reporteos completos con enfoque para auditorias aprobadas y garantia de aprendizaje por parte de tus colaboradores.</p>
            <i class='bx bx-chevron-down animate-bounce text-3xl' ></i>
        </div>
    </div>
    <div class="snap-center snap-always  w-full h-screen flex flex-wrap items-center justify-center px-5">
        <div class=" md:w-2/5 text-custom-white animate__animated animate__fadeInUp">
            <i class='bx bx-world text-4xl' ></i>
            <div class="my-7">
                <h1 class=" text-2xl md:text-3xl font-extrabold">Sectores</h1>
                <small>Selecciona alguna opcion para saber mas informacion.</small>
            </div>
            <div class=" flex flex-wrap gap-x-10 items-center justify-start">

                {{-- <a href="#" class="my-7 px-5 h-fit bg-black-secondary hover-gradient p-2 rounded-md grow text-center"><p class=" text-sm md:text-base font-semibold">Público / Gubernamental</p></a> --}}
                <a href="capacitaciones#empresarial" class="my-7 px-5 h-fit bg-black-secondary hover-gradient p-2 rounded-md grow text-center"><p class=" text-sm md:text-base font-semibold">Empresarial</p></a>
                <a href="capacitaciones#educativo" class="my-7 px-5 h-fit bg-black-secondary hover-gradient p-2 rounded-md grow text-center"><p class=" text-sm md:text-base font-semibold">Educativo</p></a>
                {{-- <a href="#" class="my-7 px-5 h-fit bg-black-secondary hover-gradient p-2 rounded-md grow text-center"><p class=" text-sm md:text-base font-semibold">Privado</p></a> --}}
            </div>
        </div>
    </div>

</div>


@endsection

@section('scripts')


@vite(['resources/js/animation/pages/us.js'])

@endsection
