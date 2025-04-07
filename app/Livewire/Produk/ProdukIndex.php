<?php

namespace App\Livewire\Produk;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Produk List')]
class ProdukIndex extends Component
{
    public function render()
    {
        return view('livewire.produk.produk-index');
    }
}
