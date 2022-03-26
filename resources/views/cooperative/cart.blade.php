@extends('layouts.main', ['title' => 'My Cart'])

@section('container')
    <section id="cart" class="mb-5">
        <div class="row justify-content-center g-2">
            <div class="col-md-6 me-3">
                <h1 class="font-poppins fw-bold">Your Cart</h1>
                <p class="font-montserrat text-muted mb-4">Our top selling product that you may like</p>

                {{-- <form action="" class="d-flex justify-content-between mb-3 border-primary border-bottom">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label font-poppins text-main" for="flexCheckDefault">
                            Pilih Semua
                        </label>
                    </div>
                    <button class="btn btn-transparent p-0 text-end font-poppins text-danger">Hapus Semua</button>
                </form> --}}

                @foreach ($belanjaan as $cart)
                    <div class="form-check mb-2" id="produk">
                        <label class="form-check-label font-poppins d-block labelproduk pb-3 bg-light shadow-sm"
                            for="produk">

                            @foreach ($gambar as $item)
                                @if ($cart->product_id == $item[0]->product_id)
                                    <div class="covergambar d-inline-block float-start me-3">
                                        <a href="/product?key={{ $cart->product->key_product }}"><img
                                                src="gambar-product/{{ $item[0]->gambar }}" alt="nama produk"
                                                class="float-start me-3"></a>
                                    </div>
                                @endif
                            @endforeach

                            <h5 class="font-poppins text-main fw-bold">{{ $cart->product->judul }}</h5>
                            <p class="font-montserrat deskripsiproduk">{{ $cart->product->informasi }}</p>
                            @if ($cart->product->diskon !== null)
                                <h6 class="hargaproduk font-poppins fw-bold">


                                    @if ($cart->detailproduct != null)
                                        <span
                                            class="bg-main rounded py-1 px-2 text-white">{{ $cart->detailproduct->nama }}</span>
                                        <span
                                            class="bg-success rounded py-1 px-2 text-white me-2">{{ $cart->product->diskon }}%</span>Rp
                                        {{ $cart->detailproduct->harga - ($cart->detailproduct->harga * $cart->product->diskon) / 100 }}
                                        <span class="font-poppins hargaproduk text-muted text-decoration-line-through ms-2">
                                            Rp {{ $cart->detailproduct->harga }}
                                        </span>
                                    @else
                                        <span
                                            class="bg-main rounded py-1 px-2 text-white">{{ $cart->product->nama }}</span>
                                        Rp {{ $cart->product->harga }}
                                        <span
                                            class="font-poppins hargaproduk text-muted text-decoration-line-through ms-2">Rp
                                            {{ $cart->product->harga - ($cart->product->harga * $cart->product->diskon) / 100 }}
                                        </span>
                                    @endif


                                </h6>
                            @else
                                <h6 class="hargaproduk font-poppins fw-bold">Rp {{ $cart->product->harga }}</h6>
                            @endif
                            <a href="#note{{ $cart->product->key_product }}" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="note{{ $cart->product->key_product }}"
                                class="deskripsiproduk text-main fw-bold">Note<i
                                    class="fas fa-solid fa-caret-down ms-2"></i></a>


                            <form action="/cart/{{ $cart->id }}" method="GET" class="d-inline-block ms-5">
                                @csrf
                                <button class="bg-transparent text-danger" type="submit"><i
                                        class="fa-solid fa-trash"></i></button>
                            </form>

                            <div class="float-end text-end me-4 range">
                                <input class="form-control form-control-lg input text-main font-poppins fw-bold"
                                    type="number" placeholder="" aria-label=".form-control-lg example" value="1" width="10"
                                    min="1" max="{{ $cart->product->stock }}">
                            </div>



                            {{-- collapse detail produk --}}
                            <div id="note{{ $cart->product->key_product }}" class="collapse mt-4">
                                <small class="text-main">{{ $cart->note }}</small>
                            </div>
                            {{-- akhir collapse detail produk --}}

                        </label>
                    </div>
                @endforeach

            </div>
            <div class="col-md-5">
                <div class="card border-rd p-2 shadow">
                    <div class="card-body">
                        <h4 class="font-poppins text-main mb-4">Shopping Summary</h4>

                        @foreach ($belanjaan as $cart)
                            <div class="d-flex justify-content-between barang mb-2 containerproduk">
                                <small class="font-montserrat text-dark namaproduk">{{ $cart->product->judul }}</small>
                                @if ($cart->product->diskon != null)
                                    <input type="hidden" class="hargaproduk" name="hargaproduk"
                                        value="@if ($cart->detailproduct != null) Rp {{ $cart->detailproduct->harga - ($cart->detailproduct->harga * $cart->product->diskon) / 100 }} @else Rp {{ $cart->harga - ($cart->harga * $cart->product->diskon) / 100 }} @endif">
                                    <small class="font-montserrat text-dark cartproduk"></small>
                                @else
                                    <input type="hidden" class="hargaproduk"
                                        value="@if ($cart->detailproduct != null) Rp {{ $cart->detailproduct->harga }} @else Rp {{ $cart->harga }} @endif">
                                    <small class="font-montserrat text-dark cartproduk"></small>
                                @endif
                            </div>
                        @endforeach




                        {{-- total --}}
                        <div class="d-flex justify-content-between my-3">
                            <h5 class="font-montserrat text-dark fw-bold">Total</h5>
                            <h5 class="font-montserrat text-dark fw-bold" id="total"></h5>
                        </div>
                        {{-- akhir total --}}
                        <form action="/precheckout" method="POST" class="text-center">
                            @csrf
                            <input type="hidden" name="total" value="" id="inputtotal">
                            <input type="number" name="jumlah[]" value="" id="inputjumlah">
                            <input type="hidden" value="{{ auth()->user()->id }}" name="user">
                            <button type="submit"
                                class="btn bg-main py-2 px-5 text-center mx-auto fw-bold text-white">Checkout</button>
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
