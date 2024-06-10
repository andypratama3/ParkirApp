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
                @if($parkir && !$parkir->contains)
                <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon-box">
                    <h3><a href="{{ route('parkir.index') }}">Daftar Parkir</a></h3>
                    </div>
                </div>
                @else
                <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon-box">
                    <h3><a href="{{ route('parkir.index') }}">Data Parkir</a></h3>
                    </div>
                </div>
                @endif
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

    <div class="container section-title" data-aos="fade-up">
        <h2>Visi & Misi</h2>
    </div>
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

    <!-- Services Section -->
    <section id="struktur-organisasi" class="services section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Strukutur Organisasi</h2>
        <p class="">STRUKUTUR ORGANISASI</p>
    </div>
    <!-- End Section Title -->

    <div class="container">

        <div class="row gy-4">

        <div class="col-lg-12 col-md-12"  data-aos="fade-up" data-aos-delay="100">
            <div class="icon d-flex align-items-center justify-content-center" >
                <img src="{{ asset('assets/img/struktur-organisasi.png') }}" alt="" style="width: 100%">
            </div>
        </div><!-- End Service Item -->

        </div>

    </div>

    </section>
    <!-- /Services Section -->

    <section id="kebijakan" class="services section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Kebijakan</h2>
            <p class="">Kebijakan</p>
        </div>
        <!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

            <div class="col-lg-12 col-md-12" data-aos="fade-up" data-aos-delay="100">
                <div class="icon d-flex align-items-center justify-content-center">
                    <img src="{{ asset('assets/img/item1.jpeg') }}" alt="" class="img-fluid">
                    <img src="{{ asset('assets/img/item2.jpeg') }}" alt="" class="img-fluid">
                </div>
            </div><!-- End Service Item -->

            </div>

        </div>

        </section>
        <!-- /Services Section -->


    <!-- Contact Section -->
    <section id="lokasi-parkir" class="contact section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Lokasi & Kontak</h2>
        <p class="">Lokasi & Kontak</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="mb-5" data-aos="fade-up" data-aos-delay="200">
        {{-- <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus" frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
        <div id="google-map" class="google-map" style="width: 100%; height: 500px; border: 10px solid blue;"></div>

        </div><!-- End Google Maps -->

        <p>Alamat : Jl MT.Haryono, Kec. Samarinda Ulu, Kota Samarinda, Kalimantan Timur</p>


        <div class="row gy-4">

        <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
            <i class="bi bi-instagram flex-shrink-0"></i>
            <div>
                <h3>Instagram</h3>
                <p>@Dishubkotasamarinda</p>
            </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
            <i class="bi bi-facebook flex-shrink-0"></i>
            <div>
                <h3>Facebook</h3>
                <p>dishubkotasmr</p>
            </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                <i class="bi bi-whatsapp flex-shrink-0"></i>
                <div>
                    <h3>WhatsApp</h3>
                    <p>0812509333939 (Wa Only)</p>
                </div>
            </div><!-- End Info Item -->


            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
            <i class="bi bi-youtube flex-shrink-0"></i>
            <div>
                <h3>Youtube</h3>
                <p>Dishub Kota Samarinda</p>
            </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                <i class="bi bi-twitter flex-shrink-0"></i>
                <div>
                    <h3>Twitter</h3>
                    <p>Dishub Kota Samarinda</p>
                </div>
            </div><!-- End Info Item -->


        </div>

        <div class="col-lg-8" id="kontak">
            <form action="{{ route('kritik-saran.store')  }}" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                @csrf
                <div class="container section-title mt-4" data-aos="fade-up">
                    <h2>Kritik Dan Saran</h2>
                    <p class="">Kritik Dan Saran</p>
                </div><!-- End Section Title -->
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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBEh53w90s-SizRJf48W9aVdH4YXiZJSCw"></script>

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
        var target = document.head;
        var observer = new MutationObserver(function(mutations) {
            for (var i = 0; mutations[i]; ++i) { // notify when script to hack is added in HTML head
                if (mutations[i].addedNodes[0].nodeName == "SCRIPT" && mutations[i].addedNodes[0].src.match(/\/AuthenticationService.Authenticate?/g)) {
                    var str = mutations[i].addedNodes[0].src.match(/[?&]callback=.*[&$]/g);
                    if (str) {
                        if (str[0][str[0].length - 1] == '&') {
                            str = str[0].substring(10, str[0].length - 1);
                        } else {
                            str = str[0].substring(10);
                        }
                        var split = str.split(".");
                        var object = split[0];
                        var method = split[1];
                        window[object][method] = null; // remove censorship message function _xdc_._jmzdv6 (AJAX callback name "_jmzdv6" differs depending on URL)
                        //window[object] = {}; // when we removed the complete object _xdc_, Google Maps tiles did not load when we moved the map with the mouse (no problem with OpenStreetMap)
                    }
                    observer.disconnect();
                }
            }
        });
        var config = { attributes: true, childList: true, characterData: true }
        observer.observe(target, config);
    </script>
    @endpush
@endsection
