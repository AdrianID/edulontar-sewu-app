<?php

namespace App\Livewire\TokoSection;

use App\Models\Produk;
use Livewire\Component;

class Main extends Component
{



    public function render()
    {
        $products = Produk::with('gambarProduk')->get();
        return view('livewire.toko-section.main', ['products' => $products])
            ->layout('layouts.landing');
            // dd($products);
    }
}
