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
                                {{-- <span><a href=""><i class="fa-solid fa-camera text-dark ms-2 mt-1"></i></a></span> --}}
                                <img src="foto-profile/{{ auth()->user()->profile }}" alt="foto anda"
                                    class="img-fluid">
                            </div>
                        </div>
                        <div class="col-md-8 font-poppins">
                            <h5 class="mb-4 fw-bold text-main">Your Account</h5>
                            <form action="/account-setting/{{ auth()->user()->id }}" method="POST">
                                @csrf
                                @method("put")
                                <div class="mb-2 form-floating">
                                    <input autocomplete="off" type="text"
                                        class="form-control @error('username') is-invalid @enderror" name="username"
                                        id="floatingInput" placeholder="name@example.com"
                                        value="{{ auth()->user()->username }}">
                                    <label for="floatingInput">Username</label>
                                    @error('username')
                                        <div class="invalid-feedback font-courier">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-2 form-floating">
                                    <input autocomplete="off" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        id="floatingInput" placeholder="name@example.com"
                                        value="{{ auth()->user()->email }}">
                                    <label for="floatingInput">Email</label>
                                    @error('email')
                                        <div class="invalid-feedback font-courier">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-2 form-floating">
                                    <input autocomplete="off" type="password" name="oldpassword"
                                        class="form-control @error('oldpassword') is-invalid @enderror" id="floatingInput"
                                        placeholder="name@example.com">
                                    <label for="floatingInput">Enter your password</label>
                                    @error('oldpassword')
                                        <div class="invalid-feedback font-courier">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-2 form-floating">
                                            <input autocomplete="off" type="password" name="newpassword"
                                                class="form-control @error('newpassword') is-invalid @enderror"
                                                id="floatingInput" placeholder="name@example.com">
                                            <label for="floatingInput">Enter your new password</label>
                                            @error('newpassword')
                                                <div class="invalid-feedback font-courier">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="col">
                                        <div class="mb-2 form-floating">
                                            <input autocomplete="off" type="password" name="confirmpassword"
                                                class="form-control @error('confirmpassword') is-invalid @enderror"
                                                id="floatingInput" placeholder="name@example.com">
                                            <label for="floatingInput">Confirm your new password</label>
                                            @error('confirmpassword')
                                                <div class="invalid-feedback font-courier">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <button class="btn bg-main font-poppins text-white" type="submit"><i
                                        class="fa-solid fa-user-pen me-2"></i>Save Change</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
