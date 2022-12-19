<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class ProductEdit extends Component
{
    public Product $product;

    public function render(): Factory|View|Application
    {
        return view('livewire.admin.product-edit')->layout('layouts.admin');
    }
}
