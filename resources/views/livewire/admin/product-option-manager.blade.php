<div>
    <div class="-mx-4 mt-5 sm:-mx-0">
        <div class="header mb-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">Options</h3>
        </div>

        <div class="content">
            <div class="space-y-5">
                @if( !empty( $product ) && !empty( $product->productOptions ) )
                    @foreach($product->productOptions as $option)
                        <div class="relative w-full border border-gray-300 rounded-md p-4">
                            <div class="absolute -top-3 left-3 px-0.5 bg-white flex items-center space-x-1">
                                <button wire:click="confirmOptionDeletionFor('{{ $option->id }}')">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-red-400 hover:text-red-500 cursor-pointer" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                                <span class="font-medium text-sm text-gray-700 flex items-center">{{ $option->name }}</span>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>

    <div class="-mx-4 mt-5 sm:-mx-0">
        <form wire:submit.prevent="save">
            <h3 class="title">
                Create new product option
            </h3>

            <div class="content mb-4">
                <div class="space-y-8 divide-y divide-gray-200">
                    <div>
                        <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                            <div class="sm:col-span-3">
                                <label for="name">Name</label>
                                <div class="mt-1">
                                    <x-text-input wire:model.defer="productOption.name" type="text" id="name" class="max-w-lg block w-full sm:max-w-xs sm:text-sm" placeholder="Eg: Size, Color" />

                                    @error('productOption.name') <span class="error">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="visual">Visual</label>

                                <div class="mt-1">
                                    <select wire:model.defer="productOption.visual" id="visual" class="max-w-lg block w-full sm:max-w-xs sm:text-sm">
                                        <option value="">Please select</option>
                                        <option value="text">Text</option>
                                        <option value="color">Color</option>
                                        <option value="image">Image</option>
                                    </select>

                                    @error('productOption.visual') <span class="error">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer">
                <div>
                    <x-primary-button>
                        Save
                    </x-primary-button>
                </div>
            </div>
        </form>
    </div>
</div>

