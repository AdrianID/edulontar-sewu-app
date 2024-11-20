<div class="container mx-auto p-6 bg-white rounded-lg shadow-md">
    <h2 class="text-2xl font-semibold text-gray-800 mb-6">Edit Promo</h2>

    <form wire:submit.prevent="update">
        <!-- Title Input -->
        <div class="mb-4">
            <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Title</label>
            <input
                type="text"
                id="title"
                wire:model="title"
                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500"
                placeholder="Enter post title"
                required
            />
        </div>

        <!-- Cover Image -->
        <div class="mb-4">
            <label for="existing-cover" class="block text-sm font-medium text-gray-700 mb-2">Existing Cover Image</label>
            @if ($existingCoverImage)
                <img src="{{ asset('storage/images/' . $existingCoverImage) }}" alt="Cover Image" class="h-40 mb-4">
            @endif

            <label for="cover_image" class="block text-sm font-medium text-gray-700 mb-1">Upload New Cover Image</label>
            <input
                type="file"
                id="cover_image"
                wire:model="cover_image"
                class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:text-sm file:font-semibold file:bg-blue-100 file:text-blue-700 hover:file:bg-blue-200 focus:ring-blue-500 focus:border-blue-500"
            />
            <p class="mt-2 text-sm text-gray-600">Max size: 2MB. Formats: JPG, PNG, SVG.</p>
        </div>

        <!-- Price Input -->
        <div class="mb-4">
            <label for="price" class="block text-sm font-medium text-gray-700 mb-1">Price</label>
            <input
                type="number"
                id="price"
                wire:model="price"
                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500"
                placeholder="Enter price"
                required
            />
        </div>

        <!-- Discount Input -->
        <div class="mb-4">
            <label for="discount" class="block text-sm font-medium text-gray-700 mb-1">Discount (%)</label>
            <input
                type="number"
                id="discount"
                wire:model="discount"
                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500"
                placeholder="Enter discount percentage"
            />
        </div>

        <!-- Description -->
        <div class="mb-6">
            <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Deskripsi Produk</label>
            <input id="description" type="hidden" name="content" value="{{ $description }}">
            <trix-editor input="description"></trix-editor>
        </div>

        <!-- Submit Button -->
        <div class="flex justify-end">
            <button
                type="submit"
                class="px-6 py-2 bg-blue-500 text-white rounded-lg font-semibold hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50"
            >
                Update Promo
            </button>
        </div>

        @if (session()->has('message'))
            <div id="success-notification" class="fixed top-14 z-50 right-4 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg">
                {{ session('message') }}
            </div>
        @endif
    </form>
</div>
<script>
    var trixEditor = document.getElementById("description")
    addEventListener("trix-blur", function(event) {
        console.log(trixEditor.getAttribute('value'));
        @this.set('description', trixEditor.getAttribute('value'))
    })
</script>