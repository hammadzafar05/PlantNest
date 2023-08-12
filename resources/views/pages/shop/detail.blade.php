@extends('layouts.guest')
<title>{{ config('app.name', 'PlantNest|Detail') }}</title>
@section('content')
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="{{ route('user.home') }}">home</a></li>
                            <li>product details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--product details start-->
    <div class="product_details mt-100 mb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product-details-tab">
                        <div id="img-1" class="zoomWrapper single-zoom">
                            <a href="#">
                                <img id="zoom1" src="{{ asset('assets/backend/images/product/').'/'. $product->image_url }}"
                                    data-zoom-image="{{asset('assets/backend/images/product/').'/'. $product->image_url }}" alt="big-1">
                            </a>
                        </div>
                        <div class="single-zoom-thumb">
                            <ul class="s-tab-zoom owl-carousel single-product-active" id="gallery_01">
                                <li>
                                    <a href="#" class="elevatezoom-gallery active" data-update=""
                                        data-image="{{ asset('assets/backend/images/product/').'/'.$product->image_url }}" data-zoom-image="{{ asset('assets/backend/images/product/').'/'.$product->image_url }}">
                                        <img src="{{ asset('assets/backend/images/product/').'/'.$product->image_url }}" alt="zo-th-1" />
                                    </a>

                                </li>
                                @foreach ($product->images as $image)
                                    <li>
                                        <a href="#" class="elevatezoom-gallery active" data-update=""
                                            data-image="{{ asset('assets/backend/images/product/').'/'.$image->image_url }}" data-zoom-image="{{ asset('assets/backend/images/product/').'/'.$image->image_url }}">
                                            <img src="{{ asset('assets/backend/images/product/').'/'.$image->image_url }}" alt="zo-th-1" />
                                        </a>

                                    </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product_d_right">
                        {{-- <form action="#"> --}}

                        <h1><a href="#">{{ $product->name }}</a></h1>
                        {{-- <div class="product_nav">
                            <ul>
                                <li class="prev"><a href="route('shop.detail',$product->id)"><i class="fa fa-angle-left"></i></a>
                                </li>
                                <li class="next"><a href="variable-product.html"><i
                                            class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </div> --}}
                        <div class=" product_ratting">
                            <ul>
                                @php
                                    $averageRating = $product->reviews->avg('rating');
                                @endphp

                                @for ($i = 1; $i <= 5; $i++)
                                    @if ($i <= $averageRating)
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    @elseif ($i - 0.5 <= $averageRating)
                                        <li><a href="#"><i class="fa fa-star-half" aria-hidden="true"></i></a></li>
                                    @else
                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                    @endif
                                @endfor
                                <li class="review"><a href="#"> ({{ $product->reviews->count() }} ) </a></li>
                            </ul>

                        </div>
                        <div class="price_box">
                            @if ($product->discount_percentage > 0)
                                <span class="current_price">PKR
                                    {{ $product->price - $product->discount }}</span>
                                <span class="old_price">PKR
                                    {{ $product->price }}</span>
                            @else
                                <span class="current_price">PKR
                                    {{ $product->price }}</span>
                            @endif


                        </div>
                        <div class="product_desc">
                            <p>{{ $product->description }} </p>
                        </div>
                        <div class="product_variant quantity">
                            <label>quantity</label>
                            <input min="1" max="100" value="1" type="number" class="cart_quantity"
                                onchange="updateDataQuantityDetail(this)" oninput="updateDataQuantityDetail(this)">
                            <button type="submit" class="add_to_cart" data-product-id="{{ $product->id }}"
                                data-quantity="1">add to
                                cart</button>

                        </div>
                        <div class="product_d_action">
                            <ul>

                                <li class="wishlist"><a href="javascript:void(0)" title="Add to wishlist"
                                        data-product-id="{{ $product->id }}" class="add-to-wishlist" id="wishlist_detail">
                                        @if ($product->in_wishlist == true)
                                            Added to Wishlist
                                        @else
                                            + Add to Wishlist
                                        @endif
                                    </a></li>
                            </ul>
                        </div>
                        <div class="product_meta">
                            <span>Purpose: <a href="#">{{ $product->purpose }}</a></span>
                            <br>
                            <span>Category: <a href="#">{{ $product->category->name }}</a></span>
                        </div>

                        {{-- </form> --}}


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--product details end-->

    <!--product info start-->
    <div class="product_d_info mb-90">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product_d_inner">
                        <div class="product_info_button">
                            <ul class="nav" role="tablist" id="nav-tab">
                                <li>
                                    <a class="active" data-bs-toggle="tab" href="#info" role="tab"
                                        aria-controls="info" aria-selected="false">Description</a>
                                </li>
                                @if ($product->plantInfo)
                                    <li>
                                        <a data-bs-toggle="tab" href="#sheet" role="tab" aria-controls="sheet"
                                            aria-selected="false">Specification</a>
                                    </li>
                                @endif
                                <li>
                                    <a data-bs-toggle="tab" href="#reviews" role="tab" aria-controls="reviews"
                                        aria-selected="false">Reviews ({{ $product->reviews->count() }})</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="info" role="tabpanel">

                                <div class="product_info_content">
                                    <p>{{ $product->description }}</p>
                                </div>
                            </div>
                            @if ($product->plantInfo)
                                <div class="tab-pane fade" id="sheet" role="tabpanel">
                                    <div class="product_d_table">
                                        <form action="#">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td class="first_child">Habit</td>
                                                        <td>{{ $product->plantInfo->habits }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="first_child">Water</td>
                                                        <td>{{ $product->plantInfo->water_requirements }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="first_child">Sunlight</td>
                                                        <td>{{ $product->plantInfo->lights }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="first_child">Other</td>
                                                        <td>{{ $product->plantInfo->other }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </form>
                                    </div>

                                </div>
                            @endif
                            <div class="tab-pane fade" id="reviews" role="tabpanel">
                                <div class="reviews_wrapper">
                                    <h2>{{ $product->reviews->count() }} review for {{ $product->name }}</h2>
                                    @foreach ($product->reviews as $review)
                                        <div class="reviews_comment_box">
                                            <div class="comment_thmb">
                                                <img src="{{ asset('assets/frontend/img/blog/comment2.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="comment_text">
                                                <div class="reviews_meta">
                                                    <div class="star_rating">
                                                        <ul>

                                                            @for ($i = 1; $i <= 5; $i++)
                                                                @if ($i <= $review->rating)
                                                                    <li><a href="#"><i class="fa fa-star"
                                                                                aria-hidden="true"></i></a></li>
                                                                @elseif ($i - 0.5 <= $review->rating)
                                                                    <li><a href="#"><i class="fa fa-star-half"
                                                                                aria-hidden="true"></i></a></li>
                                                                @else
                                                                    <li><a href="#"><i class="icon-star"></i></a>
                                                                    </li>
                                                                @endif
                                                            @endfor
                                                        </ul>
                                                    </div>
                                                    <p><strong>{{ $review->user->name }} </strong>-
                                                        {{ $review->created_at->format('F j, Y') }}</p>
                                                    <span>{{ $review->review_text }}</span>
                                                </div>
                                            </div>

                                        </div>
                                    @endforeach
                                    <div class="comment_title">
                                        <h2>Add a review </h2>
                                        <p>Your email address will not be published. Required fields are marked </p>
                                    </div>
                                    <div class="product_ratting mb-10">
                                        <h3>Your rating</h3>
                                        <ul>
                                            <li><a href="#"><i class="icon-star"></i></a></li>
                                            <li><a href="#"><i class="icon-star"></i></a></li>
                                            <li><a href="#"><i class="icon-star"></i></a></li>
                                            <li><a href="#"><i class="icon-star"></i></a></li>
                                            <li><a href="#"><i class="icon-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_review_form">
                                        <form action="#">
                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="review_comment">Your review </label>
                                                    <textarea name="comment" id="review_comment"></textarea>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <label for="author">Name</label>
                                                    <input id="author" type="text">

                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <label for="email">Email </label>
                                                    <input id="email" type="text">
                                                </div>
                                            </div>
                                            <button type="submit">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--product info end-->

    <!--product area start-->
    <section class="product_area related_products">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2>Related Products </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="product_carousel product_column4 owl-carousel">
                    @foreach ($relatedProducts as $product)
                        <div class="col-lg-3">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{ route('shop.detail', $product->id) }}"><img
                                                src="{{ asset('assets/backend/images/product/').'/'.$product->image_url }}" alt=""></a>
                                        <div class="label_product">
                                            @if ($product->discount_percentage > 0)
                                                <span class="label_sale">-{{ $product->discount_percentage }}%</span>
                                            @endif
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="add_to_cart" data-product-id="{{ $product->id }}"
                                                    data-quantity="1" title="Add to cart"><i
                                                        class="icon-shopping-bag"></i></a></li>
                                                <li class="wishlist"><a href="" title="Add to Wishlist"
                                                        data-product-id="{{ $product->id }}" class="add-to-wishlist">
                                                        @if ($product->in_wishlist == 1)
                                                            <i class="fa fa-heart"></i>
                                                        @else
                                                            <i class="icon-heart"></i>
                                                        @endif
                                                    </a>
                                                </li>
                                                <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#modal_box" title="quick view"> <i
                                                            class="icon-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="product_rating">
                                            <ul>
                                                @php
                                                    $averageRating = $product->reviews->avg('rating');
                                                @endphp

                                                @for ($i = 1; $i <= 5; $i++)
                                                    @if ($i <= $averageRating)
                                                        <li><a href="#"><i class="fa fa-star"
                                                                    aria-hidden="true"></i></a></li>
                                                    @elseif ($i - 0.5 <= $averageRating)
                                                        <li><a href="#"><i class="fa fa-star-half"
                                                                    aria-hidden="true"></i></a></li>
                                                    @else
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    @endif
                                                @endfor
                                            </ul>
                                        </div>
                                        <h4 class="product_name"><a
                                                href="{{ route('shop.detail', $product->id) }}">{{ $product->name }}</a>
                                        </h4>
                                        <div class="price_box">
                                            @if ($product->discount_percentage > 0)
                                                <span class="current_price">PKR
                                                    {{ $product->price - $product->discount }}</span>
                                                <span class="old_price">PKR
                                                    {{ $product->price }}</span>
                                            @else
                                                <span class="current_price">PKR
                                                    {{ $product->price }}</span>
                                            @endif
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!--product area end-->
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            console.log('i ran');

            // Remove active class from all li elements
            $('nav ul li a').removeClass('active');

            // Add active class to the clicked li element
            $('#shop').addClass('active');

        });
    </script>
    <script>
        function updateDataQuantityDetail(inputElement) {
            const quantity = parseInt(inputElement.value);
            const addToCartButton = inputElement.parentElement.querySelector('.detail_add_to_cart');
            addToCartButton.setAttribute('data-quantity', quantity);
        }

        function addToCart(p_id) {
            if (localStorage.getItem('auth') == 'false') {
                Swal.fire({
                    title: 'You need to login First!',
                    text: 'Do you want to continue?',
                    icon: 'warning',
                    confirmButtonText: 'Login'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location = "{{ route('login') }}";
                    }
                })
            } else {
                $.ajax({
                    "type": "POST",
                    "url": baseURL + "add-cart",
                    "data": {
                        "_token": "{{ csrf_token() }}",
                        "product_id": p_id,
                        "product_quantity": $("#qnt").val(),
                    },
                    success: function(response) {
                        getCart()
                        getHeaderCart()
                        $("#qnt").val(1)
                        $("#pd_alert").css("display", "block")
                        setTimeout(() => {
                            $("#pd_alert").css("display", "none")
                        }, 3000);
                    }
                })
            }
        }
    </script>
    <script>
        function updateDataQuantityDetail(inputElement) {
            const quantity = parseInt(inputElement.value);
            const addToCartButton = inputElement.parentElement.querySelector('.add_to_cart');
            addToCartButton.setAttribute('data-quantity', quantity);
        }
    </script>
@endsection
