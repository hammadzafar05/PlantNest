@extends('layouts.guest')
<title>{{ config('app.name', 'PlantNest|About') }}</title>
@section('content')
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <h3>About Us</h3>
                        <ul>
                            <li><a href="{{route('user.home')}}">home</a></li>
                            <li>about us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--about section area -->
    <section class="about_section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <figure>
                        <div class="about_thumb">
                            <img src="{{ asset('assets/frontend/img/about/about1.jpg') }}" alt="">
                        </div>
                        <figcaption class="about_content">
                            <h1>We Are Passionate Plant Enthusiasts Bringing Nature to Your Doorstep.</h1>
                            <p>At PlantNest, we're more than just an online platform for plants and gardening supplies. We're a team of dedicated plant enthusiasts who believe in the power of greenery to transform spaces and lives. Our mission is to provide you with not only a wide range of high-quality plants and gardening accessories but also the knowledge and inspiration to create thriving green spaces at home.</p>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <!--about section end-->

    <!--chose us area start-->
    <div class="choseus_area" data-bgimg="{{ asset('assets/frontend/img/about/about-us-policy-bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="single_chose">
                        <div class="chose_icone">
                            <img src="{{asset('assets/frontend/img/about/About_icon1.png')}}" alt="">
                        </div>
                        <div class="chose_content">
                            <h3>Expertly Crafted Collections</h3>
                            <p>We curate each plant and accessory with care, offering a diverse selection that reflects our passion for quality and aesthetics. Discover the perfect additions to your green oasis.</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="single_chose">
                        <div class="chose_icone">
                            <img src="{{ asset('assets/frontend/img/about/About_icon2.png') }}" alt="">
                        </div>
                        <div class="chose_content">
                            <h3>Plant Happiness Guarantee</h3>
                            <p>Your satisfaction is our top priority. If you're not delighted with your purchase, we'll work to make it right. We believe in the joy that plants bring, and we're here to ensure your happiness.</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="single_chose">
                        <div class="chose_icone">
                            <img src="{{ asset('assets/frontend/img/about/About_icon3.png') }}" alt="">
                        </div>
                        <div class="chose_content">
                            <h3>Personalized Assistance</h3>
                            <p>Our knowledgeable team is available around the clock to assist you. Whether you have questions about plant care, need design tips, or want help choosing the ideal plants, we're here for you.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--chose us area end-->

    <!--services img area-->
    <div class="about_gallery_section">
        <div class="container">
            <div class="about_gallery_container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <article class="single_gallery_section">
                            <figure>
                                <div class="gallery_thumb">
                                    <img src="{{ asset('assets/frontend/img/about/about3.jpg') }}" alt="">
                                </div>
                                <figcaption class="about_gallery_content">
                                    <h3>Our Mission: A Greener Tomorrow</h3>
                                    <p>We're more than an online store; we're on a mission to inspire a love for plants and a greener lifestyle. Together, let's create a world where the beauty and benefits of nature thrive in every home.</p>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <article class="single_gallery_section">
                            <figure>
                                <div class="gallery_thumb">
                                    <img src="{{ asset('assets/frontend/img/about/about2.jpg') }}" alt="">
                                </div>
                                <figcaption class="about_gallery_content">
                                    <h3>Our Journey</h3>
                                    <p>Since our inception, we've been dedicated to spreading the magic of plants. From humble beginnings to where we are now, our journey is a testament to our commitment to quality and your satisfaction.</p>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <article class="single_gallery_section">
                            <figure>
                                <div class="gallery_thumb">
                                    <img src="{{ asset('assets/frontend/img/about/about4.jpg') }}" alt="">
                                </div>
                                <figcaption class="about_gallery_content">
                                    <h3>Our Vision: Growing with You</h3>
                                    <p>Our vision goes beyond providing plants; it's about fostering a community that shares a love for nature, where we learn from each other and grow together. Join us on this journey to transform spaces, bring joy, and make our planet a little greener, one plant at a time.</p>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--services img end-->

    <!--testimonial area start-->
    <div class="faq-client-say-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="faq-client_title">
                        <h2>What can we do for you ?</h2>
                    </div>
                    <div class="faq-style-wrap" id="faq-five">
                        <!-- Panel-default -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">
                                    <a id="octagon" class="collapsed" role="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-collapse1" aria-expanded="true" aria-controls="faq-collapse1">
                                        <span class="button-faq"></span>Fast Free Delivery</a>
                                </h5>
                            </div>
                            <div id="faq-collapse1" class="collapse show" aria-expanded="true" role="tabpanel"
                                data-parent="#faq-five">
                                <div class="panel-body">
                                    <p>Nam liber tempor cum soluta nobis eleifend option.</p>
                                    <p>Congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non
                                        habent claritatem insitam est usus legentis in iis qui facit eorum claritatem.
                                        Investigationes demonstraverunt lectores legere me.
                                    </p>
                                    <p> Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium
                                        lectorum.</p>
                                </div>
                            </div>
                        </div>
                        <!--// Panel-default -->

                        <!-- Panel-default -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">
                                    <a class="collapsed" role="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-collapse2" aria-expanded="false" aria-controls="faq-collapse2">
                                        <span class="button-faq"></span>More Than 30
                                        Years In The Business</a>
                                </h5>
                            </div>
                            <div id="faq-collapse2" class="collapse" aria-expanded="false" role="tabpanel"
                                data-parent="#faq-five">
                                <div class="panel-body">
                                    <p>Nam liber tempor cum soluta nobis eleifend option.</p>
                                    <p>Congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non
                                        habent claritatem insitam est usus legentis in iis qui facit eorum claritatem.
                                        Investigationes demonstraverunt lectores legere me.
                                    </p>
                                    <p> Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium
                                        lectorum.</p>
                                </div>
                            </div>
                        </div>
                        <!--// Panel-default -->

                        <!-- Panel-default -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">
                                    <a class="collapsed" role="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-collapse3" aria-expanded="false"
                                        aria-controls="faq-collapse3"> <span class="button-faq"></span>100% Organic
                                        Foods</a>
                                </h5>
                            </div>
                            <div id="faq-collapse3" class="collapse" role="tabpanel" data-parent="#faq-five">
                                <div class="panel-body">
                                    <p>Nam liber tempor cum soluta nobis eleifend option.</p>
                                    <p>Congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non
                                        habent claritatem insitam est usus legentis in iis qui facit eorum claritatem.
                                        Investigationes demonstraverunt lectores legere me.
                                    </p>
                                    <p> Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium
                                        lectorum.</p>
                                </div>
                            </div>
                        </div>
                        <!--// Panel-default -->

                        <!-- Panel-default -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">
                                    <a class="collapsed" role="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-collapse4" aria-expanded="false"
                                        aria-controls="faq-collapse4"> <span class="button-faq"></span>Best Shopping
                                        Strategies</a>
                                </h5>
                            </div>
                            <div id="faq-collapse4" class="collapse" role="tabpanel" data-parent="#faq-five">
                                <div class="panel-body">
                                    <p>Nam liber tempor cum soluta nobis eleifend option.</p>
                                    <p>Congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non
                                        habent claritatem insitam est usus legentis in iis qui facit eorum claritatem.
                                        Investigationes demonstraverunt lectores legere me.
                                    </p>
                                    <p> Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium
                                        lectorum.</p>
                                </div>
                            </div>
                        </div>
                        <!--// Panel-default -->
                    </div>

                </div>
                <div class="col-lg-6 col-md-6">
                    <!--testimonial area start-->
                    <div class="testimonial_area  testimonial_about">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="section_title">
                                        <h2>What Our Customers Says ?</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial_container">
                                <div class="row">
                                    <div class="testimonial_carousel owl-carousel">
                                        <div class="col-12">
                                            <div class="single-testimonial">
                                                <div class="testimonial-icon-img">
                                                    <img src="{{ asset('assets/frontend/img/about/testimonials-icon.png') }}" alt="">
                                                </div>
                                                <div class="testimonial_content">
                                                    <p>“ When a beautiful design is combined with powerful technology,
                                                        <br>
                                                        it truly is an artwork. I love how my website operates and looks
                                                        with this theme. Thank you for the awesome product. ”
                                                    </p>
                                                    <div class="testimonial_text_img">
                                                        <a href="#"><img src="{{ asset('assets/frontend/img/about/testimonial1.png') }}"
                                                                alt=""></a>
                                                    </div>
                                                    <div class="testimonial_author">
                                                        <p><a href="#">Rebecka Filson</a> / <span>CEO of CSC</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="single-testimonial">
                                                <div class="testimonial-icon-img">
                                                    <img src="{{ asset('assets/frontend/img/about/testimonials-icon.png') }}" alt="">
                                                </div>
                                                <div class="testimonial_content">
                                                    <p>“ When a beautiful design is combined with powerful technology,
                                                        <br>
                                                        it truly is an artwork. I love how my website operates and looks
                                                        with this theme. Thank you for the awesome product. ”
                                                    </p>
                                                    <div class="testimonial_text_img">
                                                        <a href="#"><img src="{{ asset('assets/frontend/img/about/testimonial2.png') }}"
                                                                alt=""></a>
                                                    </div>
                                                    <div class="testimonial_author">
                                                        <p><a href="#">Amber Laha</a> / <span>CEO of DND</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="single-testimonial">
                                                <div class="testimonial-icon-img">
                                                    <img src="{{ asset('assets/frontend/img/about/testimonials-icon.png') }}" alt="">
                                                </div>
                                                <div class="testimonial_content">
                                                    <p>“ When a beautiful design is combined with powerful technology,
                                                        <br>
                                                        it truly is an artwork. I love how my website operates and looks
                                                        with this theme. Thank you for the awesome product. ”
                                                    </p>
                                                    <div class="testimonial_text_img">
                                                        <a href="#"><img src="{{ asset('assets/frontend/img/about/testimonial3.png') }}"
                                                                alt=""></a>
                                                    </div>
                                                    <div class="testimonial_author">
                                                        <p><a href="#">Lindsy Neloms</a> / <span>CEO of SFD</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--testimonial area end-->
                </div>
            </div>
        </div>
    </div>
    <!--testimonial area end-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            console.log('i ran');

            // Remove active class from all li elements
            $('nav ul li a').removeClass('active');

            // Add active class to the clicked li element
            $('#about a').addClass('active');
        });
    </script>
@endsection
