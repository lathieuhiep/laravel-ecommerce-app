<div>
    <div class="md:flex md:items-center md:justify-between">
        <div class="flex-1 min-w-0">
            <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">Update Product</h2>
        </div>
    </div>

    <div class="grid grid-cols-3 gap-6">
        <div class="col-span-3 xl:col-span-2">
            <livewire:admin.product-information-form :product="$product" />

            <livewire:admin.product-media-manager :product="$product" />
        </div>

        <div class="col-span-3 xl:col-span-1">

        </div>
    </div>
</div>