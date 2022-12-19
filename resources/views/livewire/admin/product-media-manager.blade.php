<div>
    <form wire:submit.prevent="save">
        <div class="ml-4 mt-2">
            <h3 class="text-lg leading-6 font-medium text-gray-900">Media</h3>
        </div>

        <div class="ml-4 mt-2 flex-shrink-0">
            <button type="button" x-show="selected.length" x-cloak wire:click="delete" class="sm:text-sm text-red-600">
                Delete
            </button>
        </div>

        <label for="mediaUpload" class="relative flex items-center justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md hover:border-gray-400 hover:bg-gray-50 cursor-pointer transition group">
            <div class="space-y-1 text-center">
                <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <div class="flex text-sm text-gray-600">
                    <span class="font-medium text-indigo-600 group-hover:underline">Upload</span>
                    <x-text-input wire:model="media" type="file" id="mediaUpload" class="sr-only" multiple />
                </div>
            </div>
        </label>

        <div class="grid grid-cols-3 lg:grid-cols-4 gap-4 auto-rows-fr">
            @foreach($product->media as $medium)
                <div @class(['relative overflow-hidden border border-gray-300 group rounded-md flex items-center justify-center', 'col-start-1 col-span-2 row-span-2'=> $loop->first])>
                    <img src="{{ $medium->getUrl() }}" alt="{{ $medium->name }}" class="group-hover:scale-125 transition">
                    <x-text-input wire:model="selected" type="checkbox" class="absolute top-2 left-2 rounded" x-bind:class="{ 'opacity-0 group-hover:opacity-100': !selected.length }" value="{{ $medium->id }}" />
                </div>
            @endforeach
        </div>

        <div class="flex items-center justify-end">
            <x-primary-button wire:loading.attr="disabled">
                {{ __('Save') }}
            </x-primary-button>
        </div>
    </form>
</div>