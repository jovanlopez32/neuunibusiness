@extends('layouts.app')

@section('title', 'Inicio')

@section('contenido')
<script src="//cdnjs.cloudflare.com/ajax/libs/list.js/2.3.1/list.min.js"></script>

<div class=" min-h-screen bg-black-primary text-custom-white">

    <div class=" flex flex-col items-center justify-center">

        <div class=" my-10 text-center">
            <p class=" text-orange-neuuni">[Aceptadas]</p>
            <h1 class=" text-3xl">CONEXIONES </h1>
            <a class=" text-xs border-b hover:text-orange-neuuni hover:border-orange-neuuni transition" href="{{route('dashboard')}}">Ver conexiones no aceptadas</a>
        </div>
        {{-- Leads Aceptados --}}

        <div id="conexions" class=" flex flex-col items-center justify-center">

            <input class="search focus:ring-0 focus:outline-none bg-transparent rounded-lg p-2 border-white border" placeholder="Buscar conexiones" />

            <ul class="list w-full h-96 overflow-scroll my-10">
                @if (!empty($leads_aceptados))
                @foreach ($leads_aceptados as $i)

                    <li class=" text-center my-5 py-5">
                        <h2 class=" name text-xl font-bold">{{$i->name}}</h2>
                        <div class=" flex justify-center gap-3">
                            <p class=" business text-xs font-semibold">{{$i->business}}</p>
                            <p class=" ocupation text-xs font-semibold">{{$i->ocupation}}</p>
                        </div>
                        <div class=" grid grid-cols-1 gap-3">
                            <p class="cel text-xs">Celular: {{$i->cel}}</p>
                            <p class="email text-xs">Email: {{$i->email}}</p>
                            <p class="tel text-xs">Telefono: {{$i->tel}}</p>
                            <p class="interes text-xs">Interes: {{$i->interes}}</p>
                        </div>
                    </li>


                @endforeach
                @else

                <p>No hay conexiones</p>

                @endif
            </ul>

        </div>



    </div>

</div>
@endsection


@section('scripts')

{{-- <div class=" bg-black-secondary px-10 py-4 rounded-lg">
    <div class="flex mb-4">
        <div class=" mr-10">
            <img src="./assets/images/avatar/oc-puzzle.svg" class=" object-contain h-20" alt="">
        </div>
        <div>
            <h2 class=" text-xl font-bold">Jorge Jovan Linan Lopez</h2>
            <p class=" font-semibold">Everest Home</p>
            <p class=" font-semibold">Director</p>
        </div>
    </div>
    <ul class=" grid grid-cols-2 gap-2 font-semibold text-xs text-justify">
        <li>Celular: 4445473439</li>
        <li>Email: everest.studio32@gmail.com</li>
        <li>Telefono: 4448343998</li>
        <li>Interes: Descuento en oferta educativa</li>
    </ul>
    <button class="w-full text-xs py-2 mt-6 rounded-lg font-semibold bg-blue-neuuni">Aceptar</button>
</div> --}}
<script>
    var options = {
        valueNames: [ 'name', 'email', 'business', 'tel', 'cel', 'interes', 'ocupation' ]
    };

    var userList = new List('conexions', options);
</script>


@endsection

