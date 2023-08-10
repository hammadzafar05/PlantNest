@extends('layouts.guest')
<title>{{ config('app.name', 'PlantNest|Checkout') }}</title>
@section('content')    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <h3>Contact Us</h3>
                        <ul>
                            <li><a href="{{route('user.home')}}">home</a></li>
                            <li>contact us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--contact map start-->
    <div class="contact_map mt-10">
        <div class="map-area">
            <div id="googleMap"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3619.313992521717!2d67.14924997450944!3d24.887269144185858!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb339999415e0c3%3A0x36742eee0fd9c291!2sAptech%20Metro%20Star%20Gate!5e0!3m2!1sen!2s!4v1691574181935!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
        </div>
    </div>
    <!--contact map end-->

    <!--contact area start-->
    <div class="contact_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="contact_message content">
                        <h3>contact us</h3>
                        <p>If you have any questions, suggestions, or inquiries, feel free to reach out to us. We're here to help!</p>
                            <li><i class="fa fa-fax"></i> Address : Aptech Metro Star Gate, Karachi, Pakistan</li>
                            <br>
                            <li><i class="fa fa-phone"></i> <a href="#">info@msg-artisan.techwiz.com.pk</a></li>
                            <br>
                            <li><i class="fa fa-envelope-o"></i> &nbsp;&nbsp; <a href="tel:0123456789">0123456789</a> </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="contact_message form">
                        <h3>Tell us about your project</h3>
                        <form method="POST" action="{{ route('submit.contact') }}">
                            @csrf
                            <p>
                                <label> Your Name (required)</label>
                                <input name="name" placeholder="Name *" type="text" required>
                            </p>
                            <p>
                                <label> Your Email (required)</label>
                                <input name="email" placeholder="Email *" type="email" required>
                            </p>
                            <p>
                                <label> Subject</label>
                                <input name="subject" placeholder="Subject *" type="text" required>
                            </p>
                            <div class="contact_textarea">
                                <label> Your Message</label>
                                <textarea placeholder="Message *" name="message" class="form-control2" required></textarea>
                            </div>
                            <button type="submit"> Send</button>

                            @if (session()->has('success'))
                            <h4 class="text-success mt-2">{{ session()->get('success') }}</h4>
                            @endif
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--contact area end-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function () {
        console.log('i ran');
        
        // Remove active class from all li elements
        $('nav ul li a').removeClass('active');
        
        // Add active class to the clicked li element
        $('#contact a').addClass('active');
    });
</script>
    @endsection