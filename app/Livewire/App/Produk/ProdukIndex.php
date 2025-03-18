<?php

namespace App\Livewire\App\Produk;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Produk List')]

class ProdukIndex extends Component
{
    public function render()
    {
        return view('livewire.app.produk.produk-index');
    }
}
