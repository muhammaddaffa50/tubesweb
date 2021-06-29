@extends('layouts.portfolio')

@section('topbar')
  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a
            href="mailto:ted@webmail.umm.ac.id">ted@webmail.umm.ac.id</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+62 822 51xx xxxx</span></i>
      </div>
    </div>
  </section>
@endsection

@section('header')
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="/">GOENOENG</a></h1>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="/">Home</a></li>
          <li><a class="nav-link scrollto" href="/">About</a></li>
          <li><a class="nav-link scrollto active" href="/">Portfolio</a>
          </li>
          <li><a class="nav-link scrollto" href="/">Team</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main" data-aos="fade-up">
@endsection

@section('breadcrumbs')
    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Portfolio Details</h2>
          <ol>
            <li><a href="/">Home</a></li>
            <li><a href="/">Portfolio</a></li>
            <li>Portfolio Details</li>
          </ol>
        </div>

      </div>
    </section><!-- Breadcrumbs Section -->
@endsection

@section('portfolio-details')
    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
    @foreach ($news2 as $newss)
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper-container">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="{{ asset('img/uploads/') }}/{{ $newss->picture }}" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>{{ $newss->title }}</h3>
              <ul>
                <li><strong>Category : </strong>{{ $newss->category }}</li>
                <li><strong>Client : </strong>{{ $newss->client }}</li>
                <li><strong>tanggal : </strong>{{ $newss->created_at }}</li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>{{ $newss->about }}</h2>
              <p>
              {{ $newss->content }}
              </p>
            </div>
          </div>
        </div>
      </div>
      @endforeach
      
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->
@endsection

@section('footer')
  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>GOENOENG</h3>
            <p>
              Muhammad Daffa Atthariq <br> Miftauddin Ma'ruf<br> Choirul Huda<br><br> Malang Kode pos
              65151
              <br> Indonesia <br><br>
              <strong>Phone:</strong> +62 822 51xx xxxx<br>
              <strong>Email:</strong> ted@webmail.umm.ac.id<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="/">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a
                  href="/">Portfolio</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/">Team</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="credits">
        Dibuat Oleh BLACK MARKET TEAM
      </div>
    </div>

  </footer>
  <!-- End Footer -->
@endsection

@section('preloader')
<div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

@endsection