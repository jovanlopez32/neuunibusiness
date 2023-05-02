@extends('layouts.master')

@section('content')

<div class="  flex items-center justify-center w-full min-h-screen overflow-hidden animate__animated animate__fadeInUp ">

    <div class=" scale-75  grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 place-content-center gap-10 ">

        <div class=" flex items-center justify-center p-5 hover:scale-125 transition cursor-pointer ">
            <img src="./assets/images/logo/empresas/bmw.png" class=" object-contain w-40" alt="">
        </div>
        <div class=" flex items-center justify-center p-5 hover:scale-125 transition cursor-pointer">
            <img src="./assets/images/logo/empresas/gm.png" class=" object-contain w-16" alt="">
        </div>
        <div class=" flex items-center justify-center p-5 hover:scale-125 transition cursor-pointer">
            <img src="./assets/images/logo/empresas/minghua.png" class=" object-contain w-20" alt="">
        </div>

        {{-- ----------------------------- Second Part ----------------------------------- --}}

        <div class=" flex items-center justify-center p-5 hover:scale-125 transition cursor-pointer">
            <img src="./assets/images/logo/empresas/ekk.png" class=" object-contain w-24" alt="">
        </div>
        <div class=" flex items-center justify-center p-5 hover:scale-125 transition cursor-pointer">
            <img src="./assets/images/logo/empresas/contactum.png" class=" object-contain w-32" alt="">
        </div>
        <div class=" flex items-center justify-center p-5 hover:scale-125 transition cursor-pointer">
            <img src="./assets/images/logo/empresas/fischer.png" class=" object-contain w-32" alt="">
        </div>

         {{-- ----------------------------- Third Part ----------------------------------- --}}

         <div class=" flex items-center justify-center p-5 hover:scale-125 transition cursor-pointer">
            <img src="./assets/images/logo/empresas/agacel.png" class=" object-contain w-36" alt="">
        </div>
        <div class=" flex items-center justify-center p-5 hover:scale-125 transition cursor-pointer">
            <img src="./assets/images/logo/empresas/amecyd.png" class=" object-contain w-20" alt="">
        </div>
        <div class=" flex items-center justify-center p-5 hover:scale-125 transition cursor-pointer">
            <img src="./assets/images/logo/empresas/shalala.png" class=" object-contain w-32" alt="">
        </div>
        {{-- ----------------------------- Fourt Part ----------------------------------- --}}

        <div class=" flex items-center justify-center p-5 hover:scale-125 transition cursor-pointer">
            <img src="./assets/images/logo/empresas/stimm.png" class=" object-contain w-36" alt="">
        </div>
        <div class=" flex items-center justify-center p-5 hover:scale-125 transition cursor-pointer">
            <img src="./assets/images/logo/empresas/slp.png" class=" object-contain w-36" alt="">
        </div>
        <a href="{{route('contacto')}}">
            <div class=" flex flex-col items-start justify-center gap-2 p-5 hover:scale-125 transition cursor-pointer">
                <div class=" flex items-center justify-center gap-2">
                    <i class='bx bx-link text-4xl text-green-neuuni' ></i>
                    <small class=" text-green-neuuni font-semibold">Haz click aqui y</small>
                </div>
                <h1 class=" font-bold text-custom-white">Forma parte de nuestros convenios</h1>
            </div>
        </a>

    </div>

</div>


@endsection

@section('scripts')



@endsection
