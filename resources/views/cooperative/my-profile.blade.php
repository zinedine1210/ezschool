@extends('layouts.main', ['title'=>"My Profile"])

@section('container')
    <section id="my-profile" class="">
        <div class="row justify-content-center container-fluid g-2">
            @include('partials.navbar-profile')
            <div class="col-md-8">
                @foreach ($users as $user)
                    <div class="card px-3 pt-4 pb-5">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="profile border-rd shadow-sm">
                                    <img src="../foto-profile/{{ $user->profile }}" alt="foto anda" class="img-fluid">
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
                                            <h6 class="">{{ $user->nama }}</h6>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-4">
                                            <h6 class="fw-bold">Date of Birth</h6>
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="">{{ $user->tanggallahir }}</h6>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-4">
                                            <h6 class="fw-bold">Gender</h6>
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="">{{ $user->gender }}</h6>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-4">
                                            <h6 class="fw-bold">Phone Number</h6>
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="">{{ $user->phone }}</h6>
                                        </div>
                                    </div>
                                </div>

                                <a href="/edit-my-profile" class="btn bg-main text-white rounded"><i
                                        class="fa-solid fa-user-pen me-2"></i>Change
                                    Profile</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
