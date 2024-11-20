<div class="container mx-auto p-6 bg-white rounded-lg shadow-md">
    <h2 class="text-2xl font-semibold text-gray-800 mb-6">Create New Wahana</h2>

    <form wire:submit.prevent="store">
        <!-- Title Input -->
        <div class="mb-4">
            <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Title</label>
            <input
                type="text"
                id="title"
                wire:model="judul_wahana"
                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500"
                placeholder="Enter post title"
            />
        </div>
    
        <!-- Cover Image Upload -->
        <div>
            <h3 class="text-lg font-medium text-gray-800 mb-4">Unggah Gambar Baru</h3>
            <div class="bg-gray-50 p-4 rounded-lg border border-gray-200">
                <label class="block text-sm font-medium text-gray-700 mb-2" for="cover-image">
                    Tambahkan Gambar Baru
                </label>
                <input
                    type="file"
                    id="cover-image"
                    wire:model="gambar_wahana"
                    required
                    class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:text-sm file:font-semibold file:bg-blue-100 file:text-blue-700 hover:file:bg-blue-200 focus:ring-blue-500 focus:border-blue-500"
                />
                <p class="mt-2 text-sm text-gray-600">Maksimal ukuran file: 2MB. Format: JPG, PNG, SVG.</p>
            </div>
        </div>
    
        <div class="mb-6">
            <label for="deskripsi_wahana" class="block text-sm font-medium text-gray-700 mb-2">Deskripsi Wahana</label>
            <textarea  wire:model="deskripsi_wahana" id="deskripsi_wahana" name="content" rows="6" class="block w-full px-4 py-2 text-gray-700 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="Tulis deskripsi wahana di sini...">{{ $deskripsi_wahana }}</textarea>
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
<script>
</script>
