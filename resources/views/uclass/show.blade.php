@extends('layouts.show-lay')
@section('main')    
    <nav class="d-flex justify-content-between align-items-center py-3 px-4 shadow bg-warning sticky-top">
      <a href="{{ route('user.preview-kelas', ['id' => $materi->kelas_inti_id]) }}" class="nav-link">
        <div class="back d-flex gap-2 fs-5">
          <i class="bi bi-arrow-left"></i>
          <p class="m-0">Back</p>
        </div>
      </a>
      <div class="title">
        <p class="m-0 fs-5 fw-bold">{{ $materi->nama }}</p>
      </div>
    </nav>  
    <div class="container content vh-100">
      <div class="row my-4">
        <div class="video col-md-12 col-lg-8">
          <iframe
            height="418"
            src="{{ $materi->link_vid }}"
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen
            class="col-12 rounded-2 shadow-sm object-fit-cover"
          ></iframe>

          <div class="desc">
            <h3 class="mt-2">{{ $materi->nama }}</h3>
            <hr class="text-warning opacity-100 border-4 rounded mb-2" />

            <p class="text-secondary mb-2">Uploaded at {{ $materi->created_at->diffForHumans() }}</p>
            <p class="mt-0">
              {{ $materi->deskripsi }}
            </p>
          </div>
        </div>

        <div class="col-md-12 col-lg-4">
          <aside class="side">
            <div class="p-3 shadow rounded">
              <div class="headline d-flex align-items-center justify-content-between">
                <h4 class="fw-bold">{{ $materi->nama }}</h4>
                {{-- <h4 class="fw-bold">Isi Kelas</h4> --}}
                <p class="m-0 text-secondary">{{ $total }} Video</p>
              </div>
              <hr class="text-warning opacity-100 border-2 rounded" />

              <div class="scrolly">
                @foreach($kelas as $kelasu)
                <a href="{{ route('user.video.kelas', ['id' => $kelasu->id]) }}" class="{{ $materi->id === $kelasu->id ? 'text-white' : 'text-dark' }}">                
                  <div class="next d-flex p-2 gap-2 {{  $materi->id === $kelasu->id ? 'active-show' : '' }} mb-2 rounded me-2">
                    <img src="{{ asset('assets/img/' . $kelasu->gambar) }} }}" alt="" class="thumbnail rounded" style="object-fit: cover; width: 128px; height: 100%" />

                    <div class="description">
                      <p class="fw-bold m-0 limited-lines-1">#{{ ++$index }} {{ $kelasu->nama }}</p>
                      <p class="m-0 limited-lines-2">{{ $kelasu->deskripsi }}</p>
                    </div>
                  </div>     
                </a>           
                @endforeach
              </div>
            </div>
          </aside>
        </div>
      </div>
    </div>
@endsection