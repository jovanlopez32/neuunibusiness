

{{-- Barra Blanca --}}
<div class=" w-fit mx-auto fixed bottom-0 left-0 right-0 my-8 md:my-14 lg:my-16">
    <nav class=" rounded-full px-5 h-16 bg-black-primary text-custom-white flex items-center justify-center">
        <ul class="flex gap-5">
            <li id="menu" class=" cursor-pointer self-center"><i class='bx bx-menu text-3xl'></i></li>
            <li class=" self-center"><a href="https://www.linkedin.com/in/neuuni-universidad-a60a98203/" target="_blank"><i class='bx bxl-linkedin-square text-3xl'></i></a></li>
            <li class=" self-center"><a href="{{route('cuestionario')}}"><i class='bx bx-note text-3xl'></i></a></li>
            <li class=" self-center font-bold hidden lg:block md:block"><a href="{{route('nosotros')}}">NOSOTROS</a></li>
            <li class=" self-center font-bold hidden lg:block md:block"><a href="{{route('empresas')}}">EMPRESAS</a></li>
            <li class=" self-center font-bold hidden lg:block md:block"><a href="{{route('capacitaciones')}}">CAPACITACIONES</a></li>

            <a href="{{route('contacto')}}"> <li class=" bg-blue-neuuni w-28 h-10 grid place-items-center text-sm rounded-full self-center font-bold transition-all ease-linear ">CONTACTO</li> </a>
        </ul>
    </nav>
</div>

{{-- Menu --}}
<div class=" nav fixed top-0 w-full h-screen flex items-center justify-center bg-blue-800 to-gray-900 text-custom-white z-0 invisible animate__animated ">

    <div>
        <ul class=" flex flex-col text-start gap-5">
            <li class=" my-5"><button id="exit"><i class='bx bx-x text-5xl'></i></button></li>
            <li class=" flex items-center hover:text-orange-neuuni"><i class='bx bx-mail-send text-3xl mr-4 ' ></i><a href="{{route('contacto')}}" class=" font-bold text-xl">CONTACTO</a></li>
            <li class=" flex items-center hover:text-orange-neuuni"><i class='bx bxs-group text-3xl mr-4 ' ></i><a href="{{route('nosotros')}}" class=" font-bold text-xl">NOSOTROS</a></li>
            <li class=" flex items-center hover:text-orange-neuuni"><i class='bx bx-globe-alt text-3xl mr-4 ' ></i><a href="{{route('empresas')}}" class=" font-bold text-xl">EMPRESAS</a></li>
            <li class=" flex items-center hover:text-orange-neuuni"><i class='bx bxl-linkedin-square text-3xl mr-4 ' ></i><a target="_blank" href="https://www.linkedin.com/in/neuuni-universidad-a60a98203/" class=" font-bold text-xl">LINKEDIN</a></li>
            <li class=" flex items-center hover:text-orange-neuuni"><i class='bx bx-chalkboard text-3xl mr-4 ' ></i><a href="{{route('capacitaciones')}}" class=" font-bold text-xl">CAPACITACIONES</a></li>
        </ul>
    </div>

</div>


