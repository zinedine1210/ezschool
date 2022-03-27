<div>
    @foreach ($belanjaan as $blnj)
        <div class="d-flex justify-content-between barang mb-2 containerproduk">
            <small class="font-montserrat text-dark namaproduk">{{ $blnj->jumlah }} x
                {{ $blnj->product->judul }}</small>
            {{-- <input type="hidden" class="hargaproduk"
                value="@if ($blnj->detailproduct != null) Rp {{ $blnj->detailproduct->harga * $blnj->jumlah }} @else Rp {{ $blnj->harga * $blnj->jumlah }} @endif"> --}}
            <small class="font-montserrat text-dark cartproduk">
                {{ $blnj->total }}
            </small>
        </div>
    @endforeach


    {{-- total --}}
    <div class="d-flex justify-content-between my-3">
        <h6 class="font-montserrat text-dark fw-bold">Total</h6>
        <h6 class="font-montserrat text-dark fw-bold">Rp {{ $total }}</h6>
    </div>

    <div class="text-center">
        <a href="/checkout" class="mx-auto btn bg-main py-2 px-5 text-center mx-auto fw-bold text-white"><i
                class="fa-solid fa-bag-shopping me-2"></i>Checkout</a>
    </div>


</div>
