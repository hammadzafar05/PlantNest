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
                            <li><a href="{{ route('user.home') }}">home</a></li>
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
                    @php
                        $category_id = request()->query('categories');
                    @endphp

                    <!--sidebar widget start-->
                    <form action="{{ route('shop.index') }}" method="GET" id="filterForm">
                        @csrf
                        <input type="hidden" name="search" class="searched"> 

                        <aside class="sidebar_widget">
                            <div class="widget_inner">
                                <div class="widget_list widget_categories">
                                    <h3>Categorires</h3>
                                    <div>
                                        <ul class="list-unstyled">
                                            @foreach ($categories as $category)
                                                <li>
                                                    <a href="#">{{ $category->name }}</a>
                                                    <ul class="list-unstyled m-3">
                                                        @foreach ($category->children as $subCategory)
                                                            <li class="my-1">
                                                                {{-- <div class="form-check"> --}}
                                                                <input type="checkbox" name="categories[]"
                                                                    value="{{ $subCategory->id }}"
                                                                    id="checkbox{{ $subCategory->id }}">
                                                                <label class="form-check-label"
                                                                    for="checkbox{{ $subCategory->id }}">{{ $subCategory->name }}</label>
                                                                {{-- </div> --}}
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                            @endforeach
                                        </ul>

                                    </div>


                                </div>
                                <div class="widget_list widget_filter">
                                    <h3>Filter by price</h3>
                                    <div id="slider-range"></div>
                                    <button type="submit">Filter</button>
                                    <input type="text" name="text" id="amount" />
                                    <input type="text" name="min-price" id="min-price" hidden />
                                    <input type="text" name="max-price" id="max-price" hidden />

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
                        <div class=" nice-select_option">
                            <div class="select_option">
                                <select name="orderby" id="short">
                                    <option selected value="7">Product Name: A to Z</option>
                                    <option value="6">Product Name: Z to A</option>
                                    {{-- <option value="1">Sort by average rating</option> --}}
                                    {{-- <option value="2">Sort by popularity</option> --}}
                                    <option value="3">Sort by newness</option>
                                    <option value="4">Sort by price: low to high</option>
                                    <option value="5">Sort by price: high to low</option>
                                </select>
                            </div>
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
                                                @if ($product->discount_percentage > 0)
                                                    <span class="label_sale">- {{ $product->discount_percentage }}%</span>
                                                @endif
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart" data-product-id="{{ $product->id }}"
                                                        data-quantity="1"><a href="" title="Add to cart"><i
                                                                class="icon-shopping-bag"></i></a></li>
                                                    <li class="wishlist"><a href="" title="Add to Wishlist"
                                                            data-product-id="{{ $product->id }}" class="add-to-wishlist">
                                                            @if ($product->in_wishlist == true)
                                                                <i class="fa fa-heart"></i>
                                                            @else
                                                                <i class="icon-heart"></i>
                                                            @endif
                                                        </a>
                                                    </li>
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
                                                    @if ($product->discount_percentage > 0)
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
                                                @if ($product->discount_percentage > 0)
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
                                                    <li class="add_to_cart" data-product-id="{{ $product->id }}"
                                                        data-quantity="1"><a href="" title="Add to cart">Add
                                                            to
                                                            cart</a></li>
                                                    <li class="wishlist"><a href="" title="Add to Wishlist"
                                                            data-product-id="{{ $product->id }}"
                                                            class="add-to-wishlist">
                                                            @if ($product->in_wishlist == true)
                                                                <i class="fa fa-heart"></i>
                                                            @else
                                                                <i class="icon-heart"></i>
                                                            @endif
                                                        </a>
                                                    </li>
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
                                                                                href="#tab{{ $image->id }}"
                                                                                role="tab"
                                                                                aria-controls="tab{{ $image->id }}"
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
                                                                        <input min="1" max="100"
                                                                            value="1" type="number"
                                                                            class="cart_quantity"
                                                                            onchange="updateDataQuantity(this)"
                                                                            oninput="updateDataQuantity(this)">
                                                                        <button type="submit" class="add_to_cart"
                                                                            data-product-id="{{ $product->id }}"
                                                                            data-quantity="1">add to
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
        function updateDataQuantity(inputElement) {
            const quantity = parseInt(inputElement.value);
            const addToCartButton = inputElement.parentElement.querySelector('.add_to_cart');
            addToCartButton.setAttribute('data-quantity', quantity);
        }
        $(document).ready(function() {

            // $('.select_option').niceSelect();


            const urlParams = new URLSearchParams(window.location.search);
            const checkboxValues = urlParams.getAll('categories[]'); // Change this to match the parameter name

            checkboxValues.forEach(value => {
                $(`input[type="checkbox"][value="${value}"]`).prop('checked', true);
            });

            // 
            // const minPrice = urlParams.get('min-price');
            // const maxPrice = urlParams.get('max-price');
            const minPrice = parseInt(urlParams.get('min-price')) || 0;
            const name = urlParams.get('search');
            $('.searched').val(name);
            const maxPrice = parseInt(urlParams.get('max-price')) || 500;
            $("#min-price").val(minPrice);
            $("#max-price").val(maxPrice);

            // $("#slider-range").slider({
            //     range: true,
            //     min: 0,
            //     max: 500,
            //     values: [minPrice, maxPrice], // Use URL parameters or defaults
            //     slide: function (event, ui) {
            //         $("#amount").val("PKR " + ui.values[0] + " - PKR " + ui.values[1]);
            //     }
            // });

            // $("#amount").val("PKR " + minPrice + " - PKR " + maxPrice)
            console.log(minPrice + '' + maxPrice);
            // $("#amount").val("PKR " + ui.values[0] + " - PKR " + ui.values[1]);
            // $("#min-price").val(minPrice);
            // $("#max-price").val(maxPrice);

            $("#slider-range").slider({
                range: true,
                min: 0,
                max: 500,
                values: [minPrice, maxPrice],
                slide: function(event, ui) {
                    $("#min-price").val(ui.values[0]);
                    $("#max-price").val(ui.values[1]);
                    $("#amount").val("PKR " + ui.values[0] + " - PKR " + ui.values[1]);
                }
            });

            // Update slider and input values when min-price input changes
            $("#min-price").on("change", function() {
                const minVal = parseInt($(this).val()) || 0;
                const maxVal = parseInt($("#max-price").val()) || 500;
                $("#slider-range").slider("values", [minVal, maxVal]);
                $("#amount").val("PKR " + minVal + " - PKR " + maxVal);
            });

            // Update slider and input values when max-price input changes
            $("#max-price").on("change", function() {
                const maxVal = parseInt($(this).val()) || 500;
                const minVal = parseInt($("#min-price").val()) || 0;
                $("#slider-range").slider("values", [minVal, maxVal]);
                $("#amount").val("PKR " + minVal + " - PKR " + maxVal);
            });

            $("#amount").val("PKR " + minPrice + " - PKR " + maxPrice);
            const orderValue = urlParams.get('orderby');

            $('#short option').prop('selected', false);
            $('#short').change(function (e) { 
                $('#filterForm').submit();
                
            });
            if (orderValue) {
                console.log('option');
                $('#short option[value="' + orderValue + '"]').prop('selected', true);
            }
        });
    </script>
@endsection
