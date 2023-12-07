@extends('layouts.show-lay')
@section('main')    
    <nav class="d-flex justify-content-between align-items-center py-3 px-4 shadow bg-warning sticky-top">
      <a href="" class="nav-link">
        <div class="back d-flex gap-2 fs-5">
          <i class="bi bi-arrow-left"></i>
          <p class="m-0">Back</p>
        </div>
      </a>
      <div class="title">
        <p class="m-0 fs-5 fw-bold">{{ $kelas->nama }}</p>
      </div>
    </nav>
    <div class="container content">
        <div class="row ms-4">
        <div class="video col-md-12 col-lg-8">
            <iframe
            height="418"
            src="{{ $kelas->link_vid }}"
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen
            class="col-12 rounded-2 shadow-sm object-fit-cover"
            ></iframe>

            <div class="desc">
            <h3 class="mt-2">{{ $kelas->nama }}</h3>
            <hr class="text-warning opacity-100 border-4 rounded" />

            <p>
                {{ $kelas->deskripsi }}
            </p>
            </div>
        </div>

        <div class="col-md-12 col-lg-4">
            <aside class="side">
            <div class="p-3 shadow rounded">
                <h4 class="fw-bold">Next Class</h4>
                <hr class="text-warning opacity-100 border-2 rounded" />

                <div class="scrolly">
                @foreach($hasclass as $kelas)
                <div class="next d-flex gap-2">
                    <img src="{{ Vite::asset('resources/assets/img/uclass/'. $kelas->gambar) }}" alt="" class="thumbnail mb-2 rounded" style="object-fit: cover; width: 128px; height: 100%" />

                    <div class="description">
                    <p class="fw-bold m-0">{{ $kelas->nama }}</p>
                    <p class="m-0 limited-lines">{{ $kelas->deskripsi }}</p>
                    </div>
                </div>                
                @endforeach
                </div>
            </div>
            </aside>
        </div>
        </div>
    </div>
@endsection