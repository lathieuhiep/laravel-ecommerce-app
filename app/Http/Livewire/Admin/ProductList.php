<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductList extends Component
{
    use WithPagination;

    public function render()
    {
        $products = Product::query()->latest()->paginate();

        return view('livewire.admin.product-list')->with('products', $products)->layout('layouts.admin');
    }
}
