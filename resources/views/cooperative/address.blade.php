@extends('layouts.payment', ['title' => "Address"])

@section('container')
    <div class="row justify-content-center align-items-center">
        <section class="col-md-6 bg-light" id="atas">
            <h5 class="text-main ms-3 fw-bold mt-4 mb-4 font-poppins">EzSchool</h5>
            <div class="row justify-content-center container-fluid">
                <div class="col-md-11 font-poppins">
                    <form action="" method="POST">
                        <h5 class="mb-3 text-main">Contact</h5>
                        <div class="mb-4 form-floating">
                            <input autocomplete="off" type="text" class="form-control" id="floatingInput"
                                placeholder="name@example.com">
                            <label for="floatingInput">Email or Mobile phone number</label>
                        </div>


                        <h5 class="mb-3 text-main">Shipping Address</h5>
                        <div class="font-poppins card my-2 border-rd py-3 px-3">
                            <small class="bg-success text-white text-center mb-2"><i
                                    class="fas fa-solid fa-check-double me-2"></i>Main Address</small>
                            <h6 class="text-main">Kp. Gempol rt 06/01 Cakung timur jakarta timur</h6>
                            <small class="text-muted">Note : Lorem ipsum dolor sit amet consectetur adipisicing
                                elit.
                                Voluptates, a!</small>
                            <a href="/edit-my-profile" class="text-danger mt-2" style="font-size:15px">Change Address</a>
                        </div>

                </div>
                <a href="/shipment-method" class="btn bg-main d-inline w-30 fw-bold text-white font-poppins mt-4">Go to
                    Shipping</a>
                <button class="btn bg-main2 d-inline w-30 fw-bold text-dark font-poppins mt-2" type="button">Back to
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
