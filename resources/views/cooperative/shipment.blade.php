@extends('layouts.payment', ['title'=>"Payment"])

@section('container')
    <div class="row justify-content-center align-items-center">
        <section class="col-md-6 bg-light" id="atas">
            <h5 class="text-main ms-3 fw-bold mt-4 mb-4 font-poppins">EzSchool</h5>
            <div class="row justify-content-center container-fluid">
                <div class="col-md-11 font-poppins">
                    <form action="" method="POST">
                        <h5 class="mb-3 text-main">Standard Shipping Method</h5>
                        <div class="form-floating">
                            <select class="form-select" aria-label=".form-select-lg example" id="nama"
                                placeholder="name@example.com">
                                <option value="0">Instant ( 1-3 Hour [Rp 15.000] )</option>
                                <option value="1">Today [Rp 12.500]</option>
                                <option value="2">Tomorrow [Rp 9.000]</option>
                                <option value="2">Reguler ( 2-4 day [Rp 5.000] )</option>
                            </select>
                            <label for="nama">Estimated arrived at</label>
                        </div>
                        <p class="text-courier text-warning mb-4">Note : Orders
                            after 5 pm will be sent tomorrow</p>

                        <h5 class="mb-3 text-main">Payment Method</h5>
                        {{-- radio --}}
                        <div class="form-check mb-2 card border-rd shadow-sm py-3">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-1 text-center">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios"
                                        value="option1" checked>
                                </div>
                                <div class="col-7 font-poppins fw-bold text-main">
                                    Take at place
                                    <p class="text-muted font-poppins"><a href="" class="text-muted"><small>SMKN 26
                                                Jakarta, Jln. Balai Pustaka Baru</small></a></p>
                                </div>
                                <div class="col-3 text-end">
                                    <label class="form-check-label" for="exampleRadios">
                                        <img src="images/payment/deal.png" alt="payment" class="img-fluid">
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-check mb-2 card border-rd shadow-sm py-3">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-1 text-center">
                                    <input class="form-check-input" type="radio" name="cardpayment" id="cardpayment"
                                        value="option1" checked>
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
                <a href="/transaksi" class="btn bg-main d-inline w-30 fw-bold text-white font-poppins mt-4">Pay Now</a>
                </form>
            </div>
        </section>
        <section class="col-md-6 bg-main2" id="bawah">
            <h5 class="mb-3 text-main ms-3 mt-3">Your Product</h5>

            <div class="bawahinfo">
                <div class="kartu shadow-sm border-rd bg-light font-poppins mx-auto mt-2">
                    <span class="kotak float-start me-2">
                        <img src="images/sepatu.jpg" alt="produk" class="img-fluid">
                    </span>
                    <h5 class="fw-bold text-main ">Lorem ipsum dolor sit.</h5>
                    <small class="text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum
                        accusantium
                        assumenda ea distinctio, adipisci iure officia obcaecati sint quibusdam tempora!</small>
                    <h5 class="fw-bold font-montserrat">Rp 100.000.000</h5>
                </div>
            </div>

            <div class="total container">
                <hr>
                <div class="d-flex justify-content-between barang mb-2">
                    <small class="font-poppins text-dark">Subtotal</small>
                    <small class="font-poppins text-dark">Rp 100.000</small>
                </div>
                <div class="d-flex justify-content-between barang mb-2">
                    <small class="font-poppins text-dark">Shipping price</small>
                    <small class="font-poppins text-dark">Rp 15.000</small>
                </div>

                {{-- shipping --}}
                <div class="d-flex justify-content-between barang mb-2">
                    <small class="font-poppins text-dark">Shipping address</small>
                    <small class="font-poppins text-danger text-end">Sorry, for now shipping more than 4 KM is not
                        accepted</small>
                </div>

                <div class="d-flex justify-content-between barang mb-2 ms-3">
                    <small class="font-poppins fw-bold text-dark" style="margin-right: 200px">From</small>
                    <small class="font-poppins text-dark text-end">Jl. Balai Pustaka Baru I No.2, RW.7, Rawamangun, Kec.
                        Pulo Gadung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13220</small>
                </div>
                <div class="d-flex justify-content-between barang mb-2 ms-3">
                    <small class="font-poppins fw-bold text-dark" style="margin-right: 200px">Ship to</small>
                    <small class="font-poppins text-dark text-end">Kp. Gempol Cakung Timur, Jakarta Timur</small>
                </div>
                {{-- shipping end --}}

                <hr>
                <div class="d-flex justify-content-between barang mb-2">
                    <small class="font-poppins fw-bold text-dark">Total</small>
                    <small class="font-poppins fw-bold text-dark">Rp 115.000</small>
                </div>
            </div>

        </section>
    </div>
@endsection
