@extends('layouts.main')

@section('header')
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="d-flex align-items-center justify-content-between container">
            <div class="logo">
                <h1><a href="{{ route('home') }}">{{ app('websiteTitle') }}</a></h1>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#profile">Profile</a></li>
                    @include('layouts.dropdown')
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
        </div>
    </header>
    <!-- End Header -->
@endsection

@section('main')
    <main>

        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <div class="align-items-center justify-content-between d-flex">
                    <h2>Order</h2>
                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Order</li>
                    </ol>
                </div>
            </div>
        </section>
        <section id="profile" class="services">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div>
                            <div class="box profile-box rounded-3" data-aos="zoom-in-left" data-aos-delay="100">
                                <h2 class="fw-semibold my-3 text-center">Edit Order</h2>
                                <div class="profile-input">
                                    @yield('input')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('scripts')
    <script>
        const validateFile = (input, allowedExtensions, index) => {
            const [file] = input.files;

            if (file) {
                const {
                    name
                } = file;
                const fileExtension = name.split('.').pop().toLowerCase();

                if (!allowedExtensions.includes(fileExtension)) {
                    const validationHtml =
                        `<div id="validationFile" class="invalid-feedback ${index ? `inv-${index}` : ''}">Hanya file dengan format yang diizinkan.</div>`;

                    $(input).next('#validationFile').remove()
                        .end()
                        .addClass('is-invalid')
                        .val('')
                        .after(validationHtml);
                } else {
                    $(input).removeClass('is-invalid')
                        .next('#validationFile')
                        .remove();
                }
            }
        }
    </script>
@endpush
