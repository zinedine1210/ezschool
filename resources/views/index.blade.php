@extends('layouts.app', ['title' => 'Landing Page'])

@section('container')
    {{-- Jumbotron --}}
    <div class="jumbotron jumbotron-fluid">
        <div class="container text-center">
            <h1 class="display-4 font-poppins text-white">Belajar, Bekerja, Membangun</h1>
            <p class="font-courier text-white">Kami menyediakan kebutuhan sekolah dalam bentuk digital sehingga dapat
                mengefiesiensikan kegiatan siswa maupun guru dalam bentuk aplikasi Web
            </p>
        </div>
    </div>
    {{-- akhir Jumbotron --}}

    {{-- panel --}}
    <div class="row justify-content-center container-fluid">
        <div class="col-md-8">
            <div class="card border-rd p-3 panel shadow-sm">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-5 mt-2">
                        <img src="images/library.png" alt="library" class="img-fluid icon-panel float-start me-3">
                        <h5 class="font-poppins text-main">Perpustakaan</h5>
                        <p class="text-muted">Menyediakan buku sekolah digital</p>
                    </div>
                    <div class="col-md-5 mt-2">
                        <img src="images/stationery.png" alt="library" class="img-fluid icon-panel float-start me-3">
                        <h5 class="font-poppins text-main">Koperasi</h5>
                        <p class="text-muted">Menyediakan kebutuhan atau perlengkapan sekolah</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- akhir panel --}}



    {{-- informasi --}}
    <section class="my-5" id="informasi">
        <div class="row justify-content-center">
            <div class="col-md-">

            </div>
            <div class="col-md-6">
                <div class="row justify-content-center">
                    <div class="col-md-5 m-2 card shadow text-center border-rd bg-main p-3 text-white">
                        <h1 class="font-poppins fw-bold">100</h1>
                        <h5 class="font-courier">Pengunjung</h5>
                    </div>
                    <div class="col-md-5 m-2 card shadow text-center border-rd bg-main p-3 text-white">
                        <h1 class="font-poppins fw-bold">100</h1>
                        <h5 class="font-courier">Pengunjung</h5>
                    </div>
                    <div class="col-md-5 m-2 card shadow text-center border-rd bg-main p-3 text-white">
                        <h1 class="font-poppins fw-bold">100</h1>
                        <h5 class="font-courier">Pengunjung</h5>
                    </div>
                    <div class="col-md-5 m-2 card shadow text-center border-rd bg-main p-3 text-white">
                        <h1 class="font-poppins fw-bold">100</h1>
                        <h5 class="font-courier">Pengunjung</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- akhir informasi --}}
@endsection
