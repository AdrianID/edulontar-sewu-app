<div class="container mx-auto p-6 bg-white rounded-lg shadow-md">
    <h2 class="text-2xl font-semibold text-gray-800 mb-6">Create New Promo</h2>

    <!-- Title Input -->
    <div class="mb-4">
        <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Title</label>
        <input
            type="text"
            id="title"
            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500"
            placeholder="Enter post title"
        />
    </div>

    <!-- Cover Image Upload -->
    <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700 mb-1" for="cover-image">Cover Image</label>
        <input
            type="file"
            id="cover-image"
            class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:text-sm file:font-semibold file:bg-blue-100 file:text-blue-700 hover:file:bg-blue-200"
        />
    </div>

    <!-- Category Dropdown -->
    <div class="mb-4">
        <label for="category" class="block text-sm font-medium text-gray-700 mb-1">Category</label>
        <select
            id="category"
            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500"
        >
            <option selected disabled>Select category</option>
            <option value="tech">Technology</option>
            <option value="design">Design</option>
            <option value="business">Business</option>
            <!-- Tambahkan opsi lain sesuai kebutuhan -->
        </select>
    </div>

    <!-- Content Editor -->
    <div class="mb-6">
        <label for="content" class="block text-sm font-medium text-gray-700 mb-1">Content</label>
        <livewire:trix-editor />
    </div>

    <!-- Submit Button -->
    <div class="flex justify-end">
        <button
            type="submit"
            class="px-6 py-2 bg-blue-500 text-white rounded-lg font-semibold hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50"
        >
            Publish Post
        </button>
    </div>
</div>
