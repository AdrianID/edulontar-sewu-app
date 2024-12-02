<style>
    .underline-animation {
        display: block;
        position: absolute;
        bottom: -2px;
        left: 0;
        width: 0;
        height: 2px;
        background-color: #387F39;
        transition: width 0.3s ease-in-out;
    }
    a:hover .underline-animation {
        width: 100%;
    }
</style>
<div>
    <header id="navbar" class="bg-[#FFF1D6] shadow-lg fixed top-0 left-0 w-full z-10">
        <nav class="container mx-auto px-4 py-6 flex justify-between items-center flex-wrap">
            <a href="/" class="text-2xl font-bold text-[#387F39] flex items-center">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-8 w-auto inline-block mr-2">
                Lontar Sewu
            </a>
            <!-- Menu toggle button for mobile -->
            <div class="md:hidden">
                <button id="menu-toggle" class="text-gray-700 focus:outline-none">
                    <!-- Hamburger Icon -->
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
            <!-- Menu items -->
            <ul id="menu" class="hidden md:flex space-x-4 w-full md:w-auto md:space-x-4 md:flex-nowrap">
                <li><a href="/" class="text-[#387F39] font-bold relative">Home<span class="underline-animation"></span></a></li>
                <li><a href="/about" class="text-[#387F39] font-bold relative">About<span class="underline-animation"></span></a></li>
                <li><a href="/promo" class="text-[#387F39] font-bold relative">Promo<span class="underline-animation"></span></a></li>
                <li><a href="/wahana" class="text-[#387F39] font-bold relative">Wahana<span class="underline-animation"></span></a></li>
                <li><a href="/fasilitas" class="text-[#387F39] font-bold relative">Fasilitas<span class="underline-animation"></span></a></li>
                <li><a href="/news" class="text-[#387F39] font-bold relative">News<span class="underline-animation"></span></a></li>
                <li><a href="/toko" class="text-[#387F39] font-bold relative">Toko<span class="underline-animation"></span></a></li>
                <li><a href="/contact" class="text-[#387F39] font-bold relative">Contact Us<span class="underline-animation"></span></a></li>
            </ul>
        </nav>
    </header> 
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>

    // navbar
    const menuToggle = document.getElementById('menu-toggle');
    const navMenu = document.querySelector('nav ul');

    menuToggle.addEventListener('click', () => {
        setTimeout(() => {
            navMenu.classList.toggle('hidden');
        }, 100);
    });
    $(document).ready(function(){
        let lastScrollTop = 0;
        let navbar = $('#navbar');
        let scrollThreshold = 50; 

        $(window).scroll(function() {
            let scrollTop = $(this).scrollTop();

            if (Math.abs(scrollTop - lastScrollTop) > scrollThreshold) {  
                if (scrollTop > lastScrollTop) {
                    navbar.stop(true, true).slideUp('slow');  
                } else {
                    navbar.stop(true, true).slideDown('slow'); 
                }
                lastScrollTop = scrollTop;
            }
        });
    });
    
</script>


