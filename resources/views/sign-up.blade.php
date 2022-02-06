@extends('layouts.sign', ['title' => 'Register'])

@section('container')
    <div class="card border-rd kotak-form p-4 shadow">
        <h5 class="font-poppins mt-2 mb-3">Welcome to <span class="text-main fw-bold">EzSchool</span></h5>
        <div class="row justify-content-center my-4">
            <div class="col-md-7 bg-main3 border-rd nav-sign d-flex py-2 px-3">
                <a href="/get-started-up"
                    class="register border-rd p-2 text-main text-center font-poppins aktif">Register</a>
                <a href="/get-started-in" class="login border-rd p-2 text-main text-center font-poppins">Login</a>
            </div>
        </div>
        <form action="/get-started-up" method="POST" class="needs-validation" novalidate>
            @csrf
            <div class="form-floating mb-4">
                <input type="email" class="form-control font-courier @error('email') is-invalid @enderror"
                    value="{{ old('email') }}" id="email" name="email" placeholder="name@example.com" required
                    autocomplete="off" autofocus>
                <label for="email" class="font-poppins text-main3"><small>Enter your email</small></label>
                @error('email')
                    <div class="invalid-feedback font-courier">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating mb-4">
                <input type="text" class="form-control font-courier @error('username') is-invalid @enderror"
                    value="{{ old('username') }}" id="username" name="username" placeholder="name@example.com" required
                    autocomplete="off">
                <label for="username" class="font-poppins text-main3"><small>Enter your username</small></label>
                @error('username')
                    <div class="invalid-feedback font-courier">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row mb-4">
                <div class="col">
                    <div class="form-floating mb-4">
                        <input type="password" class="form-control font-courier @error('password') is-invalid @enderror"
                            id="password" name="password" placeholder="name@example.com" required autocomplete="off">
                        <label for="password" class="font-poppins text-main3"><small>Enter your password</small></label>
                        @error('password')
                            <div class="invalid-feedback font-courier">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating mb-4">
                        <input type="password"
                            class="form-control font-courier @error('confirmpassword') is-invalid @enderror"
                            id="confirmpassword" name="confirmpassword" placeholder="name@example.com" required
                            autocomplete="off">
                        <label for="confirmpassword" class="font-poppins text-main3"><small>Confirm your
                                password</small></label>
                        @error('confirmpassword')
                            <div class="invalid-feedback font-courier">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-1">
                    <input type="checkbox" name="isAgree" class="@error('isAgree') is-invalid @enderror" id="_checkbox">
                    <label for="_checkbox" id="label">
                        <div id="tick_mark"></div>
                    </label>
                    @error('isAgree')
                        <div class="invalid-feedback font-courier" style="display: inline-block; width:300px;">
                            You must agree before submitting
                        </div>
                    @enderror
                </div>
                <div class="col-md-9">
                    <label for="_checkbox" class="font-poppins text-main2 cookie"><small>I agree with terms of service and
                            accept all
                            cookies</small></label>
                </div>
            </div>
            <button class="c-button c-button--gooey mb-2"> Sign In
                <div class="c-button__blobs">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </button>
            <svg style="display: block; height: 0; width: 0;" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <filter id="goo">
                        <feGaussianBlur result="blur" stdDeviation="10" in="SourceGraphic"></feGaussianBlur>
                        <feColorMatrix result="goo" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" mode="matrix"
                            in="blur"></feColorMatrix>
                        <feBlend in2="goo" in="SourceGraphic"></feBlend>
                    </filter>
                </defs>
            </svg>
        </form>
    </div>



    <section id="atas" class="bg-main2 p-4">
        <h5 class="text-white font-poppins">EzSchool</h5>
        <div class="row mt-5">
            <div class="col-md-3 ms-4">
                <h3 class="font-poppins text-white fw-bold">Sign Up To
                </h3>
                <h6 class="font-poppins text-white mb-4 lead">EzSchool is simply
                    </h3>
                    <p class="font-montserrat text-white" style="font-size: 14px;">Borrowing books without hassle and buy
                        things quickly at the
                        school cooperative with EzSchool. EzSchool make your school life easier, what are you waiting for?
                        Let's join us now!
                    </p>
            </div>
            <img src="images/gif.gif" alt="vektor" class="img-fluid vektor">
        </div>
    </section>



    <section id="bawah" class="p-4">
        <div class="row mt-2 ms-4">
            <h6 class="text-main font-poppins mb-4">Login as</h6>
            <div class="col-md-4">
                <span class="text-center card bg-main3 profile p-2 rounded-2">
                    <form action="">
                        <input type="hidden" name="hapus">
                        <button class="delete p-0"><i class="fas fa-times text-main mx-auto"></i></button>
                    </form>
                    <img src="images/foto.jpg" alt="foto" class="img-fluid rounded-circle mx-auto mb-1" width="76">
                    <h6 class="font-poppins fw-bold text-main" style="overflow: hidden;height: 35px;">Zinedine Ziddan
                        Fahdlevy</h6>
                    <small class="text-muted lead font-montserrat fw-bold">Active 1 Days Ago</small>
                </span>
            </div>
        </div>
    </section>
@endsection
