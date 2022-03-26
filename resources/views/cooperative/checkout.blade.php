@extends('layouts.payment', ['title'=>"Payment"])

@section('container')
    <div class="row justify-content-center align-items-center">
        <section class="col-md-6 bg-light" id="atas">
            <h5 class="text-main ms-3 fw-bold mt-4 mb-4 font-poppins">EzSchool</h5>
            <div class="row justify-content-center container-fluid">
                <div class="col-md-11 font-poppins formaddress">


                    <form action="/checkout" method="POST">
                        @csrf

                        {{-- CONTACT --}}
                        <h6 class="text-main">Receiver and contact information</h6>
                        <small class="text-muted mb-3">Please fill an active number so we can easily contact you</small>

                        <div class="mb-1 form-floating">
                            <input autocomplete="off" type="text" class="form-control @error('nama') is-invalid @enderror"
                                id="name" name="nama" value="{{ auth()->user()->nama }}" placeholder="name@example.com">
                            <label for="name">Name reciever</label>
                            @error('nama')
                                <div class="invalid-feedback font-courier">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-4 form-floating">
                            <input autocomplete="off" type="number"
                                class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone"
                                value="{{ auth()->user()->phone }}" placeholder="name@example.com">
                            <label for="phone">Mobile phone number / Whatsapp</label>
                            @error('phone')
                                <div class="invalid-feedback font-courier">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>





                        {{-- SHIPPING ADDRESS --}}
                        <h6 class="mb-3 text-main">Shipping Address</h6>

                        @if ($addresses->count() > 0)
                            @foreach ($addresses as $address)
                                <div class="font-poppins card my-2 border-rd py-3 px-3 mb-4">
                                    <input type="hidden" id="address_id" name="address_id" value="{{ $address->id }}">
                                    @if ($address->main)
                                        <small class="bg-success text-white text-center mb-2"><i
                                                class="fas fa-solid fa-check-double me-2"></i>Main Address</small>
                                    @endif
                                    <h6 class="text-main">{{ $address->address }}</h6>
                                    <small class="text-muted">Note : {{ $address->note }}</small>
                                    <a href="#mainaddress" data-bs-toggle="modal"
                                        class="text-danger font-poppins mt-3"><small>Change
                                            address</small></a>
                                </div>
                            @endforeach
                        @else
                            {{-- gambar --}}

                            silahkan tambahkan alamat terlebih dahulu
                            <a href="/my-address">ajsk</a>
                        @endif



                        {{-- SHIPPING METHOD --}}
                        <h6 class="mb-3 text-main">Standard Shipping Method</h6>
                        <div class="form-floating">
                            <select class="form-select @error('shippingprice') is-invalid @enderror"
                                aria-label=".form-select-lg example" id="shipping" placeholder="name@example.com">
                                <option selected>-- Choose shipping method --</option>
                                <option value="sameday">Same day ( 3 - 8 hours [ 2.2k/KM ] )</option>
                                <option value="reguler">Reguler ( {{ date('d M') }} -
                                    {{ date('d M', strtotime('3 day', strtotime(date('d M')))) }} [ 1.3k/KM ] )
                                </option>
                            </select>
                            <label for="shipping">Estimated arrived at</label>
                            @error('shippingprice')
                                <div class="invalid-feedback font-courier">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <small class="text-courier text-muted mb-4 d-block">Note : Orders
                            after 5 pm will be sent tomorrow</small>

                        <input type="hidden" name="shippingprice" id="shippingmethod">





                        {{-- PAYMENT METHOD --}}

                        <h6 class="mb-3 text-main">Payment Method</h6>
                        {{-- radio --}}
                        <div class="form-check mb-2 card border-rd shadow-sm py-3">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-1 text-center">
                                    <input class="form-check-input" type="radio" name="paymentmethod" id="takeplace"
                                        value="takeatplace" checked>
                                </div>
                                <div class="col-7 font-poppins fw-bold text-main">
                                    Take at place
                                    <p class="text-muted font-poppins"><a href="" class="text-muted"><small>SMKN 26
                                                Jakarta, Jln. Balai Pustaka Baru</small></a></p>
                                </div>
                                <div class="col-3 text-end">
                                    <label class="form-check-label" for="takeplace">
                                        <img src="images/payment/deal.png" alt="payment" class="img-fluid">
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-check mb-2 card border-rd shadow-sm py-3">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-1 text-center">
                                    <input class="form-check-input" type="radio" name="paymentmethod" id="cardpayment"
                                        value="cardpayment">
                                </div>
                                <div class="col-7 font-poppins fw-bold text-main">
                                    Card cashless payment
                                    <p class="text-muted font-poppins"><small class="text-muted">Bank Transfer,
                                            E-Wallet, Direct Debit, Store, Cardless Credit, QRIS</small></p>
                                    <div class="bank">
                                        <img src="images/payment/bca.png" alt="bca" width="20">
                                        <img src="images/payment/bri.png" alt="bri" width="20">
                                        <img src="images/payment/bni.png" alt="bni" width="20">
                                        <img src="images/payment/mandiri.png" alt="mandiri" width="30">
                                    </div>
                                    <div class="store">
                                        <img src="images/payment/alfamaret.png" alt="alfamaret" width="30">
                                        <img src="images/payment/indomaret.png" alt="indomaret" width="30">
                                        <img src="images/payment/alfamidi.png" alt="alfamidi" width="30">
                                    </div>
                                    <div class="e-wallet">
                                        <img src="images/payment/ovo.png" alt="ovo" width="20">
                                        <img src="images/payment/dana.png" alt="dana" width="20">
                                        <img src="images/payment/gopay.png" alt="gopay" width="30">
                                        <img src="images/payment/shopeepay.png" alt="shopeepay" width="30">

                                    </div>
                                </div>
                                <div class="col-3 text-end">
                                    <label class="form-check-label" for="cardpayment">
                                        <img src="images/payment/cashless.png" alt="payment" class="img-fluid">
                                    </label>
                                </div>
                            </div>
                        </div>

                </div>
                <button type="submit" class="btn bg-main d-inline w-30 fw-bold text-white font-poppins mt-4">Pay
                    Now</button>
                </form>
            </div>
        </section>
        <section class="col-md-6 bg-main2" id="bawah">
            <h5 class="mb-3 text-main ms-3 mt-3">Your Product</h5>

            <div class="bawahinfo">
                @foreach ($data as $data)
                    <div class="kartu shadow-sm border-rd bg-light font-poppins mx-auto mt-2">
                        <span class="kotak float-start me-2">
                            @foreach ($gambar as $item)
                                @if ($data->product_id == $item[0]->product_id)
                                    <img src="gambar-product/{{ $item[0]->gambar }}" alt="nama produk"
                                        class="float-start me-3">
                                @endif
                            @endforeach
                        </span>
                        <h5 class="fw-bold text-main">{{ $data->product->judul }}</h5>
                        <small class="text-muted">{{ $data->note }}</small>
                        @if ($data->product->diskon !== null)
                            <h6 class=" font-montserrat fw-bold mt-5">


                                @if ($data->detailproduct != null)
                                    <span
                                        class="bg-main rounded py-1 px-2 text-white">{{ $data->detailproduct->nama }}</span>
                                    <span
                                        class="bg-success rounded py-1 px-2 text-white me-2">{{ $data->product->diskon }}%</span>Rp
                                    {{ $data->detailproduct->harga - ($data->detailproduct->harga * $data->product->diskon) / 100 }}
                                    <span class="font-montserrat hargaproduk text-muted text-decoration-line-through ms-2">
                                        Rp {{ $data->detailproduct->harga }}
                                    </span>
                                @else
                                    <span class="bg-main rounded py-1 px-2 text-white">{{ $data->product->nama }}</span>
                                    Rp {{ $data->product->harga }}
                                    <span
                                        class="font-montserrat hargaproduk text-muted text-decoration-line-through ms-2">Rp
                                        {{ $data->product->harga - ($data->product->harga * $data->product->diskon) / 100 }}
                                    </span>
                                @endif


                            </h6>
                        @else
                            <h6 class=" font-montserrat fw-bold mt-5">Rp {{ $data->product->harga }}</h6>
                        @endif
                    </div>
                @endforeach
            </div>

            <div class="total container">


                <hr>
                <div class="d-flex justify-content-between barang mb-2">
                    <small class="font-poppins text-dark">Subtotal</small>
                    <small class="font-poppins text-dark" id="subtotal">{{ $total }}</small>
                </div>
                <div class="d-flex justify-content-between barang mb-2">
                    <small class="font-poppins text-dark">Shipping price</small>
                    <small class="font-poppins text-dark" id="shippingPlace">-- Choose shipping method --</small>
                </div>

                {{-- shipping --}}
                <div class="d-flex justify-content-between barang mb-2">
                    <small class="font-poppins text-dark">Shipping address</small>
                    <small class="font-poppins text-success text-end" id="distance">
                        @foreach ($addresses as $address)
                            {{ $address->distance }}
                        @endforeach
                        KM
                    </small>
                </div>

                <div class="d-flex justify-content-between barang mb-2 ms-3">
                    <small class="font-poppins fw-bold text-dark" style="margin-right: 200px">From</small>
                    <small class="font-poppins text-dark text-end">Jl. Balai Pustaka Baru I No.2, RW.7, Rawamangun, Kec.
                        Pulo Gadung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13220</small>
                </div>
                <div class="d-flex justify-content-between barang mb-2 ms-3">
                    <small class="font-poppins fw-bold text-dark" style="margin-right: 200px">Ship to</small>
                    <small class="font-poppins text-dark text-end">
                        @foreach ($addresses as $address)
                            {{ $address->address }}
                        @endforeach
                    </small>
                </div>
                {{-- shipping end --}}

                <hr>
                <div class="d-flex justify-content-between barang mb-2">
                    <small class="font-poppins fw-bold text-dark">Total</small>
                    <small class="font-poppins fw-bold text-dark" id="totalsemua">You haven't selected a shipping
                        method</small>
                </div>
            </div>

        </section>
    </div>


    <div class="modal fade" id="mainaddress" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

                            @foreach ($alladdress as $address)
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
