@extends('layouts.main', ['title' => 'My Cart'])

@section('container')
    <section id="cart" class="mb-5">
        <div class="row justify-content-center g-2">
            <div class="col-md-6 me-3">
                <h1 class="font-poppins fw-bold">Your Cart</h1>
                <p class="font-montserrat text-muted mb-4">Our top selling product that you may like</p>
                <form action="" class="d-flex justify-content-between mb-3 border-primary border-bottom">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label font-poppins text-main" for="flexCheckDefault">
                            Pilih Semua
                        </label>
                    </div>
                    <button class="btn btn-transparent p-0 text-end font-poppins text-danger">Hapus Semua</button>
                </form>

                <form action="">

                    <div class="form-check mb-2" id="produk">
                        <input class="form-check-input" type="checkbox" value="" id="produk">
                        <label class="form-check-label font-poppins d-block labelproduk pb-3 bg-light shadow-sm"
                            for="produk">
                            <a href=""><img src="https://source.unsplash.com/120x120?product" alt="nama produk"
                                    class="float-start me-3"></a>
                            <h5 class="font-poppins text-main fw-bold">Sepatu</h5>
                            <p class="font-montserrat deskripsiproduk">Lorem ipsum dolor sit amet, consectetur adipisicing.
                            </p>
                            <h6 class="hargaproduk font-poppins fw-bold">Rp 20.000
                                <span class="font-poppins hargaproduk text-muted text-decoration-line-through ms-2">Rp
                                    100.000
                                </span>
                            </h6>
                            <a href="#detailproduk" data-bs-toggle="collapse" role="button" aria-expanded="false"
                                aria-controls="detailproduk" class="deskripsiproduk text-main fw-bold">Lihat
                                Detail<i class="fas fa-solid fa-caret-down ms-2"></i></a>


                            <div class="range float-end text-end me-4">
                                <label for="myRange"
                                    class="form-label d-block text-center p-0 font-poppins fw-bold text-main"
                                    id="demo"></label>
                                <input type="range" class="form-range" min="1" max="10" value="1" step="1" id="myRange">
                            </div>


                            <form action="" class="float-end text-danger">
                                <button class="btn btn-transparent"><i
                                        class="fas fa-solid fa-trash text-danger"></i></button>
                            </form>

                            {{-- collapse detail produk --}}
                            <div id="detailproduk" class="collapse mt-4">
                                <span
                                    class="bg-main text-white font-montserrat detailproduk fw-bold border-rd px-3 py-2 mx-1">Warna
                                    Putih</span>
                                <span
                                    class="bg-main text-white font-montserrat detailproduk fw-bold border-rd px-3 py-2 mx-1">XL</span>
                                <span
                                    class="bg-main text-white font-montserrat detailproduk fw-bold border-rd px-3 py-2 mx-1">NB</span>
                            </div>
                            {{-- akhir collapse detail produk --}}

                        </label>
                    </div>

                </form>

            </div>
            <div class="col-md-4">
                <div class="card border-rd p-2 shadow">
                    <div class="card-body">
                        <h4 class="font-poppins text-main mb-4">Shopping Summary</h4>

                        <div class="d-flex justify-content-between barang mb-2">
                            <small class="font-montserrat text-dark">Barang 1</small>
                            <small class="font-montserrat text-dark">Rp 100.000</small>
                        </div>
                        <div class="d-flex justify-content-between barang mb-2">
                            <small class="font-montserrat text-dark">Barang 2</small>
                            <small class="font-montserrat text-dark">Rp 80.000</small>
                        </div>
                        <div class="d-flex justify-content-between barang mb-2">
                            <small class="font-montserrat text-dark">Barang 3</small>
                            <small class="font-montserrat text-dark">Rp 10.000</small>
                        </div>
                        <div class="d-flex justify-content-between barang mb-2">
                            <small class="font-montserrat text-dark">Barang 4</small>
                            <small class="font-montserrat text-dark">Rp 126.000</small>
                        </div>


                        {{-- total --}}
                        <div class="d-flex justify-content-between my-3">
                            <h5 class="font-montserrat text-dark fw-bold">Total</h5>
                            <h5 class="font-montserrat text-dark fw-bold">Rp 100.000</h5>
                        </div>
                        {{-- akhir total --}}
                        <form action="" class="text-center">
                            <button class="btn bg-main py-2 px-5 text-center mx-auto fw-bold text-white">Buy (1)</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Populer produk --}}
    <section id="recommended" class="bg-main2">
        <h1 class="font-poppins fw-bold text-center">Recommended For You</h1>
        <p class="font-montserrat text-muted text-center mb-4">Our top selling product that you may like</p>
        <div class="row justify-content-center mx-4">
            <a class="col-md-3 my-3" href="">
                <div class="kartu">
                    <figure class="c4-izmir gambar c4-border-cc-3 c4-image-rotate-right c4-gradient-bottom" tabindex="0"
                        style="--primary-color: #674ea7; --secondary-color: #f3f3f3 ; --image-opacity: .1;">
                        <img src="https://source.unsplash.com/295x295?produtcs" class="card-img-top" alt="Sample Image">
                        <figcaption class="c4-layout-center-left">
                            <div class="c4-reveal-up c4-delay-200">
                                <button class="btn btn-light py-3 px-5 ms-4 font-poppins text-main">Add to
                                    Cart</button>
                            </div>
                            <div class="row justify-content-center align-items-center ms-5 ps-3 mt-4">
                                <div class="col-md-6 text-center">
                                    <button class="bg-transparent p-0 d-block c4-reveal-right"><i
                                            class="fas fa-share-alt text-white fs-3"></i></button>
                                </div>
                                <div class="col-md-6 text-center">
                                    <button class="bg-transparent p-0 d-block c4-reveal-left"><i
                                            class="far fa-heart text-white fs-3"></i></button>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                    <span class="bg-main diskon font-montserrat">-30%</span>
                    <div class="card-body text-dark">
                        <h4 class="card-text font-poppins fw-bold judul text-main">Sepatu KW Super Ges luar biasa anj</h4>
                        <p class="text-dark font-montserrat">Lorem ipsum dolor sit amet consectetur.</p>
                        <p class="font-montserrat fw-bold"><small><i class="fas fa-star text-warning"></i> -4 | Terjual
                                1</small></p>
                        <h5 class="font-poppins fw-bold float-start">Rp 170.000.000</h5>
                        <h6 class="font-poppins text-muted text-decoration-line-through float-end">Rp 100.000</h6>
                    </div>
                </div>
            </a>
            <a class="col-md-3 my-3" href="">
                <div class="kartu">
                    <figure class="c4-izmir gambar c4-border-cc-3 c4-image-rotate-right c4-gradient-bottom" tabindex="0"
                        style="--primary-color: #674ea7; --secondary-color: #f3f3f3 ; --image-opacity: .1;">
                        <img src="https://source.unsplash.com/295x295?uniform" class="card-img-top" alt="Sample Image">
                        <figcaption class="c4-layout-center-left">
                            <div class="c4-reveal-up c4-delay-200">
                                <button class="btn btn-light py-3 px-5 ms-4 font-poppins text-main">Add to
                                    Cart</button>
                            </div>
                            <div class="row justify-content-center align-items-center ms-5 ps-3 mt-4">
                                <div class="col-md-6 text-center">
                                    <button class="bg-transparent p-0 d-block c4-reveal-right"><i
                                            class="fas fa-share-alt text-white fs-3"></i></button>
                                </div>
                                <div class="col-md-6 text-center">
                                    <button class="bg-transparent p-0 d-block c4-reveal-left"><i
                                            class="far fa-heart text-white fs-3"></i></button>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                    {{-- <span class="bg-warning diskon font-montserrat">New</span> --}}
                    <div class="card-body text-dark">
                        <h4 class="card-text font-poppins fw-bold judul text-main">Seragam Sekolah SMA/SMK</h4>
                        <p class="text-dark font-montserrat">Lorem ipsum dolor sit amet consectetur.</p>
                        <p class="font-montserrat fw-bold"><small><i class="fas fa-star text-warning"></i> 4.5 | Terjual
                                650</small></p>
                        <h5 class="font-poppins fw-bold float-start">Rp 170.000</h5>
                        <h6 class="font-poppins text-muted text-decoration-line-through float-end">Rp 100.000</h6>
                    </div>
                </div>
            </a>
            <a class="col-md-3 my-3" href="">
                <div class="kartu">
                    <figure class="c4-izmir gambar c4-border-cc-3 c4-image-rotate-right c4-gradient-bottom" tabindex="0"
                        style="--primary-color: #674ea7; --secondary-color: #f3f3f3 ; --image-opacity: .1;">
                        <img src="https://source.unsplash.com/295x295?shoes" class="card-img-top" alt="Sample Image">
                        <figcaption class="c4-layout-center-left">
                            <div class="c4-reveal-up c4-delay-200">
                                <button class="btn btn-light py-3 px-5 ms-4 font-poppins text-main">Add to
                                    Cart</button>
                            </div>
                            <div class="row justify-content-center align-items-center ms-5 ps-3 mt-4">
                                <div class="col-md-6 text-center">
                                    <button class="bg-transparent p-0 d-block c4-reveal-right"><i
                                            class="fas fa-share-alt text-white fs-3"></i></button>
                                </div>
                                <div class="col-md-6 text-center">
                                    <button class="bg-transparent p-0 d-block c4-reveal-left"><i
                                            class="far fa-heart text-white fs-3"></i></button>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                    <span class="bg-warning diskon font-montserrat">New</span>
                    <div class="card-body text-dark">
                        <h4 class="card-text font-poppins fw-bold judul text-main">Sepatu NB</h4>
                        <p class="text-dark font-montserrat">Lorem ipsum dolor sit amet consectetur.</p>
                        <p class="font-montserrat fw-bold"><small><i class="fas fa-star text-warning"></i> 4.5 | Terjual
                                650</small></p>
                        <h5 class="font-poppins fw-bold float-start">Rp 170.000</h5>
                        {{-- <h6 class="font-poppins text-muted text-decoration-line-through float-end">Rp 100.000</h6> --}}
                    </div>
                </div>
            </a>
            <a class="col-md-3 my-3" href="">
                <div class="kartu">
                    <figure class="c4-izmir gambar c4-border-cc-3 c4-image-rotate-right c4-gradient-bottom" tabindex="0"
                        style="--primary-color: #674ea7; --secondary-color: #f3f3f3 ; --image-opacity: .1;">
                        <img src="https://source.unsplash.com/295x295?bag" class="card-img-top" alt="Sample Image">
                        <figcaption class="c4-layout-center-left">
                            <div class="c4-reveal-up c4-delay-200">
                                <button class="btn btn-light py-3 px-5 ms-4 font-poppins text-main">Add to
                                    Cart</button>
                            </div>
                            <div class="row justify-content-center align-items-center ms-5 ps-3 mt-4">
                                <div class="col-md-6 text-center">
                                    <button class="bg-transparent p-0 d-block c4-reveal-right"><i
                                            class="fas fa-share-alt text-white fs-3"></i></button>
                                </div>
                                <div class="col-md-6 text-center">
                                    <button class="bg-transparent p-0 d-block c4-reveal-left"><i
                                            class="far fa-heart text-white fs-3"></i></button>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                    <span class="bg-warning diskon font-montserrat">New</span>
                    <div class="card-body text-dark">
                        <h4 class="card-text font-poppins fw-bold judul text-main">Tas sekolah tracker</h4>
                        <p class="text-dark font-montserrat">Lorem ipsum dolor sit amet consectetur.</p>
                        <p class="font-montserrat fw-bold"><small><i class="fas fa-star text-warning"></i> 4.5 | Terjual
                                650</small></p>
                        <h5 class="font-poppins fw-bold float-start">Rp 170.000</h5>
                        {{-- <h6 class="font-poppins text-muted text-decoration-line-through float-end">Rp 100.000</h6> --}}
                    </div>
                </div>
            </a>
        </div>

        <button class="learn-more mt-4 mx-auto justify-content-center d-block">
            <span class="circle" aria-hidden="true">
                <span class="icon arrow"></span>
            </span>
            <span class="button-text">Show More</span>
        </button>
    </section>
@endsection
