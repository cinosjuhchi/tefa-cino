 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top d-flex align-items-center header-transparent">
     <div class="d-flex align-items-center justify-content-between container">
         <div class="logo">
             <h1><a href="{{ route('home') }}">{{ app('websiteTitle') }}</a></h1>
         </div>

         <nav id="navbar" class="navbar">
             <ul>
                 <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                 <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li>
                 @include('layouts.dropdown')
             </ul>
             <i class="bi bi-list mobile-nav-toggle"></i>
         </nav>
         <!-- .navbar -->
     </div>
 </header>
 <!-- End Header -->
