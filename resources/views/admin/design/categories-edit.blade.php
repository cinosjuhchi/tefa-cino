@extends('admin.dashboard.layouts.main')
@section('content')
    <div class="container">
        <form action="{{ route('design-category.update', $designCategory->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div>
                <label for="category-title-input" class="form-label">Title</label>
                <input class="form-control @error('title') is-invalid @enderror" id="category-title-input" type="text"
                    name="title" value="{{ old('title', $designCategory->title) }}">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mt-3">
                <label for="category-description-input" class="form-label">Description</label>
                <textarea class="form-control @error('body') is-invalid @enderror" id="category-description-input" name="body"
                    cols="30" rows="10">{{ old('body', $designCategory->body) }}</textarea>
                @error('body')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mt-3">
                <label for="category-image-input" class="form-label">Image</label>
                @if ($designCategory->image !== 'placeholder.jpg')
                    <img src="{{ asset('assets/img/' . $designCategory->image) }}"
                        class="img-preview d-block img-fluid col-md-8 col-lg-4 mb-3 rounded"
                        alt="{{ $designCategory->title }}">
                @else
                    <img class="img-preview img-fluid col-md-8 col-lg-4 d-none rounded" alt="preview-image">
                @endif
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="category-image-input"
                    name="image" onchange="previewImage(this)">
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mt-4">
                <button type="submit" class="btn-submit">Save</button>
            </div>
        </form>
    </div>
@endsection
