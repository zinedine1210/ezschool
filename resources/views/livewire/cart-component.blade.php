<div>
    @foreach ($belanjaan as $cart)
        <div class="mb-4">
            <div class="font-poppins d-block labelproduk pb-3 bg-light shadow-sm position-relative">

                {{-- GAMBAR --}}
                @foreach ($gambar as $gbr)
                    @if ($cart->product_id == $gbr[0]->product_id)
                        <div class="covergambar d-inline-block float-start me-3">
                            <a href="/product?key={{ $cart->product->key_product }}"><img
                                    src="gambar-product/{{ $gbr[0]->gambar }}" alt="nama produk"
                                    class="float-start me-3"></a>
                        </div>
                    @endif
                @endforeach

                {{-- DETAIL INFORMASI --}}
                <h5 class="font-poppins text-main fw-bold">{{ $cart->product->judul }}</h5>
                <p class="font-montserrat deskripsiproduk">{{ $cart->product->informasi }}</p>




                {{-- HARGA --}}
                @if ($cart->product->diskon != null)
                    <h6 class="font-poppins fw-bold">
                        @if ($cart->detailproduct_id != null)
                            <span class="bg-main rounded py-1 px-2 text-white">{{ $cart->detailproduct->nama }}</span>
                        @endif

                        <span class="bg-warning rounded py-1 px-2 text-white">{{ $cart->product->diskon }}%</span>
                        Rp {{ $cart->harga }}




                        @if ($cart->detailproduct_id != null)
                            <span class="font-poppins  text-muted text-decoration-line-through ms-2">Rp
                                {{ $cart->detailproduct->harga }}</span>
                        @else
                            <span class="font-poppins  text-muted text-decoration-line-through ms-2">Rp
                                {{ $cart->product->harga }}</span>
                        @endif
                    </h6>
                @else
                    <h6 class=" font-poppins fw-bold">Rp {{ $cart->harga }}</h6>
                @endif

                <button data-bs-toggle="collapse" data-bs-target="#note{{ $cart->product->key_product }}"
                    class="position-absolute d-inline top-100 start-50 fw-bold translate-middle badge rounded-pill bg-danger">
                    Note<i class="fas fa-solid fa-caret-down ms-1"></i>
                    <span class="visually-hidden">note</span>
                </button>

                {{-- HAPUS --}}
                <form action="/cart/{{ $cart->id }}" method="GET" class="d-inline-block">
                    @csrf
                    <button class="bg-transparent text-danger" type="submit"><i
                            class="fa-solid fa-trash me-1"></i><small>Delete from cart</small></button>
                </form>


                <div class="float-end text-end range d-flex align-items-center">
                    <button class="btn bg-transparent d-inline"
                        wire:click="deleteData({{ $cart->id }}, {{ $cart->jumlah }})"><i
                            class="fa-solid text-danger fs-4 fa-circle-minus"></i></button>
                    <h2 class="text-main font-poppins fw-bold text-center mx-1">{{ $cart->jumlah }}</h3>
                        <button class="btn bg-transparent d-inline"
                            wire:click="addData({{ $cart->id }}, {{ $cart->jumlah }})"><i
                                class="fa-solid text-success fs-4 fa-circle-plus"></i></button>
                </div>




                {{-- collapse detail produk --}}
                <div id="note{{ $cart->product->key_product }}" class="collapse mt-4">
                    <small class="text-main">{{ $cart->note }}</small>
                </div>
                {{-- akhir collapse detail produk --}}

            </div>
        </div>
    @endforeach
</div>
