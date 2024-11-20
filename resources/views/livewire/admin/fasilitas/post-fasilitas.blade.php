<div class="container mx-auto p-6 bg-white rounded-lg shadow-md">
    <h2 class="text-2xl font-semibold text-gray-800 mb-6">Create New Fasilitas</h2>

    <form wire:submit.prevent="store">
        <!-- Fasilitas Input -->
        <div class="mb-4">
            <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Nama Fasilitas</label>
            <input
                required
                type="text"
                id="title"
                wire:model="nama_fasilitas"
                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500"
                placeholder="Masukkan nama fasilitas"
            />
            @error('nama_fasilitas') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Cover Image Upload -->
        <div>
            <h3 class="text-lg font-medium text-gray-800 mb-4">Unggah Gambar Baru</h3>
            <div class="bg-gray-50 p-4 rounded-lg border border-gray-200">
                <label class="block text-sm font-medium text-gray-700 mb-2" for="cover_image">
                    Tambahkan Gambar Baru
                </label>
                <input
                    type="file"
                    id="cover_image"
                    wire:model="cover_image"
                    required
                    class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:text-sm file:font-semibold file:bg-blue-100 file:text-blue-700 hover:file:bg-blue-200 focus:ring-blue-500 focus:border-blue-500"
                />
                <p class="mt-2 text-sm text-gray-600">Maksimal ukuran file: 2MB. Format: JPG, PNG, SVG.</p>
                @error('cover_image') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                <div wire:loading wire:target="cover_image" class="text-sm text-gray-500 mt-2">
                    Uploading...
                </div>
            </div>
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
        @if (session()->has('message'))
        <div id="success-notification" class="fixed top-14 z-50 right-4 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg">
            {{ session('message') }}
        </div>
        @endif
    </form>
</div>
