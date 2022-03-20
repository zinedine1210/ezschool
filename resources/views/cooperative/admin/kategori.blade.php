@extends('layouts.admin-main')


@section('container')
    <section class="my-3">
        <form action="/" method="POST" class="d-inline">
            <button class="btn btn-danger border-rd mb-3"><i class="fa-solid fa-trash"></i></button>
        </form>
        <button class="btn btn-primary border-rd mb-3 d-inline" data-bs-toggle="modal"
            data-bs-target="#modaltambahkategori"><i class="fa-solid fa-circle-plus"></i></button>
        <div class="table-responsive">
            <table class="table table-striped align-middle table-sm">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">ID</th>
                        <th scope="col">Kategory Name</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kategories as $kategory)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <th>{{ $kategory->id }}</th>
                            <td>{{ $kategory->nama }}</td>
                            <td>
                                <form action="/admin-products/{{ $kategory->id }}">
                                    @csrf
                                    @method("delete")
                                    <button class="text-danger bg-transparent d-inline"
                                        onclick="return alert('Apakah anda yakin ingin menghapus?')"><i
                                            class="fa-solid fa-trash"></i></button>
                                    <button class="text-primary bg-transparent d-inline" data-bs-toggle="modal"
                                        type="button" data-bs-target="#modaleditproduct{{ $kategory->id }}"><i
                                            class="fa-solid fa-pen"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="modaltambahkategori" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/admin-category" method="POST">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="name@example.com">
                            <label for="nama">Name</label>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Add Category</button>
                    </form>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
