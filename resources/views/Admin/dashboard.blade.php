@extends('layouts.app')

@section('title', 'Inicio')

@section('contenido')

<div class=" min-h-screen bg-black-primary text-custom-white">

    <div class=" flex flex-col items-center justify-center">

        <div class=" my-10 text-center">
            <h1 class=" text-3xl">CONEXIONES</h1>
            <a class=" text-xs border-b hover:text-orange-neuuni hover:border-orange-neuuni transition" href="{{route('conexiones-aceptadas')}}">Ver conexiones aceptadas</a>
        </div>
        {{-- Leads no aceptados --}}

        @if (empty($new_leads))

        <div class=" flex-col">
            @foreach ($new_leads as $i)
            <form action="{{route('aceptar-lead')}}" method="POST"  class=" bg-black-secondary px-10 py-4 rounded-lg my-5">
                @csrf
                <div class="flex mb-4">
                    <div class=" mr-10">
                        <img src="./assets/images/avatar/oc-puzzle.svg" class=" object-contain h-20" alt="">
                    </div>
                    <div>
                        <h2 class=" text-xl font-bold">{{$i->name}}</h2>
                        <p class=" font-semibold">{{$i->business}}</p>
                        <p class=" font-semibold">{{$i->ocupation}}</p>
                    </div>
                </div>
                <ul class=" grid grid-cols-2 gap-2 font-semibold text-xs text-justify">
                    <li>Celular: {{$i->cel}}</li>
                    <li>Email: {{$i->email}}</li>
                    <li>Telefono: {{$i->tel}}</li>
                    <li>Interes: {{$i->interes}}</li>
                </ul>
                <input type="hidden" name="id" value="{{$i->id}}">
                <button class="w-full text-xs py-2 mt-6 rounded-lg font-semibold bg-blue-neuuni">Aceptar</button>
            </form>
            @endforeach
        </div>

        @else
            <div>
                <h2 class=" text-3xl">No hay conexiones</h2>
            </div>
        @endif



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

@endsection

