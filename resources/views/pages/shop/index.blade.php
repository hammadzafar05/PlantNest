@extends('layouts.guest')
<title>{{ config('app.name', 'PlantNest|Shop') }}</title>
@section('content')
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <h3>Shop</h3>
                        <ul>
                            <li><a href="{{route('user.home')}}">home</a></li>
                            <li>shop</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--shop  area start-->
    <div class="shop_area shop_reverse mt-100 mb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <!--sidebar widget start-->
                    <aside class="sidebar_widget">
                        <div class="widget_inner">
                            <div class="widget_list widget_categories">
                                <h3>Women</h3>
                                <ul>
                                    <li class="widget_sub_categories sub_categories1"><a href="javascript:void(0)">Shoes</a>
                                        <ul class="widget_dropdown_categories dropdown_categories1">
                                            <li><a href="#">Document</a></li>
                                            <li><a href="#">Dropcap</a></li>
                                            <li><a href="#">Dummy Image</a></li>
                                            <li><a href="#">Dummy Text</a></li>
                                            <li><a href="#">Fancy Text</a></li>
                                        </ul>
                                    </li>
                                    <li class="widget_sub_categories sub_categories2"><a href="javascript:void(0)">Bags</a>
                                        <ul class="widget_dropdown_categories dropdown_categories2">
                                            <li><a href="#">Flickr</a></li>
                                            <li><a href="#">Flip Box</a></li>
                                            <li><a href="#">Cocktail</a></li>
                                            <li><a href="#">Frame</a></li>
                                            <li><a href="#">Flickrq</a></li>
                                        </ul>
                                    </li>
                                    <li class="widget_sub_categories sub_categories3"><a
                                            href="javascript:void(0)">Clothing</a>
                                        <ul class="widget_dropdown_categories dropdown_categories3">
                                            <li><a href="#">Platform Beds</a></li>
                                            <li><a href="#">Storage Beds</a></li>
                                            <li><a href="#">Regular Beds</a></li>
                                            <li><a href="#">Sleigh Beds</a></li>
                                            <li><a href="#">Laundry</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget_list widget_filter">
                                <h3>Filter by price</h3>
                                <form action="#">
                                    <div id="slider-range"></div>
                                    <button type="submit">Filter</button>
                                    <input type="text" name="text" id="amount" />

                                </form>
                            </div>
                            <div class="widget_list widget_color">
                                <h3>Select By Color</h3>
                                <ul>
                                    <li>
                                        <a href="#">Black <span>(6)</span></a>
                                    </li>
                                    <li>
                                        <a href="#"> Blue <span>(8)</span></a>
                                    </li>
                                    <li>
                                        <a href="#">Brown <span>(10)</span></a>
                                    </li>
                                    <li>
                                        <a href="#"> Green <span>(6)</span></a>
                                    </li>
                                    <li>
                                        <a href="#">Pink <span>(4)</span></a>
                                    </li>

                                </ul>
                            </div>
                            <div class="widget_list widget_color">
                                <h3>Select By SIze</h3>
                                <ul>
                                    <li>
                                        <a href="#">S <span>(6)</span></a>
                                    </li>
                                    <li>
                                        <a href="#"> M <span>(8)</span></a>
                                    </li>
                                    <li>
                                        <a href="#">L <span>(10)</span></a>
                                    </li>
                                    <li>
                                        <a href="#"> XL <span>(6)</span></a>
                                    </li>
                                    <li>
                                        <a href="#">XLL <span>(4)</span></a>
                                    </li>

                                </ul>
                            </div>
                            <div class="widget_list widget_manu">
                                <h3>Manufacturer</h3>
                                <ul>
                                    <li>
                                        <a href="#">Brake Parts <span>(6)</span></a>
                                    </li>
                                    <li>
                                        <a href="#">Accessories <span>(10)</span></a>
                                    </li>
                                    <li>
                                        <a href="#">Engine Parts <span>(4)</span></a>
                                    </li>
                                    <li>
                                        <a href="#">hermes <span>(10)</span></a>
                                    </li>
                                    <li>
                                        <a href="#">louis vuitton <span>(8)</span></a>
                                    </li>

                                </ul>
                            </div>
                            <div class="widget_list tags_widget">
                                <h3>Product tags</h3>
                                <div class="tag_cloud">
                                    <a href="#">Men</a>
                                    <a href="#">Women</a>
                                    <a href="#">Watches</a>
                                    <a href="#">Bags</a>
                                    <a href="#">Dress</a>
                                    <a href="#">Belt</a>
                                    <a href="#">Accessories</a>
                                    <a href="#">Shoes</a>
                                </div>
                            </div>
                            <div class="widget_list">
                                <h3>Compare</h3>
                                <div class="shop_sidebar_product">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img
                                                        src="{{ asset('assets/frontend/img/product/product10.jpg') }}"
                                                        alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img
                                                        src="{{ asset('assets/frontend/img/product/product2.jpg') }}"
                                                        alt=""></a>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">Donec Non
                                                        Est</a></h4>
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="price_box">
                                                    <span class="current_price">$80.00</span>
                                                    <span class="old_price">$20.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img
                                                        src="{{ asset('assets/frontend/img/product/product9.jpg') }}"
                                                        alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img
                                                        src="{{ asset('assets/frontend/img/product/product3.jpg') }}"
                                                        alt=""></a>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">Cas Meque
                                                        Metus</a></h4>
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="price_box">
                                                    <span class="current_price">$70.00</span>
                                                    <span class="old_price">$40.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img
                                                        src="{{ asset('assets/frontend/img/product/product8.jpg') }}"
                                                        alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img
                                                        src="{{ asset('assets/frontend/img/product/product4.jpg') }}"
                                                        alt=""></a>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name"><a href="product-details.html"> commodo
                                                        augue</a></h4>
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="price_box">
                                                    <span class="current_price">$80.00</span>
                                                    <span class="old_price">$20.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </aside>
                    <!--sidebar widget end-->
                </div>
                <div class="col-lg-9 col-md-12">
                    <!--shop wrapper start-->
                    <!--shop toolbar start-->
                    <div class="shop_toolbar_wrapper">
                        <div class="shop_toolbar_btn">

                            <button data-role="grid_3" type="button" class="active btn-grid-3" data-bs-toggle="tooltip"
                                title="3"></button>

                            <button data-role="grid_4" type="button" class=" btn-grid-4" data-bs-toggle="tooltip"
                                title="4"></button>

                            <button data-role="grid_list" type="button" class="btn-list" data-bs-toggle="tooltip"
                                title="List"></button>
                        </div>
                        <div class=" niceselect_option">
                            <form class="select_option" action="#">
                                <select name="orderby" id="short">

                                    <option selected value="1">Sort by average rating</option>
                                    <option value="2">Sort by popularity</option>
                                    <option value="3">Sort by newness</option>
                                    <option value="4">Sort by price: low to high</option>
                                    <option value="5">Sort by price: high to low</option>
                                    <option value="6">Product Name: Z</option>
                                </select>
                            </form>
                        </div>
                        <div class="page_amount">
                            <p>Showing {{ $products->firstItem() }}–{{ $products->lastItem() }} of {{ $products->total() }}
                                results</p>
                        </div>
                    </div>
                    <!--shop toolbar end-->
                    <div class="row shop_wrapper">
                        @foreach ($products as $product)
                            <div class="col-lg-4 col-md-4 col-12 ">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href={{ route('shop.detail', $product->id) }}><img
                                                    src="{{ $product->image_url }}" alt=""></a>
                                            <div class="label_product">
                                                @if ($product->discount_percentage >0)
                                                    <span class="label_sale">- {{ $product->discount_percentage }}%</span>
                                                @endif
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i
                                                                class="icon-shopping-bag"></i></a></li>
                                                    <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modal_box{{ $product->id }}"
                                                            title="quick view"> <i class="icon-eye"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="action_links list_action">
                                                <ul>
                                                    <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modal_box{{ $product->id }}"
                                                            title="quick view"> <i class="icon-eye"></i></a></li>
                                                </ul>
                                            </div>

                                        </div>
                                        <div class="product_content grid_content">
                                            <div class="product_price_rating">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a
                                                        href={{ route('shop.detail', $product->id) }}>{{ $product->name }}</a>
                                                </h4>
                                                <div class="price_box">
                                                    @if ($product->discount_percentage >0)
                                                        <span class="current_price">PKR
                                                            {{ $product->price - $product->discount }}</span>
                                                        <span class="old_price">PKR {{ $product->price }}</span>
                                                    @else
                                                        <span class="current_price">PKR {{ $product->price }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product_content list_content">
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <h4 class="product_name"><a
                                                    href={{ route('shop.detail', $product->id) }}>{{ $product->name }}</a>
                                            </h4>
                                            <div class="price_box">
                                                @if ($product->discount_percentage >0)
                                                    <span class="current_price">PKR
                                                        {{ $product->price - $product->discount }}</span>
                                                    <span class="old_price">PKR {{ $product->price }}</span>
                                                @else
                                                    <span class="current_price">PKR {{ $product->price }}</span>
                                                @endif
                                            </div>
                                            <div class="product_desc">
                                                <p>{{ $product->description }}</p>
                                            </div>
                                            <div class="action_links list_action_right">
                                                <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add
                                                            to
                                                            cart</a></li>
                                                    <li class="wishlist"><a href="wishlist.html"
                                                            title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><i
                                                                class="icon-sliders"></i></a></li>

                                                </ul>
                                            </div>
                                        </div>
                                    </figure>
                                </article>
                            </div>
                            <!-- modal area start-->
                            <div class="modal fade" id="modal_box{{ $product->id }}" tabindex="-1" role="dialog"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <button type="button" class="close" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true"><i class="icon-x"></i></span>
                                        </button>
                                        <div class="modal_body">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-5 col-md-5 col-sm-12">
                                                        <div class="modal_tab">
                                                            <div class="tab-content product-details-large">
                                                                <div class="tab-pane fade show active" id="tab1"
                                                                    role="tabpanel">
                                                                    <div class="modal_tab_img">
                                                                        <a href="#"><img
                                                                                src="{{ $product->image_url }}"
                                                                                alt=""></a>
                                                                    </div>
                                                                </div>
                                                                @foreach ($product->images as $image)
                                                                    <div class="tab-pane fade"
                                                                        id="tab{{ $image->id }}" role="tabpanel">
                                                                        <div class="modal_tab_img">
                                                                            <a href="#"><img
                                                                                    src="{{ $image->image_url }}"
                                                                                    alt=""></a>
                                                                        </div>
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                            <div class="modal_tab_button">
                                                                <ul class="nav product_navactive owl-carousel"
                                                                    role="tablist">
                                                                    <li>
                                                                        <a class="nav-link active" data-bs-toggle="tab"
                                                                            href="#tab1" role="tab"
                                                                            aria-controls="tab1"
                                                                            aria-selected="false"><img
                                                                                src="{{ $product->image_url }}"
                                                                                alt=""></a>


                                                                    </li>
                                                                    @foreach ($product->images as $image)
                                                                        <li>
                                                                            <a class="nav-link"
                                                                                data-bs-toggle="tab{{ $image->id }}"
                                                                                href="#tab{{$image->id}}" role="tab"
                                                                                aria-controls="tab{{$image->id}}"
                                                                                aria-selected="false"><img
                                                                                    src="{{ $image->image_url }}"
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
                                                                @if ($product->discount_percentage>0)
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
                                                                        <input min="1" max="100"
                                                                            step="2" value="1" type="number">
                                                                        <button type="submit">add to
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
                    </div>

                    <div class="shop_toolbar t_bottom">
                        <div class="pagination">
                            <ul>
                                @if ($products->currentPage() > 1)
                                    <li><a href="{{ $products->previousPageUrl() }}">&lt;&lt;</a></li>
                                @endif

                                @for ($i = 1; $i <= $products->lastPage(); $i++)
                                    <li class="{{ $i === $products->currentPage() ? 'current' : '' }}">
                                        @if ($i === $products->currentPage())
                                            {{ $i }}
                                        @else
                                            <a href="{{ $products->url($i) }}">{{ $i }}</a>
                                        @endif
                                    </li>
                                @endfor

                                @if ($products->hasMorePages())
                                    <li><a href="{{ $products->url($products->lastPage()) }}">&gt;&gt;</a></li>
                                @endif

                            </ul>

                        </div>
                    </div>
                    <!--shop toolbar end-->
                    <!--shop wrapper end-->
                </div>
            </div>
        </div>
    </div>
    <!--shop  area end-->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            console.log('i ran');

            // Remove active class from all li elements
            $('nav ul li a').removeClass('active');

            // Add active class to the clicked li element
            $('#shop').addClass('active');

            $('.add_to_cart').click(function(){
            if(localStorage.getItem('auth') == 'false')
            {
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
            }
            })
        });
    </script>

    <script>
        function getHeaderCart(){

            document.getElementById("getCart").innerHTML=``

            $.ajax({
                "type":"POST",
                "url":baseURL+"/get-cart",
                "data":{
                    "_token":csrf,
                    "user_id":userId
                },
                success:function(data){
                    document.getElementById("cartCountArea").innerHTML=``
                    // alert(data)
                console.log(data)
                    if(data.length>0){
                        for(var eachItem of data){
                            document.getElementById("getCart").innerHTML+=`
                                <a href="#" class="text-reset notification-item">
                                    <div class="d-flex align-items-start">
                                        <img src="assets/images/product/${eachItem.img}"
                                            class="me-3 avatar-xs" height="150px" alt="item-pic">
                                        <div class="flex-1">
                                            <h6 class="mt-0 mb-1">${eachItem.title}</h6>
                                            <div class="font-size-12 text-muted">
                                                <p class="mb-1">Quantity: ${eachItem.quantity}</p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i>Total: $${parseFloat(eachItem.p_price)*parseFloat(eachItem.quantity)}</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            `
                        }
                        document.getElementById('cartCountArea').innerHTML = data.length
                    }
                }
            })
    }

    getHeaderCart()
    </script>

@endsection
