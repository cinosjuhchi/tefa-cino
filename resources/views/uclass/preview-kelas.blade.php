@extends('layouts.show-lay')
@section('main')    
<nav class="d-flex justify-content-between align-items-center py-3 px-4 shadow bg-warning sticky-top">
  <a href="{{ route('user.uclass.index') }}" class="nav-link text-dark">
    <div class="back d-flex gap-2 fs-5">
      <i class="bi bi-arrow-left"></i>
      <p class="m-0">Back</p>
    </div>
  </a>
</nav>
<div class="container mt-3">
  <div class="row content">
    <div class="kiri col-md-12 col-lg-8 mb-3">
        
      <img src="{{ asset('assets/img/' . $kelas->gambar) }}" alt="" style="object-fit: cover; width: 100%; max-height: 200px;" class="rounded-2 col-md-12 col-lg-12 mb-3" />

      <div class="deskripsi">
        <h2 class="fw-bold">{{ $kelas->nama }}</h2>

        <hr class="text-warning opacity-100 border-4 rounded mb-2" />

        <p class="text-secondary">Uploaded at {{ $kelas->created_at->diffForHumans() }}</p>
        <p class="">
          {{  $kelas->deskripsi  }}
        </p>
        @if( Auth::user()->pembelianKelas()->where('kelas_inti_id', $kelas->id)->exists())
        <p class="fw-bold m-0">Status Kelas :</p>
        <p class="fw-bold mt-0 fs-4 text-warning">Terbuka</p>
        <a href="{{ route('user.video.kelas', ['id' => $kelasPertama->id]) }}" class="btn btn-warning fw-bold">BUKA KELAS</a>
        @else
        <p class="fw-bold m-0">Status Kelas :</p>
        <p class="fw-bold mt-0 fs-4 text-warning">Pending</p>
          @if(Auth::user()->buyClass()->where('kelas_id', $kelas->id)->exists())
            <button class="btn btn-warning fw-bold">Pending</button>
          @else
            <a href="{{ route('user.uclass.form.index', ['id' => $kelas->id]) }}" class="btn btn-warning fw-bold">GABUNG SEKARANG</a>
          @endif
        @endif
      </div>
    </div>

    <div class="kanan col-md-12 col-lg-4">
      <aside class="side">
        <div class="p-3 shadow rounded">
          <div class="headline d-flex align-items-center justify-content-between">
            <h4 class="fw-bold">Isi Kelas</h4>
            <p class="m-0 text-secondary">{{ $total }} Video</p>
          </div>
          <hr class="text-warning opacity-100 border-2 rounded" />

          <!-- Jika di klik akan mengarahkan ke form -->
          @if ($userdua->pembelianKelas()->where('kelas_inti_id', $kelas->id)->exists())
          @foreach($kelasDetail as $kelasu)
          <a href="{{ route('user.video.kelas', ['id' => $kelasu->id]) }}" class="nav-link">
            <div class="clickPay">
              <div class="next d-flex gap-2">
                <img src="{{asset('assets/img/' . $kelasu->gambar) }}" alt="" class="thumbnail mb-2 rounded" style="object-fit: cover; width: 128px; height: 100%" />

                <div class="description">
                  <p class="fw-bold m-0 limited-lines-1">{{ $kelasu->nama }}</p>
                  <p class="m-0 limited-lines-1">{{ $kelasu->deskripsi }}</p>
                </div>
              </div>              
            </div>
          </a>          
          @endforeach
          @else
          @foreach($kelasDetail as $kelasu)
          <a href="{{ route('user.uclass.form.index', ['id' => $kelas->id]) }}" class="nav-link">
            <div class="clickPay">
              <div class="next d-flex gap-2">
                <img src="{{asset('assets/img/' . $kelasu->gambar) }}" alt="" class="thumbnail mb-2 rounded" style="object-fit: cover; width: 128px; height: 100%" />

                <div class="description">
                  <p class="fw-bold m-0 limited-lines-1">{{ $kelasu->nama }}</p>
                  <p class="m-0 limited-lines-1">{{ $kelasu->deskripsi }}</p>
                </div>
              </div>              
            </div>
          </a>
          @endforeach
          @endif
          <div class="buttton mt-3">
            @if ($userdua->pembelianKelas()->where('kelas_inti_id', $kelas->id)->exists())
                <a href="{{ route('user.video.kelas', ['id' => $kelas->id]) }}" class="btn btn-warning fw-bold">Buka Kelas</a>    
                @else
                @if(Auth::user()->buyClass()->where('kelas_id', $kelas->id)->exists())
                <button class="btn btn-warning fw-bold">Pending</button>
                @else
                <a href="{{ route('user.uclass.form.index', ['id' => $kelas->id]) }}" class="btn btn-warning fw-bold">GABUNG SEKARANG</a>                
                @endif
             @endif
          </div>
        </div>
      </aside>
    </div>
  </div>
