@extends('layouts.admin-main')

@section('container')
    @foreach ($products as $item)
        <section class="my-3">
            <form action="" method="POST" class="d-inline">
                <button class="btn btn-danger border-rd mb-3"><i class="fa-solid fa-trash"></i></button>
            </form>
            <button class="btn btn-primary border-rd mb-3 d-inline" data-bs-toggle="modal"
                data-bs-target="#modaltambahproduk"><i class="fa-solid fa-circle-plus"></i></button>

            <h3 class="text-main fw-bold mb-3">{{ $item->judul }}</h3>
            <div class="table-responsive">
                <table class="table table-striped align-middle table-sm">
                    <thead>
                        <tr>
                            <th scope="col">Nama</th>
                            <th scope="col">Stock</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($details as $item)
                            <tr>
                                <th>{{ $item->nama }}</th>
                                <th>{{ $item->stock }}</th>
                                <th>{{ $item->harga }}</th>
                                <td>
                                    <form action="/admin-detail/{{ $item->id }}">
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


        <div class="modal fade" id="modaltambahproduk" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Add Detail</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body font-poppins">
                        <form action="/admin-detail" method="POST">
                            @csrf
                            <input type="hidden" name="product" value="{{ $item->id }}">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="nama" name="nama"
                                    placeholder="name@example.com">
                                <label for="nama">Nama</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="stock" name="stock"
                                    placeholder="name@example.com">
                                <label for="stock">Stock</label>
                            </div>


                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="harga" name="harga"
                                    placeholder="name@example.com">
                                <label for="harga">Harga</label>
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Add Detail</button>
                        </form>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
