@extends('layouts.modul5')

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

            <h1 class="logo">GOENOENG</h1>


            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">tentang</a></li>
                    <li><a class="nav-link scrollto " href=#portfolio>Portfolio</a>
                    </li>
                    <li><a class="nav-link scrollto" href="#team">Team</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->

        </div>
    </header>
    <!-- End Header -->
@endsection



@section('hero')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <h1>Selamat Datang Di <span>GOENOENG</span></h1>
            <h2>Mari Kita Mengetahui alam yang indah</h2>
            <div class="d-flex">
                <a href="#about" class="btn-get-started scrollto">Lanjut</a>
                <a href="https://www.youtube.com/watch?v=GeYGETHbC3I&ab_channel=HanandaGagas"
                    class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Mulai Video</span></a>
            </div>
        </div>
    </section>
    <!-- End Hero -->
    <main id="main">

@endsection

@section('about')
        <!-- ======= About Section ======= -->
        <section id="about" class="about section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Tentang</h2>
                    <h3>Temukan Informasi <span>Tentang Kami</span></h3>
                    <p>Mari temukan informasi tentang kami melalui contact yang sudah tertera di bawah</p>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <img src="./index_files/img/about.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center"
                        data-aos="fade-up" data-aos-delay="100">
                        <h3>Mengapa kami membuat Website Goenoeng ini?</h3>
                        <p class="fst-italic">
                            Alasan kami membuat website Goenoeng adalah untuk memudahkan para pendaki yang ingin
                            mengetahui tentang Gunung di Indonesia yang ingin di daki, para pendaki akan mendapatkan
                            informasi mengenai gunung-gunung di Indonesia
                        </p>
                        <ul>
                            <li>
                                <i class="bx bi-pencil"></i>
                                <div>
                                    <h5>Melakukan Survey</h5>
                                    <p>Kami telah Melakukan survey kepada para pendaki pemula yang belum pernah mendaki
                                        gunung
                                    </p>
                                </div>
                            </li>
                            <li>
                                <i class="bx bi-book"></i>
                                <div>
                                    <h5>Hasil Survey</h5>
                                    <p>Hasil Survey pada pendaki pemula adalah mereka belum tahu informasi tentang
                                        gunung yang
                                        ingin di daki, jadi mereka membutuhkan informasi sebelum mendaki</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>
        <!-- End About Section -->
@endsection

@section('skill')
        <!-- ======= Skills Section ======= -->
        <section id="skills" class="skills">
            <div class="container">

                <div class="row skills-content">

                    <div class="col-lg-6">

                        <div class="progress">
                            <span class="skill">Gunung Bromo <i class="val">100%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">Gunung lawu <i class="val">50%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">Gunung liman <i class="val">45%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>


                        <div class="progress">
                            <span class="skill">Gunung argapura <i class="val">30%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>




                        <div class="progress">
                            <span class="skill">Gunung Arjuno <i class="val">75%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6">

                        <div class="progress">
                            <span class="skill">Gunung Buthak <i class="val">80%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">Gunung Pundak <i class="val">90%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>


                        <div class="progress">
                            <span class="skill">Gunung Semeru <i class="val">90%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">Gunung Kawi <i class="val">55%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </section>
        <!-- End Skills Section -->

@endsection

@section('testimonials')
        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container">

                <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">


                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="./index_files/img/testimonials/testimonials-1.jpeg" class="testimonial-img" alt="">
                                <h3>Adryan Eka Nanta</h3>
                                <h4>Pertualang</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i> saya menggunakan web ini jadi
                                    tau tentang pergunungan di indonesia
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="./index_files/img/testimonials/testimonials-2.jpeg" class="testimonial-img" alt="">
                                <h3>Cindi Partika Sari</h3>
                                <h4>Turing</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i> menggunakan web ini saya jadi
                                    penasaran indah nya pergunungan indonesia
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="./index_files/img/testimonials/testimonials-3.jpeg" class="testimonial-img" alt="">
                                <h3>Iqmah Nur Rizky</h3>
                                <h4>Penjelajah</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i> web ini membantu sekali untuk
                                    aktifitas penjelajahan saya
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                        <!-- End testimonial item -->
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section>
        <!-- End Testimonials Section -->

