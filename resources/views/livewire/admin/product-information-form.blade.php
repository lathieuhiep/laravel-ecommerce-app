<div>
    <form wire:submit.prevent="save">
        <div class="-mx-4 mt-5 sm:-mx-0">
            <x-slot name="header">
                <div class="ml-4 mt-2">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">Information</h3>
                </div>
            </x-slot>
            <x-slot name="content">
                <div class="grid grid-cols-1 gap-6">
                    {{-- Name --}}
                    <div>
                        <x-input-label for="name" value="{{ __('Name') }}" />
                        <x-text-input wire:model.defer="product.name" type="text" id="name" class="mt-1 block w-full sm:text-sm" placeholder="Enter product name" />
                        <x-input-error for="product.name" class="mt-2" />
                    </div>
                    {{-- Slug --}}
                    <div>
                        <x-input-label for="slug" value="{{ __('Slug') }}" />
                        <x-text-input wire:model.defer="product.slug" type="text" id="slug" class="mt-1 block w-full sm:text-sm" placeholder="Enter product slug" />
                        <x-input-error for="product.slug" class="mt-2" />
                    </div>
                    {{-- Price --}}
                    <div>
                        <x-input-label for="price" value="{{ __('Price') }}" />
                        <x-text-input wire:model.defer="product.price" type="number" step="any" id="price" class="mt-1 no-spinners sm:text-sm" placeholder="0.00" />
                        <x-input-error for="product.price" class="mt-2" />
                    </div>
                    {{-- Description --}}

                </div>
            </x-slot>
            <x-slot name="footer">
                <div class="flex items-center justify-end">
{{--                    <x-action-message on="saved" class="mr-2" />--}}
                    <x-primary-button wire:loading.attr="disabled">
                        {{ __('Save') }}
                    </x-primary-button>
                </div>
            </x-slot>
        </div>
    </form>
</div>