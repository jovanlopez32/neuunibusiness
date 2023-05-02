@extends('layouts.master')

@section('title', 'Inicio')

@section('content')


<div class=" w-full min-h-screen flex flex-col items-center justify-center px-5">
    <script src="https://cdn.lordicon.com/fudrjiwc.js"></script>
    <script src="https://app.embed.im/snow.js" defer></script>


    <div class=" animate__animated animate__fadeInDown">

       {{--  <lord-icon
            src="https://cdn.lordicon.com/wlpxtupd.json"
            trigger="loop"
            colors="primary:#171717,secondary:#fefdfb"
            state="loop-1"
            class="w-40 h-40 md:w-52 md:h-52">

        </lord-icon> --}}

        <img src="./assets/images/items/two-people.webp" class=" object-contain h-60 lg:h-72" alt="Neuuni People">

    </div>

     <div class="  text-center text-custom-white animate__animated animate__fadeInUp">
        <h1 class=" my-7 text-xl md:text-2xl font-extrabold">Eleva tu equipo al siguiente nivel</h1>
        <p class=" my-7 text-sm md:text-base  font-semibold">Cada compañía <span class=" text-green-neuuni">enfrenta desafios unicos</span>, permitenos colaborar contigo <span class=" text-green-neuuni">para superarlos.</span></p>
     </div>


</div>

@endsection



