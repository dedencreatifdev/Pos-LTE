<?php

namespace App\Livewire\Admin\Produk;

use App\Models\Product;
use App\Models\Produk;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('Produk List')]
class ProdukIndex extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.admin.produk.produk-index',[
            'produk_list'=>Product::paginate(20)
        ]);
    }
}
