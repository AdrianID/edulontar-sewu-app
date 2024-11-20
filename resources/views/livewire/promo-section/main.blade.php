<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Promo | Lontar Sewu</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
</head>
<style>
    .promo-card {
        transition: transform 0.3s ease;
    }
    .promo-card:hover {
        transform: scale(1.05);
    }
</style>
<body>
    <div class="">

        <!-- Promo Section -->
        <section class="px-4 py-10">
            <div class="bg-[#004A27] mb-8 mt-10 py-10 rounded-lg shadow-lg">
                <h1 class="text-5xl font-extrabold text-center text-white mb-4">Promo Spesial di Lontarsewu!</h1>
                <p class="text-lg text-center text-white px-6">
                    Nikmati momen liburan lebih seru dengan penawaran terbaik dari kami! Dapatkan diskon fantastis, paket hemat keluarga, 
                    dan banyak kejutan lainnya. Jangan lewatkan kesempatan untuk menciptakan kenangan indah bersama orang tercinta. Promo terbatas, 
                    ayo segera rencanakan kunjunganmu ke Lontarsewu sekarang juga!
                </p>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach($promos as $promo)

                    <div class="promo-card bg-white rounded-xl shadow-md hover:shadow-lg p-6 flex flex-col justify-between transform transition duration-300 hover:scale-105" data-aos="fade-up">
                        <!-- Gambar -->
                        <div class="overflow-hidden rounded-xl relative">
                            <img src="{{ asset('storage/images/' . $promo->cover_image) }}" 
                                alt="{{ $promo->title }}" 
                                class="w-full h-56 object-cover">
                            <!-- Badge Diskon -->
                            <div class="absolute top-4 left-4 bg-red-600 text-white text-xs font-semibold uppercase px-3 py-1 rounded-full shadow-md">
                                Diskon {{ $promo->discount }}%
                            </div>
                        </div>
                        <!-- Konten -->
                        <div class="mt-5 flex-1">
                            <h2 class="text-xl font-semibold text-gray-800 truncate">{{ $promo->title }}</h2>
                            <!-- Deskripsi dengan HTML -->
                            <p class="text-sm text-gray-600 mt-3 line-clamp-3">
                                {!! $promo->description !!}
                            </p>
                        </div>
                        <!-- Harga dan Tombol -->
                        <div class="mt-5">
                            <div class="text-lg flex items-center gap-2">
                                <span class="text-gray-500 line-through">Rp {{ number_format($promo->price, 0, ',', '.') }}</span>
                                <span class="text-blue-600 font-bold">Rp {{ number_format($promo->discounted_price, 0, ',', '.') }}</span>
                            </div>
                            <!-- Tombol -->
                            <a href="https://wa.link/hobg99" 
                               class="mt-3 w-full bg-green-500 text-white text-sm font-medium px-4 py-2 rounded-lg flex items-center justify-center gap-2 hover:bg-green-600 transition"
                               target="_blank" rel="noopener noreferrer">
                                <!-- SVG WhatsApp Icon -->
                                <p class="text-white" >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 16 16" fill="#ffffff"><path d="M11.42 9.49c-.19-.09-1.1-.54-1.27-.61s-.29-.09-.42.1s-.48.6-.59.73s-.21.14-.4 0a5.1 5.1 0 0 1-1.49-.92a5.3 5.3 0 0 1-1-1.29c-.11-.18 0-.28.08-.38s.18-.21.28-.32a1.4 1.4 0 0 0 .18-.31a.38.38 0 0 0 0-.33c0-.09-.42-1-.58-1.37s-.3-.32-.41-.32h-.4a.72.72 0 0 0-.5.23a2.1 2.1 0 0 0-.65 1.55A3.6 3.6 0 0 0 5 8.2A8.3 8.3 0 0 0 8.19 11c.44.19.78.3 1.05.39a2.5 2.5 0 0 0 1.17.07a1.93 1.93 0 0 0 1.26-.88a1.67 1.67 0 0 0 .11-.88c-.05-.07-.17-.12-.36-.21"/><path d="M13.29 2.68A7.36 7.36 0 0 0 8 .5a7.44 7.44 0 0 0-6.41 11.15l-1 3.85l3.94-1a7.4 7.4 0 0 0 3.55.9H8a7.44 7.44 0 0 0 5.29-12.72M8 14.12a6.1 6.1 0 0 1-3.15-.87l-.22-.13l-2.34.61l.62-2.28l-.14-.23a6.18 6.18 0 0 1 9.6-7.65a6.12 6.12 0 0 1 1.81 4.37A6.19 6.19 0 0 1 8 14.12"/></svg>                            
                                </p>
                                Pesan Sekarang
                            </a>
                        </div>
                    </div>
                
                @endforeach
                

                {{-- <div class="promo-card bg-white rounded-lg shadow-lg p-5" data-aos="fade-up">
                    <img src="https://via.placeholder.com/150" alt="Promo 4" class="w-full h-40 object-cover rounded-md">
                    <h2 class="text-xl font-bold text-gray-800 mt-4">Promo Title 4</h2>
                    <p class="text-gray-600 mt-2">This is a short description of the promo offer.</p>
                    <button class="mt-4 bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">
                        Learn More
                    </button>
                </div> --}}
            </div>
        </section>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init();
    </script>
</html>





    

