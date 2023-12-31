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
                    <li><a class="nav-link scrollto active" href="#activity">Activity</a></li>
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
    <main style="min-height: 100vh">
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <div class="align-items-center justify-content-between d-flex">
                    <h2>Activity</h2>
                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Activity</li>
                    </ol>
                </div>
            </div>
        </section>
        <section id="notif" class="services px-sm-0 px-2">
            <div class="container">
                <div class="justify-content-center d-flex flex-column gap-3">
                    <div class="d-flex justify-content-end">
                        <form method="POST" action="{{ route('user.order.activity.read') }}">
                            @csrf
                            <a onclick="this.parentElement.submit()" href="#" class="btn btn-general btn-sm">Read
                                all</a>
                        </form>
                    </div>

                    <div class="row" style="row-gap: 18px">
                        @forelse ($activities as $activity)
                            @if ($activity->data['status'] == 'pending')
                                <div class="notif-box d-flex col-12 rounded-lg shadow" data-aos="zoom-in-left"
                                    data-aos-delay="100">
                                    <div class="box">
                                        <div class="row">
                                            <div
                                                class="col-md-1 col-2 bg-warning d-flex justify-content-center align-items-center">
                                                <i class="bx bx-timer bx-flip-horizontal fs-1 text-white"></i>
                                            </div>
                                            <div class="col-md-11 col-10 d-md-flex justify-content-between">
                                                <div class="pt-md-1 pt-2">
                                                    <h6>{{ auth()->user()->name }}, Your order is pending!</h6>
                                                    <p style="font-size: 0.8rem">
                                                        {{ $activity->created_at->format('H:i') }} |
                                                        {{ $activity->created_at->format('d M Y') }}</p>
                                                </div>
                                                <div
                                                    class="d-md-flex flex-column justify-content-center align-items-end mb-md-0 mb-1">
                                                    @if ($activity->unread())
                                                        <form method="POST"
                                                            action="{{ route('user.order.activity.read', $activity) }}">
                                                            @csrf
                                                            <a onclick="this.parentElement.submit()" href="#"
                                                                style="font-size: 0.9rem">Mark as read</a>
                                                        </form>
                                                    @else
                                                        <a class="text-muted" href="#"
                                                            style="font-size: 0.9rem">Read</a>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @elseif($activity->data['status'] == 'progress')
                                <div class="notif-box d-flex col-12 rounded-lg shadow" data-aos="zoom-in-left"
                                    data-aos-delay="100">
                                    <div class="box">
                                        <div class="row">
                                            <div
                                                class="col-md-1 col-2 bg-info d-flex justify-content-center align-items-center">
                                                <i class="bx bx-timer fs-1 text-white"></i>
                                            </div>
                                            <div class="col-md-11 col-10 d-md-flex justify-content-between">
                                                <div class="pt-md-1 pt-2">
                                                    <h6>{{ auth()->user()->name }}, Your order is in progress!</h6>
                                                    <p style="font-size: 0.8rem">
                                                        {{ $activity->created_at->format('H:i') }} |
                                                        {{ $activity->created_at->format('d M Y') }}</p>
                                                </div>
                                                <div
                                                    class="d-md-flex flex-column justify-content-center align-items-end mb-md-0 mb-1">
                                                    @if ($activity->unread())
                                                        <form method="POST"
                                                            action="{{ route('user.order.activity.read', $activity) }}">
                                                            @csrf
                                                            <a onclick="this.parentElement.submit()" href="#"
                                                                style="font-size: 0.9rem">Mark as read</a>
                                                        </form>
                                                    @else
                                                        <a class="text-muted" href="#"
                                                            style="font-size: 0.9rem">Read</a>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="notif-box d-flex col-12 rounded-lg shadow" data-aos="zoom-in-left"
                                    data-aos-delay="100">
                                    <div class="box">
                                        <div class="row">
                                            <div
                                                class="col-md-1 col-2 bg-success d-flex justify-content-center align-items-center">
                                                <i class="bx bx-check fs-1 text-white"></i>
                                            </div>
                                            <div class="col-md-11 col-10 d-md-flex justify-content-between">
                                                <div class="pt-md-1 pt-2">
                                                    <h6>{{ auth()->user()->name }}, Your order is done!</h6>
                                                    <p style="font-size: 0.8rem">{{ $activity->created_at->format('H:i') }}
                                                        |
                                                        {{ $activity->created_at->format('d M Y') }}</p>
                                                </div>
                                                <div
                                                    class="d-md-flex flex-column justify-content-center align-items-end mb-md-0 mb-1">
                                                    @if ($activity->unread())
                                                        <form method="POST"
                                                            action="{{ route('user.order.activity.read', $activity) }}">
                                                            @csrf
                                                            <a onclick="this.parentElement.submit()" href="#"
                                                                style="font-size: 0.9rem">Mark as read</a>
                                                        </form>
                                                    @else
                                                        <a class="text-muted" href="#"
                                                            style="font-size: 0.9rem">Read</a>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @empty
                            <div class="notif-box d-flex col-12 rounded-lg shadow" data-aos="zoom-in-left"
                                data-aos-delay="100">
                                <div class="box">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <p>Tidak ada activity untuk minggu ini</p>
                                    </div>
                                </div>
                            </div>
                        @endforelse
                    </div>

                </div>
            </div>
        </section>
    </main>
@endsection
