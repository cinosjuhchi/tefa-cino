   <!-- ======= Hero Section ======= -->
   <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
       <div id="heroCarousel" data-bs-interval="5000" class="carousel carousel-fade" data-bs-ride="carousel">
           <div class="carousel-image-container">
               <img src="{{ asset('assets/img/category/carousel.jpg') }}" alt="">

               <!-- Slide 1 -->
               <div class="carousel-item active">
                   <div class="carousel-container">
                       <h2 class="animate__animated animate__fadeInDown">{{ $title }}</span></h2>
                       <p class="animate__animated fanimate__adeInUp">{{ $description }}</p>
                       <a href="{{ $buttonUrl }}"
                           class="btn-get-started animate__animated animate__fadeInUp scrollto">{{ $buttonText }}</a>
                   </div>
               </div>
           </div>
       </div>

       <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" style="position: absolute"
           xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
           <defs>
               <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
           </defs>
           <g class="wave1">
               <use xlink:href="#wave-path" x="50" y="3" style="opacity: 25%" fill="#fff">
           </g>
           <g class="wave2">
               <use xlink:href="#wave-path" x="50" y="0" style="opacity: 15%" fill="#fff">
           </g>
           <g class="wave3">
               <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
           </g>
       </svg>

   </section>
   <!-- End Hero -->
