@extends('layouts.main')

@include('layouts.category-header')

@section('hero')
    @include('layouts.carousel-category', [
        'title' => 'Kelas Berbayar',
        'description' => 'Belajar lebih cepat dengan kami!',
        'buttonUrl' => '#about',
        'buttonText' => 'Selengkapnya',
    ])
@endsection
@section('main')
    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="section-title" data-aos="zoom-out">
                    <h2>Kelas</h2>
                    <p>Seberapa penting Kelas Online?</p>
                </div>

                <div class="row content justify-content-between" data-aos="fade-up">
                    <div class="col-lg-6">
                        <p style="margin-bottom: 40px">
                            Kelas online adalah cara belajar yang memanfaatkan teknologi internet untuk menghubungkan guru dan siswa tanpa batasan ruang dan waktu. Dengan kelas online, Anda dapat mengajar atau belajar apa saja, kapan saja, dan di mana saja, asalkan Anda memiliki perangkat yang terhubung ke internet.
                        <ul>
                            <li><i class="ri-check-double-line"></i> Dipelajari kapan saja</li>
                            <li><i class="ri-check-double-line"></i> Tidak ada batasan jarak</li>
                            <li><i class="ri-check-double-line"></i> Lebih efektif</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 pt-lg-0 image-about pt-4">
                        <img src="{{ Vite::asset('resources/assets/img/category/about-design.jpg') }}" alt=""
                            class="img-pricing">
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Section -->
        
        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">
                <div class="section-title" data-aos="zoom-out">
                    <h2>Kelas Online</h2>
                    <p>Online Class</p>
                    <span>Kami menyediakan kelas online seperti ini :</span>
                </div>
                <div class="row gap-1">
                  @foreach($category as $ct)
                    <div class="col-lg">
                      <div class="card border-0 shadow h-100" style="width: max-width">
                        <img src="{{ Vite::asset('resources/assets/img/uclass/accountimage.png') }}" class="card-img-top" alt="..." style="object-fit: cover; width: 100%; height: 230px;"/>
                        <div class="card-body">
                          <h5 class="card-title">{{ $ct->title }}</h5>
                          <p class="card-text mt-0 text-secondary">Online Class</p>
                          <p class="card-text limited-lines">{{ $ct->body }}</p>
                          <a href="{{ route('user.uclass.kategori-kelas', ['kategori' => $ct->id]) }}" class="btn btn-warning fw-bold">Join Class</a>
                        </div>
                      </div>
                    </div>
                    @endforeach                                                  
                </div>
            </div>
        </section>
        
        <!-- End Services Section -->        
    </main>
@endsection
