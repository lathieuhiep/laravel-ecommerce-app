<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\Rule;
use Livewire\Component;

class ProductInformationForm extends Component
{
    public Product $product;

    protected function rules(): array
    {
        return [
            'product.name' => 'required|string',
            'product.slug' => ['required', 'string', Rule::unique('products', 'slug')->ignoreModel($this->product)],
            'product.price' => 'required|numeric',
            'product.description' => 'nullable|string',
        ];
    }

    public function save()
    {
        $this->validate();
        $this->product->save();

        if ( $this->product->wasRecentlyCreated ) {
            return redirect()->route('admin.products.edit', $this->product);
        }

        $this->emitSelf('saved');

        return true;
    }

    public function render()
    {
        return view('livewire.admin.product-information-form');
    }
}
