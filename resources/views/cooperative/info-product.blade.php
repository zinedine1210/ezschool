@extends('layouts.main', ['title' => 'Product'])


@section('container')
    <section id="info" class="container-fluid">
        <div class="row justify-content-center mb-3">
            <div class="col-md-4 text-center">
                <div id="{{ $product->key_product }}" class="carousel slide carousel-dark" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#{{ $product->key_product }}" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#{{ $product->key_product }}" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#{{ $product->key_product }}" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        @foreach ($pictures as $data)
                            <div class="carousel-item slider text-center @if ($data->id == $gambarpertama->id) active @endif ">
                                <img src="gambar-product/{{ $data->gambar }}" class="d-block" alt="nama produk">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Gambar {{ $loop->iteration }}</h5>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <button class="
                                carousel-control-prev" type="button"
                        data-bs-target="#{{ $product->key_product }}" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#{{ $product->key_product }}"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>


                {{-- penawaran spesial --}}
                {{-- <div class="text-center mt-3" id="gratisongkir">
                    <img src="images/icon/free-delivery.png" alt="high quality" width="40" class="img-fluid me-1"><span
                        class="text-dark font-poppins">Free
                        Shipping</span>
                </div> --}}

                {{-- akhir penawaran spesial --}}
            </div>
            <div class="col-md-7">
                <h3 class="font-poppins">{{ $product->judul }}</h3>
                @if ($product->diskon)
                    <h4 class="text-muted d-inline float-end fw-bold font-poppins text-decoration-line-through">Rp
                        {{ $product->harga }}</h4>
                    <h4 class="text-main fw-bold font-poppins">Rp
                        {{ $product->harga - ($product->harga * $product->diskon) / 100 }}</h4>
                @else
                    <h4 class="text-main fw-bold font-poppins">Rp {{ $product->harga }}</h4>
                @endif
                <p class="fw-bold font-poppins"><i class="fas fa-regular fa-star me-2 text-warning"></i>5.4 Ratings
                    ( 1 Ulasan)
                </p>
                <hr>
                <div class="detail">
                    <h6 class="font-poppins text-main">Kondisi : <span
                            class="text-dark">{{ Str::ucfirst($product->kondisi) }}</span></h6>
                    <h6 class="font-poppins text-main">Berat : <span class="text-dark">{{ $product->berat }}
                            Gram</span></h6>
                    <h6 class="font-poppins text-main">Kategori : <span
                            class="text-dark">{{ $product->kategory->nama }}</span></h6>


                    {{-- <ul class="list-group rounded font-poppins text-main">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            XL
                            <span class="badge bg-main rounded-pill">14</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            L
                            <span class="badge bg-main rounded-pill">2</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            M
                            <span class="badge bg-main rounded-pill">1</span>
                        </li>
                    </ul> --}}


                    <p class="font-montserrat">
                        {!! $product->deskripsi !!}
                    </p>
                    <h6 class="font-poppins text-main fw-bold">Info Penting</h6>
                    <small class="font-montserrat">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem
                        molestias
                        debitis suscipit accusamus ipsa, odio eos aspernatur repellendus et, distinctio repudiandae
                        officiis
                        expedita enim dolor ratione officia sunt sint eum!</small>
                </div>

                <form action="" method="POST" class="text-white font-poppins fw-bold mt-4 text-center">
                    <a class="btn bg-main gradient py-2 px-5 text-white border-rd" href="/address">Check-out</a>
                    <button class="btn bg-main  py-2 px-5 text-white border-rd"><i
                            class="fab fa-opencart text-white me-2"></i> Add to Cart</button>
                </form>
            </div>
        </div>


        {{-- ulasan --}}
        <div class="row justify-content-center container-fluid mt-3">
            <div class="col-md-4 font-poppins text-main">
                <h6 class="fw-bold mb-3">Ulasan (1)</h6>

                <div class="progress border-rd" style="height: 60px;">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bar1" role="progressbar"
                        style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"><i
                            class="fas text-white ms-2 fs-4 fa-solid me-2 fa-thumbs-up"></i>650
                    </div>
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar"
                        style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"><i
                            class="fas fa-solid me-2 fa-thumbs-down text-white ms-2 fs-4"></i>348
                    </div>
                </div>

                <h6 class="fw-bold my-3">Filter</h6>
                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                    <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                    <label class="btn btn-outline-primary" for="btnradio1"><i
                            class="fas text-warning fs-4 fa-solid me-2 fa-thumbs-up"></i>650</label>

                    <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btnradio2"><i
                            class="fas fa-solid me-2 fa-thumbs-down text-danger fs-4"></i>348</label>
                </div>

                <h6 class="fw-bold my-3">Question about this product</h6>
                <div class="komentarpribadi">

                    <div class="komentar rounded mx-auto font-montserrat p-2 mt-2">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia dolore maiores nostrum,
                            officiis
                            amet non culpa aperiam minima dicta vero.</p>

                        <p class="card bg-main2 rounded p-2">Lorem, ipsum dolor sit amet consectetur adipisicing
                            elit.
                            Laboriosam, blanditiis?</p>
                    </div>

                </div>
                <div class="input-group mt-2">
                    <input type="text" class="form-control" placeholder="Comment here" aria-label="Comment here"
                        aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">Send</button>
                </div>


            </div>



            <div class="col-md-7 bungkusanulasan">
                <div class="ulasan border-rd bg-light shadow-sm p-3 mb-2">
                    <div class="row">
                        <div class="col-md-3 font-poppins text-main text-center">
                            <img src="images/foto.jpg" alt="ulasan" class="img-fluid mb-2" width="50">
                            <h6 class="fw-bold">Zinedine</h6>
                            <small class="text-muted">1 hari yang lalu</small>
                        </div>

                        <div class="col-md-8">
                            <small class="font-montserrat text-muted">Lorem, ipsum dolor sit amet consectetur
                                adipisicing
                                elit.</small>


                            <small class="font-montserrat card rounded p-3 bg-main2 mt-2">
                                <h6 class="text-main font-poppins">EzSchool Team</h6>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem commodi
                                magnam
                                iusto
                                cumque voluptatibus dignissimos error nihil omnis fugit fugiat?
                            </small>
                        </div>
                        <div class="col-md-1">
                            <i class="fas text-warning fa-solid fa-thumbs-up fs-3"></i>
                        </div>
                    </div>
                </div>

                <div class="ulasan border-rd bg-light shadow-sm p-3 mb-2">
                    <div class="row">
                        <div class="col-md-3 font-poppins text-main text-center">
                            <img src="images/foto.jpg" alt="ulasan" class="img-fluid mb-2" width="50">
                            <h6 class="fw-bold">Zinedine</h6>
                            <small class="text-muted">1 hari yang lalu</small>
                        </div>

                        <div class="col-md-8">
                            <small class="font-montserrat text-muted">Lorem, ipsum dolor sit amet consectetur
                                adipisicing
                                elit.
                                Esse obcaecati ipsum modi nostrum quo quasi minima commodi iusto nihil ratione
                                quisquam
                                consectetur, quidem, est architecto enim. Sapiente nulla nesciunt iusto eaque,
                                pariatur
                                quos
                                aperiam a et fugit nostrum possimus incidunt molestias error tempore labore suscipit
                                ex?
                                Vero sapiente quae maiores.</small>
                        </div>
                        <div class="col-md-1">
                            <i class="fas text-warning fa-solid fa-thumbs-up fs-3"></i>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        {{-- akhir ulasan --}}


        {{-- diskusi --}}

        {{-- akhir diskusi --}}
    </section>
@endsection
