
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home | Lontar Sewu</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.css" />
    <style>
        #hero {
                position: relative;
                width: 100%;
                height: 100vh;
                background-size: cover;
                background-position: center;
                transition: background-image 1s ease-in-out; /* Smooth transition for background image */
            }
    
            #hero::before {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-size: cover;
                background-position: center;
                z-index: 1;
                transition: opacity 1s ease-in-out; /* Smooth transition for opacity */
                opacity: 0; 
            }
    
            .content {
                position: relative;
                z-index: 2; 
                text-align: center;
                color: white;
            }
            
            /* .carousel {
            width: max-content;
            display: flex;
            }
            .carousel-item {
                min-width: 300px;
                max-width: 300px;
                transition: transform 0.5s ease;
            } */
    </style>
</head>
<body>
    <div>
        <div class=" w-full pt-8">
            <div id="hero" class="text-center py-16 h-screen flex justify-center items-center" style="background-image: url('{{ $backgroundCarousel[0] }}'); background-size: cover; background-position: center; background-color: rgba(0, 0, 0, 0.5); background-blend-mode: darken;">
                <div class="">
                    <h1 class="text-4xl md:text-6xl font-bold text-white text-shadow-lg leading-tight">
                        Nikmati Keceriaan di Wisata Lontar Sewu
                    </h1>
                    <p class="text-white mt-4 text-shadow-sm leading-relaxed">
                        Ajak keluarga Anda untuk merasakan keseruan dan kegembiraan di wisata keluarga Taman Bermain Lontar Sewu
                    </p>
                    {{-- <a href="#destinations" class="mt-6 inline-block bg-blue-500 text-white py-3 px-6 rounded-md hover:bg-blue-600 text-shadow-md">Start Exploring</a> --}}
                </div>
            </div>
            <div id="destinations" class="py-16 px-12">
                <h2 class="text-4xl py-4 font-bold text-[#000] text-center mb-8">Popular Destinations</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-white p-4 shadow-md rounded-md">
                        <img src="{{ asset('images/car.jpg') }}" alt="Destination" class="w-full h-40 object-cover rounded-md">
                        <h3 class="text-xl font-bold mt-4">Beautiful Beach</h3>
                        <p class="text-gray-600 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <div class="bg-white p-4 shadow-md rounded-md">
                        <img src="{{ asset('images/flying.jpg') }}" alt="Destination" class="w-full h-40 object-cover rounded-md">
                        <h3 class="text-xl font-bold mt-4">Mountain Adventure</h3>
                        <p class="text-gray-600 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <div class="bg-white p-4 shadow-md rounded-md">
                        <img src="{{ asset('images/kuda.jpg') }}" alt="Destination" class="w-full h-40 object-cover rounded-md">
                        <h3 class="text-xl font-bold mt-4">City Tour</h3>
                        <p class="text-gray-600 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
            </div>
    
            <section>
                @livewire('hero-section.denah')
            </section>
    
            <section>
                @livewire('hero-section.news')
            </section>
            
            <section>
                {{-- @livewire('hero-section.news') --}}
                {{-- @livewire('hero-section.testimoni') --}}
            </section>
    
            <section id="promo-umkm" class="py-16 bg-gradient-to-r from-black to-white text-white text-center relative overflow-hidden">
                <div class="container mx-auto px-6 relative z-10">
                    <h2 class="text-4xl font-bold mb-4">Promosi Produk UMKM</h2>
                    <p class="text-lg mb-8">Dukung produk lokal dan temukan berbagai produk menarik dari UMKM di sekitar Anda.</p>
                    <a href="/toko" class="inline-block bg-white text-green-700 font-semibold py-3 px-6 rounded-md hover:bg-gray-200 transition duration-300">Kunjungi Toko</a>
                </div>
                <!-- Overlay untuk gradient agar teks tetap terbaca -->
                <div class="absolute inset-0 bg-gradient-to-r from-black opacity-50 z-0"></div>
            </section>
    
            <!-- Events Section -->
            <section id="events" class="py-16">
                <h2 class="text-3xl font-bold text-[#006400] text-center mb-8" data-aos="fade-up">Upcoming Events</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-white p-4 shadow-md rounded-md" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{ asset('images/car.jpg') }}" alt="Event" class="w-full h-40 object-cover rounded-md">
                        <h3 class="text-xl font-bold mt-4">Music Festival</h3>
                        <p class="text-gray-600 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <div class="bg-white p-4 shadow-md rounded-md" data-aos="fade-up" data-aos-delay="200">
                        <img src="{{ asset('images/flying.jpg') }}" alt="Event" class="w-full h-40 object-cover rounded-md">
                        <h3 class="text-xl font-bold mt-4">Food Carnival</h3>
                        <p class="text-gray-600 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <div class="bg-white p-4 shadow-md rounded-md" data-aos="fade-up" data-aos-delay="300">
                        <img src="https://via.placeholder.com/300x200" alt="Event" class="w-full h-40 object-cover rounded-md">
                        <h3 class="text-xl font-bold mt-4">Cultural Parade</h3>
                        <p class="text-gray-600 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
            </section>
    
            {{-- <div class="relative flex min-h-screen flex-col justify-center overflow-hidden bg-gray-50 py-6 sm:py-12">
                <div
                    class="group relative cursor-pointer overflow-hidden bg-white px-6 pt-10 pb-8 shadow-xl ring-1 ring-gray-900/5 transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl sm:mx-auto sm:max-w-sm sm:rounded-lg sm:px-10">
                    <span class="absolute top-10 z-0 h-20 w-20 rounded-full bg-sky-500 transition-all duration-300 group-hover:scale-[10]"></span>
                    <div class="relative z-10 mx-auto max-w-md">
                        <span class="grid h-20 w-20 place-items-center rounded-full bg-sky-500 transition-all duration-300 group-hover:bg-sky-400">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-10 w-10 text-white transition-all">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 9.75a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 01.778-.332 48.294 48.294 0 005.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                            </svg>
                        </span>
                        <div
                            class="space-y-6 pt-5 text-base leading-7 text-gray-600 transition-all duration-300 group-hover:text-white/90">
                            <p>Perfect for learning how the framework works, prototyping a new idea, or creating a demo to share
                                online.</p>
                        </div>
                        <div class="pt-5 text-base font-semibold leading-7">
                            <p>
                                <a href="#" class="text-sky-500 transition-all duration-300 group-hover:text-white">Read the docs
                                    &rarr;
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- https://play.tailwindcss.com/eCfibrSI2X -->
    
            <!-- Testimonials Section -->
            
    
            <!-- Call to Action Section -->
            {{-- <section id="cta" class="py-16 text-center bg-blue-600 text-white">
                <h2 class="text-3xl font-bold mb-4" data-aos="fade-up">Ready to Start Your Journey?</h2>
                <p class="mb-6" data-aos="fade-up" data-aos-delay="100">Sign up for our newsletter to get the latest travel deals and tips directly to your inbox.</p>
                <a href="#" class="inline-block bg-white text-blue-600 py-3 px-6 rounded-md hover:bg-gray-200" data-aos="fade-up" data-aos-delay="200">Sign Up Now</a>
            </section> --}}
    
            <section class="bg-gray-100">
                <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:py-20 lg:px-8">
                    <div class="max-w-2xl lg:max-w-4xl mx-auto text-center">
                        <h2 class="text-3xl font-extrabold text-gray-900">Visit Our Location</h2>
                        <p class="mt-4 text-lg text-gray-500">Edu Wisata Lontar Sewu Gresik Jawa Timur</p>
                    </div>
                    <div class="mt-16 lg:mt-20">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <div class="rounded-lg overflow-hidden">
                                <iframe
                                    {{-- src="https://www.google.com/maps/place/Edu+Wisata+Lontar+Sewu+(Hendrosari)/@-7.2385082,112.5811181,17z/data=!4m10!1m2!2m1!1slontar+sewu+gresik!3m6!1s0x2e78015da9598863:0x1458d5cd0242acfe!8m2!3d-7.2385102!4d112.5836953!15sChJsb250YXIgc2V3dSBncmVzaWtaFCISbG9udGFyIHNld3UgZ3Jlc2lrkgESdG91cmlzdF9hdHRyYWN0aW9u4AEA!16s%2Fg%2F11gxmtbw39?entry=ttu&g_ep=EgoyMDI0MTAyMS4xIKXMDSoASAFQAw%3D%3D"
                                    width="100%" height="480" style="border:0;" allowfullscreen="" loading="lazy"></iframe> --}}
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.0204318117912!2d112.58111812514035!3d-7.238508171094147!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78015da9598863%3A0x1458d5cd0242acfe!2sEdu%20Wisata%20Lontar%20Sewu%20(Hendrosari)!5e0!3m2!1sid!2sid!4v1729748573188!5m2!1sid!2sid" width="100%" height="480" style="border:0;" allowfullscreen="" loading="lazy"></iframe>    
                            </div>
                            <div>
                                <div class="max-w-full mx-auto rounded-lg overflow-hidden">
                                    <div class="px-6 py-4">
                                        <h3 class="text-lg font-medium text-gray-900">Our Address</h3>
                                        <p class="mt-1 text-gray-600">Wisata Alam & Kuliner Lontar Sewu Gresik. Alamat lokasi: Desa, Hendrosalam, Hendrosari, Kec. Menganti, Kabupaten Gresik, Jawa Timur 61174,</p>
                                    </div>
                                    <div class="border-t border-gray-200 px-6 py-4">
                                        <h3 class="text-lg font-medium text-gray-900">Hours</h3>
                                        <p class="mt-1 text-gray-600">Senin - Sabtu: 09.00 - 21.00</p>
                                        <p class="mt-1 text-gray-600">Minggu: 07.00 - 21.00</p>
                                        <p class="mt-1 text-gray-600">Sunday: Closed</p>
                                    </div>
                                    <div class="border-t border-gray-200 px-6 py-4">
                                        <h3 class="text-lg font-medium text-gray-900">Contact</h3>
                                        <p class="mt-1 text-gray-600">eduwisatalontarsewu.official@gmail.com</p>
                                        <p class="mt-1 text-gray-600">Phone: +62 838 590 3781</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    
        </div>
        {{-- <section id="cta" class="py-16 text-center bg-[#006400] text-white">
            <h2 class="text-3xl font-bold mb-4" data-aos="fade-up">Ready to Start Your Journey?</h2>
            <p class="mb-6" data-aos="fade-up" data-aos-delay="100">Sign up for our newsletter to get the latest travel deals and tips directly to your inbox.</p>
            <a href="#" class="inline-block bg-white text-[#006400] py-3 px-6 rounded-md hover:bg-gray-200" data-aos="fade-up" data-aos-delay="200">Sign Up Now</a>
        </section> --}}
    </div>
</body>
<script src="./node_modules/preline/dist/preline.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.js"></script>
<script>
    AOS.init();
    $(document).ready(function() {
        const a = @json($backgroundCarousel);
        const backgrounds = a.map(item => `url('${item}')`);

        let current = 0;

        function changeBackground() {
            const next = (current + 1) % backgrounds.length;
            const tempElement = document.createElement('div');

            Object.assign(tempElement.style, {
                backgroundImage: backgrounds[next],
                position: 'absolute',
                top: 0,
                left: 0,
                width: '100%',
                height: '100%',
                opacity: 0,
                zIndex: -1
            });

            document.body.appendChild(tempElement);

            $(tempElement).animate({ opacity: 1 }, 2000, () => {
                document.getElementById('hero').style.backgroundImage = backgrounds[next];
                tempElement.remove();
                current = next;
            });
        }

        setInterval(changeBackground, 2000);

            // Promo UMKM Background
            const promoBackgrounds = backgrounds; // Bisa berbeda jika datanya terpisah
            let promoIndex = 0;

            function updatePromoBackground() {
                const promoSection = document.getElementById('promo-umkm');
                promoSection.style.backgroundImage = `url('${promoBackgrounds[promoIndex]}')`;
                promoSection.style.backgroundSize = 'cover';
                promoSection.style.backgroundPosition = 'center';
                promoIndex = (promoIndex + 1) % promoBackgrounds.length;
            }

            setInterval(updatePromoBackground, 5000);
            updatePromoBackground();
        });
    </script>
</html>

