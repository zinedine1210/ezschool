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
        <form action="">
            <div class="form-floating mb-4">
                <input type="email" class="form-control font-courier" id="floatingInput" placeholder="name@example.com"
                    required autocomplete="off">
                <label for="floatingInput" class="font-poppins text-main"><small>Enter your email</small></label>
            </div>
            <div class="form-floating mb-4">
                <input type="email" class="form-control font-courier" id="floatingInput" placeholder="name@example.com"
                    required autocomplete="off">
                <label for="floatingInput" class="font-poppins text-main"><small>Enter your username</small></label>
            </div>
            <div class="row mb-4">
                <div class="col">
                    <div class="form-floating mb-4">
                        <input type="password" class="form-control font-courier" id="floatingInput"
                            placeholder="name@example.com" required autocomplete="off">
                        <label for="floatingInput" class="font-poppins text-main"><small>Enter your password</small></label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating mb-4">
                        <input type="password" class="form-control font-courier" id="floatingInput"
                            placeholder="name@example.com" required autocomplete="off">
                        <label for="floatingInput" class="font-poppins text-main"><small>Confirm your
                                password</small></label>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-1">
                    <input type="checkbox" id="_checkbox">
                    <label for="_checkbox" id="label">
                        <div id="tick_mark"></div>
                    </label>
                </div>
                <div class="col-md-9">
                    <label for="_checkbox" class="font-poppins text-main cookie"><small>Agree with terms and accept all
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



    <section id="atas" class="bg-main p-4">
        <h5 class="text-white font-poppins">EzSchool</h5>
        <div class="row mt-5">
            <div class="col-md-4 ms-4">
                <h3 class="font-poppins text-white fw-bold">Sign Up To
                </h3>
                <h6 class="font-poppins text-white mb-4 lead">Lorem ipsum dolor sit
                    </h3>
                    <p class="font-courier text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae illo
                        eveniet, sed maiores, sapiente repellendus soluta autem nobis animi, mollitia voluptatem libero
                        adipisci
                    </p>
            </div>
            <img src="images/vektor.png" alt="vektor" class="img-fluid vektor">
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
                    <h6 class="font-poppins fw-bold text-main">Zinedine Ziddan Fahdlevy</h6>
                    <small class="text-muted lead font-courier">Active 1 Days Ago</small>
                </span>
            </div>
        </div>
    </section>
@endsection
