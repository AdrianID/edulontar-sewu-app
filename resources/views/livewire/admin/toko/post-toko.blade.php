<div class="container mx-auto p-6 bg-white rounded-lg shadow-md">
    <h2 class="text-2xl font-semibold text-gray-800 mb-6">Create New Product</h2>

    <!-- Nama Produk Input -->
    <form wire:submit.prevent="store">
        <div class="mb-4">
            <label for="nama_produk" class="block text-sm font-medium text-gray-700 mb-1">Nama Produk</label>
            <input
                type="text"
                id="nama_produk"
                wire:model="nama_produk"
                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500"
                placeholder="Masukkan nama produk"
                required
            />
        </div>
        <div class="mb-4">
            <label for="no_wa" class="block text-sm font-medium text-gray-700 mb-1">No Wa</label>
            <input
                type="text"
                id="no_wa"
                wire:model="no_wa"
                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500"
                placeholder="Masukkan Link WA"
                required
            />
        </div>
        <div class="mb-4">
            <label for="satuan_produk" class="block text-sm font-medium text-gray-700 mb-1">Satuan Produk</label>
            <input
                type="text"
                id="satuan_produk"
                wire:model="satuan_produk"
                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500"
                placeholder="Masukan satuan produk"
                required
            />
        </div>

        <!-- Harga Produk Input -->
        <div class="mb-4">
            <label for="harga_produk" class="block text-sm font-medium text-gray-700 mb-1">Harga Produk</label>
            <div class="relative">
                <span class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-700">Rp</span>
                <input
                    type="text"
                    id="harga_produk"
                    wire:model="harga_produk"
                    class="w-full pl-8 border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500"
                    placeholder="Masukkan harga produk"
                    required
                    {{-- oninput="formatRupiah(this)"
                    onkeydown="return hanyaAngka(event)" --}}
                />
            </div>
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
                    multiple
                    wire:model="gambar_produk"
                    required
                    class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:text-sm file:font-semibold file:bg-blue-100 file:text-blue-700 hover:file:bg-blue-200 focus:ring-blue-500 focus:border-blue-500"
                />
                <p class="mt-2 text-sm text-gray-600">Maksimal ukuran file: 2MB. Format: JPG, PNG, SVG.</p>
                <p id="error-message" class="mt-2 text-sm text-red-600" style="display: none;">Anda hanya bisa mengunggah maksimal 3 file.</p>
            </div>
        </div>
        

        <!-- Category Dropdown -->
        <div class="mb-4">
            <label for="category" class="block text-sm font-medium text-gray-700 mb-1">Category</label>
            <select
                id="category"
                wire:model="kategori_produk"
                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500"
                required>
                <option value="">Pilih Kategori</option>
                <option value="makanan">Makanan</option>
                <option value="minum">Minuman</option>
                <option value="barang">Barang</option>
                <option value="lainnya">Lainnya</option>
            </select>
        </div>

        <!-- Content Editor -->
        <div class="mb-6">
            <label for="deskripsi_produk" class="block text-sm font-medium text-gray-700 mb-1">Deskripsi Produk</label>
            <input id="deskripsi_produk" type="hidden" name="content" value="{{ $deskripsi_produk }}">
            <trix-editor input="deskripsi_produk"></trix-editor>
        </div>
        <!-- Submit Button -->
        <div class="flex justify-end">
            <button
                type="submit"
                wire:click="store"
                class="px-6 py-2 bg-blue-500 text-white rounded-lg font-semibold hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50"
            >
                Publish Product
            </button>
        </div>

        @if (session()->has('message'))
        <div id="success-notification" class="fixed top-14 z-50 right-4 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg">
            {{ session('message') }}
        </div>
        @endif

    </form>

</div>

<!-- Pastikan jQuery sudah dimuat -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    var trixEditor = document.getElementById("deskripsi_produk")
    addEventListener("trix-blur", function(event) {
        console.log(trixEditor.getAttribute('value'));
        @this.set('deskripsi_produk', trixEditor.getAttribute('value'))
    })

    $(document).ready(function() {
        $('#cover-image').on('change', function() {
            const maxFiles = 3;
            const files = this.files;
            const errorMessage = $('#error-message');

            // Jika jumlah file lebih dari 3, tampilkan pesan error tanpa mereset input file
            if (files.length > maxFiles) {
                errorMessage.show();  // Menampilkan pesan kesalahan
                // Tidak reset input file untuk memungkinkan pengunggahan
            } else {
                errorMessage.hide();  // Menyembunyikan pesan kesalahan jika jumlah file valid
            }
        });

        // $('#harga_produk').on('input', function() {
        //     var value = $(this).val().replace(/\D/g, ''); // Hapus semua karakter non-angka
        //     var formattedValue = value.replace(/\B(?=(\d{3})+(?!\d))/g, '.'); // Format dengan titik
        //     $(this).val(formattedValue);
        // });

        // Pembatasan input hanya untuk angka dan mencegah input minus
        // $('#harga_produk').on('keydown', function(event) {
        //     var key = event.which || event.keyCode;
            
        //     // Cek jika karakter yang ditekan adalah angka, backspace atau tab
        //     if (key === 45 || key === 189) { // 45 = "-" (minus) key, 189 = minus pada beberapa keyboard
        //         event.preventDefault(); // Mencegah input karakter minus
        //     }
            
        //     // Izinkan hanya angka, backspace, dan tab
        //     return (key >= 48 && key <= 57) || key === 8 || key === 9;
        // });

        $('form').on('submit', function(e) {
            var hargaProduk = $('#harga_produk').val();            
            var hargaProdukAngka = hargaProduk.replace(/\./g, '');
            $('#harga_produk').val(hargaProdukAngka);
        });
    });
</script>



