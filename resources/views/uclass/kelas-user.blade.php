@extends('layouts.main')

@include('layouts.category-header')

@section('hero')
    @include('layouts.carousel-category', [
        'title' => 'Kelas Saya',
        'description' => 'Selamat belajar!',
        'buttonUrl' => "/uclass/daftar-kelas",
        'buttonText' => 'All Class',
    ])
@endsection

@section('main')
    <div id="main">
        <div class="container my-4">
            <div class="row headline mb-4">            
                <h1 class="fw-bold">Kelas Saya</h1>        
                <hr class="border-4 rounded text-warning opacity-100" />
            </div>
            <div class="row" id="about">
                @foreach ($hasClass as $kelas)
                <div class="col-md-4 mb-4">
                    <div class="card border-0 shadow h-100" style="width: max-width">
                    <img src="{{ asset('assets/img/' . $kelas->gambar ) }}" class="card-img-top" alt="..." style="object-fit: cover; width: 100%; height: 230px" />
                    <div class="card-body">
                        <h5 class="card-title fw-bold">{{ $kelas->nama }}</h5>
                        <p class="card-text mt-0 text-secondary">Online Class</p>
                        <p class="card-text limited-lines">
                            {{ $kelas->deskripsi }}
                        </p>
                        <a href="{{ route('user.preview-kelas', ['id' => $kelas->id]) }}" class="btn btn-warning fw-bold">BUKA KELAS</a>
                    </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        
    </div>
@endsection