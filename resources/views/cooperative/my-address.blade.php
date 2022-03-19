@extends('layouts.main', ['title' => 'My Address'])


@section('container')
    <section id="my-profile" class="">
        <div class="row justify-content-center container-fluid g-2">
            @include('partials.navbar-profile')
            <div class="col-md-8">
                <div class="card px-3 pt-4 pb-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="profile border-rd shadow-sm">
                                <span><a href=""><i class="fa-solid fa-camera text-dark ms-2 mt-1"></i></a></span>
                                <img src="../images/foto.jpg" alt="foto anda" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-md-8 font-poppins">
                            <h5 class="mb-2 fw-bold text-main">Your Address</h5>
                            <div class="font-poppins card my-2 border-rd py-3 px-3">
                                <small class="bg-success text-white text-center mb-2">Main Address</small>
                                <h6 class="text-main">Kp. Gempol rt 06/01 Cakung timur jakarta timur</h6>
                                <small class="text-muted">Note : Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit.
                                    Voluptates, a!</small>
                            </div>
                            <div class="font-poppins card my-2 border-rd py-3 px-3">
                                <h6 class="text-main">Pengarengan Timur Raya indonesia rt 09/90 Cakung Selatan</h6>
                                <small class="text-muted">Note : Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit.
                                    Voluptates, a!</small>
                            </div>



                            <a href="/edit-my-address" class="btn bg-main text-white mt-3 rounded"><i
                                    class="fa-solid fa-map-pin me-2"></i>Change
                                Address</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
