<div class="container mx-auto p-6 bg-white rounded-lg shadow-md">
    <h2 class="text-2xl font-semibold text-gray-800 mb-6">Edit Fasilitas</h2>

    <!-- Success Message -->
    @if (session()->has('message'))
        <div class="p-4 mb-4 text-green-700 bg-green-100 rounded">
            {{ session('message') }}
        </div>
    @endif

    <!-- Form Section -->
    <form wire:submit.prevent="update">
        <div class="mb-4">
            <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Title</label>
            <input
                type="text"
                id="title"
                wire:model="nama_fasilitas"
                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500"
                placeholder="Enter title"
            />
            @error('title') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 mb-1">Existing Cover Image</label>
            @foreach ($existingImages as $image)
                <div class="relative inline-block mr-4 mb-4">
                    <img src="{{ asset('storage/' . $image) }}" alt="Image" class="w-16 h-16 rounded">
                    <button
                        type="button"
                        wire:click="removeImageFromUpdate('{{ $image }}')"
                        class="absolute top-0 right-0 bg-red-500 text-white rounded-full w-6 h-6 flex items-center justify-center"
                    >
                        &times;
                    </button>
                </div>
            @endforeach
        </div>

        <div>
            <h3 class="text-lg font-medium text-gray-800 mb-4">Unggah Gambar Baru</h3>
            <div class="bg-gray-50 p-4 rounded-lg border border-gray-200">
                <label class="block text-sm font-medium text-gray-700 mb-2" for="cover-image">
                    Tambahkan Gambar Baru
                </label>
                <input
                    type="file"
                    id="cover-image"
                    wire:model="cover_image"
                    required
                    class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:text-sm file:font-semibold file:bg-blue-100 file:text-blue-700 hover:file:bg-blue-200 focus:ring-blue-500 focus:border-blue-500"
                />
                <p class="mt-2 text-sm text-gray-600">Maksimal ukuran file: 2MB. Format: JPG, PNG, SVG.</p>
            </div>
        </div>

        <div class="flex justify-end mt-4">
            <button
                type="submit"
                class="px-6 py-2 bg-blue-500 text-white rounded-lg font-semibold hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50"
            >
                Publish Post
            </button>
        </div>
    </form>
</div>
