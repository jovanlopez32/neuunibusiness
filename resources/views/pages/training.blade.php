@extends('layouts.master')

@section('title', 'Capacitaciones')

@section('content')
<div class="snap-y snap-mandatory h-screen overflow-y-scroll scroll-smooth">
    <script src="https://cdn.lordicon.com/fudrjiwc.js"></script>

    <div class="snap-center snap-always w-full h-screen flex flex-wrap items-center justify-center px-5">

        <div class=" md:w-2/5 text-custom-white animate__animated animate__fadeInUp">
            {{-- <img src="./assets/images/logo/neuuni/neuuni_iso_white.svg" class=" object-contain w-8 md:w-10" alt="">
            <h1 class=" text-2xl md:text-3xl my-7 font-extrabold">¿Qué es Neuuni for business?</h1> --}}
            <div class=" flex flex-wrap items-center justify-start gap-5">
                <lord-icon
                    src="https://cdn.lordicon.com/zpxybbhl.json"
                    trigger="loop"
                    colors="primary:#fefdfb,secondary:#171717"
                    delay="2000"
                    state="loop"
                    class="w-40 h-40 md:w-52 md:h-52">
                </lord-icon>

                <div>
                    <a href="#" class=" bg-black-secondary flex grow text-sm font-bold p-2 rounded-md">No hay problema que no podamos resolver juntos.</a>
                </div>
            </div>
            <p class=" text-sm md:text-base my-7 font-semibold">Complementa las competencias del talento de tu empresa con nuestras capacitaciones
                o talleres diseñados para perfeccionar y proporcionar herramientas innovadoras para su desarrollo.</p>
                <i class='bx bx-chevron-down animate-bounce text-3xl' ></i>
        </div>

    </div>

    <div id="educativo" class="snap-center snap-always w-full h-screen flex flex-wrap items-center justify-center px-5">

        <div class=" md:w-2/5 text-custom-white animate__animated animate__fadeInUp">
            <h1 class=" text-2xl font-bold my-5 border-b-2 border-white pb-2">Educativo</h1>

            <ul class=" grid grid-cols-2 md:grid-cols-3 gap-10 text-xs md:text-sm list-disc p-2 my-5 font-semibold">
                <li>Habilidades digitales</li>
                <li>Educación en línea</li>
                <li>Estrategias padres de familia</li>
                <li>Manejo de grupo tras la pandemia</li>
                <li>Tendencias pedagogicas actuales</li>
                <li>Aprendizaje y estrategias de desarrollo</li>
                <li>Modelos para la evaluacion de la calidad educativa</li>
                <li>Neurociencias aplicadas a la educacion</li>
                <li>Actividad directiva y estilos de liderazgo</li>
            </ul>
            <i class='bx bx-chevron-down animate-bounce text-3xl' ></i>

        </div>

    </div>

    <div id="empresarial" class="snap-center snap-always w-full h-screen flex flex-wrap items-center justify-center px-5">

        <div class=" md:w-2/5 text-custom-white animate__animated animate__fadeInUp">
            <h1 class=" text-2xl font-bold my-5 border-b-2 border-white pb-2">Empresarial</h1>

            <ul class=" grid grid-cols-2 md:grid-cols-3 gap-10 text-xs md:text-sm list-disc p-2 my-5 font-semibold">
                <li>Pm book</li>
                <li>Liderazgo</li>
                <li>Seguridad</li>
                <li>Capital humano</li>
                <li>Analisis financieros</li>
                <li>Coaching empresarial y trabajo colaborativo</li>
                <li>Gestión y analisis de riesgos</li>
                <li>Estadistica aplicada a la toma de decisiones</li>
                <li>Habilidades gerenciales</li>
            </ul>

        </div>

    </div>


</div>

@endsection

@section('scripts')

@endsection
