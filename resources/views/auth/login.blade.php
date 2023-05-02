{{-- <x-guest-layout>

    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-primary-button class="ml-3">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
 --}}

@extends('layouts.guest')

@section('title', 'Inicio de Sesion')

@section('content_guest')

<div class=" h-full min-h-screen bg-[radial-gradient(ellipse_at_right,_var(--tw-gradient-stops))] from-sky-400 to-indigo-900">

    <div class=" min-h-screen w-full flex items-center justify-center">

        <div class="  text-custom-white">

            <img src="./assets/images/logo/neuuni/neuunib.svg" class=" object-contain w-28" alt="Neuuni Business">

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class=" flex flex-col gap-2 my-10">
                    <label for="email" class=" font-semibold">Correo Electronico</label>
                    <input type="text" name="email" class=" font-bold p-1 text-sm bg-transparent border-2 border-transparent border-b-custom-white focus:border-transparent focus:border-b-blue-neuuni focus:ring-0" required autofocus>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class=" flex flex-col gap-2 my-10">
                    <label for="password" class=" font-semibold">Contraseña</label>
                    <input type="password" name="password" class=" font-bold p-1 text-sm bg-transparent border-2 border-transparent border-b-custom-white focus:border-transparent focus:border-b-blue-neuuni focus:ring-0" required>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>


                <div class="w-full">
                    <button class=" w-full px-5 py-3 rounded-lg bg-blue-neuuni text-custom-white text-xs font-semibold">Acceder</button>
                </div>


            </form>


        </div>

    </div>

</div>



@endsection




