<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <meta name="description" content="{{ app('websiteTitle') }} - Dashboard to manage service orders" />
    <meta name="keyword" content="{{ app('websiteTitle') }}, Service, Design, Printing, Videoghraphy, Fotoghraphy" />
    <title>Register | {{ app('websiteTitle') ?? config('app.name') }}</title>

    @vite('resources/js/auth.js')
</head>

<body>
    <div class="bg-light min-vh-100 d-flex align-items-center flex-row">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card mx-4 mb-4">
                        <div class="card-body p-4">
                            <div>
                                <h1>Register</h1>
                                <p class="text-medium-emphasis">Create your account</p>
                            </div>
                            @if ($canGoogleLogin)
                                <a href="{{ route('auth.google') }}"
                                    class="btn btn-dark d-flex justify-content-center align-items-center mt-3 p-2"
                                    style="background-color: black; column-gap: 5px">
                                    <svg role="img" style="width: 20px; height: 20px;" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg" fill="#fff">
                                        <title>Google</title>
                                        <path
                                            d="M12.48 10.92v3.28h7.84c-.24 1.84-.853 3.187-1.787 4.133-1.147 1.147-2.933 2.4-6.053 2.4-4.827 0-8.6-3.893-8.6-8.72s3.773-8.72 8.6-8.72c2.6 0 4.507 1.027 5.907 2.347l2.307-2.307C18.747 1.44 16.133 0 12.48 0 5.867 0 .307 5.387.307 12s5.56 12 12.173 12c3.573 0 6.267-1.173 8.373-3.36 2.16-2.16 2.84-5.213 2.84-7.667 0-.76-.053-1.467-.173-2.053H12.48z" />
                                    </svg>
                                    <span>
                                        Sign in with Google
                                    </span>
                                </a>
                                <p class="my-3 text-center">or</p>
                            @endif
                            <form action="{{ route('register.store') }}" method="post">
                                @csrf
                                <div class="input-group mb-3">
                                    <span class="input-group-text">
                                        <svg class="icon">
                                            <use
                                                xlink:href="{{ asset('assets/admin/vendors/@coreui/icons/svg/free.svg#cil-user') }}">
                                            </use>
                                        </svg></span>
                                    <input class="form-control @error('name') is-invalid @enderror" name="name"
                                        type="text" placeholder="Name" value="{{ old('name') }}"
                                        autocomplete="name" />
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">
                                        <svg class="icon">
                                            <use
                                                xlink:href="{{ asset('assets/admin/vendors/@coreui/icons/svg/free.svg#cil-envelope-open') }}">
                                            </use>
                                        </svg></span>
                                    <input class="form-control @error('email') is-invalid @enderror" name="email"
                                        type="email" placeholder="Email" value="{{ old('email') }}"
                                        autocomplete="email" />
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">
                                        <svg class="icon">
                                            <use
                                                xlink:href="{{ asset('assets/admin/vendors/@coreui/icons/svg/free.svg#cil-lock-locked') }}">
                                            </use>
                                        </svg></span>
                                    <input class="form-control @error('password') is-invalid @enderror" name="password"
                                        type="password" placeholder="Password" autocomplete="new-password" />
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <p>Already have an account? <a href="{{ route('login.index') }}">Login</a></p>
                                </div>
                                <button class="btn btn-block btn-success text-white" type="submit">
                                    Register
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
