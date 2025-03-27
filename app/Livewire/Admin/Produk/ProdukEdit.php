<?php

namespace App\Livewire\Admin\Produk;

use App\Models\Product;
use App\Models\Produk;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Produk Edit')]

class ProdukEdit extends Component
{
    public $id;
    public function render()
    {
        return view('livewire.admin.produk.produk-edit', [
            'produks' => Product::where('id','=', $this->id)->first()
        ]);
    }
}
