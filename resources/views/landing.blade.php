@extends('layouts.landing')
@section('content')


    <!-- Hero Section -->
    <section id="hero" class="hero section">

        <img src="{{ asset('assets/img/dishub-transformed.png') }}" alt="" data-aos="fade-in" class="">

        <div class="container">

          <div class="row justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">
            <div class="col-xl-6 col-lg-8">
              <h2 class="">Dishub Parkir Berlangganan<span>.</span></h2>
              
            </div>
          </div>

          <div class="row gy-4 mt-5 justify-content-center" data-aos="fade-up" data-aos-delay="200">
            @auth
            <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box">
                  <h3><a href="{{ route('register') }}">Daftar Parkir</a></h3>
                </div>
            </div>
            @else
            <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="300">
              <div class="icon-box">
                {{-- <i class="bi bi-register"></i> --}}
                <h3><a href="{{ route('register') }}">Registrasi</a></h3>
              </div>
            </div>
            <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="400">
              <div class="icon-box">
                {{-- <i class="bi bi-bullseye"></i> --}}
                <h3><a href="{{ route('login') }}">Login</a></h3>
              </div>
            </div>
            @endauth
          </div>

        </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="visi_misi" class="about section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
        <div class="col-lg-6 order-1 order-lg-2">
            <img src="{{ asset('assets/img/about.jpg') }}" class="img-fluid" alt="" style="border-radius: 20px; ">
        </div>
        <div class="col-lg-6 order-2 order-lg-1 content">
            <h3>Visi</h3>
            <p class="fst-italic">
            <i class="bi bi-check2-all"></i>
            <span>Terwujudnya Pelayanan Transportasi Kalimantan Timur Secara Handal dan Profesional</span>
            </p>
            <h3>Misi</h3>
            <p class="fst-italic">
                <i class="bi bi-check2-all">
                    <span>Menyiapkan dan Mengembangkan Sumber Daya Manusia yang handal dan profesional
                        Mewujudkan Keselamatan dan Keamanan Transportasi
                        Melengkapi dan Meningkatkan Sarana Prasarana Transportasi
                        Memantapkan Konsolidasi melalui Koordinasi Pembinaan, Pengawasan dan Pengendalian Sektor Transportasi
                        Mempertahankan dan Meningkatkan Kualitas Pelayanan Jasa Transportasi</span>
                </i>
            </p>
        </div>
        </div>

    </div>

    </section>
    <!-- /About Section -->


    <!-- Features Section -->
    <section id="features" class="features section">

    <div class="container">

        <div class="row gy-4">
        <div class="features-image col-lg-6" data-aos="fade-up" data-aos-delay="100"><img src="{{ asset('assets/img/features-bg.jpg') }}" alt=""></div>
        <div class="col-lg-6">

            <div class="features-item d-flex ps-0 ps-lg-3 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="200">
            <i class="bi bi-archive flex-shrink-0"></i>
            <div>
                <h4>Est labore ad</h4>
                <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
            </div>
            </div><!-- End Features Item-->

            <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="300">
            <i class="bi bi-basket flex-shrink-0"></i>
            <div>
                <h4>Harum esse qui</h4>
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
            </div>
            </div><!-- End Features Item-->

            <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="400">
            <i class="bi bi-broadcast flex-shrink-0"></i>
            <div>
                <h4>Aut occaecati</h4>
                <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
            </div>
            </div><!-- End Features Item-->

            <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="500">
            <i class="bi bi-camera-reels flex-shrink-0"></i>
            <div>
                <h4>Beatae veritatis</h4>
                <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
            </div>
            </div><!-- End Features Item-->

        </div>
        </div>

    </div>

    </section>
    <!-- /Features Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <p class="">Check our Services</p>
    </div>
    <!-- End Section Title -->

    <div class="container">

        <div class="row gy-4">

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
            <div class="icon">
                <i class="bi bi-activity"></i>
            </div>
            <a href="service-details.html" class="stretched-link">
                <h3>Nesciunt Mete</h3>
            </a>
            <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis tempore et consequatur.</p>
            </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
            <div class="icon">
                <i class="bi bi-broadcast"></i>
            </div>
            <a href="service-details.html" class="stretched-link">
                <h3>Eosle Commodi</h3>
            </a>
            <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p>
            </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
            <div class="icon">
                <i class="bi bi-easel"></i>
            </div>
            <a href="service-details.html" class="stretched-link">
                <h3>Ledo Markt</h3>
            </a>
            <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.</p>
            </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
            <div class="icon">
                <i class="bi bi-bounding-box-circles"></i>
            </div>
            <a href="service-details.html" class="stretched-link">
                <h3>Asperiores Commodit</h3>
            </a>
            <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit provident adipisci neque.</p>
            <a href="service-details.html" class="stretched-link"></a>
            </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item position-relative">
            <div class="icon">
                <i class="bi bi-calendar4-week"></i>
            </div>
            <a href="service-details.html" class="stretched-link">
                <h3>Velit Doloremque</h3>
            </a>
            <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi at autem alias eius labore.</p>
            <a href="service-details.html" class="stretched-link"></a>
            </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item position-relative">
            <div class="icon">
                <i class="bi bi-chat-square-text"></i>
            </div>
            <a href="service-details.html" class="stretched-link">
                <h3>Dolori Architecto</h3>
            </a>
            <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti recusandae ducimus enim.</p>
            <a href="service-details.html" class="stretched-link"></a>
            </div>
        </div><!-- End Service Item -->

        </div>

    </div>

    </section>
    <!-- /Services Section -->

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section">

    <img src="{{ asset('assets/img/cta-bg.jpg') }}" alt="">

    <div class="container">
        <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
        <div class="col-xl-10">
            <div class="text-center">
            <h3>Call To Action</h3>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <a class="cta-btn" href="#">Call To Action</a>
            </div>
        </div>
        </div>
    </div>

    </section>
    <!-- /Call To Action Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 align-items-center justify-content-between">

        <div class="col-lg-5">
            <img src="{{ asset('assets/img/stats-img.jpg') }}" alt="" class="img-fluid">
        </div>

        <div class="col-lg-6">

            <h3 class="fw-bold fs-2 mb-3">Voluptatem dignissimos provident quasi</h3>
            <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
            </p>

            <div class="row gy-4">

            <div class="col-lg-6">
                <div class="stats-item d-flex">
                <i class="bi bi-emoji-smile flex-shrink-0"></i>
                <div>
                    <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Happy Clients</strong> <span>consequuntur quae</span></p>
                </div>
                </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-6">
                <div class="stats-item d-flex">
                <i class="bi bi-journal-richtext flex-shrink-0"></i>
                <div>
                    <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Projects</strong> <span>adipisci atque cum quia aut</span></p>
                </div>
                </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-6">
                <div class="stats-item d-flex">
                <i class="bi bi-headset flex-shrink-0"></i>
                <div>
                    <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Hours Of Support</strong> <span>aut commodi quaerat</span></p>
                </div>
                </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-6">
                <div class="stats-item d-flex">
                <i class="bi bi-people flex-shrink-0"></i>
                <div>
                    <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Hard Workers</strong> <span>rerum asperiores dolor</span></p>
                </div>
                </div>
            </div><!-- End Stats Item -->

            </div>

        </div>

        </div>

    </div>

    </section>
    <!-- /Stats Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

    <img src="{{ asset('assets/img/testimonials-bg.jpg') }}" class="testimonials-bg" alt="">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper">
        <script type="application/json" class="swiper-config">
            {
            "loop": true,
            "speed": 600,
            "autoplay": {
                "delay": 5000
            },
            "slidesPerView": "auto",
            "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
            }
            }
        </script>
        <div class="swiper-wrapper">

            <div class="swiper-slide">
            <div class="testimonial-item">
                <img src="{{ asset('assets/img/testimonials/testimonials-1.jpg') }}" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
                <i class="bi bi-quote quote-icon-right"></i>
                </p>
            </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
            <div class="testimonial-item">
                <img src="{{ asset('assets/img/testimonials/testimonials-2.jpg') }}" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
                <i class="bi bi-quote quote-icon-right"></i>
                </p>
            </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
            <div class="testimonial-item">
                <img src="{{ asset('assets/img/testimonials/testimonials-3.jpg') }}" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                <i class="bi bi-quote quote-icon-right"></i>
                </p>
            </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
            <div class="testimonial-item">
                <img src="{{ asset('assets/img/testimonials/testimonials-4.jpg') }}" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
                <i class="bi bi-quote quote-icon-right"></i>
                </p>
            </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
            <div class="testimonial-item">
                <img src="{{ asset('assets/img/testimonials/testimonials-5.jpg') }}" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.</span>
                <i class="bi bi-quote quote-icon-right"></i>
                </p>
            </div>
            </div><!-- End testimonial item -->

        </div>
        <div class="swiper-pagination"></div>
        </div>

    </div>

    </section>
    <!-- /Testimonials Section -->

    <!-- Team Section -->
    <section id="team" class="team section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Team</h2>
        <p class="">our Team</p>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row gy-4">

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member">
            <div class="member-img">
                <img src="{{ asset('assets/img/team/team-1.jpg') }}" class="img-fluid" alt="">
                <div class="social">
                <a href=""><i class="bi bi-twitter-x"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
            <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
            </div>
            </div>
        </div><!-- End Team Member -->

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member">
            <div class="member-img">
                <img src="{{ asset('assets/img/team/team-2.jpg') }}" class="img-fluid" alt="">
                <div class="social">
                <a href=""><i class="bi bi-twitter-x"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
            <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
            </div>
            </div>
        </div><!-- End Team Member -->

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member">
            <div class="member-img">
                <img src="{{ asset('assets/img/team/team-3.jpg') }}" class="img-fluid" alt="">
                <div class="social">
                <a href=""><i class="bi bi-twitter-x"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
            <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
            </div>
            </div>
        </div><!-- End Team Member -->

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="team-member">
            <div class="member-img">
                <img src="{{ asset('assets/img/team/team-4.jpg') }}" class="img-fluid" alt="">
                <div class="social">
                <a href=""><i class="bi bi-twitter-x"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
            <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
            </div>
            </div>
        </div><!-- End Team Member -->

        </div>

    </div>

    </section>
    <!-- /Team Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Location</h2>
        <p class="">Contact Us</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="mb-5" data-aos="fade-up" data-aos-delay="200">
        {{-- <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus" frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
        <div id="google-map" class="google-map" style="width: 100%; height: 500px; border: 10px solid blue;"></div>


        </div><!-- End Google Maps -->

        <div class="row gy-4">

        <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
            <i class="bi bi-geo-alt flex-shrink-0"></i>
            <div>
                <h3>Address</h3>
                <p>A108 Adam Street, New York, NY 535022</p>
            </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
            <i class="bi bi-telephone flex-shrink-0"></i>
            <div>
                <h3>Call Us</h3>
                <p>+1 5589 55488 55</p>
            </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
            <i class="bi bi-envelope flex-shrink-0"></i>
            <div>
                <h3>Email Us</h3>
                <p>info@example.com</p>
            </div>
            </div><!-- End Info Item -->

        </div>

        <div class="col-lg-8">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
            <div class="row gy-4">

                <div class="col-md-6">
                <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                </div>

                <div class="col-md-6 ">
                <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                </div>

                <div class="col-md-12">
                <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                </div>

                <div class="col-md-12">
                <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>

                <button type="submit">Send Message</button>
                </div>

            </div>
            </form>
        </div><!-- End Contact Form -->

        </div>

    </div>

    </section>
    <!-- /Contact Section -->

    @push('js_user')
    {{-- <script src="https://maps.googleapis.com/maps/api/js?=?key=AIzaSyBEh53w90s-SizRJf48W9aVdH4YXiZJSCwv=3.exp&amp;sensor=false"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?"></script> --}}

    <script>
       function initialize() {
        var mapOptions = {
          center: new google.maps.LatLng(-0.500056, 117.141072), //Set your latitude, longitude
          zoom: 19,
          mapTypeId: google.maps.MapTypeId.SATELLITE,
          scrollwheel: false
        }

        var map = new google.maps.Map(document.getElementById('google-map'), mapOptions); // get the div by id

        var ctaLayer = new google.maps.KmlLayer({
          url: '{{ asset("assets/kml/line_parkir.kml") }}' // Set the KML file
        });

        // attach the layer to the map
        ctaLayer.setMap(map);
    }
    // load the map
        google.maps.event.addDomListener(window, 'load', initialize);

    </script>
    @endpush
@endsection