</div>



    {{-- <nav class="d-flex justify-content-between align-items-center py-3 px-4 shadow bg-warning sticky-top">
      <a href="{{ route('user.uclass.index') }}" class="nav-link text-dark">
        <div class="back d-flex gap-2 fs-5">
          <i class="bi bi-arrow-left"></i>
          <p class="m-0">Back</p>
        </div>
      </a>
    </nav>
    <div class="container d-flex align-items-center justify-content-center vh-100">
        <div class="row content-dev">
          <div class="kiri col-md-12 col-lg-8 mb-3">
              
            <img src="{{ asset('assets/img/' . $kelas->gambar) }}" alt="" style="object-fit: cover; width: 100%; max-height: 200px;" class="rounded-2 col-md-12 col-lg-12 mb-3" />
  
            <div class="deskripsi">
              <h2 class="fw-bold">{{ $kelas->nama }}</h2>
  
              <hr class="text-warning opacity-100 border-4 rounded mb-2" />
  
            <p class="text-secondary">Uploaded at {{ $kelas->created_at->diffForHumans() }}</p>
              <p class="m-0">
                {{  $kelas->deskripsi  }}
              </p>

              @if( Auth::user()->pembelianKelas()->where('kelas_inti_id', $kelas->id)->exists())
              <p class="fw-bold m-0">Status :</p>
              <p class="fw-bold mt-0 fs-4 text-warning">Terbuka</p>
              <a href="{{ route('user.video.kelas', ['id' => $kelasPertama->id]) }}" class="btn btn-warning fw-bold">BUKA SEKARANG</a>
              @else
              <p class="fw-bold m-0">Harga Kelas :</p>
              <p class="fw-bold mt-0 fs-4 text-warning">Rp. {{ number_format($kelas->harga) }}</p>
              <a href="{{ route('user.uclass.form.index', ['id' => $kelas->id]) }}" class="btn btn-warning fw-bold">GABUNG SEKARANG</a>
              @endif
            </div>
          </div>
  
          <div class="kanan col-md-12 col-lg-4">
          <aside class="side">
              <div class="p-3 shadow rounded">
                <div class="headline d-flex align-items-center justify-content-between">
                  <h4 class="fw-bold">Isi Kelas</h4>
                  <p class="m-0 text-secondary">{{ $total }} Video</p>
                </div>
                <hr class="text-warning opacity-100 border-2 rounded"/>
  
                <!-- Jika di klik akan mengarahkan ke form -->
                @if ($userdua->pembelianKelas()->where('kelas_inti_id', $kelas->id)->exists())
                @foreach($kelasDetail as $kelasu)
                <a href="{{ route('user.video.kelas', ['id' => $kelasu->id]) }}" class="nav-link">
                  <div class="clickPay">
                    <div class="next d-flex gap-2">
                      <img src="{{asset('assets/img/' . $kelasu->gambar) }}" alt="" class="thumbnail mb-2 rounded" style="object-fit: cover; width: 128px; height: 100%" />
  
                      <div class="description">
                        <p class="fw-bold m-0 limited-lines-1">{{ $kelasu->nama }}</p>
                          <p class="m-0 limited-lines-1">{{ $kelasu->deskripsi }}</p>
                      </div>
                    </div>  
                </a>
                @endforeach                  
                @else
                <a href="{{ route('user.uclass.form.index', ['id' => $kelas->id]) }}" class="nav-link">
                    <div class="clickPay">
                      @foreach($kelasDetail as $kelasu)
                      <div class="next d-flex gap-2">
                        <img src="{{ Vite::asset('resources/assets/img/uclass/accountimage.png') }}" alt="" class="thumbnail mb-2 rounded" style="object-fit: cover; width: 128px; height: 100%" />
    
                        <div class="description">
                          <p class="fw-bold m-0 limited-lines-1">{{ $kelasu->nama }}</p>
                          <p class="m-0 limited-lines-1">{{ $kelasu->deskripsi }}</p>
                        </div>
                      </div>  
                      @endforeach                  
                  </a>
                  @endif
                <div class="buttton mt-3">                
                @if ($userdua->pembelianKelas()->where('kelas_inti_id', $kelas->id)->exists())
                <a href="{{ route('user.preview-kelas', ['id' => $kelas->id]) }}" class="btn btn-warning fw-bold">Buka Kelas</a>    
                @else
                <a href="{{ route('user.uclass.form.index', ['id' => $kelas->id]) }}" class="btn btn-warning fw-bold">GABUNG SEKARANG</a>
                @endif
                </div>
              </div>
            </aside>
          </div>
        </div>
      </div> --}}
@endsection