<div>
    <form wire:submit.prevent="save">
        <div class="-mx-4 mt-5 sm:-mx-0">
            <div class="ml-4 mt-2">
                <h3 class="text-lg leading-6 font-medium text-gray-900">Information</h3>
            </div>

            <div class="grid grid-cols-1 gap-6">
                {{-- Name --}}
                <div>
                    <x-input-label for="name" value="{{ __('Name') }}" />
                    <x-text-input wire:model.defer="product.name" type="text" id="name" class="mt-1 block w-full sm:text-sm" placeholder="Enter product name" />
                    @error('product.name') <span class="error">{{ $message }}</span> @enderror
                </div>
                {{-- Slug --}}
                <div>
                    <x-input-label for="slug" value="{{ __('Slug') }}" />
                    <x-text-input wire:model.defer="product.slug" type="text" id="slug" class="mt-1 block w-full sm:text-sm" placeholder="Enter product slug" />
                    @error('product.slug') <span class="error">{{ $message }}</span> @enderror
                </div>
                {{-- Price --}}
                <div>
                    <x-input-label for="price" value="{{ __('Price') }}" />
                    <x-text-input wire:model.defer="product.price" type="number" step="any" id="price" class="mt-1 no-spinners sm:text-sm" placeholder="0.00" />
                    @error('product.price') <span class="error">{{ $message }}</span> @enderror
                </div>
                {{-- Description --}}
                <div>
                    <x-input-label for="description" value="{{ __('Description') }}" />
                    <x-tiptap wire:model.defer="product.description" class="mt-1 block w-full sm:text-sm" />
                    @error('product.description') <span class="error">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="flex items-center justify-end">
{{--                <x-action-message on="saved" class="mr-2" />--}}
                <x-primary-button wire:loading.attr="disabled">
                    {{ __('Save') }}
                </x-primary-button>
            </div>
        </div>
    </form>
</div>