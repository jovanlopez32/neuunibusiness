@extends('layouts.master')

@section('title', 'Maestrias')

@section('content')

<div class="snap-y snap-mandatory h-screen overflow-y-scroll scroll-smooth">

    <div class="snap-center snap-always  w-full h-screen flex flex-wrap items-center justify-center px-5">
        <div class=" md:w-2/4 text-custom-white animate__animated animate__fadeInUp">
            <div class=" flex items-center justify-center flex-wrap gap-2">
                <div>
                    <img src="./assets/images/items/neuuni-people-3.png" class=" object-contain w-60" alt="">
                </div>
                <div class="text-center">
                    <h1 class=" text-2xl md:text-3xl my-5 font-extrabold">Maestrias</h1>
                    <p class=" text-sm md:text-base my-7 font-semibold">La Universidad Neuuni y las empresas consideran la investigación como una condición necesaria para el éxito. Esta fortaleza se logra al incluir estudios de posgrado y definir líneas de investigación.</p>
                </div>
            </div>
        </div>
    </div>


    <div class="snap-center snap-always  w-full h-screen flex flex-wrap items-center justify-center px-5">
        <div class=" md:w-2/5 text-custom-white animate__animated animate__fadeInUp ">
            <h1 class="text-2xl md:text-3xl my-7 font-extrabold ">Oferta Educativa</h1>

            <ul class=" grid grid-cols-2 text-start  gap-10 list-disc p-2 my-5 font-bold">
                <li> <a class=" hover:text-green-neuuni" href="https://unineuuni.edu.mx/es/maestria-en-administracion-y-direccion-empresarial">Maestría en administración y dirección empresarial</a></li>
                <li> <a class=" hover:text-green-neuuni" href="https://unineuuni.edu.mx/es/maestria-en-direccion-de-empresas-industriales">Maestría en dirección de empresas industriales</a></li>
                <li> <a class=" hover:text-green-neuuni" href="https://unineuuni.edu.mx/es/maestria-en-docencia-y-direccion-de-instituciones-educativas">Maestría en docencia y dirección de instituciones educativas</a></li>
                <li> <a class=" hover:text-green-neuuni" href="https://unineuuni.edu.mx/es/maestria-en-sistema-penal-acusatorio-y-adversarial">Maestría en sistema penal acusatorio y adversarial</a></li>
            </ul>

            <small class=" text-xs font-semibold italic text-orange-neuuni">Haz click en la carrera de tu eleccion para mayor informes</small>

        </div>
    </div>


    <div class="snap-center snap-always  w-full h-screen flex flex-wrap items-center justify-center px-5">
        <div class=" md:w-2/5 text-custom-white animate__animated animate__fadeInUp flex flex-col items-center justify-center text-center">
            <i class='bx bx-trophy text-4xl' ></i>
            <h1 class="text-2xl md:text-3xl my-7 font-extrabold ">Conocenos</h1>
            <p class=" font-semibold w-fit">Estas líneas integran
                a los docentes de la universidad y empleados con sus estudiantes, y buscan fortalecer la investigación desde todas
                las áreas de la universidad y la empresa. </p>
            <a href="https://www.youtube.com/watch?time_continue=1&v=bFl-vamd7hI&embeds_euri=http%3A%2F%2Flocalhost%3A8000%2F&source_ve_path=MjM4NTE&feature=emb_title" class="my-7 px-5 h-fit bg-black-secondary hover-gradient p-2 rounded-md grow"><p class=" text-sm md:text-base font-semibold">Checa nuestro video</p></a>

        </div>
    </div>



</div>


</div>

@endsection

@section('scripts')

@endsection
