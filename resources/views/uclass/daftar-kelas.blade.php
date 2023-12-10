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
              @foreach($category as $cat)
              <h1 class="fw-bold">{{ $cat->title }} Class</h1>
              @endforeach
              <hr class="border-4 rounded border-warning opacity-100" />
            </div>
      
            <div class="row">
                @foreach ($kelas as $kelas)
                <div class="col-md-4 mb-4">
                    <div class="card border-0 shadow h-100" style="width: max-width">
                    <img src="{{ asset('assets/img/' . $kelas->gambar) }}" class="card-img-top" alt="..." style="object-fit: cover; width: 100%; height: 230px" />
                    <div class="card-body">
                        <h5 class="card-title fw-bold">{{ $kelas->nama }}</h5>
                        <p class="card-text mt-0 text-secondary">Online Class</p>
                        <p class="card-text limited-lines">
                            {{ $kelas->deskripsi }}
                        </p>
                        @if (Auth::check() && Auth::user()->pembelianKelas()->where('kelas_inti_id', $kelas->id)->exists())
                        <a href="{{ route('user.preview-kelas', ['id' => $kelas->id]) }}" class="btn btn-warning fw-bold">Buka Kelas</a>    
                        @else
                        <a href="{{ route('user.preview-kelas', ['id' => $kelas->id]) }}" class="btn btn-warning fw-bold">Rp. {{ number_format($kelas->harga, 0, ',', '.') }}</a>
                        @endif
                    </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
          </div>
    </div>
@endsection