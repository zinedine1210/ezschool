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

    <title>Verifikasi | EzSchool</title>
    <style>
        .kotak-verifikasi {
            width: 50%;
            position: absolute;
            top: 35%;
            left: 45%;
            background-color: white;
            padding: 20px;
            border-radius: 20px;

        }

        #atas {
            background-color: #797ad2;
            height: 300px;
        }

        #bawah {
            height: 300px;
        }

        img {
            position: absolute;
            top: 10%;
            width: 600px;
        }

    </style>
</head>

<body>
    <img src="images/verifikasi.png" alt="gif" class="img-fluid">
    <div class="kotak-verifikasi shadow text-center">
        <div class="progress mb-4 mt-2" style="height: 25px;">
            <div class="progress-bar progress-bar-striped progress-bar-animated bg-main2" role="progressbar"
                style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"><span
                    class="font-poppins">50%</span></div>
        </div>
        <h1 class="text-main fw-bold font-poppins">Verification Your Email</h1>
        <p class="text-muted font-montserrat">We have sent an email 6 digit code to <span
                class="fw-bold">{{ $email }}</span></p>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="/process" method="POST">
                    @csrf
                    <input type="hidden" name="kode" value="{{ $kode }}">
                    <input type="hidden" name="email" value="{{ $email }}">
                    <input type="hidden" name="username" value="{{ $username }}">
                    <input name="nomerkode"
                        class="form-control form-control-lg font-poppins kode-verifikasi text-center fw-bold"
                        type="number" placeholder="Enter your code here.." required autofocus autocomplete="off"
                        max="999999">
                    <div class="row justify-content-center">
                        <div class="col-md-5">
                            <button class="c-button c-button--gooey mb-2 mt-3">SEND
                                <div class="c-button__blobs">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <section id="atas">

    </section>
    <section id="bawah">

    </section>


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
