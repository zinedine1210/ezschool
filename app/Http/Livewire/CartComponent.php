<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Kategory;
use App\Models\OrderList;
use App\Models\GambarProduct;

class CartComponent extends Component
{
    public function render()
    {
        $data = OrderList::where("user_id", auth()->user()->id)->get();
        return view('livewire.cart-component', [
            'belanjaan' => OrderList::where("user_id", auth()->user()->id)->get(),
            'gambar' => GambarProduct::all()->groupBy("product_id")
        ]);
    }
    public function addData($id, $jumlah)
    {
        $barang = OrderList::find($id);
        if ($jumlah >= $barang->product->stock) {
            return;
        }
        OrderList::find($id)
            ->update([
                'jumlah' => $jumlah + 1
            ]);

        $data = OrderList::find($id);


        OrderList::find($id)->update([
            'total' => $data->jumlah * $data->harga
        ]);



        $this->emit("addData", $data);
    }
    public function deleteData($id, $jumlah)
    {
        if ($jumlah == 1) {
            return;
        }

        OrderList::find($id)
            ->update([
                'jumlah' => $jumlah - 1
            ]);
        $data = OrderList::find($id);

        OrderList::find($id)->update([
            'total' => $data->jumlah * $data->harga
        ]);


        $this->emit("addData", $data);
    }
}
