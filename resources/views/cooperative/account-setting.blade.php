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
                            <h5 class="mb-4 fw-bold text-main">Your Account</h5>
                            <div class="mb-2 form-floating">
                                <input autocomplete="off" type="text" class="form-control" id="floatingInput"
                                    placeholder="name@example.com">
                                <label for="floatingInput">Username</label>
                            </div>
                            <div class="mb-2 form-floating">
                                <input autocomplete="off" type="email" class="form-control" id="floatingInput"
                                    placeholder="name@example.com">
                                <label for="floatingInput">Email</label>
                            </div>
                            <div class="mb-2 form-floating">
                                <input autocomplete="off" type="password" class="form-control" id="floatingInput"
                                    placeholder="name@example.com">
                                <label for="floatingInput">Enter your password</label>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-2 form-floating">
                                        <input autocomplete="off" type="text" class="form-control" id="floatingInput"
                                            placeholder="name@example.com">
                                        <label for="floatingInput">Enter your new password</label>
                                    </div>

                                </div>
                                <div class="col">
                                    <div class="mb-2 form-floating">
                                        <input autocomplete="off" type="text" class="form-control" id="floatingInput"
                                            placeholder="name@example.com">
                                        <label for="floatingInput">Confirm your new password</label>
                                    </div>
                                </div>
                            </div>
                            <button class="btn bg-main font-poppins text-white"><i
                                    class="fa-solid fa-user-pen me-2"></i>Save Change</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
