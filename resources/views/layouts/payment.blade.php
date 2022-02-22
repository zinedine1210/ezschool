<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- MY CSS --}}
    <link rel="stylesheet" href="css/payment.css">
    <link rel="stylesheet" href="css/hover.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/bgjar.css">
    <link rel="stylesheet" href="css/izmir.css">

    {{-- Favicon --}}
    <link rel="shortcut icon" href="../images/Logo EzSchool.png" type="image/x-icon">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    {{-- AOS --}}
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    {{-- Toastr --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
        integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- Trix editor --}}
    <link rel="stylesheet" type="text/css" href="../css/trix.css">
    <script type="text/javascript" src="../js/trix.js"></script>

    <title>{{ $title }} | EzSchool</title>
</head>

<body>

    @yield('container')


    <!-- Javascript -->

    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.0/TextPlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    {{-- JS Toastr --}}
    <script>
        @if (session()->has('berhasil'))
            toastr.success("{{ session('berhasil') }}")
        @endif

        @if (session()->has('gagal'))
            toastr.error("{{ session('gagal') }}")
        @endif

        @if (session()->has('login'))
            toastr.info("{{ session('login') }}")
        @endif
    </script>

    {{-- Sweet Alert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    {{-- Script Lokal --}}
    <script src="../js/script.js"></script>

    <!-- Akhir Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
