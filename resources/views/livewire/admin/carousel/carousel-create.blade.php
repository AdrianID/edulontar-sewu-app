<div class="container mx-auto p-6 bg-white rounded-lg shadow-md">
    <h2 class="text-2xl font-semibold text-gray-800 mb-6">Create New Post</h2>

    <!-- Title Input -->
    <div class="mb-4">
        <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Title</label>
        <input
            type="text"
            id="title"
            wire:model="title"
            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500"
            placeholder="Enter post title"
        />
        @error('title')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <!-- Cover Image Upload -->
    <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700 mb-1" for="cover-image">Carousel Image</label>
        <input
            type="file"
            wire:model="image"
            id="cover-image"
            class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:bg-blue-100 file:text-blue-600 hover:file:bg-blue-200"
        />
        @error('image')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <!-- Submit Button -->
    <div class="flex justify-end">
        <button
            type="button"
            wire:click="save"
            class="px-6 py-2 bg-blue-500 text-white rounded-lg font-semibold hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50"
        >
            Add Carousel
        </button>
    </div>
</div>
