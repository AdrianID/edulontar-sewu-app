<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">

<div class="mt-20">
  <!-- Header Section with Full-width Image -->
  {{-- <header class="relative">
    <img src="{{ asset('images/eduwisata.jpg') }}" alt="Header Image" class="w-full h-auto object-cover">
  </header> --}}

  <!-- Title Section -->
  <section class="bg-cover bg-center py-6 text-center relative" data-aos="fade-up" style="background-image: url('{{ asset('images/wahana2.jpg') }}'); height: 300px;">
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="relative z-10">
      <h1 class="text-4xl font-bold text-white">BERITA WISATA LONTAR SEWU</h1>
      <p class="text-2xl mt-4 text-white">Temukan Keindahan dan Keceriaan di Lontar Sewu</p>
      <div class="mt-4">
        <p class="text-lg text-white">0341-597777</p>
        <p class="text-lg text-white">www.lontarsewu.id</p>
      </div>
    </div>
  </section>

  <!-- News Cards Section -->
  <section class=" py-8" data-aos="fade-up">
    <div class="container mx-auto grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-8">
      
      <!-- Left Side: Full-width Image -->
      <a href="https://yourlink.com" class="relative block bg-cover bg-center h-64 lg:h-auto rounded-lg overflow-hidden shadow-lg group"
         style="background-image: url('https://i.pinimg.com/736x/7c/8a/5c/7c8a5cc61e919dc25eb1a794460b735d.jpg');">
        <div class="absolute inset-0 bg-black opacity-50 group-hover:opacity-75 transition-opacity duration-300"></div>
        <div class="relative z-10 p-6 flex items-end h-full">
          <div>
            <h3 class="text-white font-bold text-xl group-hover:text-yellow-500 transition-colors duration-300">Header News Title</h3>
            <p class="text-white text-sm mt-2">Header News Subtitle</p>
          </div>
        </div>
      </a>

      <!-- Right Side: News Cards with Background Image -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        
        <!-- News Card 1 -->
        <a href="https://yourlink.com" class="relative block bg-cover bg-center h-64 rounded-lg overflow-hidden shadow-lg group"
           style="background-image: url('https://i.pinimg.com/736x/7c/8a/5c/7c8a5cc61e919dc25eb1a794460b735d.jpg');">
          <div class="absolute inset-0 bg-black opacity-50 group-hover:opacity-75 transition-opacity duration-300"></div>
          <div class="relative z-10 p-6 flex items-end h-full">
            <div>
              <h3 class="text-white font-bold text-xl group-hover:text-yellow-500 transition-colors duration-300">Diskon 40% Museum Musik Dunia</h3>
              <p class="text-white text-sm mt-2">Spesial Hari Museum Nasional</p>
            </div>
          </div>
        </a>

        <!-- News Card 2 -->
        <a href="https://yourlink.com" class="relative block bg-cover bg-center h-64 rounded-lg overflow-hidden shadow-lg group"
           style="background-image: url('https://i.pinimg.com/736x/7c/8a/5c/7c8a5cc61e919dc25eb1a794460b735d.jpg');">
          <div class="absolute inset-0 bg-black opacity-50 group-hover:opacity-75 transition-opacity duration-300"></div>
          <div class="relative z-10 p-6 flex items-end h-full">
            <div>
              <h3 class="text-white font-bold text-xl group-hover:text-yellow-500 transition-colors duration-300">Diskon 40% Jawa Timur Park Group</h3>
              <p class="text-white text-sm mt-2">Bagi Warga Kota Batu</p>
            </div>
          </div>
        </a>

        <!-- News Card 3 -->
        <a href="https://yourlink.com" class="relative block bg-cover bg-center h-64 rounded-lg overflow-hidden shadow-lg group"
           style="background-image: url('https://i.pinimg.com/736x/7c/8a/5c/7c8a5cc61e919dc25eb1a794460b735d.jpg');">
          <div class="absolute inset-0 bg-black opacity-50 group-hover:opacity-75 transition-opacity duration-300"></div>
          <div class="relative z-10 p-6 flex items-end h-full">
            <div>
              <h3 class="text-white font-bold text-xl group-hover:text-yellow-500 transition-colors duration-300">Tiket Shuttle Gratis</h3>
              <p class="text-white text-sm mt-2">Bagi Pengunjung Hari Spesial</p>
            </div>
          </div>
        </a>

        <!-- News Card 4 -->
        <a href="https://yourlink.com" class="relative block bg-cover bg-center h-64 rounded-lg overflow-hidden shadow-lg group"
          style="background-image: url('https://i.pinimg.com/736x/7c/8a/5c/7c8a5cc61e919dc25eb1a794460b735d.jpg');">
          <div class="absolute inset-0 bg-black opacity-50 group-hover:opacity-75 transition-opacity duration-300"></div>
          <div class="relative z-10 p-6 flex items-end h-full">
            <div>
              <h3 class="text-white font-bold text-xl group-hover:text-yellow-500 transition-colors duration-300">Promo Spesial Musim Liburan</h3>
              <p class="text-white text-sm mt-2">Ayo segera kunjungi kami</p>
            </div>
          </div>
        </a>

      </div>
    </div>
  </section>

  <!-- News Cards Section: Full Width, One Card per Row -->