@endsection

@section('portfolio')

		        <!-- ======= Portfolio Section ======= -->
            <section id="portfolio" class="portfolio">
            <div class="container">

                <div class="section-title">
                    <h2>Portfolio</h2>
                    <h3>Cek <span>Portfolio </span>Kami</h3>
                    <p>Di Bawah ini merupakan pengalaman mendaki dari para pendaki yang telah menggunakan
                        Website Goenoeng ini</p>
                </div>

                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">Jalur Terpanjang</li>
                            <li data-filter=".filter-card">Seven Summit Indonesia</li>
                            <li data-filter=".filter-web">Jalur Terekstrim</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="./index_files/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>gunung argapura</h4>
                            <a href="./index_files/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="gunung argapura"><i
                                    class="bx bx-plus"></i></a>
                            <a href="/argapura1" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <img src="./index_files/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>gunung arjuno</h4>
                            <a href="./index_files/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="gunung arjuno"><i
                                    class="bx bx-plus"></i></a>
                            <a href="/arjuno1" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="./index_files/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>gunung bromo</h4>
                            <a href="./index_files/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="gunung bromo"><i
                                    class="bx bx-plus"></i></a>
                            <a href="/bromo1" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <img src="./index_files/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>gunung buthak</h4>
                            <a href="./index_files/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="gunung buthak"><i
                                    class="bx bx-plus"></i></a>
                            <a href="/buthak1" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <img src="./index_files/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>gunung kawi</h4>
                            <a href="./index_files/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="gunung kawi"><i class="bx bx-plus"></i></a>
                            <a href="/kawi1" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="./index_files/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>gunung lawu</h4>
                            <a href="./index_files/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="gunung lawu"><i class="bx bx-plus"></i></a>
                            <a href="/lawu1" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <img src="./index_files/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>gunung liman</h4>
                            <a href="./index_files/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="gunung liman"><i class="bx bx-plus"></i></a>
                            <a href="/liman1" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <img src="./index_files/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>gunung pundak</h4>
                            <a href="./index_files/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="gunung pundak"><i class="bx bx-plus"></i></a>
                            <a href="/pundak1" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <img src="./index_files/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>gunung semeru</h4>
                            <a href="./index_files/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="gunung semeru"><i
                                    class="bx bx-plus"></i></a>
                            <a href="/sumeru1" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Portfolio Section -->


@endsection

@section('team')
        <!-- ======= Team Section ======= -->
        <section id="team" class="team section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Team</h2>
                    <h3>BLACK MARKET <span>Team</span></h3>
                    <p>Alam adalah Rumah kita</p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            <div class="member-img">
                                <img src="./index_files/img/team/team-1.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href="https://www.facebook.com/daffaatthariq12/"><i
                                            class="bi bi-facebook"></i></a>
                                    <a href="https://www.instagram.com/muhammad_daffa50/"><i
                                            class="bi bi-instagram"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Muhammad Daffa Atthariq</h4>
                                <span>Leader/full stack developer</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            <div class="member-img">
                                <img src="./index_files/img/team/team-2.jpeg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href="https://twitter.com/miftdotexe"><i class="bi bi-twitter"></i></a>
                                    <a href="https://www.facebook.com/miftahuddin.08"><i class="bi bi-facebook"></i></a>
                                    <a href="https://www.instagram.com/mift.exe/"><i class="bi bi-instagram"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Miftahuddin Ma'ruf</h4>
                                <span>Anggota/front end</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            <div class="member-img">
                                <img src="./index_files/img/team/team-3.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href="https://www.instagram.com/aam.chd/"><i class="bi bi-instagram"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Choirul Huda</h4>
                                <span>Anggota/front end</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Team Section -->

    </main>
    <!-- End #main -->

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