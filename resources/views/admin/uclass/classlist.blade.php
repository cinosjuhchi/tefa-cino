@extends('admin.dashboard.layouts.main')
@section('content')
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<div class="container my-4">
    <!-- d-flex nya abaikan saja -->
    <div class="row headline mb-4">
      <div class="d-flex justify-content-between">
        <h1 class="fw-bold">Class List Admin</h1>

        <div class="button">
          <a href= "{{ route('uclass.form.class') }}" class="btn btn-warning fw-bold me-2">Add Class</a>
        </div>
      </div>
      <hr class="border-4 rounded border-warning opacity-100" />
    </div>
    <div class="wrap mb-5">
        <div class="title">
          <p class="m-0">Category</p>
          <h1 class="fw-bold">Rekayasa Perangkat Lunak</h1>
        </div>       
        <div class="row cards mt-5">
            @foreach($rpl as $kate)
            <div class="col-md-6 col-lg-4 mb-4">
              <div class="card border-0 shadow h-100" style="width: max-width">
                <img src="{{ asset('assets/img/' . $kate->gambar) }}" class="card-img-top" alt="..." style="object-fit: cover; width: 100%; height: 230px" />
                <div class="card-body">
                  <h5 class="card-title fw-bold limited-lines-1">{{ $kate->nama }}</h5>
                  <p class="card-text mt-0 text-warning fs-5 fw-bold">Rp.{{ number_format($kate->harga, 0, ',', '.') }}</p>
                    <p class="card-text limited-lines-2">
                      {!! $kate->deskripsi !!}
                    </p>
                  <div class="d-flex">
                      <a href="{{ route('uclass.form.kelas', ['id' => $kate->id]) }}" class="btn btn-warning fw-bold me-2">Tambah Materi</a>
                      <a href="{{ route('uclass.form.update.index', ['id' => $kate->id]) }}" class="btn btn-warning fw-bold me-2">Edit Kelas</a>
                      <a href="{{ route('uclass.form.kelas', ['id' => $kate->id]) }}" class="btn btn-warning fw-bold me-2">Edit Materi</a>
                    </div>  
                </div>
              </div>
            </div>        
            @endforeach
          </div>
    </div>
    <div class="wrap mb-5">
        <div class="title">
          <p class="m-0">Category</p>
          <h1 class="fw-bold">Akuntasi Keuangan Lembaga</h1>
        </div>       
        <div class="row cards mt-5">
            @foreach($akl as $kate)
            <div class="col-md-6 col-lg-4 mb-4">
              <div class="card border-0 shadow h-100" style="width: max-width">
                <img src="{{ asset('assets/img/' . $kate->gambar) }}" class="card-img-top" alt="..." style="object-fit: cover; width: 100%; height: 230px" />
                <div class="card-body">
                  <h5 class="card-title fw-bold limited-lines-1">{{ $kate->nama }}</h5>
                  <p class="card-text mt-0 text-warning fs-5 fw-bold">Rp.{{ number_format($kate->harga, 0, ',', '.') }}</p>
                    <p class="card-text limited-lines-2">
                      {!! $kate->deskripsi !!}
                    </p>
                    <div class="d-flex">
                      <a href="{{ route('uclass.form.kelas', ['id' => $kate->id]) }}" class="btn btn-warning fw-bold me-2">Tambah Materi</a>
                      <a href="{{ route('uclass.form.update.index', ['id' => $kate->id]) }}" class="btn btn-warning fw-bold me-2">Edit Kelas</a>
                      <a href="{{ route('uclass.form.kelas', ['id' => $kate->id]) }}" class="btn btn-warning fw-bold me-2">Edit Materi</a>
                    </div>  
                </div>
              </div>
            </div>        
            @endforeach
          </div>
    </div>
    <div class="wrap mb-5">
        <div class="title">
          <p class="m-0">Category</p>
          <h1 class="fw-bold">Bisnis Daring Pemasaran</h1>        
        </div>       
        <div class="row cards mt-5">
            @foreach($bdp as $kate)
            <div class="col-md-6 col-lg-4 mb-4">
              <div class="card border-0 shadow h-100" style="width: max-width">
                <img src="{{ asset('assets/img/' . $kate->gambar) }}" class="card-img-top" alt="..." style="object-fit: cover; width: 100%; height: 230px" />
                <div class="card-body">
                  <h5 class="card-title fw-bold limited-lines-1">{{ $kate->nama }}</h5>
                  <p class="card-text mt-0 text-warning fs-5 fw-bold">Rp.{{ number_format($kate->harga, 0, ',', '.') }}</p>
                    <p class="card-text limited-lines-2">
                      {!! $kate->deskripsi !!}
                    </p>
                  <div class="d-flex">
                      <a href="{{ route('uclass.form.kelas', ['id' => $kate->id]) }}" class="btn btn-warning fw-bold me-2">Tambah Materi</a>
                      <a href="{{ route('uclass.form.update.index', ['id' => $kate->id]) }}" class="btn btn-warning fw-bold me-2">Edit Kelas</a>
                      <a href="{{ route('uclass.form.kelas', ['id' => $kate->id]) }}" class="btn btn-warning fw-bold me-2">Edit Materi</a>
                    </div>  
                </div>
              </div>
            </div>        
            @endforeach
          </div>
    </div>
    <div class="wrap mb-5">
        <div class="title">
          <p class="m-0">Category</p>
          <h1 class="fw-bold">Otomatisasi dan Tata Kelola Perkantoran</h1>
        </div>       
        <div class="row cards mt-5">
            @foreach($otkp as $kate)
            <div class="col-md-6 col-lg-4 mb-4">
              <div class="card border-0 shadow h-100" style="width: max-width">
                <img src="{{ asset('assets/img/' . $kate->gambar) }}" class="card-img-top" alt="..." style="object-fit: cover; width: 100%; height: 230px" />
                <div class="card-body">
                  <h5 class="card-title fw-bold limited-lines-1">{{ $kate->nama }}</h5>
                  <p class="card-text mt-0 text-warning fs-5 fw-bold">Rp.{{ number_format($kate->harga, 0, ',', '.') }}</p>
                    <p class="card-text limited-lines-2">
                      {!! $kate->deskripsi !!}
                    </p>
                  <div class="d-flex">
                      <a href="{{ route('uclass.form.kelas', ['id' => $kate->id]) }}" class="btn btn-warning fw-bold me-2">Tambah Materi</a>
                      <a href="{{ route('uclass.form.update.index', ['id' => $kate->id]) }}" class="btn btn-warning fw-bold me-2">Edit Kelas</a>
                      <a href="{{ route('uclass.form.kelas', ['id' => $kate->id]) }}" class="btn btn-warning fw-bold me-2">Edit Materi</a>
                    </div>  
                </div>
              </div>
            </div>        
            @endforeach
          </div>
    </div>
  </div>
@endsection