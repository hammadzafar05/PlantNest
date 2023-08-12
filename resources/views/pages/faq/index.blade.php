@extends('layouts.guest')
<title>{{ config('app.name', 'PlantNest|FAQ') }}</title>
@section('content')
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="{{route('user.home')}}">home</a></li>
                            <li>Frequently Questions</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--faq area start-->
    <div class="faq_content_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="faq_content_wrapper">
                        <h4>Below are frequently asked questions, you may find the answer for yourself</h4>
                        <p>Welcome to the Frequently Asked Questions (FAQ) section of PlantNest! We understand that you might have some questions about our platform, ordering plants, and taking care of your green friends. We're here to provide you with clear and concise answers to help you make the most out of your PlantNest experience. If you don't find the answer you're looking for here, feel free to contact our friendly customer support team.</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Accordion area-->
    <div class="accordion_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div id="accordion" class="card__accordion">
                        <div class="card card_dipult">
                            <div class="card-header card_accor" id="headingOne">
                                <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne">
                                    How can I place an order for plants on PlantNest?

                                    <i class="fa fa-plus"></i>
                                    <i class="fa fa-minus"></i>

                                </button>

                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <p>To place an order, simply browse our diverse Plants Catalog, select the plants that catch your eye, add them to your cart, and proceed to checkout. Don't forget to provide your accurate shipping address during the checkout process. Before confirming your purchase, you'll have a chance to review your order.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card  card_dipult">
                            <div class="card-header card_accor" id="headingTwo">
                                <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                    aria-expanded="false" aria-controls="collapseTwo">
                                    What payment methods are accepted?
                                    <i class="fa fa-plus"></i>
                                    <i class="fa fa-minus"></i>

                                </button>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <p>We accept major credit and debit cards, as well as popular online payment methods such as PayPal. Rest assured that your payment information is kept secure, and we utilize industry-standard encryption to protect your details.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card  card_dipult">
                            <div class="card-header card_accor" id="headingThree">
                                <button class="btn btn-link collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    How do I care for the plants I purchase?
                                    <i class="fa fa-plus"></i>
                                    <i class="fa fa-minus"></i>
                                </button>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <p>Each plant you purchase from PlantNest comes with detailed care instructions. These instructions cover essential information like light requirements, watering schedules, and any specific care tips unique to the plant. If you have further questions about plant care, don't hesitate to get in touch with our knowledgeable customer support team.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card  card_dipult">
                            <div class="card-header card_accor" id="headingfour">
                                <button class="btn btn-link collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapsenine" aria-expanded="false" aria-controls="collapsenine">
                                    What is the return policy?
                                    <i class="fa fa-plus"></i>
                                    <i class="fa fa-minus"></i>
                                </button>
                            </div>
                            <div id="collapsenine" class="collapse" aria-labelledby="headingfour"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <p>We're committed to your satisfaction. If, for any reason, you're not satisfied with your purchase, please reach out to us within 7 days of receiving your plants. We'll guide you through the return process, and once we receive the plants in good condition, we'll process your refund.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card  card_dipult">
                            <div class="card-header card_accor" id="headingfive">
                                <button class="btn btn-link collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapseten" aria-expanded="false" aria-controls="collapseten">
                                    How long does shipping take?
                                    <i class="fa fa-plus"></i>
                                    <i class="fa fa-minus"></i>
                                </button>
                            </div>
                            <div id="collapseten" class="collapse" aria-labelledby="headingfive"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <p>Shipping times vary depending on your location. Our goal is to process and ship orders within 1-3 business days. Once your order is shipped, we'll provide you with a tracking number so you can monitor the delivery status.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card  card_dipult">
                            <div class="card-header card_accor" id="headingsix">
                                <button class="btn btn-link collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                    Can I cancel an order after it's placed?
                                    <i class="fa fa-plus"></i>
                                    <i class="fa fa-minus"></i>
                                </button>
                            </div>
                            <div id="collapsefour" class="collapse" aria-labelledby="headingsix"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes, you can cancel an order as long as it hasn't been shipped yet. If you need to cancel an order, please contact our support team as soon as possible.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card  card_dipult">
                            <div class="card-header card_accor" id="headingseven">
                                <button class="btn btn-link collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                    Is there a minimum order quantity for plants?
                                    <i class="fa fa-plus"></i>
                                    <i class="fa fa-minus"></i>
                                </button>
                            </div>
                            <div id="collapsefive" class="collapse" aria-labelledby="headingseven"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <p>There's no minimum order quantity for plants on PlantNest. Whether you're looking to buy a single plant or multiple plants, the choice is yours.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card  card_dipult">
                            <div class="card-header card_accor" id="headingeight">
                                <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapsesix"
                                    aria-expanded="false" aria-controls="collapsesix">
                                    Are the plants shipped in pots or bare-root?
                                    <i class="fa fa-plus"></i>
                                    <i class="fa fa-minus"></i>
                                </button>
                            </div>
                            <div id="collapsesix" class="collapse" aria-labelledby="headingeight"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <p>We take extra care to ensure the health of your plants. They are shipped in pots to preserve their well-being during transit. The pots are securely packaged to prevent any damage.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card  card_dipult">
                            <div class="card-header card_accor" id="headingnine">
                                <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseseven"
                                    aria-expanded="false" aria-controls="collapseseven">
                                    Do you offer international shipping?
                                    <i class="fa fa-plus"></i>
                                    <i class="fa fa-minus"></i>
                                </button>
                            </div>
                            <div id="collapseseven" class="collapse" aria-labelledby="headingnine"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <p>Currently, we offer shipping only within the specific regions/countries where we operate. However, we're actively working on expanding our shipping options to reach more plant enthusiasts around the world.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card  card_dipult">
                            <div class="card-header card_accor" id="headingten">
                                <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseeight"
                                    aria-expanded="false" aria-controls="collapseeight">
                                    What should I do if my plants arrive damaged?
                                    <i class="fa fa-plus"></i>
                                    <i class="fa fa-minus"></i>
                                </button>
                            </div>
                            <div id="collapseeight" class="collapse" aria-labelledby="headingten"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <p>In the rare event that your plants arrive damaged, please take photos of the plants and the packaging, and then contact our customer support team immediately. We'll work with you to find a solution and ensure your satisfaction.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="faq_content_wrapper">
                                    <p>Feel free to explore these FAQs, and if you have any additional questions or need assistance, we're just a message away. At PlantNest, we're dedicated to providing you with a delightful plant shopping experience!
                                    </p>
            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Accordion area end-->
    <!--faq area end-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function () {
        console.log('i ran');
        
        // Remove active class from all li elements
        $('nav ul li a').removeClass('active');
        
        // Add active class to the clicked li element
        $('#faq a').addClass('active');
    });
</script>
@endsection