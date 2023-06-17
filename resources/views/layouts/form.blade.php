<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form {{ $title }}</title>
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <style>
        .bg {
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
        }

        .bg-img {
            filter: grayscale(100%) saturate(0%);
            -webkit-filter: grayscale(100%) saturate(0%);
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            min-width: 50%;
            min-height: 50%;
        }

        .card-form {
            margin-top: 16vh !important;
            background-color: #ef6603;
        }

        .card-input {
            min-width: 95%;
        }
    </style>
    @stack('styles')
</head>

<body style="overflow-x: hidden">
    <nav class="w-100 position-absolute top-0" style="z-index: 111">
        <div class="d-flex align-items-center justify-content-center" style="background-color: rgba(42, 44, 57, 0.9)">
            <div class="logo">
                <h1 class="fw-bold fs-3 p-3 text-white">Tefa Digital</h1>
            </div>
        </div>
    </nav>

    <div class="bg position-fixed">
        <img class="bg-img position-absolute m-auto" src="{{ asset('assets/img/background/front.jpg') }}"
            alt="background">
    </div>

    <div class="row justify-content-center">
        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    @stack('scripts')
</body>

</html>
