@extends('layouts.admin-main')

@section('container')
    <section class="my-3">
        <form action="" method="POST">
            <button class="btn btn-danger border-rd mb-3"><i class="fa-solid fa-trash"></i></button>
            <button class="btn btn-primary border-rd mb-3 d-inline" data-bs-toggle="modal"
                data-bs-target="#modaltambahbanner" type="button"><i class="fa-solid fa-circle-plus"></i></button>
        </form>
        <div class="table-responsive">
            <table class="table table-striped align-middle table-sm">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Banner</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($banners as $banner)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <th><img src="images/banner/{{ $banner->banner }}" alt="{{ $banner->banner }}" width="700">
                            </th>
                            <td>
                                <form action="/admin-banner/{{ $banner->id }}" method="GET">
                                    @csrf
                                    <button class="text-danger bg-transparent d-inline"
                                        onclick="return alert('Apakah anda yakin ingin menghapus?')"><i
                                            class="fa-solid fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>


    <div class="modal fade" id="modaltambahbanner" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Add Banner</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body font-poppins">
                    <form action="/admin-banner" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="banner" class="form-label">Picture</label>
                            <input class="form-control" type="file" id="banner" name="banner">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Add Product</button>
                    </form>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
