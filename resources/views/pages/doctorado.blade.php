@extends('layouts.master')

@section('title', 'Doctorado')

@section('content')
<div class="snap-y snap-mandatory h-screen overflow-y-scroll scroll-smooth">

    <div class="snap-center snap-always  w-full h-screen flex flex-wrap items-center justify-center px-5">
        <div class=" md:w-2/4 text-custom-white animate__animated animate__fadeInUp">
            <div class=" flex items-center justify-center flex-wrap gap-2">
                <div>
                    <img src="./assets/images/items/people-lead.png" class=" object-contain w-60" alt="">
                </div>
                <div class="text-center">
                    <h1 class=" text-2xl md:text-3xl my-7 font-extrabold">Doctorado</h1>
                    <p class=" text-sm md:text-base my-7 font-semibold">El Doctorado de la Universidad Neuuni ofrece herramientas y sustentos a docentes y directivos para explorar sus realidades y mejorar los resultados con el apoyo de trabajo institucional con bases científicas.</p>
                </div>
            </div>
        </div>
    </div>


    <div class="snap-center snap-always  w-full h-screen flex flex-wrap items-center justify-center px-5">
        <div class=" md:w-2/5 text-custom-white animate__animated animate__fadeInUp text-center flex flex-col items-center justify-center">

            <div>
                <img src="./assets/images/items/neuuni-people-young.png" class=" object-contain w-60" alt="">
            </div>
            <h1 class="text-2xl md:text-3xl my-7 font-extrabold ">Oferta Educativa</h1>


                <a class=" font-bold hover:text-green-neuuni" href="https://unineuuni.edu.mx/es/doctorado-en-pedagogia-e-investigacion-educativa">Doctorado en pedagogía e investigación educativa</a>

            <small class=" my-10 text-xs font-semibold italic text-orange-neuuni">Haz click en la carrera de tu eleccion para mayor informes</small>



        </div>
    </div>


    <div class="snap-center snap-always  w-full h-screen flex flex-wrap items-center justify-center px-5">
        <div class=" md:w-2/5 text-custom-white animate__animated animate__fadeInUp flex flex-col items-center justify-center text-center">
            <i class='bx bx-trophy text-4xl' ></i>
            <h1 class="text-2xl md:text-3xl my-7 font-extrabold ">Conocenos</h1>
            <p class=" font-semibold w-fit">Nuestros procesos académicos se mejoran continuamente para asegurar la prestación de servicios de calidad.</p>
            <a href="https://www.youtube.com/watch?v=-1td1vJDKrg" class="my-7 px-5 h-fit bg-black-secondary hover-gradient p-2 rounded-md grow"><p class=" text-sm md:text-base font-semibold">Checa nuestro video</p></a>

        </div>
    </div>



</div>


@endsection

@section('scripts')

@endsection
