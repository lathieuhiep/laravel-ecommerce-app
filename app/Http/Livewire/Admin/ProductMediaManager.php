<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileDoesNotExist;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileIsTooBig;

class ProductMediaManager extends Component
{
    use WithFileUploads;

    public Product $product;
    public $media = [];
    public $selected = [];

    public function save()
    {
        $this->validate([
            'media.*' => 'file|image',
        ]);
        collect($this->media)->each(
        /**
         * @throws FileDoesNotExist
         * @throws FileIsTooBig
         */ fn($medium) => $this->product
                ->addMedia($medium->getRealPath())
                ->setName($medium->getClientOriginalName())
                ->setFileName($medium->getClientOriginalName())
                ->toMediaCollection('media')
        );
    }

    public function delete()
    {
        $media = $this->product->media()->whereIn('id', $this->selected)->get();
        $media->each(fn ($medium) => $medium->delete());
        $this->confirmingMediaDeletion = false;
        $this->reset('selected');
        $this->emitSelf('refresh');
    }

    public function render()
    {
        return view('livewire.admin.product-media-manager');
    }
}
