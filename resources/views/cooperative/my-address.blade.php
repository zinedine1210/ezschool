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
                                {{-- <span><a href=""><i class="fa-solid fa-camera text-dark ms-2 mt-1"></i></a></span> --}}
                                <img src="../foto-profile/{{ auth()->user()->profile }}" alt="foto anda"
                                    class="img-fluid">
                            </div>
                        </div>
                        <div class="col-md-8 font-poppins">
                            <h5 class="mb-2 fw-bold text-main">Your Address</h5>

                            @if ($addresses->count() > 0)
                                @foreach ($addresses as $address)
                                    <div class="font-poppins card my-2 border-rd py-3 px-3">
                                        @if ($address->main)
                                            <small class="bg-success text-white text-center mb-2"><i
                                                    class="fa-solid fa-check-double me-2"></i>Main Address</small>
                                        @endif
                                        <h6 class="text-main">{{ $address->address }}</h6>
                                        <small class="text-muted">Note : {{ $address->note }}</small>
                                    </div>
                                @endforeach
                            @else
                                {{-- gambar --}}
                            @endif

                            <a href="/edit-my-address" class="btn bg-main text-white mt-3 rounded"><i
                                    class="fa-solid fa-map-pin me-2"></i>Add Address</a>

                            <button class="btn btn-success text-white ms-2 mt-3 rounded" data-bs-target="#modalubahaddress"
                                data-bs-toggle="modal">Change Main Address</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- Modal -->


    <div class="modal fade" id="modalubahaddress" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Address List</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/my-address/{{ auth()->user()->id }}" method="POST">
                        @csrf
                        @method("put")
                        <h6 class="text-muted">Select your main address</h6>
                        <select class="form-select" multiple aria-label="multiple select example" name="main">

                            @foreach ($addresses as $address)
                                <option value="{{ $address->id }}" @if ($address->main) selected @endif>
                                    {{ $address->address }}</option>
                            @endforeach

                        </select>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    </form>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
