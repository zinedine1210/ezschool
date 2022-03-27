@foreach ($products as $product)
    <div class="modal fade" id="addtocart{{ $product->key_product }}" data-bs-backdrop="static"
        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Give me some details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body font-poppins">
                    <form action="/cart" method="POST">
                        @csrf
                        {{-- <input type="text" name="harga"
                            value="@if ($product->diskon != null) {{ $product->harga - ($product->harga * $product->diskon) / 100 }} @else {{ $product->harga }} @endif"> --}}
                        <input type="hidden" name="product_id" value="{{ $product->id }}">

                        <select class="form-select mb-3" name="detail" aria-label=" example">
                            @foreach ($details as $item)
                                @if ($item->product_id == $product->id)
                                    <option value="{{ $item->id }}">{{ $item->nama }} @ {{ $item->harga }}
                                        (Stock
                                        {{ $item->stock }})
                                    </option>
                                @else
                                @endif
                            @endforeach
                        </select>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="note" name="note"
                                placeholder="name@example.com">
                            <label for="note">Note</label>
                            <small class="text-muted">exp. Size XL</small>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Add to cart</button>
                    </form>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endforeach
