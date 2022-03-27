<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\OrderList;
use App\Models\GambarProduct;

class ShoppingSummery extends Component
{
    protected $listeners = [
        "addData" => "addDataListen"
    ];


    public function render()
    {
        $data = OrderList::where("user_id", auth()->user()->id)->where("status", "cart")->get();
        $total = [];
        foreach ($data as $d) {
            $total[] = $d->total;
        }


        return view('livewire.shopping-summery', [
            'belanjaan' => OrderList::with(['product', 'detailproduct'])->where("user_id", auth()->user()->id)->get(),
            'total' => array_sum($total),
            'gambar' => GambarProduct::all()->groupBy("product_id")
        ]);
    }

    public function addDataListen($data)
    {
    }
}
