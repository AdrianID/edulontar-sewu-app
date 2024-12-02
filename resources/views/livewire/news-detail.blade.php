<div>
    <!-- Hero Section -->
    <div class="mt-16 relative text-white">
        <div 
            class="relative h-96 bg-cover bg-center" 
            style="background-image: url('{{ asset('storage/'.$featured_image) }}');">
            <div class="absolute inset-0 bg-black bg-opacity-50"></div>
            <div class="relative flex items-start justify-start h-full px-8 py-6">
                <h1 class="text-4xl font-bold">{{ $title }}</h1>
            </div>
        </div>
    </div>

    <!-- Content Section -->
    <div class="bg-gray-50 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <article class="prose lg:prose-xl mx-auto">
                {!! $content !!}
            </article>
        </div>
    </div>

    <!-- Related News Section -->
    <div class="bg-gradient-to-r from-blue-50 to-gray-100 py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold mb-6">Related News</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($this->relatedPosts() as $related)
                    <a href="{{ route('news.detail', $related->slug) }}" class="block bg-white shadow rounded-lg overflow-hidden transform hover:scale-105 transition">
                        <div 
                            class="h-40 bg-cover bg-center" 
                            style="background-image: url('{{ asset('storage/'.$related->featured_image) }}');">
                        </div>
                        <div class="p-4">
                            <h3 class="text-lg font-semibold">{{ $related->title }}</h3>
                            <p class="text-gray-600 text-sm mt-2">{{ Str::limit(strip_tags($related->content), 100) }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