<section class=" py-8" data-aos="fade-up">
  <div class="container mx-auto space-y-6">
    
    <!-- News Card 1 -->
    <a href="https://yourlink1.com" class="block bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
      <div class="flex flex-col h-64 md:flex-row">
        <!-- Image Slot -->
        <div class="w-full h-1/2 md:w-1/3 md:h-full">
          <img src="https://i.pinimg.com/control/564x/32/0d/9d/320d9dc62bf146a638b0e2317ce38705.jpg" alt="News Image 1" class="w-full h-full object-cover">
        </div>
        <!-- Content Slot -->
        <div class="p-6 w-full h-1/2 md:w-2/3 md:h-full flex flex-col justify-center">
          <h3 class="text-2xl font-bold text-gray-800">Diskon 40% Museum Musik Dunia</h3>
          <p class="text-sm text-gray-500 mt-2">Spesial Hari Museum Nasional</p>
          <p class="text-base text-gray-600 mt-4 truncate">Nikmati diskon spesial di Museum Musik Dunia dalam rangka memperingati Hari Museum Nasional. Ayo kunjungi kami dan dapatkan pengalaman berharga bersama keluarga.</p>
        </div>
      </div>
    </a>
    <a href="https://yourlink1.com" class="block bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
      <div class="flex flex-col h-64 md:flex-row">
        <!-- Image Slot -->
        <div class="w-full h-1/2 md:w-1/3 md:h-full">
          <img src="https://i.pinimg.com/control/564x/32/0d/9d/320d9dc62bf146a638b0e2317ce38705.jpg" alt="News Image 1" class="w-full h-full object-cover">
        </div>
        <!-- Content Slot -->
        <div class="p-6 w-full h-1/2 md:w-2/3 md:h-full flex flex-col justify-center">
          <h3 class="text-2xl font-bold text-gray-800">Diskon 40% Museum Musik Dunia</h3>
          <p class="text-sm text-gray-500 mt-2">Spesial Hari Museum Nasional</p>
          <p class="text-base text-gray-600 mt-4 truncate">Nikmati diskon spesial di Museum Musik Dunia dalam rangka memperingati Hari Museum Nasional. Ayo kunjungi kami dan dapatkan pengalaman berharga bersama keluarga.</p>
        </div>
      </div>
    </a>
    <a href="https://yourlink1.com" class="block bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
      <div class="flex flex-col h-64 md:flex-row">
        <!-- Image Slot -->
        <div class="w-full h-1/2 md:w-1/3 md:h-full">
          <img src="https://i.pinimg.com/control/564x/32/0d/9d/320d9dc62bf146a638b0e2317ce38705.jpg" alt="News Image 1" class="w-full h-full object-cover">
        </div>
        <!-- Content Slot -->
        <div class="p-6 w-full h-1/2 md:w-2/3 md:h-full flex flex-col justify-center">
          <h3 class="text-2xl font-bold text-gray-800">Diskon 40% Museum Musik Dunia</h3>
          <p class="text-sm text-gray-500 mt-2">Spesial Hari Museum Nasional</p>
          <p class="text-base text-gray-600 mt-4 truncate">Nikmati diskon spesial di Museum Musik Dunia dalam rangka memperingati Hari Museum Nasional. Ayo kunjungi kami dan dapatkan pengalaman berharga bersama keluarga.</p>
        </div>
      </div>
    </a>
    <a href="https://yourlink1.com" class="block bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
      <div class="flex flex-col h-64 md:flex-row">
        <!-- Image Slot -->
        <div class="w-full h-1/2 md:w-1/3 md:h-full">
          <img src="https://i.pinimg.com/control/564x/32/0d/9d/320d9dc62bf146a638b0e2317ce38705.jpg" alt="News Image 1" class="w-full h-full object-cover">
        </div>
        <!-- Content Slot -->
        <div class="p-6 w-full h-1/2 md:w-2/3 md:h-full flex flex-col justify-center">
          <h3 class="text-2xl font-bold text-gray-800">Diskon 40% Museum Musik Dunia</h3>
          <p class="text-sm text-gray-500 mt-2">Spesial Hari Museum Nasional</p>
          <p class="text-base text-gray-600 mt-4 truncate">Nikmati diskon spesial di Museum Musik Dunia dalam rangka memperingati Hari Museum Nasional. Ayo kunjungi kami dan dapatkan pengalaman berharga bersama keluarga.</p>
        </div>
      </div>
    </a>
    <a href="https://yourlink1.com" class="block bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
      <div class="flex flex-col h-64 md:flex-row">
        <!-- Image Slot -->
        <div class="w-full h-1/2 md:w-1/3 md:h-full">
          <img src="https://i.pinimg.com/control/564x/32/0d/9d/320d9dc62bf146a638b0e2317ce38705.jpg" alt="News Image 1" class="w-full h-full object-cover">
        </div>
        <!-- Content Slot -->
        <div class="p-6 w-full h-1/2 md:w-2/3 md:h-full flex flex-col justify-center">
          <h3 class="text-2xl font-bold text-gray-800">Diskon 40% Museum Musik Dunia</h3>
          <p class="text-sm text-gray-500 mt-2">Spesial Hari Museum Nasional</p>
          <p class="text-base text-gray-600 mt-4 truncate">Nikmati diskon spesial di Museum Musik Dunia dalam rangka memperingati Hari Museum Nasional. Ayo kunjungi kami dan dapatkan pengalaman berharga bersama keluarga.</p>
        </div>
      </div>
    </a>
    <a href="https://yourlink1.com" class="block bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
      <div class="flex flex-col h-64 md:flex-row">
        <!-- Image Slot -->
        <div class="w-full h-1/2 md:w-1/3 md:h-full">
          <img src="https://i.pinimg.com/control/564x/32/0d/9d/320d9dc62bf146a638b0e2317ce38705.jpg" alt="News Image 1" class="w-full h-full object-cover">
        </div>
        <!-- Content Slot -->
        <div class="p-6 w-full h-1/2 md:w-2/3 md:h-full flex flex-col justify-center">
          <h3 class="text-2xl font-bold text-gray-800">Diskon 40% Museum Musik Dunia</h3>
          <p class="text-sm text-gray-500 mt-2">Spesial Hari Museum Nasional</p>
          <p class="text-base text-gray-600 mt-4 truncate">Nikmati diskon spesial di Museum Musik Dunia dalam rangka memperingati Hari Museum Nasional. Ayo kunjungi kami dan dapatkan pengalaman berharga bersama keluarga.</p>
        </div>
      </div>
    </a>
    <a href="https://yourlink1.com" class="block bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
      <div class="flex flex-col h-64 md:flex-row">
        <!-- Image Slot -->
        <div class="w-full h-1/2 md:w-1/3 md:h-full">
          <img src="https://i.pinimg.com/control/564x/32/0d/9d/320d9dc62bf146a638b0e2317ce38705.jpg" alt="News Image 1" class="w-full h-full object-cover">
        </div>
        <!-- Content Slot -->
        <div class="p-6 w-full h-1/2 md:w-2/3 md:h-full flex flex-col justify-center">
          <h3 class="text-2xl font-bold text-gray-800">Diskon 40% Museum Musik Dunia</h3>
          <p class="text-sm text-gray-500 mt-2">Spesial Hari Museum Nasional</p>
          <p class="text-base text-gray-600 mt-4 truncate">Nikmati diskon spesial di Museum Musik Dunia dalam rangka memperingati Hari Museum Nasional. Ayo kunjungi kami dan dapatkan pengalaman berharga bersama keluarga.</p>
        </div>
      </div>
    </a>
    

    

  </div>
</section>



</div>

<!-- jQuery and AOS Initialization -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
  $(document).ready(function(){
    AOS.init();
  });
</script>
