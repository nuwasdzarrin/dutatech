@extends('layouts.master')

@section('content-title', "Duta Tech Ahlinya Software, Website, Aplikasi dan semua kebutuhan teknologi anda asal Madiun")

@push('head')
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <style>
        .carousel-cell {
            width: 15%;
            padding-top: 5px;
            margin-right: 10px;
            border-radius: 5px;
        }
        .square-logo {
            width: 67px;
            height: 67px;
        }
    </style>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
@endpush

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">Duta Tech</h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">Sudah saatnya anda mengembangkan usaha, desa, maupun sekolah anda dengan teknologi masa kini.</h2>
                    <div data-aos="fade-up" data-aos-delay="800">
                        <a href="#about" class="btn-get-started scrollto">Mulai Sekarang</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
                    <img src="{{ asset('vesper') }}/assets/img/hero-img.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">
        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients clients">
            <div class="container">
                <div>
                    <div class="carousel" data-flickity='{ "groupCells": true,"autoPlay": true }'>
                        <div class="carousel-cell">
                            <img src="{{ asset('vesper') }}/assets/img/logo/cun-motor.png" class="img-fluid" alt="">
                        </div>
                        <div class="carousel-cell">
                            <img src="{{ asset('vesper') }}/assets/img/logo/bmt-mbs-syariah.png" class="img-fluid" alt="">
                        </div>
                        <div class="carousel-cell">
                            <img src="{{ asset('vesper') }}/assets/img/logo/logo-pa-madiun.png" class="img-fluid square-logo" alt="">
                        </div>
                        <div class="carousel-cell">
                            <img src="{{ asset('vesper') }}/assets/img/logo/logo-pp-walisongo.png" class="img-fluid square-logo" alt="">
                        </div>
                        <div class="carousel-cell">
                            <img src="{{ asset('vesper') }}/assets/img/logo/logo-sdit-qa.jpeg" class="img-fluid square-logo" alt="">
                        </div>
                        <div class="carousel-cell">
                            <img src="{{ asset('vesper') }}/assets/img/logo/logoponorogo.png" class="img-fluid square-logo" alt="">
                        </div>
                        <div class="carousel-cell">
                            <img src="{{ asset('vesper') }}/assets/img/logo/sibolang-trans.jpeg" class="img-fluid square-logo" alt="">
                        </div>
                        <div class="carousel-cell">
                            <img src="{{ asset('vesper') }}/assets/img/logo/maesa-hotel.png" class="img-fluid" alt="">
                        </div>
                        <div class="carousel-cell">
                            <img src="{{ asset('vesper') }}/assets/img/logo/pabrik-es.png" class="img-fluid" alt="">
                        </div>
                        <div class="carousel-cell">
                            <img src="{{ asset('vesper') }}/assets/img/logo/pandu-dist.png" class="img-fluid" alt="">
                        </div>
                        <div class="carousel-cell">
                            <img src="{{ asset('vesper') }}/assets/img/logo/prama-log.png" class="img-fluid" alt="">
                        </div>
                        <div class="carousel-cell">
                            <img src="{{ asset('vesper') }}/assets/img/logo/bank-arthaya.png" class="img-fluid" alt="">
                        </div>
                        <div class="carousel-cell">
                            <img src="{{ asset('vesper') }}/assets/img/logo/rs-darmayu.png" class="img-fluid" alt="">
                        </div>
                        <div class="carousel-cell">
                            <img src="{{ asset('vesper') }}/assets/img/logo/sma-ar-rosyidah.png" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Clients Section -->

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2>Tentang Kami</h2>
                </div>
                <div class="row content">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua.
                        </p>
                        <ul>
                            <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
                            <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
                            <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
                        <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                            culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <a href="#" class="btn-learn-more">Learn More</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Us Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container">
                <div class="row">
                    <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-xl-start" data-aos="fade-right" data-aos-delay="150">
                        <img src="{{ asset('vesper') }}/assets/img/counts-img.svg" alt="" class="img-fluid">
                    </div>
                    <div class="col-xl-7 d-flex align-items-stretch pt-4 pt-xl-0" data-aos="fade-left" data-aos-delay="300">
                        <div class="content d-flex flex-column justify-content-center">
                            <div class="row">
                                <div class="col-md-6 d-md-flex align-items-md-stretch">
                                    <div class="count-box">
                                        <i class="icofont-simple-smile"></i>
                                        <span data-toggle="counter-up">65</span>
                                        <p><strong>Happy Clients</strong> consequuntur voluptas nostrum aliquid ipsam architecto ut.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 d-md-flex align-items-md-stretch">
                                    <div class="count-box">
                                        <i class="icofont-document-folder"></i>
                                        <span data-toggle="counter-up">85</span>
                                        <p><strong>Projects</strong> adipisci atque cum quia aspernatur totam laudantium et quia dere tan</p>
                                    </div>
                                </div>
                                <div class="col-md-6 d-md-flex align-items-md-stretch">
                                    <div class="count-box">
                                        <i class="icofont-clock-time"></i>
                                        <span data-toggle="counter-up">12</span>
                                        <p><strong>Years of experience</strong> aut commodi quaerat modi aliquam nam ducimus aut voluptate non vel</p>
                                    </div>
                                </div>
                                <div class="col-md-6 d-md-flex align-items-md-stretch">
                                    <div class="count-box">
                                        <i class="icofont-award"></i>
                                        <span data-toggle="counter-up">15</span>
                                        <p><strong>Awards</strong> rerum asperiores dolor alias quo reprehenderit eum et nemo pad der</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End .content-->
                    </div>
                </div>
            </div>
        </section>
        <!-- End Counts Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2>Services</h2>
                    <p>Magnam dolores commodi suscipit eius consequatur ex aliquid fug</p>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4 class="title"><a href="">Magni Dolores</a></h4>
                            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon"><i class="bx bx-world"></i></div>
                            <h4 class="title"><a href="">Nemo Enim</a></h4>
                            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Services Section -->

        <!-- ======= More Services Section ======= -->
        <section id="more-services" class="more-services">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="card" style='background-image: url("{{ asset('vesper') }}/assets/img/more-services-1.jpg");' data-aos="fade-up" data-aos-delay="100">
                            <div class="card-body">
                                <h5 class="card-title"><a href="">Lobira Duno</a></h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua.</p>
                                <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                        <div class="card" style='background-image: url("{{ asset('vesper') }}/assets/img/more-services-2.jpg");' data-aos="fade-up" data-aos-delay="200">
                            <div class="card-body">
                                <h5 class="card-title"><a href="">Limere Radses</a></h5>
                                <p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium, totam rem.</p>
                                <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a></div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6 d-flex align-items-stretch mt-4">
                        <div class="card" style='background-image: url("{{ asset('vesper') }}/assets/img/more-services-3.jpg");' data-aos="fade-up" data-aos-delay="100">
                            <div class="card-body">
                                <h5 class="card-title"><a href="">Nive Lodo</a></h5>
                                <p class="card-text">Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores.</p>
                                <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch mt-4">
                        <div class="card" style='background-image: url("{{ asset('vesper') }}/assets/img/more-services-4.jpg");' data-aos="fade-up" data-aos-delay="200">
                            <div class="card-body">
                                <h5 class="card-title"><a href="">Pale Treda</a></h5>
                                <p class="card-text">Nostrum eum sed et autem dolorum perspiciatis. Magni porro quisquam laudantium voluptatem.</p>
                                <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End More Services Section -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2>Features</h2>
                    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p>
                </div>
                <div class="row" data-aos="fade-up" data-aos-delay="300">
                    <div class="col-lg-3 col-md-4">
                        <div class="icon-box">
                            <i class="ri-store-line" style="color: #ffbb2c;"></i>
                            <h3><a href="">Lorem Ipsum</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                        <div class="icon-box">
                            <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
                            <h3><a href="">Dolor Sitema</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                        <div class="icon-box">
                            <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
                            <h3><a href="">Sed perspiciatis</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
                        <div class="icon-box">
                            <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
                            <h3><a href="">Magni Dolores</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                            <i class="ri-database-2-line" style="color: #47aeff;"></i>
                            <h3><a href="">Nemo Enim</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                            <i class="ri-gradienter-line" style="color: #ffa76e;"></i>
                            <h3><a href="">Eiusmod Tempor</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                            <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
                            <h3><a href="">Midela Teren</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                            <i class="ri-price-tag-2-line" style="color: #4233ff;"></i>
                            <h3><a href="">Pira Neve</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                            <i class="ri-anchor-line" style="color: #b2904f;"></i>
                            <h3><a href="">Dirada Pack</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                            <i class="ri-disc-line" style="color: #b20969;"></i>
                            <h3><a href="">Moton Ideal</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                            <i class="ri-base-station-line" style="color: #ff5828;"></i>
                            <h3><a href="">Verdo Park</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                            <i class="ri-fingerprint-line" style="color: #29cc61;"></i>
                            <h3><a href="">Flavor Nivelanda</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Features Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Portfolio</h2>
                    <p>Beberapa proyek maupun produk yang telah kami kerjakan:</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">App</li>
                            <li data-filter=".filter-desa">Desa</li>
                            <li data-filter=".filter-sekolah">Sekolah</li>
                            <li data-filter=".filter-perusahaan">Perusahaan</li>
                        </ul>
                    </div>
                </div>
                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="400">
                    @foreach($portfolios as $portfolio)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-{{$portfolio->type}}">
                            <div class="portfolio-wrap">
                                <img src="/{{ $portfolio->img }}" class="img-fluid" alt="{{$portfolio->title}}-img">
                                <div class="portfolio-info">
                                    <h4>{{$portfolio->title}}</h4>
                                    <p>{{substr($portfolio->content, 0, 50)}}...</p>
                                    <div class="portfolio-links">
                                        <a href="/{{ $portfolio->img }}" data-gall="portfolioGallery" class="venobox" title="{{$portfolio->title}}"><i class="bx bx-zoom-in"></i></a>
                                        <a href="{{ $portfolio->link }}" title="Detail {{$portfolio->title}}"><i class="bx bx-chevron-right"></i></a>
                                        <a href="{{ $portfolio->link }}" title="Kunjungi {{$portfolio->title}}"><i class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
{{--                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">--}}
{{--                        <div class="portfolio-wrap">--}}
{{--                            <img src="{{ asset('vesper') }}/assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">--}}
{{--                            <div class="portfolio-info">--}}
{{--                                <h4>Web 3</h4>--}}
{{--                                <p>Web</p>--}}
{{--                                <div class="portfolio-links">--}}
{{--                                    <a href="{{ asset('vesper') }}/assets/img/portfolio/portfolio-2.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>--}}
{{--                                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </section>
        <!-- End Portfolio Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Testimonials</h2>
                    <p>Magnam dolores commodi suscipit eum quidem consectetur velit</p>
                </div>

                <div class="owl-carousel testimonials-carousel" data-aos="fade-up" data-aos-delay="200">

                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                            <img src="{{ asset('vesper') }}/assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                            <h3>Saul Goodman</h3>
                            <h4>Ceo &amp; Founder</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div>

                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                            <img src="{{ asset('vesper') }}/assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                            <h3>Sara Wilsson</h3>
                            <h4>Designer</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div>

                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                            <img src="{{ asset('vesper') }}/assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                            <h3>Jena Karlis</h3>
                            <h4>Store Owner</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div>

                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                            <img src="{{ asset('vesper') }}/assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                            <h3>Matt Brandon</h3>
                            <h4>Freelancer</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div>

                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                            <img src="{{ asset('vesper') }}/assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                            <h3>John Larson</h3>
                            <h4>Entrepreneur</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Testimonials Section -->

        <!-- ======= F.A.Q Section ======= -->
        <section id="faq" class="faq">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Frequently Asked Questions</h2>
                </div>

                <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-5">
                        <i class="ri-question-line"></i>
                        <h4>Non consectetur a erat nam at lectus urna duis?</h4>
                    </div>
                    <div class="col-lg-7">
                        <p>
                            Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                        </p>
                    </div>
                </div><!-- End F.A.Q Item-->

                <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-5">
                        <i class="ri-question-line"></i>
                        <h4>Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?</h4>
                    </div>
                    <div class="col-lg-7">
                        <p>
                            Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim.
                        </p>
                    </div>
                </div><!-- End F.A.Q Item-->

                <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                    <div class="col-lg-5">
                        <i class="ri-question-line"></i>
                        <h4>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?</h4>
                    </div>
                    <div class="col-lg-7">
                        <p>
                            Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus.
                        </p>
                    </div>
                </div><!-- End F.A.Q Item-->

                <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                    <div class="col-lg-5">
                        <i class="ri-question-line"></i>
                        <h4>Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?</h4>
                    </div>
                    <div class="col-lg-7">
                        <p>
                            Aperiam itaque sit optio et deleniti eos nihil quidem cumque. Voluptas dolorum accusantium sunt sit enim. Provident consequuntur quam aut reiciendis qui rerum dolorem sit odio. Repellat assumenda soluta sunt pariatur error doloribus fuga.
                        </p>
                    </div>
                </div><!-- End F.A.Q Item-->

                <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="500">
                    <div class="col-lg-5">
                        <i class="ri-question-line"></i>
                        <h4>Tempus quam pellentesque nec nam aliquam sem et tortor consequat?</h4>
                    </div>
                    <div class="col-lg-7">
                        <p>
                            Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                        </p>
                    </div>
                </div><!-- End F.A.Q Item-->

            </div>
        </section>
        <!-- End F.A.Q Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Contact Us</h2>
                </div>

                <div class="row">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="contact-about">
                            <h3>Vesperr</h3>
                            <p>Cras fermentum odio eu feugiat. Justo eget magna fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
                            <div class="social-links">
                                <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
                                <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
                                <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
                                <a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                        <div class="info">
                            <div>
                                <i class="ri-map-pin-line"></i>
                                <p>A108 Adam Street<br>New York, NY 535022</p>
                            </div>

                            <div>
                                <i class="ri-mail-send-line"></i>
                                <p>info@example.com</p>
                            </div>

                            <div>
                                <i class="ri-phone-line"></i>
                                <p>+1 5589 55488 55s</p>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-5 col-md-12" data-aos="fade-up" data-aos-delay="300">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="mb-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Contact Section -->

    </main>
    <!-- End #main -->
@endsection

{{--@section('content')--}}
{{--<div class="container">--}}
{{--    <div class="row">--}}
{{--        <div class="col-md-8 col-md-offset-2">--}}
{{--            <div class="panel panel-default">--}}
{{--                <div class="panel-heading">Dashboard</div>--}}

{{--                <div class="panel-body">--}}
{{--                    @if (session('status'))--}}
{{--                        <div class="alert alert-success">--}}
{{--                            {{ session('status') }}--}}
{{--                        </div>--}}
{{--                    @endif--}}

{{--                    You are logged in!--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--@endsection--}}