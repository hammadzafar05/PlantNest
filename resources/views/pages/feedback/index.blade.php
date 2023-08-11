@extends('layouts.guest')
<title>{{ config('app.name', 'PlantNest | Feedback') }}</title>
@section('content')    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <h3>Feedback</h3>
                        <ul>
                            <li><a href="{{route('user.home')}}">home</a></li>
                            <li>feedback</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--contact area start-->
    <div class="contact_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 mt-5">
                    <div class="contact_message form">
                        <h3>Tell us about your experience</h3>
                        <form method="POST" action="{{ route('submit.feedback') }}">
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
                                <label> Your Feedback</label>
                                <textarea placeholder="Feedback *" name="message" class="form-control2" required></textarea>
                            </div>
                            <button type="submit"> Send</button>

                            @if (session()->has('success'))
                            <h4 class="text-success mt-2">
                                Thanks For Your Valuable Feedback !
                                <br>
                                {{ session()->get('success') }}</h4>
                            @endif
                        </form>

                    </div>
                </div>
                <div class="col-lg-6 p-0 feedbackimg">
                    <img src="{{asset('assets/frontend/img/feedback.jpg')}}" class="feedback-img">
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
        $('#feedback a').addClass('active');
    });
</script>
    @endsection