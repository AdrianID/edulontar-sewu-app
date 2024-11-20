<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fasilitas | Lontar Sewu</title>
</head>
<body>
    <div>
        <div class="">
            <div class="py-20 mt-16 flex flex-col items-center bg-[#004A27] sm:mb-8 md:mb-12 p-6 rounded-lg shadow-lg">
                <h2 class="text-3xl font-extrabold text-white text-center lg:text-4xl">
                    Fasilitas Lontar Sewu
                </h2>
                <p class="mt-6 max-w-screen-md text-white text-center text-base leading-relaxed md:text-lg">
                    ✨ Wahana Seru dan Tak Terlupakan
                    Nikmati beragam aktivitas seru untuk semua usia! Dari wahana air yang menyegarkan hingga permainan outdoor yang penuh tantangan, keseruan di Lontar Sewu tak ada habisnya.
                </p>
            </div>  
        <div class="container mx-auto px-4 py-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <!-- Large item -->

                @foreach ($fasilitas as $index => $item)
                    @php
                        // Menentukan ukuran berdasarkan pola (card pertama dan setiap ke-19 dan ke-28 memiliki ukuran besar)
                        $sizeClass = ($index % 14 == 0 || $index % 19 == 0 || $index % 28 == 0) ? 'md:col-span-2 md:row-span-2' : 'h-48';
                    @endphp
                    
                    <div class="relative overflow-hidden rounded-2xl shadow-lg group {{ $sizeClass }}">
                        <img src="{{ asset('storage/images/' . $item->cover_image) }}"  alt="Image" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <div class="absolute bottom-0 left-0 right-0 p-4">
                                <h4 class="text-xl font-bold text-white">{{ $item->nama_fasilitas}}</h4>
                                {{-- <p class="text-white">{{ $item->description }}</p> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="md:col-span-2 md:row-span-2 relative overflow-hidden rounded-2xl shadow-lg group">
                    <img src="https://images.unsplash.com/photo-1469474968028-56623f02e42e?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxfHxuYXR1cmV8ZW58MHwwfHx8MTcyMTA0MjYwMXww&ixlib=rb-4.0.3&q=80&w=1080" alt="Nature" class="w-full h-full object-cover">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-4">
                            <h3 class="text-2xl font-bold text-white">Explore Nature</h3>
                            <p class="text-white">Discover the beauty of the natural world</p>
                        </div>
                    </div>
                </div>
    
                <!-- Two small items -->
                <div class="relative overflow-hidden rounded-2xl shadow-lg group">
                    <img src="https://images.unsplash.com/photo-1493770348161-369560ae357d?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw2fHxmb29kfGVufDB8MHx8fDE3MjEwNDI2MTR8MA&ixlib=rb-4.0.3&q=80&w=1080" alt="Food" class="w-full h-48 object-cover">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-4">
                            <h4 class="text-xl font-bold text-white">Culinary Delights</h4>
                        </div>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-2xl shadow-lg group">
                    <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw1fHx0ZWNobm9sb2d5fGVufDB8MHx8fDE3MjEwNDI2Mjh8MA&ixlib=rb-4.0.3&q=80&w=1080" alt="Technology" class="w-full h-48 object-cover">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-4">
                            <h4 class="text-xl font-bold text-white">Tech Innovations</h4>
                        </div>
                    </div>
                </div>
    
                <!-- Three medium items -->
                <div class="relative overflow-hidden rounded-2xl shadow-lg group">
                    <img src="https://images.unsplash.com/photo-1503220317375-aaad61436b1b?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw1fHx0cmF2ZWx8ZW58MHwwfHx8MTcyMTA0MjY0MXww&ixlib=rb-4.0.3&q=80&w=1080" alt="Travel" class="w-full h-48 object-cover">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-4">
                            <h4 class="text-xl font-bold text-white">Travel Adventures</h4>
                        </div>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-2xl shadow-lg group">
                    <img src="https://images.unsplash.com/photo-1513364776144-60967b0f800f?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxfHxhcnR8ZW58MHwwfHx8MTcyMTA0MjY5Nnww&ixlib=rb-4.0.3&q=80&w=1080" alt="Art" class="w-full h-48 object-cover">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-4">
                            <h4 class="text-xl font-bold text-white">Artistic Expressions</h4>
                        </div>
                    </div>
                </div>
    
                <!-- bottom cards -->
                <div class="relative overflow-hidden rounded-2xl shadow-lg group">
                    <img src="https://images.unsplash.com/photo-1530549387789-4c1017266635?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwyfHxzd2ltbWluZ3xlbnwwfDB8fHwxNzIxMDQzMjkxfDA&ixlib=rb-4.0.3&q=80&w=1080" alt="Sport" class="w-full h-48 object-cover">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-4">
                            <h4 class="text-xl font-bold text-white">Swimming</h4>
                        </div>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-2xl shadow-lg group">
                    <img src="https://images.unsplash.com/photo-1611195974226-a6a9be9dd763?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxMnx8Y2hlc3N8ZW58MHwwfHx8MTcyMTA0MzI0Nnww&ixlib=rb-4.0.3&q=80&w=1080" alt="Sport" class="w-full h-48 object-cover">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-4">
                            <h4 class="text-xl font-bold text-white">Chess</h4>
                        </div>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-2xl shadow-lg group">
                    <img src="https://images.unsplash.com/photo-1553778263-73a83bab9b0c?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw1fHxmb290YmFsbHxlbnwwfDB8fHwxNzIxMDQzMjExfDA&ixlib=rb-4.0.3&q=80&w=1080" alt="Sport" class="w-full h-48 object-cover">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-4">
                            <h4 class="text-xl font-bold text-white">Football</h4>
                        </div>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-2xl shadow-lg group">
                    <img src="https://images.unsplash.com/photo-1624526267942-ab0ff8a3e972?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw3fHxjcmlja2V0fGVufDB8MHx8fDE3MjEwNDMxNTh8MA&ixlib=rb-4.0.3&q=80&w=1080" alt="Sport" class="w-full h-48 object-cover">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-4">
                            <h4 class="text-xl font-bold text-white">Cricket</h4>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    </div>
</body>
</html>
