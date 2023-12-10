@auth
<?php
$user = Auth::user();
$kelasInti = $user->buyClass()->get();
?>
    <li class="dropdown"><a href="#"><span>Welcome, {{ auth()->user()->name }}</span> <i
                class="bi bi-chevron-down"></i></a>
        <ul>
            @role('client')
                <li><a href="{{ route('user.profile.index') }}">{{ auth()->user()->email }}</a></li>
                <li><a href="{{ route('user.order.list') }}">List Order</a></li>
                <li><a href="{{ route('user.order.activity.index') }}">Order Progress History</a></li>
                <li><a href="" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">Status Kelas</a></li>
                <li><a href="{{ route('user.uclass.kelas.saya') }}">Kelas Saya</a></li>
            @else
                <li><a href="{{ route('dashboard') }}">{{ auth()->user()->email }}</a></li>
            @endrole
            <li>
                <form action="{{ route('logout') }}" method="post" class="d-inline">
                    @csrf
                    <a href="#" onclick="return confirm('Yakin ? ') ? this.parentElement.submit() : null">Log
                        Out</a>
                </form>
            </li>
        </ul>
    </li>
@else
    <li><a class="nav-link" href="{{ route('login.index') }}">Login</a></li>
@endauth
@if(Auth::check())
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Status Pemesanan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
        <div class="headline">
            <div class="row align-items-center">
            <div class="col-6">
                <h5>Daftar Kelas</h5>
            </div>
            <div class="col-6 text-end">
                <h5>Status</h5>
            </div>
            </div>
            <hr class="text-warning opacity-100 border-4 rounded mb-2 m-0" />
        </div>
        @foreach($kelasInti as $kelasu)
        <div class="row align-items-center status">
            <div class="col-6">
            <h5>{{ $kelasu->kelas->nama }}</h5>
            <p>Rp. {{ $kelasu->total }}</p>
            </div>
            <div class="col-6 text-end">
            <p class="text-primary"><i class="bi bi-clock me-1"></i>{{ $kelasu->status }}</p>
            </div>
        </div>      
        @endforeach
        </div>
    </div>     
    </div> 
@endif

