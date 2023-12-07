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
    <div id="main">
        <div class="container my-4">
            <!-- d-flex nya abaikan saja -->
            <div class="row headline mb-4">
              <h1 class="fw-bold">Online Class</h1>
              <hr class="border-4 rounded border-warning opacity-100" />
            </div>
      
            <div class="row">
            @foreach ($all as $kelas)
              <div class="col-md-4 mb-4">
                <div class="card border-0 shadow h-100" style="width: max-width">
                  <img src="{{ Vite::asset('resources/assets/img/uclass/' . $kelas->gambar) }}" class="card-img-top" alt="..." style="object-fit: cover; width: 100%; height: 230px" />
                  <div class="card-body">
                    <h5 class="card-title fw-bold">{{ $kelas->nama }}</h5>
                    <p class="card-text mt-0 text-secondary">Online Class</p>
                    <p class="card-text limited-lines">
                        {{ $kelas->deskripsi }}
                    </p>
                    <a href="{{ route('user.preview-kelas', ['id' => $kelas->id]) }}" class="btn btn-warning fw-bold">Rp{{ $kelas->harga }}</a>
                  </div>
                </div>
              </div>
              @endforeach
              </div>
            </div>
          </div>
        {{-- <div class="container px-5">
            <div class="row">
                <div class="col-md-12">
                    <h2>Daftar Kelas</h2>
                    <div class="card-columns">
                        @foreach ($kelas as $kelas)
                            <div class="card mt-5">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $kelas->nama }}</h5>
                                    <p class="card-text">{{ $kelas->deskripsi }}</p>
                                    <button class="btn btn-primary">{{ $kelas->harga }}</button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
@endsection