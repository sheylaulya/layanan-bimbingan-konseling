<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Starbhak Konseling</title>
    <link rel="stylesheet" href="{{asset('assets/css/nav.css')}}">
    @yield('css')
    {{-- Fonts - Poppins --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href='https://fonts.googleapis.com/css?family=Karla' rel='stylesheet' type='text/css'>
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    {{-- iconify --}}
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

    {{-- AOS --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>

    @include('users.layout.nav')
    @yield('content')

    <script src="assets/js/home.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
