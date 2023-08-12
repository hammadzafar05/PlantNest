@extends('layouts.guest')
<title>{{ config('app.name', 'PlantNest') }}</title>

@section('content')
    <!--slider area start-->
    <section class="slider_section mb-30">
        <div class="slider_area owl-carousel">
            <div class="single_slider d-flex align-items-center"
                data-bgimg="{{ asset('assets/frontend/img/slider/slider3.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="slider_content">
                                <h1>Lovely Plants </h1>
                                <p>Discount <span>20% Off </span> For PlantNest Members </p>
                                <a class="button" href="{{ route('shop.index') }}">Discover Now </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider d-flex align-items-center"
                data-bgimg="{{ asset('assets/frontend/img/slider/slider1.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="slider_content">
                                <h1>BIG SALE</h1>
                                <p>Discount <span>20% Off </span> For PlantNest Members </p>
                                <a class="button" href="{{ route('shop.index', 1) }}">Discover Plants</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider d-flex align-items-center"
                data-bgimg="{{ asset('assets/frontend/img/slider/slider2.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="slider_content">
                                <h1>All Accessories</h1>
                                <p>Discount <span>20% Off </span> For PlantNest Members </p>
                                <a class="button" href="{{ route('shop.index', 2) }}">Discover Accessories</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--slider area end-->

    <!--banner area start-->
    <div class="banner_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <figure class="single_banner">
                        <div class="banner_thumb">
                            <a href="{{ route('shop.index', $plantCategory->id) }}"><img
                                    src="{{ asset('assets/frontend/img/bg/banner1.jpg') }}" alt=""></a>
                            <div class="banner_content">
                                {{-- {{$plantCategory}} --}}

                                <h3> Products</h3>
                                <h2>Plants <br> For Gardens</h2>
                                <a href="{{ route('shop.index', $plantCategory->id) }}">Shop Now</a>
                            </div>
                        </div>
                    </figure>
                </div>
                <div class="col-lg-6 col-md-6">
                    <figure class="single_banner">
                        <div class="banner_thumb">
                            <a href="{{ route('shop.index', $accessortCategory->id) }}"><img
                                    src="{{ asset('assets/frontend/img/bg/banner2.jpg') }}" alt=""></a>
                            <div class="banner_content">
                                <h3>Top Products</h3>
                                {{-- {{$accessortCategory}} --}}

                                <h2>Shop <br> For Accessories</h2>
                                <a href="{{ route('shop.index', $accessortCategory->id) }}">Shop Now</a>
                            </div>
                        </div>
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <!--banner area end-->

    <!--product area start-->
    <div class="product_area  mb-95">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product_header">
                        <div class="section_title">
                            <h2>Our Products</h2>
                        </div>
                        <div class="product_tab_btn">
                            <ul class="nav" role="tablist" id="nav-tab">
                                <li>
                                    <a class="active" data-bs-toggle="tab" href="#plant1" role="tab"
                                        aria-controls="plant1" aria-selected="true">
                                        Trending Products
                                    </a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tab" href="#plant2" role="tab" aria-controls="plant2"
                                        aria-selected="false">
                                        Plants
                                    </a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tab" href="#plant3" role="tab" aria-controls="plant3"
                                        aria-selected="false">
                                        Accessories
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="plant1" role="tabpanel">
                    <div class="row">
                        <div class="product_carousel product_column4 owl-carousel">

                            @foreach ($trendingProducts as $product)
                                <div class="col-lg-3">
                                    <div class="product_items">
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a class="primary_img"
                                                        href="{{ route('shop.detail', $product->id) }}"><img
                                                            src="{{ asset('assets/backend/images/product/').'/'.$product->image_url }}" alt=""></a>
                                                    <div class="label_product">
                                                        @if ($product->discount_percentage > 0)
                                                            <span
                                                                class="label_sale">-{{ $product->discount_percentage }}%</span>
                                                        @endif
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart" data-product-id="{{ $product->id }}"
                                                                data-quantity="1"><a href="javascript:void(0)"
                                                                    title="Add to cart"><i
                                                                        class="icon-shopping-bag"></i></a>
                                                            </li>
                                                            {{-- <li class="compare"><a href="#" title="Add to Compare"><i
                                                               class="icon-sliders"></i></a></li> --}}
                                                            <li class="wishlist"><a href="" title="Add to Wishlist"
                                                                    data-product-id="{{ $product->id }}"
                                                                    class="add-to-wishlist">
                                                                    @if ($product->in_wishlist == 1)
                                                                        <i class="fa fa-heart"></i>
                                                                    @else
                                                                        <i class="icon-heart"></i>
                                                                    @endif
                                                                </a>
                                                            </li>
                                                            <li class="quick_button"><a href="#"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#modal_box{{ $product->id }}"
                                                                    title="quick view"> <i class="icon-eye"></i></a></li>
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
                                                            <li><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                            @elseif ($i - 0.5 <= $averageRating)
                                                            <li><a href="javascript:void(0)"><i class="fa fa-star-half" aria-hidden="true"></i></a></li>
                                                            @else
                                                            <li><a href="javascript:void(0)"><i class="icon-star"></i></a></li>
                                                            @endif
                                                        @endfor
                                                        </ul>
                                                    </div>
                                                    <h4 class="product_name"><a
                                                            href="product-details.html">{{ $product->name }}</a></h4>
                                                    <div class="price_box">
                                                        @if ($product->discount_percentage > 0)
                                                            <span class="current_price">PKR
                                                                {{ $product->price - $product->discount }}</span>
                                                            <span class="old_price">PKR {{ $product->price }}</span>
                                                        @else
                                                            <span class="current_price">PKR {{ $product->price }}</span>
                                                        @endif
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="plant2" role="tabpanel">
                    <div class="row">
                        <div class="product_carousel product_column4 owl-carousel">
                            @foreach ($Plantsproducts as $product)
                                <div class="col-lg-3">
                                    <div class="product_items">
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a class="primary_img"
                                                        href="{{ route('shop.detail', $product->id) }}"><img
                                                            src="{{asset('assets/backend/images/product/').'/'. $product->image_url }}" alt=""></a>
                                                    <div class="label_product">
                                                        @if ($product->discount_percentage > 0)
                                                            <span
                                                                class="label_sale">-{{ $product->discount_percentage }}%</span>
                                                        @endif
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart" data-product-id="{{ $product->id }}"
                                                                data-quantity="1"><a href="javascript:void(0)"
                                                                    title="Add to cart"><i
                                                                        class="icon-shopping-bag"></i></a>
                                                            </li>
                                                            {{-- <li class="compare"><a href="#" title="Add to Compare"><i
                                                                class="icon-sliders"></i></a></li> --}}
                                                            <li class="wishlist"><a href=""
                                                                    title="Add to Wishlist"
                                                                    data-product-id="{{ $product->id }}"
                                                                    class="add-to-wishlist">
                                                                    @if ($product->in_wishlist == 1)
                                                                        <i class="fa fa-heart"></i>
                                                                    @else
                                                                        <i class="icon-heart"></i>
                                                                    @endif
                                                                </a>
                                                            </li>
                                                            <li class="quick_button"><a href="#"
                                                                    data-bs-toggle="modal" data-bs-target="#modal_box"
                                                                    title="quick view"> <i class="icon-eye"></i></a></li>
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
                                                            <li><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                            @elseif ($i - 0.5 <= $averageRating)
                                                            <li><a href="javascript:void(0)"><i class="fa fa-star-half" aria-hidden="true"></i></a></li>
                                                            @else
                                                            <li><a href="javascript:void(0)"><i class="icon-star"></i></a></li>
                                                            @endif
                                                        @endfor
                                                        </ul>
                                                    </div>
                                                    <h4 class="product_name"><a
                                                            href="product-details.html">{{ $product->name }}</a></h4>
                                                    <div class="price_box">
                                                        @if ($product->discount_percentage > 0)
                                                            <span class="current_price">PKR
                                                                {{ $product->price - $product->discount }}</span>
                                                            <span class="old_price">PKR {{ $product->price }}</span>
                                                        @else
                                                            <span class="current_price">PKR {{ $product->price }}</span>
                                                        @endif
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="plant3" role="tabpanel">
                    <div class="row">
                        <div class="product_carousel product_column4 owl-carousel">
                            @foreach ($Accessoriesproducts as $product)
                                <div class="col-lg-3">
                                    <div class="product_items">
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a class="primary_img"
                                                        href="{{ route('shop.detail', $product->id) }}"><img
                                                            src="{{asset('assets/backend/images/product/').'/'. $product->image_url }}" alt=""></a>
                                                    <div class="label_product">
                                                        @if ($product->discount_percentage > 0)
                                                            <span
                                                                class="label_sale">-{{ $product->discount_percentage }}%</span>
                                                        @endif
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart" data-product-id="{{ $product->id }}"
                                                                data-quantity="1"><a href="javascript:void(0)"
                                                                    title="Add to cart"><i
                                                                        class="icon-shopping-bag"></i></a>
                                                            </li>
                                                            {{-- <li class="compare"><a href="#" title="Add to Compare"><i
                                                                class="icon-sliders"></i></a></li> --}}
                                                            <li class="wishlist"><a href=""
                                                                    title="Add to Wishlist"
                                                                    data-product-id="{{ $product->id }}"
                                                                    class="add-to-wishlist">
                                                                    @if ($product->in_wishlist == 1)
                                                                        <i class="fa fa-heart"></i>
                                                                    @else
                                                                        <i class="icon-heart"></i>
                                                                    @endif
                                                                </a>
                                                            </li>
                                                            <li class="quick_button"><a href="#"
                                                                    data-bs-toggle="modal" data-bs-target="#modal_box"
                                                                    title="quick view"> <i class="icon-eye"></i></a></li>
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
                                                           <li><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                           @elseif ($i - 0.5 <= $averageRating)
                                                           <li><a href=""><i class="fa fa-star-half" aria-hidden="true"></i></a></li>
                                                           @else
                                                           <li><a href=""><i class="icon-star"></i></a></li>
                                                           @endif
                                                       @endfor
                                                       </ul>
                                                    </div>
                                                    <h4 class="product_name"><a
                                                            href="product-details.html">{{ $product->name }}</a></h4>
                                                    <div class="price_box">
                                                        @if ($product->discount_percentage > 0)
                                                            <span class="current_price">PKR
                                                                {{ $product->price - $product->discount }}</span>
                                                            <span class="old_price">PKR {{ $product->price }}</span>
                                                        @else
                                                            <span class="current_price">PKR {{ $product->price }}</span>
                                                        @endif
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--product area end-->

    <!--banner fullwidth area-->
    {{-- <div class="banner_fullwidth">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="banner_fullwidth_content">
                    <h3>Amazing From PlantNest</h3>
                    <h2>Plants The <br> Perfect Choice!</h2>
                    <p>Discount 20% Off For PlantNest Members</p>
                    <a href="#">Discover Now</a>
                </div>
            </div>
        </div>
    </div>
</div> --}}
    <!--banner fullwidth end-->

    <!--testimonial area start-->
    <div class="testimonial_area">
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
                                    <img src="{{ asset('assets/frontend/img/about/testimonials-icon.png') }}"
                                        alt="">
                                </div>
                                <div class="testimonial_content">
                                    <p>“ When a beautiful design is combined with powerful technology, <br>
                                        it truly is an artwork. I love how my website operates and looks with this
                                        theme. Thank you for the awesome product. ”</p>
                                    <div class="testimonial_text_img">
                                        <a href="#"><img
                                                src="{{ asset('assets/frontend/img/about/testimonial1.png') }}"
                                                alt=""></a>
                                    </div>
                                    <div class="testimonial_author">
                                        <p><a href="#">Rebecka Filson</a> / <span>CEO of CSC</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="single-testimonial">
                                <div class="testimonial-icon-img">
                                    <img src="{{ asset('assets/frontend/img/about/testimonials-icon.png') }}"
                                        alt="">
                                </div>
                                <div class="testimonial_content">
                                    <p>“ When a beautiful design is combined with powerful technology, <br>
                                        it truly is an artwork. I love how my website operates and looks with this
                                        theme. Thank you for the awesome product. ”</p>
                                    <div class="testimonial_text_img">
                                        <a href="#"><img
                                                src="{{ asset('assets/frontend/img/about/testimonial2.png') }}"
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
                                    <img src="{{ asset('assets/frontend/img/about/testimonials-icon.png') }}"
                                        alt="">
                                </div>
                                <div class="testimonial_content">
                                    <p>“ When a beautiful design is combined with powerful technology, <br>
                                        it truly is an artwork. I love how my website operates and looks with this
                                        theme. Thank you for the awesome product. ”</p>
                                    <div class="testimonial_text_img">
                                        <a href="#"><img
                                                src="{{ asset('assets/frontend/img/about/testimonial3.png') }}"
                                                alt=""></a>
                                    </div>
                                    <div class="testimonial_author">
                                        <p><a href="#">Lindsy Neloms</a> / <span>CEO of SFD</span></p>
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

    <!--product area start-->
    <div class="product_area product_deals product_deals5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2>Today Deals</h2>
                    </div>
                </div>
            </div>
            <div class="product_deals_container">
                <div class="row">
                    <div class="product_carousel product_column5 owl-carousel">
                        @foreach ($topSalesWithDiscount as $product)
                            <div class="col-lg-3">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img"
                                                href="{{ route('shop.detail', $product->id) }}"><img
                                                    src="{{asset('assets/backend/images/product/').'/'. $product->image_url }}" alt=""></a>
                                            <div class="label_product">
                                                @if ($product->discount_percentage > 0)
                                                    <span
                                                        class="label_sale">-{{ $product->discount_percentage }}%</span>
                                                @endif
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart" data-product-id="{{ $product->id }}"
                                                        data-quantity="1"><a href="javascript:void(0)"
                                                            title="Add to cart"><i
                                                                class="icon-shopping-bag"></i></a>
                                                    </li>
                                                    {{-- <li class="compare"><a href="#" title="Add to Compare"><i
                                                       class="icon-sliders"></i></a></li> --}}
                                                    <li class="wishlist"><a href="" title="Add to Wishlist"
                                                            data-product-id="{{ $product->id }}"
                                                            class="add-to-wishlist">
                                                            @if ($product->in_wishlist == 1)
                                                                <i class="fa fa-heart"></i>
                                                            @else
                                                                <i class="icon-heart"></i>
                                                            @endif
                                                        </a>
                                                    </li>
                                                    <li class="quick_button"><a href="#"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#modal_box{{ $product->id }}"
                                                            title="quick view"> <i class="icon-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <div class="product_rating">
                                                <ul>
                                                    <@php
                                                    $averageRating = $product->reviews->avg('rating');
                                                @endphp
                                                
                                                @for ($i = 1; $i <= 5; $i++)
                                                    @if ($i <= $averageRating)
                                                    <li><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                    @elseif ($i - 0.5 <= $averageRating)
                                                    <li><a href=""><i class="fa fa-star-half" aria-hidden="true"></i></a></li>
                                                    @else
                                                    <li><a href=""><i class="icon-star"></i></a></li>
                                                    @endif
                                                @endfor
                                                </ul>
                                            </div>
                                            <h4 class="product_name"><a
                                                    href="product-details.html">{{ $product->name }}</a></h4>
                                            <div class="price_box">
                                                @if ($product->discount_percentage > 0)
                                                    <span class="current_price">PKR
                                                        {{ $product->price - $product->discount }}</span>
                                                    <span class="old_price">PKR {{ $product->price }}</span>
                                                @else
                                                    <span class="current_price">PKR {{ $product->price }}</span>
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
        </div>
    </div>
    <!--product area end-->

    <!--blog area start-->
    {{-- <section class="blog_section blog_five">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_title">
                    <h2>Our Latest Posts</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="blog_carousel blog_column3 owl-carousel">
                <div class="col-lg-3">
                    <article class="single_blog">
                        <figure>
                            <div class="blog_thumb">
                                <a href="blog-details.html"><img src="{{asset('assets/frontend/img/blog/blog1.jpg')}}" alt=""></a>
                            </div>
                            <figcaption class="blog_content">
                                <h4 class="post_title"><a href="blog-details.html">Libero lorem</a></h4>
                                <div class="articles_date">
                                    <p>By <span>admin / July 16, 2021</span></p>
                                </div>
                                <p class="post_desc">Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras
                                    pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus praesent</p>
                                <footer class="blog_footer">
                                    <a href="blog-details.html">Continue Reading</a>
                                    <p><i class="icon-message-circle"></i> <span>0</span></p>
                                </footer>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-lg-3">
                    <article class="single_blog">
                        <figure>
                            <div class="blog_thumb">
                                <a href="blog-details.html"><img src="{{asset('assets/frontend/img/blog/blog2.jpg')}}" alt=""></a>
                            </div>
                            <figcaption class="blog_content">
                                <h4 class="post_title"><a href="blog-details.html">Blog image post</a></h4>
                                <div class="articles_date">
                                    <p>By <span>admin / July 16, 2021</span></p>
                                </div>
                                <p class="post_desc">Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras
                                    pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus praesent</p>
                                <footer class="blog_footer">
                                    <a href="blog-details.html">Continue Reading</a>
                                    <p><i class="icon-message-circle"></i> <span>0</span></p>
                                </footer>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-lg-3">
                    <article class="single_blog">
                        <figure>
                            <div class="blog_thumb">
                                <a href="blog-details.html"><img src="{{asset('assets/frontend/img/blog/blog3.jpg')}}" alt=""></a>
                            </div>
                            <figcaption class="blog_content">
                                <h4 class="post_title"><a href="blog-details.html">Post with Gallery</a></h4>
                                <div class="articles_date">
                                    <p>By <span>admin / July 16, 2021</span></p>
                                </div>
                                <p class="post_desc">Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras
                                    pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus praesent</p>
                                <footer class="blog_footer">
                                    <a href="blog-details.html">Continue Reading</a>
                                    <p><i class="icon-message-circle"></i> <span>0</span></p>
                                </footer>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-lg-3">
                    <article class="single_blog">
                        <figure>
                            <div class="blog_thumb">
                                <a href="blog-details.html"><img src="{{asset('assets/frontend/img/blog/blog2.jpg')}}" alt=""></a>
                            </div>
                            <figcaption class="blog_content">
                                <h4 class="post_title"><a href="blog-details.html">Post with Audio</a></h4>
                                <div class="articles_date">
                                    <p>By <span>admin / July 16, 2021</span></p>
                                </div>
                                <p class="post_desc">Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras
                                    pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus praesent</p>
                                <footer class="blog_footer">
                                    <a href="blog-details.html">Continue Reading</a>
                                    <p><i class="icon-message-circle"></i> <span>0</span></p>
                                </footer>
                            </figcaption>
                        </figure>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section> --}}
    <!--blog area end-->

    <!--newsletter area start-->
    <div class="newsletter_area_start">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2> <span>Subscribe</span> to our Newsletter!</h2>
                    </div>
                    <div class="newsletter_container">
                        <div class="subscribe_form">
                            <form id="mc-form" class="mc-form footer-newsletter">
                                <input id="mc-email" type="email" autocomplete="off" placeholder="Enter you email" />
                                <button id="mc-submit">Subscribe</button>
                                <div class="email_icon">
                                    <i class="icon-mail"></i>
                                </div>
                            </form>
                            <!-- mailchimp-alerts Start -->
                            <div class="mailchimp-alerts text-centre">
                                <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                            </div><!-- mailchimp-alerts end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--newsletter area end-->
    {{-- trending modal --}}
    @foreach ($trendingProducts as $product)
        <!-- modal area start-->
        <div class="modal fade" id="modal_box{{ $product->id }}" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="icon-x"></i></span>
                    </button>
                    <div class="modal_body">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-5 col-md-5 col-sm-12">
                                    <div class="modal_tab">
                                        <div class="tab-content product-details-large">
                                            <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                                <div class="modal_tab_img">
                                                    <a href="#"><img src="{{ asset('assets/backend/images/product/').'/'.$product->image_url }}"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                            @foreach ($product->images as $image)
                                                <div class="tab-pane fade" id="tab{{ $image->id }}" role="tabpanel">
                                                    <div class="modal_tab_img">
                                                        <a href="#"><img src="{{asset('assets/backend/images/product/').'/'. $image->image_url }}"
                                                                alt=""></a>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="modal_tab_button">
                                            <ul class="nav product_navactive owl-carousel" role="tablist">
                                                <li>
                                                    <a class="nav-link active" data-bs-toggle="tab" href="#tab1"
                                                        role="tab" aria-controls="tab1" aria-selected="false"><img
                                                            src="{{asset('assets/backend/images/product/').'/'. $product->image_url }}" alt=""></a>


                                                </li>
                                                @foreach ($product->images as $image)
                                                    <li>
                                                        <a class="nav-link" data-bs-toggle="tab{{ $image->id }}"
                                                            href="#tab{{ $image->id }}" role="tab"
                                                            aria-controls="tab{{ $image->id }}"
                                                            aria-selected="false"><img src="{{asset('assets/backend/images/product/').'/'. $image->image_url }}"
                                                                alt=""></a>
                                                    </li>
                                                @endforeach

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-7 col-sm-12">
                                    <div class="modal_right">
                                        <div class="modal_title mb-10">
                                            <h2>{{ $product->name }}</h2>
                                        </div>
                                        <div class="modal_price mb-10">
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
                                        <div class="modal_description mb-15">
                                            <p>{{ $product->description }}</p>
                                        </div>
                                        <div class="variants_selects">
                                            @if ($product->plantInfo)
                                                <div class="variants_size">
                                                    <h2>Habit</h2>
                                                    <p> {{ $product->plantInfo->habits }}</p>
                                                    <h2>Light</h2>
                                                    <p> {{ $product->plantInfo->lights }}</p>
                                                    <h2>Water Requiremet</h2>
                                                    <p> {{ $product->plantInfo->water_requirements }}
                                                    </p>

                                                </div>
                                            @endif
                                            <div class="modal_add_to_cart">
                                                <form action="#">
                                                    <input min="1" max="100" value="1" type="number"
                                                        class="cart_quantity" onchange="updateDataQuantity(this)"
                                                        oninput="updateDataQuantity(this)">
                                                    <button type="submit" class="add_to_cart form_add_cart"
                                                        data-product-id="{{ $product->id }}" data-quantity="1">add to
                                                        cart</button>
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
        </div>
        <!-- modal area end-->
    @endforeach
    {{-- end trending modal --}}
    {{-- plants modal --}}
    @foreach ($Plantsproducts as $product)
        <!-- modal area start-->
        <div class="modal fade" id="modal_box{{ $product->id }}" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="icon-x"></i></span>
                    </button>
                    <div class="modal_body">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-5 col-md-5 col-sm-12">
                                    <div class="modal_tab">
                                        <div class="tab-content product-details-large">
                                            <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                                <div class="modal_tab_img">
                                                    <a href="#"><img src="{{ asset('assets/backend/images/product/').'/'.$product->image_url }}"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                            @foreach ($product->images as $image)
                                                <div class="tab-pane fade" id="tab{{ $image->id }}" role="tabpanel">
                                                    <div class="modal_tab_img">
                                                        <a href="#"><img src="{{ asset('assets/backend/images/product/').'/'.$image->image_url }}"
                                                                alt=""></a>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="modal_tab_button">
                                            <ul class="nav product_navactive owl-carousel" role="tablist">
                                                <li>
                                                    <a class="nav-link active" data-bs-toggle="tab" href="#tab1"
                                                        role="tab" aria-controls="tab1" aria-selected="false"><img
                                                            src="{{ asset('assets/backend/images/product/').'/'.$product->image_url }}" alt=""></a>


                                                </li>
                                                @foreach ($product->images as $image)
                                                    <li>
                                                        <a class="nav-link" data-bs-toggle="tab{{ $image->id }}"
                                                            href="#tab{{ $image->id }}" role="tab"
                                                            aria-controls="tab{{ $image->id }}"
                                                            aria-selected="false"><img src="{{ asset('assets/backend/images/product/').'/'.$image->image_url }}"
                                                                alt=""></a>
                                                    </li>
                                                @endforeach

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-7 col-sm-12">
                                    <div class="modal_right">
                                        <div class="modal_title mb-10">
                                            <h2>{{ $product->name }}</h2>
                                        </div>
                                        <div class="modal_price mb-10">
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
                                        <div class="modal_description mb-15">
                                            <p>{{ $product->description }}</p>
                                        </div>
                                        <div class="variants_selects">
                                            @if ($product->plantInfo)
                                                <div class="variants_size">
                                                    <h2>Habit</h2>
                                                    <p> {{ $product->plantInfo->habits }}</p>
                                                    <h2>Light</h2>
                                                    <p> {{ $product->plantInfo->lights }}</p>
                                                    <h2>Water Requiremet</h2>
                                                    <p> {{ $product->plantInfo->water_requirements }}
                                                    </p>

                                                </div>
                                            @endif
                                            <div class="modal_add_to_cart">
                                                <form action="#">
                                                    <input min="1" max="100" value="1" type="number"
                                                        class="cart_quantity" onchange="updateDataQuantity(this)"
                                                        oninput="updateDataQuantity(this)">
                                                    <button type="submit" class="add_to_cart form_add_cart"
                                                        data-product-id="{{ $product->id }}" data-quantity="1">add to
                                                        cart</button>
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
        </div>
        <!-- modal area end-->
    @endforeach
    {{-- end plants modal --}}
    {{-- Accessories modal --}}
    @foreach ($Accessoriesproducts as $product)
        <!-- modal area start-->
        <div class="modal fade" id="modal_box{{ $product->id }}" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="icon-x"></i></span>
                    </button>
                    <div class="modal_body">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-5 col-md-5 col-sm-12">
                                    <div class="modal_tab">
                                        <div class="tab-content product-details-large">
                                            <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                                <div class="modal_tab_img">
                                                    <a href="#"><img src="{{ asset('assets/backend/images/product/').'/'.$product->image_url }}"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                            @foreach ($product->images as $image)
                                                <div class="tab-pane fade" id="tab{{ $image->id }}" role="tabpanel">
                                                    <div class="modal_tab_img">
                                                        <a href="#"><img src="{{ asset('assets/backend/images/product/').'/'.$image->image_url }}"
                                                                alt=""></a>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="modal_tab_button">
                                            <ul class="nav product_navactive owl-carousel" role="tablist">
                                                <li>
                                                    <a class="nav-link active" data-bs-toggle="tab" href="#tab1"
                                                        role="tab" aria-controls="tab1" aria-selected="false"><img
                                                            src="{{asset('assets/backend/images/product/').'/'. $product->image_url }}" alt=""></a>


                                                </li>
                                                @foreach ($product->images as $image)
                                                    <li>
                                                        <a class="nav-link" data-bs-toggle="tab{{ $image->id }}"
                                                            href="#tab{{ $image->id }}" role="tab"
                                                            aria-controls="tab{{ $image->id }}"
                                                            aria-selected="false"><img src="{{asset('assets/backend/images/product/').'/'. $image->image_url }}"
                                                                alt=""></a>
                                                    </li>
                                                @endforeach

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-7 col-sm-12">
                                    <div class="modal_right">
                                        <div class="modal_title mb-10">
                                            <h2>{{ $product->name }}</h2>
                                        </div>
                                        <div class="modal_price mb-10">
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
                                        <div class="modal_description mb-15">
                                            <p>{{ $product->description }}</p>
                                        </div>
                                        <div class="variants_selects">
                                            @if ($product->plantInfo)
                                                <div class="variants_size">
                                                    <h2>Habit</h2>
                                                    <p> {{ $product->plantInfo->habits }}</p>
                                                    <h2>Light</h2>
                                                    <p> {{ $product->plantInfo->lights }}</p>
                                                    <h2>Water Requiremet</h2>
                                                    <p> {{ $product->plantInfo->water_requirements }}
                                                    </p>

                                                </div>
                                            @endif
                                            <div class="modal_add_to_cart">
                                                <form action="#">
                                                    <input min="1" max="100" value="1" type="number"
                                                        class="cart_quantity" onchange="updateDataQuantity(this)"
                                                        oninput="updateDataQuantity(this)">
                                                    <button type="submit" class="add_to_cart form_add_cart"
                                                        data-product-id="{{ $product->id }}" data-quantity="1">add to
                                                        cart</button>
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
        </div>
        <!-- modal area end-->
    @endforeach
    {{-- end trending modal --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            console.log('i ran');

            // Remove active class from all li elements
            $('nav ul li a').removeClass('active');

            // Add active class to the clicked li element
            $('#home').addClass('active');

        });
    </script>
@endsection
