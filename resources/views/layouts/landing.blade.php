<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <title>@yield('title') | Lontar Sewu</title> --}}
    {{-- <title>@yield('title') | Lontar Sewu</title> --}}
    @vite('resources/css/app.css')
    @yield('css')
</head>
<body class="bg-[#FFF1D6]">


    @livewire('components.navbar')
    
    <!-- Content Section -->
    {{-- @yield('content') --}}
    <div>
        {{ $slot }}
    </div>
    <!-- Content Section -->
    
    {{-- @livewire('main-page') --}}

    {{-- footer --}}

    <!-- Floating Button and Popup for WhatsApp -->
    <!-- Floating Button and Popup for WhatsApp -->
    <div class="fixed bottom-5 right-5 z-50">
        <!-- Button -->
        <div id="whatsappButton" class="flex items-center justify-center bg-green-600 w-16 h-16 rounded-full shadow-xl cursor-pointer aos-init aos-animate animate-bounce" data-aos="fade-up" data-aos-duration="1000">
        {{-- <i class="fab fa-whatsapp text-white text-3xl"></i> --}}
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 16 16" fill="#ffffff"><path d="M11.42 9.49c-.19-.09-1.1-.54-1.27-.61s-.29-.09-.42.1s-.48.6-.59.73s-.21.14-.4 0a5.1 5.1 0 0 1-1.49-.92a5.3 5.3 0 0 1-1-1.29c-.11-.18 0-.28.08-.38s.18-.21.28-.32a1.4 1.4 0 0 0 .18-.31a.38.38 0 0 0 0-.33c0-.09-.42-1-.58-1.37s-.3-.32-.41-.32h-.4a.72.72 0 0 0-.5.23a2.1 2.1 0 0 0-.65 1.55A3.6 3.6 0 0 0 5 8.2A8.3 8.3 0 0 0 8.19 11c.44.19.78.3 1.05.39a2.5 2.5 0 0 0 1.17.07a1.93 1.93 0 0 0 1.26-.88a1.67 1.67 0 0 0 .11-.88c-.05-.07-.17-.12-.36-.21"/><path d="M13.29 2.68A7.36 7.36 0 0 0 8 .5a7.44 7.44 0 0 0-6.41 11.15l-1 3.85l3.94-1a7.4 7.4 0 0 0 3.55.9H8a7.44 7.44 0 0 0 5.29-12.72M8 14.12a6.1 6.1 0 0 1-3.15-.87l-.22-.13l-2.34.61l.62-2.28l-.14-.23a6.18 6.18 0 0 1 9.6-7.65a6.12 6.12 0 0 1 1.81 4.37A6.19 6.19 0 0 1 8 14.12"/></svg>
        </div>
    
        <!-- Popup -->
        <div id="whatsappPopup" class="hidden bg-green-600 rounded-lg p-4 flex items-center justify-between shadow-lg aos-init" data-aos="fade-left" data-aos-duration="1000">
        <a href="https://wa.me/1234567890" target="_blank" class="flex items-center text-white font-bold">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 16 16" fill="#ffffff"><path d="M11.42 9.49c-.19-.09-1.1-.54-1.27-.61s-.29-.09-.42.1s-.48.6-.59.73s-.21.14-.4 0a5.1 5.1 0 0 1-1.49-.92a5.3 5.3 0 0 1-1-1.29c-.11-.18 0-.28.08-.38s.18-.21.28-.32a1.4 1.4 0 0 0 .18-.31a.38.38 0 0 0 0-.33c0-.09-.42-1-.58-1.37s-.3-.32-.41-.32h-.4a.72.72 0 0 0-.5.23a2.1 2.1 0 0 0-.65 1.55A3.6 3.6 0 0 0 5 8.2A8.3 8.3 0 0 0 8.19 11c.44.19.78.3 1.05.39a2.5 2.5 0 0 0 1.17.07a1.93 1.93 0 0 0 1.26-.88a1.67 1.67 0 0 0 .11-.88c-.05-.07-.17-.12-.36-.21"/><path d="M13.29 2.68A7.36 7.36 0 0 0 8 .5a7.44 7.44 0 0 0-6.41 11.15l-1 3.85l3.94-1a7.4 7.4 0 0 0 3.55.9H8a7.44 7.44 0 0 0 5.29-12.72M8 14.12a6.1 6.1 0 0 1-3.15-.87l-.22-.13l-2.34.61l.62-2.28l-.14-.23a6.18 6.18 0 0 1 9.6-7.65a6.12 6.12 0 0 1 1.81 4.37A6.19 6.19 0 0 1 8 14.12"/></svg>
            <span>Hubungi Customer Service</span>
        </a>
        <!-- Close Button (X) -->
        <button id="closePopup" class="ml-4 text-white font-bold text-lg">✕</button>
        </div>
    </div>

    
    
    <footer class="bg-[#82BB3A] text-[#006400] py-6">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; 2024 LontarSewu Tourism. All rights reserved.</p>
        </div>
    </footer>
    {{-- footer --}}

    {{-- @livewireScripts --}}

    
    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function(){
    // Toggle popup when WhatsApp button is clicked
    $('#whatsappButton').on('click', function(){
        $('#whatsappPopup').toggleClass('hidden');
    });

    // Close popup when X button is clicked
    $('#closePopup').on('click', function(){
        $('#whatsappPopup').addClass('hidden');
    });
    });
    </script>
    @yield('js')
</body>
</html>
