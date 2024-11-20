<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Toko | Lontar Sewu</title>
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
</head>
<style>
  .product-title {
    min-height: 40px;
  }

  .product-description {
    max-height: 80px; /* Limit description height */
    overflow: hidden;
    position: relative;
  }

  .show-more {
    color: #387F39;
    cursor: pointer;
    font-weight: bold;
    margin-top: 8px;
    display: none;
  }
</style>
<body>
  <div class="">
    <div class="text-center py-12 mt-20 bg-[#004A27] text-white rounded-lg shadow-lg">
      <h1 class="text-5xl font-extrabold mb-4">Lapak Desa</h1>
      <p class="text-xl font-semibold mb-6">Pasar Desa Online</p>
      <p class="text-lg max-w-2xl mx-auto">Lapak Desa atau Pasar Desa Online merupakan media promosi produk lokal Desa yang bertujuan untuk membantu warga Desa dalam memasarkan dan memperkenalkan produknya kepada masyarakat luas.</p>
    </div>
  
    <!-- Product Section -->
    <section class="container mx-auto py-12 px-6">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
  
        <!-- Product Card 1 -->
        {{-- <div class="bg-white rounded-lg shadow-lg overflow-hidden transform transition-transform duration-300 hover:scale-105" data-aos="fade-up">
          <div class="relative">
            <!-- Image Carousel -->
            <div id="carousel1" class="carousel overflow-hidden">
              <img src="https://i.pinimg.com/474x/a8/2b/c3/a82bc337dc65fd3affe1699d8579069f.jpg" alt="Product Image 1" class="w-full h-56 object-cover transition-opacity duration-500">
              <img src="https://i.pinimg.com/control/236x/65/93/c1/6593c15d69ab6d734a4a8437fa2c9938.jpg" alt="Product Image 2" class="w-full h-56 object-cover hidden transition-opacity duration-500">
              <img src="https://i.pinimg.com/236x/a2/a2/c6/a2a2c61877253fda98837fdb85e47769.jpg" alt="Product Image 3" class="w-full h-56 object-cover hidden transition-opacity duration-500">
            </div>
          </div>
          <div class="p-6">
            <h2 class="text-2xl font-bold product-title text-gray-800 mb-2">Product Title 1</h2>
            <span class="block text-lg font-semibold mb-4 text-green-600">Price: $XX</span>
            
            <!-- Description with "Show More" functionality -->
            <p class="text-gray-600 mb-4 product-description">This is a short description of the product. It's perfect for your daily needs! Lorem ipsum dolor sit amet consectetur adipisicing elit. Et nobis dolorum inventore optio fugit laudantium quas dignissimos blanditiis tempora numquam!</p>
            <span class="show-more text-green-500 cursor-pointer">Lihat Lebih Banyak</span>
  
            <button class="w-full flex items-center justify-center gap-2 px-4 py-2 bg-gradient-to-r from-green-500 to-green-700 text-white rounded-full font-semibold hover:from-green-600 hover:to-green-800 transition-transform duration-300 ease-in-out shadow-lg transform hover:scale-105 mt-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M6 6h15l-1.5 9h-11l-1.5-9z" />
                <circle cx="9" cy="20" r="2" />
                <circle cx="18" cy="20" r="2" />
                <path d="M8 10h9v2H8z" />
              </svg>
              <span class="text-sm md:text-base">Buy Now</span>
            </button>
            
          </div>
        </div> --}}
        
        @foreach($products as $product)

            <div class="bg-white rounded-lg shadow-lg overflow-hidden transform transition-transform duration-300 hover:scale-105" data-aos="fade-up">
              <div class="relative">
                  <!-- Image Carousel -->
                  <div class="carousel relative w-full h-60 overflow-hidden">
                      <div class="absolute inset-0 flex transition-transform duration-500 ease-in-out" style="width: 300%">
                          <img src="https://i.pinimg.com/736x/a8/4a/85/a84a85f51e441df3b9d6bc4c33015b7c.jpg" alt="Product Image 1" class="w-1/3 h-full object-cover">
                          @foreach ($product->gambarProduk as $gambar)
                              <img 
                                  src="{{ asset('storage/images/' . $gambar->path_gambar) }}" 
                                  alt="Product Image {{ $loop->index + 1 }}" 
                                  class="w-1/3 h-full object-cover"
                              >
                          @endforeach
                      </div>
                      <div class="absolute bottom-2 left-1/2 transform -translate-x-1/2 flex gap-2">
                          <button class="w-3 h-3 rounded-full bg-gray-400 hover:bg-gray-600 focus:outline-none"></button>
                          <button class="w-3 h-3 rounded-full bg-gray-400 hover:bg-gray-600 focus:outline-none"></button>
                          <button class="w-3 h-3 rounded-full bg-gray-400 hover:bg-gray-600 focus:outline-none"></button>
                      </div>
                  </div>
              </div>
              <div class="p-6">
                  <h2 class="text-2xl font-bold text-gray-800 mb-2 truncate">{{ $product->nama_produk }}</h2>
                  <div class="flex items-baseline space-x-2 mb-4">
                      <span class="text-base font-semibold text-green-600">Harga:</span>
                      <span class="text-lg font-bold text-gray-800 truncate max-w-xs">Rp {{ number_format($product->harga_produk, 0, ',', '.') }}</span>
                      <span class="text-xs text-gray-500 truncate max-w-xs">/ {{ $product->satuan_produk }}</span>
                  </div>
          
                  <!-- Description with "Show More" functionality -->
                  <div class="text-gray-600 mb-4">
                      <div class="product-description overflow-hidden max-h-24" style="transition: max-height 0.3s ease;">
                          {!! $product->deskripsi_produk !!}
                      </div>
                      <span class="show-more text-green-500 cursor-pointer hover:underline">Lihat Lebih Banyak</span>
                  </div>
          
                  <!-- Call to Action Button -->
                  <button class="w-full flex items-center justify-center gap-2 px-4 py-3 bg-gradient-to-r from-green-500 to-green-700 text-white rounded-full font-semibold hover:from-green-600 hover:to-green-800 transition-transform duration-300 ease-in-out shadow-lg transform hover:scale-105 mt-6">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6" viewBox="0 0 24 24" fill="currentColor">
                          <path d="M12 0C5.373 0 0 5.373 0 12c0 2.123.553 4.106 1.518 5.832L0 24l6.318-1.518A11.944 11.944 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm6.29 17.29c-.26.73-1.52 1.39-2.1 1.48-.55.08-1.22.11-1.97-.12-.45-.14-1.03-.34-1.77-.67-3.12-1.35-5.14-4.5-5.3-4.71-.15-.21-1.27-1.69-1.27-3.23 0-1.54.81-2.3 1.1-2.61.26-.27.69-.39 1.1-.39.13 0 .25.01.36.02.32.01.48.03.69.53.26.63.88 2.18.95 2.34.08.16.13.35.03.56-.09.21-.14.34-.27.52-.13.18-.27.39-.39.52-.13.13-.27.27-.12.52.15.26.67 1.1 1.44 1.78.99.88 1.82 1.15 2.08 1.28.26.13.41.11.56-.08.17-.19.65-.76.82-1.02.17-.26.34-.22.56-.13.23.08 1.45.68 1.7.8.25.13.42.19.48.3.06.11.06.64-.19 1.38z"/>
                      </svg>
                      <a href="{{ $product->no_wa }}" class="text-sm md:text-base">Beli Sekarang</a>
                  </button>
              </div>
          </div>
        @endforeach
  
        <!-- Repeat product card for other products -->
  
      </div>
    </section>
  </div>
  
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();

  // Simple image carousel with jQuery
  $(".carousel").each(function() {
    let $carousel = $(this);
    let $images = $carousel.find("img");
    if ($images.length > 1) {
        let currentImage = 0;
        
        setInterval(function() {
            $images.eq(currentImage).fadeOut(500, function() {
                currentImage = (currentImage + 1) % $images.length;
                $images.eq(currentImage).fadeIn(500);
            });
        }, 3000);
    }
});

  // Show More/Less functionality for descriptions
$('.product-description').each(function() {
  var $desc = $(this);
  var $showMoreBtn = $desc.siblings('.show-more');
  
  // Initialize the maximum height for collapsed description
  var collapsedHeight = '80px';

  // Check if the description's scroll height exceeds its current height
  if ($desc.prop('scrollHeight') > $desc.outerHeight()) {
    $showMoreBtn.show(); // Show the "Show More" button if content overflows
  } else {
    $showMoreBtn.hide(); // Hide the button if no overflow
  }

  // Toggle expanded and collapsed states
  $showMoreBtn.on('click', function() {
    if ($desc.hasClass('expanded')) {
      $desc.removeClass('expanded').css({
        'max-height': collapsedHeight,
        'overflow': 'hidden',
      });
      $(this).text('Lihat Lebih Banyak');
    } else {
      $desc.addClass('expanded').css({
        'max-height': 'none',
        'overflow': 'visible',
      });
      $(this).text('Lihat Lebih Sedikit');
    }
  });
});

</script>
</html>


