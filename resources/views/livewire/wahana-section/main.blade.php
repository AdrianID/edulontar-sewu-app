<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wahana | Lontar Sewu</title>
</head>
<body>
    <div>
        <div class="py-20 mt-16 flex flex-col items-center bg-[#004A27] sm:mb-8 md:mb-12 p-6 rounded-lg shadow-lg">
            <h2 class="text-3xl font-extrabold text-white text-center lg:text-4xl">
                Wahana Lontar Sewu
            </h2>
            <p class="mt-6 max-w-screen-md text-white text-center text-base leading-relaxed md:text-lg">
                "Lupakan sejenak hiruk-pikuk kota dan ajak orang-orang tercinta ke Wahana Lontar Sewu. Dengan pemandangan menakjubkan dan aktivitas menyenangkan, tempat ini adalah destinasi yang sempurna untuk keluarga dan sahabat."
            </p>
        </div>        
        <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
            <div class="py-4 sm:py-8 lg:py-12">
                <div class="grid grid-cols-2 gap-4 sm:grid-cols-3 md:gap-6 xl:gap-8">
                    {{-- <a href="#"
                        class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80">
                        <img src="https://images.unsplash.com/photo-1593508512255-86ab42a8e620?auto=format&q=75&fit=crop&w=600" loading="lazy" alt="Photo by Minh Pham" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
    
                        <div
                            class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                        </div>
    
                        <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">VR</span>
                    </a>
                    <a href="#"
                        class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:col-span-2 md:h-80">
                        <img src="https://images.unsplash.com/photo-1542759564-7ccbb6ac450a?auto=format&q=75&fit=crop&w=1000" loading="lazy" alt="Photo by Magicle" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
    
                        <div
                            class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                        </div>
    
                        <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">Tech</span>
                    </a> --}}

                    @foreach ($wahana as $index => $item)
                        <a href="#"
                            data-aos="fade-up"
                            class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg 
                                @if (($index + 1) % 4 === 2 || ($index + 1) % 4 === 3) md:col-span-2 md:h-80
                                @else md:h-80
                                @endif">
                            
                            <!-- Gambar -->
                            <img src="{{ $item->gambar_wahana ? asset('storage/images/' . $item->gambar_wahana) : 'https://via.placeholder.com/600' }}" 
                                loading="lazy" 
                                alt="{{ $item->judul_wahana }}" 
                                class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
                
                            <!-- Gradient overlay -->
                            <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-50"></div>
                
                            <div class="absolute inset-0 p-4 flex flex-col justify-start items-start bg-gradient-to-b from-black/70 via-black/30 to-transparent group-hover:from-black/80 group-hover:via-black/50 text-white transition duration-300">
                                <h2 class="text-lg md:text-2xl font-bold leading-tight">
                                    {{ $item->judul_wahana }}
                                </h2>
                                <p class="mt-2 text-sm md:text-base leading-relaxed opacity-0 group-hover:opacity-100 transform group-hover:translate-y-0 -translate-y-2 transition duration-300">
                                    {!! $item->deskripsi_wahana !!}
                                </p>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>
</html>
