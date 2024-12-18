<div x-data>
    <aside :class="$store.showSidebar.on ? 'lg:w-64' : 'lg:w-0'" x-transition.duration.500ms
        class="fixed top-0 left-0 z-50 lg:z-40 w-64 lg:w-0 h-screen lg:pt-14 transition-transform -translate-x-full bg-white border-r border-gray-200 lg:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
        aria-label="Sidenav" id="drawer-navigation">


        <div class="flex items-center bg-gray-100 px-5 pt-3 pb-2 border-b border-gray-200 lg:hidden">
            <h5 id="drawer-navigation-label"
                class="text-base font-semibold text-gray-500 uppercase dark:text-gray-400 mr-auto">
                <a href="https://flowbite.com" class="flex items-center justify-between">
                    <img src="/static/images/logo.png" class="mr-3" alt="Flowbite Logo" />
                    <span class="self-center text-lg font-semibold whitespace-nowrap dark:text-white">AB Company</span>
                </a>
            </h5>
            <button type="button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation"
                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absollute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
                <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Close menu</span>
            </button>
        </div>

        <div :class="$store.showSidebar.on ? 'lg:block' : 'lg:hidden'"
            class="overflow-y-auto py-4 px-3 h-full bg-white dark:bg-gray-800">
            <ul class="space-y-2">

                <!-- <x-layout.sub.sidebar-item label="{{ __('Dashboard') }}" icon="fa-solid fa-gauge"
                    route="{{ route('dashboard') }}" /> -->
                <!-- <x-layout.sub.sidebar-item label="{{ __('Home') }}" icon="fa-solid fa-gauge"
                    route="{{ route('home') }}" /> -->

                <x-layout.sub.sidebar-collapse id="pages" label="{{ __('Carousel') }}" icon="fa-solid fa-gauge">
                    <x-layout.sub.sidebar-collapse-item label="{{ __('Add Carousel') }}" route="{{route('carousel.create')}}" />
                    <x-layout.sub.sidebar-collapse-item label="{{ __('View Carousel') }}" route="{{route('carousel.index')}}" />
                </x-layout.sub.sidebar-collapse>
                <x-layout.sub.sidebar-collapse id="news" label="{{ __('News') }}" icon="fa-solid fa-pager">
                    <x-layout.sub.sidebar-collapse-item label="{{ __('Add News') }}" route="{{route('post.create')}}" />
                    <x-layout.sub.sidebar-collapse-item label="{{ __('View News') }}" route="{{route('post.index')}}" />
                </x-layout.sub.sidebar-collapse>
                <x-layout.sub.sidebar-collapse id="promo" label="{{ __('Promo') }}"
                    icon="fa-solid fa-pagerfa-solid fa-percent">
                    <x-layout.sub.sidebar-collapse-item label="{{ __('Add Promo') }}" route="{{route('post.promo')}}" />
                    <x-layout.sub.sidebar-collapse-item label="{{ __('View Promo') }}" route="{{route('view.promo')}}" />
                </x-layout.sub.sidebar-collapse>
                <x-layout.sub.sidebar-collapse id="wahana" label="{{ __('Wahana') }}"
                    icon="fa-solid fa-pagerfa-solid fa-leaf">
                    <x-layout.sub.sidebar-collapse-item label="{{ __('Add Wahana') }}" route="{{route('post.wahana')}}" />
                    <x-layout.sub.sidebar-collapse-item label="{{ __('View Wahana') }}" route="{{route('view.wahana')}}" />
                </x-layout.sub.sidebar-collapse>
                <x-layout.sub.sidebar-collapse id="fasilitas" label="{{ __('Fasilitas') }}"
                    icon="fa-solid fa-universal-access">
                    <x-layout.sub.sidebar-collapse-item label="{{ __('Add Fasilitas') }}" route="{{route('post.fasilitas')}}" />
                    <x-layout.sub.sidebar-collapse-item label="{{ __('View Fasilitas') }}" route="{{route('view.fasilitas')}}" />
                </x-layout.sub.sidebar-collapse>
                <x-layout.sub.sidebar-collapse id="toko" label="{{ __('Toko') }}"
                    icon="fa-solid fa-pagerfa-solid fa-shopping-bag">
                    <x-layout.sub.sidebar-collapse-item label="{{ __('Add Toko') }}" route="{{route('post.toko')}}" />
                    <x-layout.sub.sidebar-collapse-item label="{{ __('View Toko') }}" route="{{route('view.toko')}}" />
                </x-layout.sub.sidebar-collapse>
            </ul>
        </div>
    </aside>
</div>
