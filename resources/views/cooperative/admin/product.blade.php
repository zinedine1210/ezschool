@extends('layouts.admin-main')


@section('container')
    <section class="my-3">
        <form action="/" method="POST" class="d-inline">
            <button class="btn btn-danger border-rd mb-3"><i class="fa-solid fa-trash"></i></button>
        </form>
        <button class="btn btn-primary border-rd mb-3 d-inline" data-bs-toggle="modal" data-bs-target="#modaltambahproduk"><i
                class="fa-solid fa-circle-plus"></i></button>

        <h6 class="text-dark fw-bold font-poppins">Total {{ $products->count() }} Data
        </h6>
        <h6 class="text-dark fw-bold font-poppins mb-3">
            {{ $products->where('kondisi', 'bekas')->count() }} Barang bekas,
            {{ $products->where('kondisi', 'baru')->count() }} Barang baru
        </h6>
        <div class="table-responsive">
            <table class="table table-striped align-middle table-sm">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Key Product</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Kondisi</th>
                        <th scope="col">Berat</th>
                        <th scope="col">Diskon</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <th>{{ $product->key_product }}</th>
                            <td>{{ $product->judul }}</td>
                            <td>{{ $product->harga }}</td>
                            <td>{{ $product->kondisi }}</td>
                            <td>{{ $product->berat }}</td>
                            <td>{{ $product->diskon }}</td>
                            <td>{{ $product->kategori_id }}</td>
                            <td>
                                <form action="/admin-products/{{ $product->id }}" method="POST">
                                    @csrf
                                    @method("delete")
                                    <button class="text-danger bg-transparent d-inline"
                                        onclick="return alert('Apakah anda yakin ingin menghapus?')"><i
                                            class="fa-solid fa-trash"></i></button>
                                    <button class="text-primary bg-transparent d-inline" data-bs-toggle="modal"
                                        type="button" data-bs-target="#modaleditproduct{{ $product->key_product }}"><i
                                            class="fa-solid fa-pen"></i></button>
                                    <button class="text-success bg-transparent d-inline" data-bs-toggle="modal"
                                        type="button" data-bs-target="#modalproduct{{ $product->key_product }}"><i
                                            class="fa-solid fa-eye"></i></button>
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
                    <h5 class="modal-title" id="staticBackdropLabel">Add Product</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body font-poppins">
                    <form action="/admin-products" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="judul" name="judul"
                                placeholder="name@example.com">
                            <label for="judul">Judul</label>
                        </div>

                        <select class="form-select mb-3" name="kategori" aria-label=" example">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->nama }}</option>
                            @endforeach
                        </select>

                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="harga" name="harga"
                                placeholder="name@example.com">
                            <label for="harga">Harga</label>
                        </div>

                        <select class="form-select mb-3" name="kondisi" aria-label=" example">
                            <option value="baru">Baru</option>
                            <option value="bekas">Bekas</option>
                        </select>

                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="berat" name="berat"
                                placeholder="name@example.com">
                            <label for="berat">Berat</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="diskon" name="diskon"
                                placeholder="name@example.com">
                            <label for="diskon">Diskon</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="informasi" name="informasi"
                                placeholder="name@example.com">
                            <label for="informasi">Informasi</label>
                        </div>

                        <label for="deskripsi">Deskripsi</label>
                        <div class="form-floating mb-3">
                            <input id="deskripsi" type="hidden" name="deskripsi" onfocus required>
                            <trix-editor input="deskripsi"></trix-editor>
                        </div>

                        <div class="mb-3">
                            <label for="gambar" class="form-label">Picture</label>
                            <input class="form-control" type="file" id="gambar" name="gambar[]" multiple>
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




    {{-- EDIT PRODUK --}}
    @foreach ($products as $product)
        <div class="modal fade" id="modaleditproduct{{ $product->key_product }}" data-bs-backdrop="static"
            data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Edit Product</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body font-poppins">
                        <form action="/admin-products/{{ $product->id }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method("put")
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="judul" name="judul"
                                    placeholder="name@example.com" value="{{ $product->judul }}">
                                <label for="judul">Judul</label>
                            </div>

                            <select class="form-select mb-3" name="kategori" aria-label=" example">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        @if ($product->kategori_id == $category->id) selected @endif>{{ $category->nama }}</option>
                                @endforeach
                            </select>

                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="harga" name="harga"
                                    placeholder="name@example.com" value="{{ $product->harga }}">
                                <label for="harga">Harga</label>
                            </div>

                            <select class="form-select mb-3" name="kondisi" aria-label=" example">
                                <option value="baru" @if ($product->kondisi == 'baru') selected @endif>Baru</option>
                                <option value="bekas" @if ($product->kondisi == 'bekas') selected @endif>Bekas</option>
                            </select>

                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="berat" name="berat"
                                    placeholder="name@example.com" value="{{ $product->berat }}">
                                <label for="berat">Berat</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="diskon" name="diskon"
                                    placeholder="name@example.com" value="{{ $product->diskon }}">
                                <label for="diskon">Diskon</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="informasi" name="informasi"
                                    placeholder="name@example.com" value="{{ $product->informasi }}">
                                <label for="informasi">Informasi</label>
                            </div>

                            <label for="deskripsi">Deskripsi</label>
                            <div class="form-floating mb-3">
                                <input id="editdeskripsi{{ $product->key_product }}" type="hidden" name="editdeskripsi"
                                    onfocus required>
                                <trix-editor input="editdeskripsi{{ $product->key_product }}">{!! $product->deskripsi !!}
                                </trix-editor>
                            </div>

                            <div class="mb-3">
                                <label for="editgambar" class="form-label">Picture</label>
                                <input class="form-control" type="file" id="editgambar" name="editgambar[]" multiple>
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
    @endforeach


    {{-- lIHAT PRODUK --}}

    @foreach ($products as $product)
        <div class="modal fade" id="modalproduct{{ $product->key_product }}" data-bs-backdrop="static"
            data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Detail Information :
                            {{ $product->key_product }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body font-poppins">
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    @foreach ($pictures as $picture)
                                        @if ($picture->product_id == $product->id)
                                            <img src="gambar-product/{{ $picture->gambar }}"
                                                class="img-fluid rounded-start" alt="{{ $picture->gambar }}">
                                        @endif
                                    @endforeach
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h4 class="card-title fw-bold text-main">{{ $product->judul }}</h4>
                                        <p class="card-text">Harga : {{ $product->harga }}</p>
                                        <p class="card-text">Berat : {{ $product->berat }}</p>
                                        <p class="card-text">Diskon : {{ $product->diskon }}</p>
                                        <p class="card-text">Category : {{ $product->kategori_id }}</p>
                                        <p class="card-text">Kondisi : {{ $product->kondisi }}</p>
                                        <p class="card-text">Informasi : {{ $product->informasi }}</p>
                                        <p class="card-text">Deskripsi : {!! $product->deskripsi !!}</p>
                                        <p class="card-text"><small
                                                class="text-muted">{{ $product->created_at->diffForHumans() }}</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
