@extends('layouts.admin-main')

@section('container')
    <section class="my-3">
        <div class="row justify-content-center container-fluid">
            <div class="col-md-12">
                <div class="card border-rd row justify-content-center shadow py-2 px-4 history">
                    <div class="col-md-2">
                        <img src="images/tas.jpg" alt="foto produk" class="img-fluid">
                    </div>
                    <div class="col-md-9">
                        <h3 class="font-poppins">Hanes Men's EcoSmart Sweatshirt</h3>

                        <div class="d-flex justify-content-between mb-2">
                            <small class="font-poppins text-dark fw-bold">Ship to</small>
                            <small class="font-poppins text-dark">Kp. Gempol Cakung Timur Jakarta Timur</small>
                        </div>

                        <div class="d-flex justify-content-between mb-2">
                            <small class="font-poppins text-dark fw-bold">Total</small>
                            <h5 class="font-poppins text-main">IDR 15.000</h5>
                        </div>

                        <small class="bg-success py-1 px-2 border-rd text-white font-poppins">Pesanan telah diterima
                        </small>
                        <small class="bg-info py-1 px-2 border-rd text-white font-poppins">Menunggu
                            konfirmasi</small>
                        <small class="bg-danger py-1 px-2 border-rd text-white font-poppins">Pesanan ditolak</small>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
