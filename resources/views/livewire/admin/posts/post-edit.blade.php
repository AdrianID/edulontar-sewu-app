<div class="container mx-auto p-6 bg-white rounded-lg shadow-md">
    <h2 class="text-2xl font-semibold text-gray-800 mb-6">Edit Post</h2>

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

    <!-- Slug Input -->
    <div class="mb-4">
        <label for="slug" class="block text-sm font-medium text-gray-700 mb-1">Slug</label>
        <input
            type="text"
            wire:model="slug"
            id="slug"
            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500"
            placeholder="Enter slug"
        />
        @error('slug')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <!-- Cover Image Upload -->
    <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700 mb-1" for="cover-image">Cover Image</label>
        <input
            type="file"
            wire:model="featured_image"
            id="cover-image"
            class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:bg-blue-100 file:text-blue-600 hover:file:bg-blue-200"
        />
        @error('featured_image')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror

        <!-- Display current image -->
        @if($featured_image)
            <div class="mt-2">
                <img src="{{ $featured_image->temporaryUrl() }}" alt="Preview" class="w-32 h-32 object-cover rounded-md">
            </div>
        @elseif($featured_image && $featured_image != $post->header_content_image)
            <div class="mt-2">
                <img src="{{ asset('storage/'.$post->header_content_image) }}" alt="Current Image" class="w-32 h-32 object-cover rounded-md">
            </div>
        @endif
    </div>

    <!-- Content Editor -->
    <div class="mb-6">
        <label for="content" class="block text-sm font-medium text-gray-700 mb-1">Content</label>
        <livewire:trix-editor :value="$content"/>
        @error('content')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <!-- Submit Button -->
    <div class="flex justify-end">
        <button
            type="button"
            wire:click="update"
            class="px-6 py-2 bg-blue-500 text-white rounded-lg font-semibold hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50"
        >
            Update Post
        </button>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function() {
        $('#slug').on('input', function() {
            let value = $(this).val();
            value = value.toLowerCase()
                         .replace(/[^a-z0-9\s-]/g, '') // Remove invalid characters
                         .replace(/\s+/g, '-')         // Replace spaces with hyphens
                         .replace(/-+/g, '-');         // Remove duplicate hyphens
            $(this).val(value);
        });
    });
</script>
