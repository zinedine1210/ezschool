@extends('layouts.payment', ['title' => "Address"])

@section('container')
    <div class="row justify-content-center align-items-center">
        <section class="col-md-6 bg-light" id="atas">
            <h5 class="text-main ms-3 fw-bold mt-4 mb-4 font-poppins">EzSchool</h5>
            <div class="row justify-content-center container-fluid">
                <div class="col-md-11 font-poppins formaddress">
                    <form action="" method="POST">
                        <h5 class="mb-3 text-main">Contact</h5>
                        <div class="mb-4 form-floating">
                            <input autocomplete="off" type="text" class="form-control" id="floatingInput"
                                placeholder="name@example.com">
                            <label for="floatingInput">Email or Mobile phone number</label>
                        </div>


                        <h5 class="mb-3 text-main">Shipping Address</h5>
                        <div class="row justify-content-center g-2">
                            <div class="col">
                                <div class="form-floating mb-2">
                                    <input autocomplete="off" type="text" class="form-control" id="nama"
                                        placeholder="name@example.com">
                                    <label for="nama">First Name</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating mb-2">
                                    <input autocomplete="off" type="text" class="form-control" id="nama"
                                        placeholder="name@example.com">
                                    <label for="nama">Last Name</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-floating mb-2">
                            <input autocomplete="off" type="text" class="form-control" id="nama"
                                placeholder="name@example.com">
                            <label for="nama">Address and number</label>
                        </div>
                        <div class="form-floating mb-2">
                            <input autocomplete="off" type="text" class="form-control" id="nama"
                                placeholder="name@example.com">
                            <label for="nama">Shipping note (optional)</label>
                        </div>

                        <div class="row justify-content-center g-2 mb-2">
                            <div class="col">
                                <div class="form-floating mb-2">
                                    <input autocomplete="off" type="text" class="form-control" id="nama"
                                        placeholder="name@example.com">
                                    <label for="nama">City</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating mb-2">
                                    <input autocomplete="off" type="number" class="form-control" id="nama"
                                        placeholder="name@example.com">
                                    <label for="nama">Postal Code</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-floating mb-2">
                            <select class="form-select mb-4" aria-label=".form-select-lg example" id="nama"
                                placeholder="name@example.com">
                                <option value="0">DKI Jakarta</option>
                                <option value="1">Bekasi</option>
                            </select>
                            <label for="nama">Province</label>
                        </div>

                        <div class="form-check mb-5">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Save this information for a future fast checkout
                            </label>
                        </div>

                </div>
                <a href="/shipment-method" class="btn bg-main d-inline w-30 fw-bold text-white font-poppins mt-4">Go to
                    Shipping</a>
                <button class="btn bg-main2 d-inline w-30 fw-bold text-dark font-poppins mt-2">Back to
                    Cart</button>
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
                    <small class="font-poppins text-dark">Shipping</small>
                    <small class="font-poppins text-dark">Calculate in the next step</small>
                </div>

                <hr>
                <div class="d-flex justify-content-between barang mb-2">
                    <small class="font-poppins fw-bold text-dark">Total</small>
                    <small class="font-poppins fw-bold text-dark">Rp 100.000</small>
                </div>
            </div>

        </section>
    </div>
@endsection
