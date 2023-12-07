@extends('admin.dashboard.layouts.main')
@section('content')
    <div class="container my-4">
      <!-- d-flex nya abaikan saja -->
      <div class="row headline mb-4">
        <h1 class="fw-bold">Category List Admin</h1>
        <hr class="border-4 rounded border-warning opacity-100" />
      </div>

      <div class="row cards">
        @foreach($category as $kate)
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="card border-0 shadow h-100" style="width: max-width">
            <img src="{{ Vite::asset('resources/assets/img/uclass/accountimage.png') }}" class="card-img-top" alt="..." style="object-fit: cover; width: 100%; height: 230px" />
            <div class="card-body">
              <h5 class="card-title fw-bold limited-lines-1">{{ $kate->title }}</h5>
              <p class="card-text mt-0 text-secondary">Online Class</p>
              <p class="card-text limited-lines-2">
                {{ $kate->body }}
              </p>
              <a href="#" class="btn btn-warning fw-bold">Edit Category</a>
            </div>
          </div>
        </div>        
        @endforeach
      </div>
    </div>
@endsection
