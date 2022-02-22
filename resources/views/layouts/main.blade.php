<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- MY CSS --}}
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/hover.css">
    <link rel="stylesheet" href="css/animate-main.css">
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
    @include('partials.navbar-main')


    @yield('container')


    <div id="alamat" class="bg-main fixed-bottom mx-auto p-3 mb-3 shadow text-white gradient">
        <h6 class="font-poppins">Ship to :
            <a href="" class="font-poppins float-end"><small>Change</small></a>
        </h6>
        <small class="font-montserrat deskripsiproduk">Kp. Gempol Rt 06/01 Cakung Timur, Jakarta Timur</small>
    </div>


    <footer class="bg-dark text-white px-2">

        <hr class="text-white">

        <div class="row justify-content-center font-montserrat">
            <div class="col-md-3">
                <h1 class="font-poppins text-main fw-bold">EzSchool</h1>
                <h5 class="font-poppins mb-4">Easy Learn, Easy Access</h5>
                <p class="font-montserrat"><i class="fas fa-map-marker-alt me-2"></i>SMK Negeri 26 Jakarta, Indonesia
                </p>
                <p class="font-montserrat"><i class="fas fa-phone-alt me-2"></i>+62 895 0878 1380</p>
                <p class="font-montserrat mt-4">EzSchool.official@gmail.com</p>
            </div>
            <div class="col-md-2">
                <h5 class="font-montserrat text-main mb-4 mt-2">Discovery</h5>
                <a href="" class="font-montserrat hvr-underline-from-left d-block mb-4 fs-6">New
                    Season</a>
                <a href="" class="font-montserrat hvr-underline-from-left d-block mb-4 fs-6">Most
                    Searched</a>
                <a href="" class="font-montserrat hvr-underline-from-left d-block mb-4 fs-6">Most
                    Seller</a>
            </div>
            <div class="col-md-2">
                <h5 class="font-montserrat text-main mb-4 mt-2">Account</h5>
                <a href="" class="font-montserrat hvr-underline-from-left d-block mb-4 fs-6">My
                    Account</a>
                <a href="" class="font-montserrat hvr-underline-from-left d-block mb-4 fs-6">Checkout</a>
                <a href="" class="font-montserrat hvr-underline-from-left d-block mb-4 fs-6">My
                    Cart</a>
            </div>
            <div class="col-md-2">
                <h5 class="font-montserrat text-main mb-4 mt-2">Info</h5>
                <a href="" class="font-montserrat hvr-underline-from-left d-block mb-4 fs-6">Contact
                    Us</a>
                <a href="" class="font-montserrat hvr-underline-from-left d-block mb-4 fs-6">Privacy
                    Policies</a>
                <a href="" class="font-montserrat hvr-underline-from-left d-block mb-4 fs-6">Terms &
                    Conditions</a>
            </div>
            <div class="col-md-2">
                <h5 class="font-montserrat text-main mb-4 mt-2">Stay Connected</h5>
                <a href="" class="font-montserrat hvr-underline-from-left d-block mb-4 fs-6">Facebook</a>
                <a href="" class="font-montserrat hvr-underline-from-left d-block mb-4 fs-6">Instagram</a>
                <a href="" class="font-montserrat hvr-underline-from-left d-block mb-4 fs-6">Twitter</a>
            </div>
        </div>

    </footer>




    <!-- Javascript -->

    <!-- GSAP -->

    <script src="https://kit.fontawesome.com/0968712025.js" crossorigin="anonymous"></script>
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
