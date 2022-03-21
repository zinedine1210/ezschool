@extends('layouts.main', ['title'=>"My Profile"])

@section('container')
    <section id="my-profile" class="">
        <div class="row justify-content-center container-fluid g-2">
            @include('partials.navbar-profile')
            <div class="col-md-8">
                @foreach ($users as $user)
                    <div class="card px-3 pt-4 pb-5">
                        <form action="/edit-my-profile" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="profile border-rd shadow-sm">
                                        <label for="gantifoto"><span><i
                                                    class="fa-solid fa-camera text-dark ms-2 mt-1"></i></span></label>
                                        <input type="file" class="d-none" name="foto" id="gantifoto">
                                        <img src="../foto-profile/{{ $user->profile }}" alt="foto anda"
                                            class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-md-8 font-poppins">

                                    <h5 class="mb-3 text-main fw-bold">Biodata</h5>

                                    <div class="card p-3 mb-3">
                                        <div class="mb-2 form-floating">
                                            <input autocomplete="off" type="text" name="nama"
                                                class="form-control @error('nama') is-invalid @enderror" id="nama"
                                                placeholder="name@example.com" value="{{ $user->nama }}">
                                            <label for="nama">Name</label>
                                            @error('nama')
                                                <div class="invalid-feedback font-courier">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="mb-2 form-floating">
                                            <input autocomplete="off" type="date" name="tanggallahir"
                                                class="form-control @error('tanggallahir') is-invalid @enderror"
                                                id="tanggallahir" placeholder="name@example.com"
                                                value="{{ $user->tanggallahir }}">
                                            <label for="tanggallahir">Date of Birth</label>
                                            @error('tanggallahir')
                                                <div class="invalid-feedback font-courier">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="form-floating mb-2">
                                            <select class="form-select mb-1 @error('gender') is-invalid @enderror"
                                                name="gender" aria-label=".form-select-lg example" id="gender"
                                                placeholder="name@example.com">
                                                <option value="Male" @if ($user->gender == 'Male') selected @endif>Male
                                                </option>
                                                <option value="Female" @if ($user->gender == 'Female') selected @endif>
                                                    Female</option>
                                            </select>
                                            <label for="gender">Gender</label>
                                            @error('gender')
                                                <div class="invalid-feedback font-courier">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="mb-2 form-floating">
                                            <input autocomplete="off" type="number" name="phone"
                                                class="form-control @error('phone') is-invalid @enderror" id="phone"
                                                placeholder="name@example.com" value="{{ $user->phone }}">
                                            <label for="phone">Phone Number</label>
                                            @error('phone')
                                                <div class="invalid-feedback font-courier">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <button class="btn bg-main text-white rounded" type="submit"><i
                                            class="fa-solid fa-user-pen me-2"></i>Save
                                        Change</button>

                                </div>
                        </form>
                    </div>
            </div>
            @endforeach
        </div>
        </div>
    </section>
@endsection
