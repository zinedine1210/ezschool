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
                            <form action="">
                                <h5 class="mb-3 text-main fw-bold">Biodata</h5>
                                <div class="card p-3 mb-3">
                                    <div class="mb-2 form-floating">
                                        <input autocomplete="off" type="text" class="form-control" id="floatingInput"
                                            placeholder="name@example.com">
                                        <label for="floatingInput">Name</label>
                                    </div>

                                    <div class="mb-2 form-floating">
                                        <input autocomplete="off" type="date" class="form-control" id="floatingInput"
                                            placeholder="name@example.com">
                                        <label for="floatingInput">Date of Birth</label>
                                    </div>

                                    <div class="form-floating mb-2">
                                        <select class="form-select mb-1" aria-label=".form-select-lg example" id="nama"
                                            placeholder="name@example.com">
                                            <option value="0">Male</option>
                                            <option value="1">Female</option>
                                        </select>
                                        <label for="nama">Gender</label>
                                    </div>

                                    <div class="mb-2 form-floating">
                                        <input autocomplete="off" type="number" class="form-control" id="floatingInput"
                                            placeholder="name@example.com">
                                        <label for="floatingInput">Phone Number</label>
                                    </div>

                                    <div class="mb-2 form-floating">
                                        <input autocomplete="off" type="email" class="form-control" id="floatingInput"
                                            placeholder="name@example.com">
                                        <label for="floatingInput">Email</label>
                                    </div>
                                </div>

                                <button class="btn bg-main text-white rounded"><i class="fa-solid fa-user-pen me-2"></i>Save
                                    Change</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
