@extends('layouts.main')

@include('layouts.subcategory-header')

@section('hero')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel carousel-fade" data-bs-ride="carousel">

            <img src="https://images.unsplash.com/photo-1603380353725-f8a4d39cc41e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                alt="" style="width:100vw; filter: brightness(55%)">

            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">Jasa Design Logo</span></h2>
                    <p class="animate__animated fanimate__adeInUp">Logo adalah jantung merek Anda, wujud visual yang
                        mewakili identitas dan nilai-nilai bisnis Anda.</p>
                    <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Selengkapnya</a>
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
@endsection

@section('main')
    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">
                <div class="section-title" data-aos="zoom-out">
                    <h2>Jasa Design Logo</h2>
                    <p>Mengapa menggunakan jasa Kami?</p>
                </div>

                <div class="row content" data-aos="fade-up">
                    <div class="col-lg-6">
                        <p style="margin-bottom: 20px; text-align: justify">
                            Logo adalah jantung merek Anda, wujud visual yang mewakili identitas dan nilai-nilai bisnis
                            Anda. Maka dari itu, penting bagi Anda untuk memiliki logo yang kuat dan menarik. Apakah Anda
                            ingin menonjol di antara pesaing, menarik perhatian pelanggan potensial, dan membangun kesan
                            yang tak terlupakan?
                        </p>
                        <p style="margin-bottom: 20px; text-align: justify">
                            Kami di sini untuk membantu! Dengan jasa pembuatan logo kami, Anda akan mendapatkan desain yang
                            unik, kreatif, dan profesional yang mencerminkan esensi bisnis Anda. Kami memahami pentingnya
                            logo sebagai alat pemasaran yang kuat, yang mampu mengkomunikasikan merek Anda dengan jelas dan
                            membangun daya ingat yang tinggi.
                        </p>
                        <p>
                            Hubungi Kami sekarang!
                        </p>
                    </div>
                    <div class="col-lg-6 pt-lg-0 image-about pt-4">
                        <img src="https://source.unsplash.com/random/900×700/?illustrating" alt=""
                            class="img-pricing">
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Section -->

        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing">
            <div class="container">
                <div class="section-title" data-aos="zoom-out">
                    <h2>Ragam harga</h2>
                    <p>Penawaran Harga Jasa</p>
                </div>

                <div class="row justify-content-center">
                    @foreach ($category->plans as $plan)
                        <div class="mx-3 mb-5 col-lg-3 col-md-6 d-flex align-items-stretch" style="width: auto !important">
                            <div class="box {{ $loop->last ? 'featured' : '' }} d-flex flex-column justify-content-between"
                                data-aos="zoom-in">
                                <div>
                                    <h3>{{ $plan->title }}</h3>

                                    <h4><sup>Rp</sup>{{ number_format($plan->price, 0, ',', '.') }}<span></span></h4>
                                    <ul>
                                        @foreach ($plan->features as $feature)
                                            <li>{{ $feature->text }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="btn-wrap">
                                    <a href="{{ route('user.design.form.index', ['category' => 'Logo', 'plan' => $plan->title]) }}"
                                        class="btn-buy">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- End Pricing Section -->
    </main>
@endsection
