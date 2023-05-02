@extends('layouts.master')

@section('title', 'Licenciaturas')

@section('content')

<div class="snap-y snap-mandatory h-screen overflow-y-scroll scroll-smooth">

    <div class="snap-center snap-always  w-full h-screen flex flex-wrap items-center justify-center px-5">
        <div class=" md:w-2/4 text-custom-white animate__animated animate__fadeInUp">
            <div class=" flex items-center justify-center flex-wrap gap-2">
                <div>
                    <img src="./assets/images/items/neuuni-people-young.png" class=" object-contain w-60" alt="">
                </div>
                <div class="text-center">
                    <h1 class=" text-2xl md:text-3xl my-7 font-extrabold">Licenciaturas</h1>
                    <p class=" text-sm md:text-base my-7 font-semibold">Nuestro enfoque pedagógico</span> avanzado <span class="text-orange-neuuni">garantiza el éxito de los estudiantes</span> en el nivel superior, lo que resulta en una mejora de la productividad y competitividad en las empresas.</p>
                </div>
            </div>
        </div>
    </div>


    <div class="snap-center snap-always  w-full h-screen flex flex-wrap items-center justify-center px-5">
        <div class=" md:w-2/5 text-custom-white animate__animated animate__fadeInUp ">
            <i class='bx bx-stats text-4xl' ></i>
            <h1 class="text-2xl md:text-3xl my-7 font-extrabold ">Oferta Educativa</h1>

            <ul class=" grid grid-cols-2 text-start  gap-10 list-disc p-2 my-5 font-bold">
                <li> <a class=" hover:text-green-neuuni" href="https://unineuuni.edu.mx/es/licenciatura-en-administracion-de-negocios">Licenciatura en Administración de Negocios</a></li>
                <li> <a class=" hover:text-green-neuuni" href="https://unineuuni.edu.mx/es/licenciatura-en-mercadotecnia-y-diseno-digital">Licenciatura en Mercadotecnia y Diseño Digital</a></li>
                <li> <a class=" hover:text-green-neuuni" href="https://unineuuni.edu.mx/es/licenciatura-en-derecho">Licenciatura en Derecho</a></li>
                <li> <a class=" hover:text-green-neuuni" href="https://unineuuni.edu.mx/es/licenciatura-en-ingenieria-industrial">Ingeniería Industrial</a></li>
            </ul>

            <small class=" text-xs font-semibold italic text-orange-neuuni">Haz click en la carrera de tu eleccion para mayor informes</small>

        </div>
    </div>


    <div class="snap-center snap-always  w-full h-screen flex flex-wrap items-center justify-center px-5">
        <div class=" md:w-2/5 text-custom-white animate__animated animate__fadeInUp flex flex-col items-center justify-center text-center">
            <i class='bx bx-trophy text-4xl' ></i>
            <h1 class="text-2xl md:text-3xl my-7 font-extrabold ">Conocenos</h1>
            <p class=" font-semibold w-fit">La Universidad Neuuni ofrece una formación de calidad y equidad para los estudiantes de educación media superior y profesionales. </p>
            <a href="https://www.youtube.com/watch?time_continue=1&v=bFl-vamd7hI&embeds_euri=http%3A%2F%2Flocalhost%3A8000%2F&source_ve_path=MjM4NTE&feature=emb_title" class="my-7 px-5 h-fit bg-black-secondary hover-gradient p-2 rounded-md grow"><p class=" text-sm md:text-base font-semibold">Checa nuestro video</p></a>

        </div>
    </div>



</div>


@endsection

@section('scripts')

@endsection
