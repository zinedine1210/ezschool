@extends('layouts.main', ['title' => 'My Cart'])

@section('container')
    <section class="my-3">
        <div class="row justify-content-center">
            <div class="col-md-6 me-3">
                <h1 class="font-poppins fw-bold">Your Cart</h1>
                <p class="font-montserrat text-muted mb-4">Our top selling product that you may like</p>


                <livewire:cart-component :post="$belanjaan"></livewire:cart-component>

            </div>
            <div class="col-md-5">
                <div class="card border-rd p-2 shadow">
                    <div class="card-body">
                        <h4 class="font-poppins text-main mb-4">Shopping Summary</h4>

                        <livewire:shopping-summery></livewire:shopping-summery>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
