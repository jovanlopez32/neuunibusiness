<div class=" w-full h-full relative top-0 text-custom-white bg-black-secondary">

    <div class=" w-full flex items-center justify-around  p-5 textwh">
        <div class=" self-start">
            <a href="{{route('login')}}" class=" flex items-center justify-center gap-3">
                <img src="./assets/images/logo/neuuni/neuuni_iso_white.svg" class=" object-contain w-11" alt="">
                <h3 class=" font-bold text-custom-white text-xs">|</h3>
                <h3 class=" font-bold text-custom-white text-xs">for <br> business</h3>
             </a>
        </div>

        <div class=" self-end flex items-center justify-center font-bold gap-2">
            <div class=" rounded-full bg-white border-2 border-black-primary">
                <img src="assets/images/avatar/avatar.svg" class=" object-contain w-10 rounded-full" alt="">
            </div>
            <i class=' hidden md:block bx bx-chevron-right text-xl'></i>
            <h3 class=" hidden md:block text-sm">{{Auth::user()->name}}</h3>

        </div>

    </div>


</div>
