<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="./assets/images/logo/neuuni/favicon.svg" type="image/x-icon">
    <title>@yield('title') | Neuuni Business</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body class=" min-h-screen w-full bg-fixed bg-blue-800 md:bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))] from-blue-700 via-blue-800 to-gray-900" >

    @include('components.logo')

    @yield('content')

    @include('components.navigation')

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Animation Menu --}}
    @vite(['resources/js/animation/nav/menu.js'])

    @yield('scripts')
</body>
</html>
