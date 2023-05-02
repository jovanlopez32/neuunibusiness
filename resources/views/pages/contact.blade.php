@extends("layouts.second-master")

@section("title", 'Contacto')

@section('content')

<div class=" min-h-screen w-full grid grid-cols-1 md:grid-cols-2">

    <div class=" relative w-full py-36 bg-cover bg-center bg-blue-800 md:bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))] from-blue-700 via-blue-800 to-gray-900 " >
        @include('components.logo-lateral')

        <div class=" flex justify-center items-center w-full h-full bg-transparent ">

            <ul class=" grid gap-4 font-bold text-custom-white mx-10">
                <li><i class='bx bx-check-double text-xl mr-4'></i>Plan de beneficios para colaboradores</li>
                <li><i class='bx bx-check-double text-xl mr-4'></i>Prestacion y uso de instalaciones</li>
                <li><i class='bx bx-check-double text-xl mr-4'></i>Certificación continua</li>
                <li><i class='bx bx-check-double text-xl mr-4'></i>Practicas profesionales</li>
                <li><i class='bx bx-check-double text-xl mr-4'></i>Servicio social</li>

                <small class=" text-xs my-5">O mandanos un mensaje al <a href="https://wa.me/524447152172" class=" border-b-2">+52 444 715 2172</a href="https://wa.me/15551234567"></small>
            </ul>

        </div>
        @include('components.navigation-lateral')
    </div>

    <div class=" w-full h-screen ">

        <div class=" relative w-full min-h-screen flex flex-col items-center justify-center px-5 bg-black-primary">

            <div id="load" class=" w-full h-screen bg-black-primary absolute flex items-center justify-center opacity-100 transition z-50">
                <i class='animate-spin text-5xl text-blue-neuuni bx bx-loader-alt'></i>
            </div>

            <div class=" min-h-screen flex items-center justify-center ">

                <form id="form" class=" my-5 animate__animated animate__fadeInUp text-custom-white rounded-lg p-5" method="POST" action="{{route('contacto-exitoso')}}">

                    @csrf

                    <div class=" flex gap-5 flex-wrap items-center justify-start">
                        <i class='bx bx-info-circle text-2xl'></i>
                        @isset($enviado)

                    <p class=" text-xs text-green-neuuni font-semibold">Datos Enviados. En breve nos contactaremos contigo!</p>

                        @endisset
                    </div>

                    <div class=" column">
                        <label class=" text-base font-semibold" for="name">Nombre Completo *</label>
                        <input class="input-contact" type="text" name="name" id="name" required>
                    </div>

                    <div class=" column">
                        <label class=" text-base font-semibold" for="ocupation">Cargo/Puesto</label>
                        <input class="input-contact" type="text" name="ocupation" id="ocupation">
                    </div>

                    <div class=" flex flex-wrap gap-x-5">
                        <div class=" column">
                            <label class=" text-base font-semibold" for="cel">Celular *</label>
                            <input class="input-contact" type="tel" name="cel" id="cel" required>
                        </div>

                        <div class=" column">
                            <label class=" text-base font-semibold" for="email">Correo Electronico *</label>
                            <input class="input-contact" type="email" name="email" id="email">
                        </div>
                    </div>

                    <div class=" column">
                        <label class=" text-base font-semibold" for="business">Empresa *</label>
                        <input class="input-contact" type="text" name="business" id="business" required>
                    </div>

                    <div class=" flex flex-wrap gap-x-5">
                        <div class=" column">
                            <label class=" text-base font-semibold" for="tel">Telefono/Ext.</label>
                            <input class="input-contact" type="text" name="tel" id="tel">
                        </div>

                        <div class=" column">
                            <label class=" text-base font-semibold" for="interes">Interes</label>
                            <select name="interes" class="input-contact bg-black-primary">
                                <option value="Descuento en oferta educativa">Descuento en oferta educativa</option>
                                <option value="Convenio de colaboracion" selected>Convenio de colaboracion</option>
                                <option value="Capacitaciones">Capacitaciones</option>

                                <option value="Taller">Taller</option>
                                <option value="Seminario">Seminario</option>
                                <option value="Capacitaciones">Capacitaciones</option>

                                <option value="Servicio social">Servicio social</option>
                                <option value="Prácticas profesionales">Prácticas profesionales</option>
                                <option value="Trabaja en neuuni">Trabaja en neuuni</option>
                            </select>
                        </div>
                    </div>

                    <div class=" my-4">
                        <button class=" flex w-full items-center justify-center py-3 bg-blue-neuuni rounded-lg font-semibold text-custom-white text-sm ">Enviar</button>
                    </div>

                </form>

            </div>

    </div>

</div>
@endsection



@section('scripts')

<script>
    window.onload = () => {
        var _load = document.querySelector('#load');
        _load.classList.replace('opacity-100', 'opacity-0');
        _load.classList.replace('z-50', 'z-0');
    }

    var submit = document.querySelector('#form');

    submit.addEventListener('submit', (event) => {
        var _load = document.querySelector('#load');
        _load.classList.add('z-0', 'z-50');
        _load.classList.replace('opacity-0', 'opacity-100');

    });
</script>

@endsection
