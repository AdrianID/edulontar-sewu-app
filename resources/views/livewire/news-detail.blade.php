<div>
    <!-- Hero Section -->
    <div class="relative bg-gray-900 text-white">
        <div class="absolute inset-0">
            <img src="{{ asset('storage/'.$featured_image) }}" alt="{{ $title }}" class="w-full h-96 object-cover opacity-60">
        </div>
        <div class="relative max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl font-bold">{{ $title }}</h1>
        </div>
    </div>

    <!-- Content Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <article class="prose lg:prose-xl mx-auto">
            {!! $content !!}
        </article>
    </div>

    <!-- Related News Section -->
    <div class="bg-gray-100 py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold mb-6">Related News</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($this->relatedPosts() as $related)
                    <a href="{{ route('news.detail', $related->slug) }}" class="block bg-white shadow rounded-lg overflow-hidden">
                        <img src="{{ asset('storage/'.$related->featured_image) }}" alt="{{ $related->title }}" class="w-full h-40 object-cover">
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
