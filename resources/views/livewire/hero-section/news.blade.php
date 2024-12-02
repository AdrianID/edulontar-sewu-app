<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
<style>
  .carousel {
  width: max-content;
  display: flex;
  }
  .carousel-item {
      min-width: 300px;
      max-width: 300px;
      transition: transform 0.5s ease;
  }
</style>
<div>
  <section id="news" class="py-16 bg-gray-100 relative">
    <h2 class="text-3xl font-bold text-gray-800 text-center mb-8" data-aos="fade-up">Latest News</h2>
    <div class="news-carousel relative w-full overflow-hidden">
        <!-- Carousel Wrapper -->
        <div class="carousel flex transition-transform ease-linear duration-500" id="carousel-news">
            <!-- Card Structure Remains Same -->
            <!-- Repeat Cards Here (Add as many as you need) -->
             @foreach($news as $item)
             <div class="carousel-item bg-white p-4 shadow-md rounded-md mx-2" data-aos="fade-up">
    <img src="{{ asset('/storage/'.$item['header_content_image']) }}" alt="News Image 1" class="w-full h-40 object-cover rounded-md">
    <h3 class="text-xl font-bold mt-4">
        <a href="{{ '/news/'.$item['slug'] }}">{{ $item['title'] }}</a>
    </h3>
    <p class="text-gray-600 mt-2">
        {{ Str::limit(strip_tags($item['content']), 100, '...') }}
        <a href="{{ '/news/'.$item['slug'] }}" class="text-blue-500 hover:underline">Read more</a>
    </p>
</div>

            @endforeach
             
            <!-- Add more cards... -->
        </div>
    </div>

    <!-- Carousel Navigation Arrows -->
    <button id="prevNewsBtn" class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-gray-600 text-white p-3 rounded-full hover:bg-gray-700">
        &#10094; <!-- Left arrow icon -->
    </button>
    <button id="nextNewsBtn" class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-gray-600 text-white p-3 rounded-full hover:bg-gray-700">
        &#10095; <!-- Right arrow icon -->
    </button>
</section>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
{{-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
  $(document).ready(function(){
      var carousel = $('.carousel');
      var itemWidth = $('.carousel-item').outerWidth(true);
      var totalItems = $('.carousel-item').length;
      console.log(totalItems)
      console.log(itemWidth)
      if(totalItems <= 4){
        $('#nextNewsBtn').hide();
        $('#prevNewsBtn').hide();

        $('#carousel-news').css('justify-content','center').css('width', 'inherit');;
      }else{
          $('.carousel').append($('.carousel').html());
        }
  
      // Clone the first set of items for infinite scrolling
  
      // Initialize position
      var currentPosition = 0;
      var isMoving = false;
  
      // Handle the next button click
      $('#nextNewsBtn').click(function(){
          if (!isMoving && totalItems > 4) {
              isMoving = true;
              currentPosition -= itemWidth;
              carousel.css('transition', 'transform 0.5s ease');
              carousel.css('transform', 'translateX(' + currentPosition + 'px)');
  
              setTimeout(function(){
                  if (Math.abs(currentPosition) >= (itemWidth) * totalItems) {
                      currentPosition = 0;
                      carousel.css('transition', 'none');
                      carousel.css('transform', 'translateX(0)');
                  }
                  isMoving = false;
              }, 500);
          }
      });
  
      // Handle the previous button click
      $('#prevNewsBtn').click(function(){
          if (!isMoving) {
              isMoving = true;
              if (currentPosition === 0) {
                  currentPosition = -(itemWidth * totalItems);
                  carousel.css('transition', 'none');
                  carousel.css('transform', 'translateX(' + currentPosition + 'px)');
              }
  
              setTimeout(function(){
                  currentPosition += itemWidth;
                  carousel.css('transition', 'transform 0.5s ease');
                  carousel.css('transform', 'translateX(' + currentPosition + 'px)');
                  isMoving = false;
              }, 50);
          }
      });
  
      // Initialize AOS
      AOS.init();
  });
  </script>

