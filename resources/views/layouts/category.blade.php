@extends('layouts.main')

@section('hero')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel carousel-fade" data-bs-ride="carousel">

            <img src="https://images.unsplash.com/photo-1603380353725-f8a4d39cc41e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                alt="" style="width: 100%; filter: brightness(55%)">

            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Selecao</span></h2>
                    <p class="animate__animated fanimate__adeInUp">Ut velit est quam dolor ad a aliquid qui aliquid.
                        Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut.
                        Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore
                        modi architecto.</p>
                    {{-- <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a> --}}
                </div>
            </div>

            {{-- <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
            </a> --}}

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

    </section><!-- End Hero -->
@endsection

@section('main')
<div class="row">
    <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
        <h3>Abadikan momen berharga dengan keindahan yang abadi.</h3>
        <p class="fst-italic"> 
            Apakah Anda ingin mengabadikan momen-momen berharga dalam hidup Anda dengan cara yang istimewa? 
            Kami hadir dengan jasa fotografi yang menghadirkan keahlian profesional dan sentuhan kreatif 
            untuk menciptakan gambar-gambar yang tak terlupakan. Kami memiliki 3 jenis jasa fotografi yang 
            dapat membantu anda dalam menemukan style fotografi yang cocok untuk momen berharga anda :
        </p>
        <ul>
            <li><i class="ri-check-double-line"></i> Jasa Foto Produk</li>
            <li><i class="ri-check-double-line"></i> Jasa Foto Pernikahan</li>
            <li><i class="ri-check-double-line"></i> Jasa Foto Acara</li>
        </ul>
        <button type="button" class="btn btn-color" style="color: #f06404">
            <a href="">Selengkapnya</a>
        </button>
    </div>
    <div class="col-lg-6 order-1 order-lg-2 text-center">
        <img src="assets/img/features-1.png" alt="" class="img-fluid">
    </div>
</div>
@endsection
