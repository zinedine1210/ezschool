<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- MY CSS --}}
    <link rel="stylesheet" href="css/get-started/sign.css">
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

    <title>Gate | EzSchool</title>
    <style>
        body {
            /* background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' version='1.1' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:svgjs='http://svgjs.com/svgjs' width='1280' height='720' preserveAspectRatio='none' viewBox='0 0 1280 720'%3e%3cg mask='url(%26quot%3b%23SvgjsMask1041%26quot%3b)' fill='none'%3e%3crect width='1280' height='720' x='0' y='0' fill='rgba(255%2c 255%2c 255%2c 1)'%3e%3c/rect%3e%3cpath d='M760.061%2c343.329C822.692%2c338.041%2c859.626%2c278.115%2c887.034%2c221.551C910.269%2c173.6%2c917.137%2c119.072%2c891.304%2c72.469C864.683%2c24.444%2c814.97%2c-7.753%2c760.061%2c-7.513C705.537%2c-7.275%2c661.157%2c28.324%2c630.786%2c73.607C595.385%2c126.391%2c562.118%2c189.353%2c589.587%2c246.666C619.848%2c309.803%2c690.295%2c349.22%2c760.061%2c343.329' fill='rgba(51%2c 11%2c 119%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M75.747%2c57.783C101.529%2c58.538%2c126.344%2c47.819%2c140.787%2c26.449C157.272%2c2.056%2c167.5%2c-30.093%2c152.09%2c-55.179C137.111%2c-79.564%2c104.319%2c-81.051%2c75.747%2c-79.432C50.617%2c-78.008%2c25.589%2c-69.124%2c13.048%2c-47.301C0.546%2c-25.544%2c4.129%2c1.274%2c16.986%2c22.823C29.502%2c43.801%2c51.329%2c57.068%2c75.747%2c57.783' fill='rgba(51%2c 11%2c 119%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M317.09 682.95 a162.78 162.78 0 1 0 325.56 0 a162.78 162.78 0 1 0 -325.56 0z' fill='rgba(51%2c 11%2c 119%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M245.56%2c494.191C282.589%2c493.119%2c319.585%2c479.264%2c337.932%2c447.081C356.13%2c415.16%2c350.859%2c375.33%2c330.911%2c344.473C312.605%2c316.157%2c279.278%2c304.331%2c245.56%2c304.195C211.558%2c304.058%2c178.275%2c315.764%2c159.01%2c343.781C136.735%2c376.175%2c123.829%2c418.637%2c143.436%2c452.711C163.077%2c486.843%2c206.196%2c495.33%2c245.56%2c494.191' fill='rgba(51%2c 11%2c 119%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M417.56681292960127 188.92238714910096L424.8531487858884 397.57574623412967 633.5065078709171 390.28941037784256 626.22017201463 181.63605129281385z' fill='rgba(51%2c 11%2c 119%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M830.97 707.18 a121.18 121.18 0 1 0 242.36 0 a121.18 121.18 0 1 0 -242.36 0z' fill='rgba(51%2c 11%2c 119%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M407.774045137653 466.8242760277796L442.9321341878225 632.2300803649315 573.1798494748049 431.6661869776101z' fill='rgba(51%2c 11%2c 119%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M-57.36 676.84 a121.72 121.72 0 1 0 243.44 0 a121.72 121.72 0 1 0 -243.44 0z' fill='rgba(51%2c 11%2c 119%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3c/g%3e%3cdefs%3e%3cmask id='SvgjsMask1041'%3e%3crect width='1280' height='720' fill='white'%3e%3c/rect%3e%3c/mask%3e%3cstyle%3e %40keyframes float1 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(-10px%2c 0)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float1 %7b animation: float1 5s infinite%3b %7d %40keyframes float2 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(-5px%2c -5px)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float2 %7b animation: float2 4s infinite%3b %7d %40keyframes float3 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(0%2c -10px)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float3 %7b animation: float3 6s infinite%3b %7d %3c/style%3e%3c/defs%3e%3c/svg%3e"); */
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' version='1.1' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:svgjs='http://svgjs.com/svgjs' width='1280' height='720' preserveAspectRatio='none' viewBox='0 0 1280 720'%3e%3cg mask='url(%26quot%3b%23SvgjsMask1042%26quot%3b)' fill='none'%3e%3crect width='1280' height='720' x='0' y='0' fill='rgba(255%2c 255%2c 255%2c 1)'%3e%3c/rect%3e%3cpath d='M21.649%2c81.123C42.062%2c80.207%2c59.11%2c66.866%2c68.94%2c48.952C78.373%2c31.761%2c78.756%2c11.313%2c69.419%2c-5.931C59.595%2c-24.075%2c42.253%2c-37.294%2c21.649%2c-38.388C-0.976%2c-39.589%2c-24.122%2c-30.935%2c-35.794%2c-11.516C-47.777%2c8.42%2c-45.87%2c33.786%2c-33.612%2c53.554C-21.985%2c72.305%2c-0.392%2c82.112%2c21.649%2c81.123' fill='rgba(51%2c 11%2c 119%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M196.1148388465916 187.73895963799143L188.57654755885144-28.12945899813326-27.291871077273242-20.59116771039311-19.75357978953309 195.27725092573158z' fill='rgba(51%2c 11%2c 119%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M-124.33 28.32 a152.65 152.65 0 1 0 305.3 0 a152.65 152.65 0 1 0 -305.3 0z' fill='rgba(51%2c 11%2c 119%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M1325.3777120880568 96.9494028981311L1139.0472332276859-65.33723440656155 1094.1383080110497 145.94264735194048z' fill='rgba(51%2c 11%2c 119%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M1155.966%2c82.026C1179.07%2c82.47%2c1202.627%2c73.588%2c1214.003%2c53.474C1225.238%2c33.611%2c1220.874%2c8.776%2c1208.089%2c-10.127C1196.749%2c-26.894%2c1176.188%2c-33.233%2c1155.966%2c-32.337C1137.421%2c-31.515%2c1121.381%2c-21.407%2c1111.275%2c-5.836C1100.003%2c11.53%2c1092.284%2c32.86%2c1101.671%2c51.314C1111.775%2c71.178%2c1133.684%2c81.598%2c1155.966%2c82.026' fill='rgba(51%2c 11%2c 119%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M1046.91 -6.9 a82.19 82.19 0 1 0 164.38 0 a82.19 82.19 0 1 0 -164.38 0z' fill='rgba(51%2c 11%2c 119%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M211.01471168149658 745.3391490414333L173.50670530543965 532.6206743907964-1.7037629691403708 782.8471554174903z' fill='rgba(51%2c 11%2c 119%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M-71.32 551.32 a46.64 46.64 0 1 0 93.28 0 a46.64 46.64 0 1 0 -93.28 0z' fill='rgba(51%2c 11%2c 119%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M176.729%2c941.454C248.826%2c945.018%2c326.491%2c922.53%2c361.324%2c859.305C395.328%2c797.585%2c366.953%2c724.2%2c329.203%2c664.698C294.682%2c610.286%2c241.152%2c566.918%2c176.729%2c568.343C114.328%2c569.723%2c66.299%2c616.902%2c35.508%2c671.195C5.213%2c724.613%2c-7.191%2c788.067%2c21.25%2c842.495C51.744%2c900.852%2c110.965%2c938.203%2c176.729%2c941.454' fill='rgba(51%2c 11%2c 119%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M1328 528L1112 528 1112 744 1328 744z' fill='rgba(51%2c 11%2c 119%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M1328 528L1112 528 1112 744 1328 744z' fill='rgba(51%2c 11%2c 119%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M1065.06 550.94 a45.88 45.88 0 1 0 91.76 0 a45.88 45.88 0 1 0 -91.76 0z' fill='rgba(51%2c 11%2c 119%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3c/g%3e%3cdefs%3e%3cmask id='SvgjsMask1042'%3e%3crect width='1280' height='720' fill='white'%3e%3c/rect%3e%3c/mask%3e%3cstyle%3e %40keyframes float1 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(-10px%2c 0)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float1 %7b animation: float1 5s infinite%3b %7d %40keyframes float2 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(-5px%2c -5px)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float2 %7b animation: float2 4s infinite%3b %7d %40keyframes float3 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(0%2c -10px)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float3 %7b animation: float3 6s infinite%3b %7d %3c/style%3e%3c/defs%3e%3c/svg%3e");
        }

        h1 {
            margin-top: 40px;
            text-shadow: 2px 2px 5px black;
        }

        .gate {
            bottom: 100px;
            position: relative;
            width: 100%;
        }

        .kotak {
            position: relative;
            left: 32%;
            width: 37%;
            height: 300px;
            overflow: hidden;
        }

        .logo {
            width: 80px;
        }

        a {
            background-color: #ededed;
        }

    </style>
</head>

<body>

    {{-- container --}}
    <h1 class="font-poppins text-main text-center fw-bold">EzSchool</h1>
    <div class="kotak">
        <img src="images/gate.gif" alt="gate" class="img-fluid gate text-center">
    </div>

    <div class="row justify-content-center mt-4">
        <a class="col-md-3 border-rd p-4 me-2 hvr-float-shadow" href="/cooperative">
            <img src="images/stationery.png" alt="koperasi" class="img-fluid logo float-start me-3">
            <h6 class="font-poppins text-main fw-bold">E - Cooperative</h6>
            <p class="font-montserrat text-main"><small>Provide a lot of school supplies.</small></p>
        </a>
        <a class="col-md-3 border-rd p-4 hvr-float-shadow" href="/library">
            <img src="images/library.png" alt="perpustakaan" class="img-fluid logo float-start me-3">
            <h6 class="font-poppins text-main fw-bold">E - Library</h6>
            <p class="font-montserrat text-main"><small>Providing digital school books.</small></p>
        </a>
    </div>
    {{-- akhir container --}}





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
