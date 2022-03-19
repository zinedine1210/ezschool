@extends('layouts.main', ['title'=>"My Profile"])

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
                            <h5 class="mb-2 fw-bold text-main">Biodata</h5>
                            <div class="p-3 mb-3 card">
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <h6 class="fw-bold">Name</h6>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="">Zinedine Ziddan Fahdlevy</h6>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <h6 class="fw-bold">Date of Birth</h6>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="">30 February 2020</h6>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <h6 class="fw-bold">Gender</h6>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="">Laki-Laki</h6>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <h6 class="fw-bold">Phone Number</h6>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="">089508781380</h6>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <h6 class="fw-bold">Email</h6>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="">ziddanfhdlvy12@gmail.com</h6>
                                    </div>
                                </div>
                            </div>

                            <a href="/edit-my-profile" class="btn bg-main text-white rounded"><i
                                    class="fa-solid fa-user-pen me-2"></i>Change
                                Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
