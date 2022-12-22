<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use App\Models\ProductOption;
use Livewire\Component;

class ProductOptionManager extends Component
{
    public Product $product;
    public ProductOption $productOption;
    public bool $confirmingOptionDeletion = false;

    public function mount()
    {
        $this->productOption = new productOption();
    }

    protected $rules = [
        'productOption.name' => 'required|string',
        'productOption.visual' => 'required|string',
    ];

    public function save()
    {
        $this->validate();
        $this->product->productOptions()->save($this->productOption);
    }

    public function confirmOptionDeletionFor(ProductOption $productOption)
    {
        $this->confirmingOptionDeletion = true;
        $this->productOption = $productOption;
    }

    public function delete()
    {
        $this->productOption->productOptionValues()->delete();
        $this->productOption->delete();
    }

    public function render()
    {
        return view('livewire.admin.product-option-manager')->layout('layouts.admin');
    }
}
