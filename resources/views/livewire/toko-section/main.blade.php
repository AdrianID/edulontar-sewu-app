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
        <div class="bg-white rounded-lg shadow-lg overflow-hidden transform transition-transform duration-300 hover:scale-105" data-aos="fade-up">
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
        </div>
        <div class="bg-white rounded-lg shadow-lg overflow-hidden transform transition-transform duration-300 hover:scale-105" data-aos="fade-up">
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
        </div>
        <div class="bg-white rounded-lg shadow-lg overflow-hidden transform transition-transform duration-300 hover:scale-105" data-aos="fade-up">
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
        </div>
        <div class="bg-white rounded-lg shadow-lg overflow-hidden transform transition-transform duration-300 hover:scale-105" data-aos="fade-up">
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
        </div>
        <div class="bg-white rounded-lg shadow-lg overflow-hidden transform transition-transform duration-300 hover:scale-105" data-aos="fade-up">
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
        </div>
        <div class="bg-white rounded-lg shadow-lg overflow-hidden transform transition-transform duration-300 hover:scale-105" data-aos="fade-up">
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
        </div>
        <div class="bg-white rounded-lg shadow-lg overflow-hidden transform transition-transform duration-300 hover:scale-105" data-aos="fade-up">
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
        </div>
        <div class="bg-white rounded-lg shadow-lg overflow-hidden transform transition-transform duration-300 hover:scale-105" data-aos="fade-up">
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
        </div>
        <div class="bg-white rounded-lg shadow-lg overflow-hidden transform transition-transform duration-300 hover:scale-105" data-aos="fade-up">
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
        </div>
        <div class="bg-white rounded-lg shadow-lg overflow-hidden transform transition-transform duration-300 hover:scale-105" data-aos="fade-up">
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
        </div>
        <div class="bg-white rounded-lg shadow-lg overflow-hidden transform transition-transform duration-300 hover:scale-105" data-aos="fade-up">
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
        </div>
        
  
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
    let currentImage = 0;
    
    setInterval(function() {
      $images.eq(currentImage).fadeOut(500, function() {
        currentImage = (currentImage + 1) % $images.length;
        $images.eq(currentImage).fadeIn(500);
      });
    }, 3000);
  });

  // Show More/Less functionality for descriptions
  $('.product-description').each(function() {
    var $desc = $(this);
    var $showMoreBtn = $desc.siblings('.show-more');
    
    // If the description is longer than 80px, show "Show More"
    if ($desc[0].scrollHeight > $desc.outerHeight()) {
      $showMoreBtn.show();
    }
    
    $showMoreBtn.on('click', function() {
      if ($desc.hasClass('expanded')) {
        $desc.removeClass('expanded').css('max-height', '80px');
        $(this).text('Lihat Lebih Banyak');
      } else {
        $desc.addClass('expanded').css('max-height', 'none');
        $(this).text('Lihat Lebih Sedikit');
      }
    });
  });
</script>
</html>


