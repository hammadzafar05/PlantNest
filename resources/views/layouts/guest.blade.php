<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title') </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/frontend/img/favicon.png') }}">

    <!-- CSS
    ========================= -->
    <!--bootstrap min css-->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">
    <!--owl carousel min css-->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/owl.carousel.min.css') }}">
    <!--slick min css-->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/slick.css') }}">
    <!--magnific popup min css-->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/magnific-popup.css') }}">
    <!--font awesome css-->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/font.awesome.css') }}">
    <!--plugins css-->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/plugins.css') }}">
    <!--animate css-->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/animate.css') }}">
    <!--jquery ui min css-->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/jquery-ui.min.css') }}">
    <!--slinky menu css-->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/slinky.menu.css') }}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">

    <!--modernizr min js here-->
    <script src="{{ asset('assets/frontend/js/vendor/modernizr-3.7.1.min.js') }}"></script>

    <script src="{{ asset('assets/backend/libs/sweetalert2/sweetalert2.all.min.js') }}"></script>

    <script>
        @if (auth()->check())
            localStorage.setItem('auth', true);
        @else
            localStorage.setItem('auth', false);
        @endif

        var baseURL = "{{ url('/') }}/"
    </script>
    <style>
        .mini_cart {
            overflow-y: scroll !important;
            /* Hide the default scrollbar */

        }

        .mini_cart::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
            background-color: #F5F5F5;
        }

        .mini_cart::-webkit-scrollbar {
            width: 10px;
            background-color: #F5F5F5;
        }

        .mini_cart::-webkit-scrollbar-thumb {
            background-color: #ffffff;
            border: 2px solid #ffffff;
        }

        /*--
    - nice-select
-----------------------------------*/
        .nice-select {
            -webkit-tap-highlight-color: transparent;
            background-color: #fff !important;
            border-radius: 5px !important;
            border: solid 1px #e8e8e8 !important;
            -webkit-box-sizing: border-box !important;
            box-sizing: border-box !important;
            clear: both !important;
            cursor: pointer !important;
            display: block !important;
            float: left !important;
            font-family: inherit !important;
            font-size: 14px !important;
            font-weight: normal !important;
            height: 42px !important;
            line-height: 40px !important;
            outline: none !important;
            padding-left: 18px !important;
            padding-right: 30px !important;
            position: relative !important;
            text-align: left !important !important;
            -webkit-transition: all 0.2s ease-in-out !important;
            transition: all 0.2s ease-in-out !important;
            -webkit-user-select: none !important;
            -moz-user-select: none !important;
            -ms-user-select: none !important;
            user-select: none !important;
            white-space: nowrap !important;
            width: auto !important;
        }

        .nice-select:hover {
            border-color: #dbdbdb !important;
        }

        .nice-select:active,
        .nice-select.open,
        .nice-select:focus {
            border-color: #999 !important;
        }

        .nice-select:after {
            border-bottom: 2px solid #999 !important;
            border-right: 2px solid #999 !important;
            content: '' !important;
            display: block !important;
            height: 5px !important;
            margin-top: -4px !important;
            pointer-events: none !important;
            position: absolute !important;
            right: 12px !important;
            top: 50% !important;
            -webkit-transform-origin: 66% 66% !important;
            transform-origin: 66% 66% !important;
            -webkit-transform: rotate(45deg) !important;
            transform: rotate(45deg) !important;
            -webkit-transition: all 0.15s ease-in-out !important;
            transition: all 0.15s ease-in-out !important;
            width: 5px !important;
        }

        .nice-select.open:after {
            -webkit-transform: rotate(-135deg) !important;
            transform: rotate(-135deg) !important;
        }

        .nice-select.open .list {
            opacity: 1 !important;
            pointer-events: auto !important;
            -webkit-transform: scale(1) translateY(0) !important;
            transform: scale(1) translateY(0) !important;
        }

        .nice-select.disabled {
            border-color: #ededed !important;
            color: #999 !important;
            pointer-events: none !important;
        }

        .nice-select.disabled:after {
            border-color: #cccccc !important;
        }

        .nice-select.wide {
            width: 100% !important;
        }

        .nice-select.wide .list {
            left: 0 !important !important;
            right: 0 !important !important;
        }

        .nice-select.right {
            float: right !important;
        }

        .nice-select.right .list {
            left: auto !important;
            right: 0 !important;
        }

        .nice-select.small {
            font-size: 12px !important;
            height: 36px !important;
            line-height: 34px !important;
        }

        .nice-select.small:after {
            height: 4px !important;
            width: 4px !important;
        }

        .nice-select.small .option {
            line-height: 34px !important;
            min-height: 34px !important;
        }

        .nice-select .list {
            background-color: #fff !important;
            border-radius: 5px !important;
            -webkit-box-shadow: 0 0 0 1px rgba(68, 68, 68, 0.11) !important;
            box-shadow: 0 0 0 1px rgba(68, 68, 68, 0.11) !important;
            -webkit-box-sizing: border-box !important;
            box-sizing: border-box !important;
            margin-top: 4px !important;
            opacity: 0 !important;
            overflow: hidden !important;
            padding: 0 !important;
            pointer-events: none !important;
            position: absolute !important;
            top: 100% !important;
            left: 0 !important;
            -webkit-transform-origin: 50% 0 !important;
            transform-origin: 50% 0 !important;
            -webkit-transform: scale(0.75) translateY(-21px) !important;
            transform: scale(0.75) translateY(-21px) !important;
            -webkit-transition: all 0.2s cubic-bezier(0.5, 0, 0, 1.25), opacity 0.15s ease-out !important;
            transition: all 0.2s cubic-bezier(0.5, 0, 0, 1.25), opacity 0.15s ease-out !important;
            z-index: 9 !important;
        }

        .nice-select .list:hover .option:not(:hover) {
            background-color: transparent !important !important;
        }

        .nice-select .option {
            cursor: pointer !important;
            font-weight: 400 !important;
            line-height: 40px !important;
            list-style: none !important;
            min-height: 40px !important;
            outline: none !important;
            padding-left: 18px !important;
            padding-right: 29px !important;
            text-align: left !important;
            -webkit-transition: all 0.2s !important;
            transition: all 0.2s !important;
        }

        .nice-select .option:hover,
        .nice-select .option.focus,
        .nice-select .option.selected.focus {
            background-color: #f6f6f6 !important;
        }

        .nice-select .option.selected {
            font-weight: bold !important;
        }

        .nice-select .option.disabled {
            background-color: transparent !important;
            color: #999 !important;
            cursor: default !important;
        }

        .no-csspointerevents .nice-select .list {
            display: none !important;
        }

        .no-csspointerevents .nice-select.open .list {
            display: block !important;
        }
        .categories_title h2 {
    
    line-height: 55px !important; 
}
.widget_list.widget_filter input {
    width: 100px !important;
}
span.wishlist_item_count {
    position: absolute;
    top: -10px;
    right: -8px;
    width: 20px;
    height: 20px;
    line-height: 20px;
    background: #79a206;
    border-radius: 100%;
    text-align: center;
    font-weight: 400;
    font-size: 12px;
    color: #fff;
}
    </style>
    @yield('style')
</head>

<body>

    <!--header area start-->



    <!--offcanvas menu area end-->
    <header>
        {{-- <div class="main_header header_five">
           
            <div class="header_middle header_middle5">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-3 col-4">
                            <div class="logo">
                                <a href="{{ route('user.home') }}"><img
                                        src="{{ asset('assets/frontend/img/logo/logo.png') }}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-6 colm_none">
                            <!--main menu start-->
                            <div class="main_menu menu_position">
                                <nav>
                                    <ul>
                                        <li id="home"><a class="" id="home"
                                                href="{{ route('user.home') }}">home</a>

                                        </li>
                                       
                                        <li class="mega_items"><a id="shop"
                                                href="{{ route('shop.index') }}">shop<i
                                                    class="fa fa-angle-down"></i></a>
                                            <div class="mega_menu">
                                                <ul class="mega_menu_inner">
                                                    @foreach ($categories as $category)
                                                        <li><a href="#">{{ $category->name }}</a>
                                                            <ul>
                                                                @foreach ($category->children as $subCategory)
                                                                    <li><a
                                                                            href="{{ route('shop.index', $subCategory->id) }}">{{ $subCategory->name }}</a>
                                                                    </li>
                                                                @endforeach

                                                            </ul>
                                                        </li>
                                                    @endforeach

                                                </ul>
                                            </div>
                                        </li>


                                        <li id="faq"><a href="{{ route('faq.index') }}"> Faq</a></li>
                                        <li id="about"><a href="{{ route('about.index') }}"> About Us</a></li>
                                        <li id="contact"><a href="{{ route('contact.index') }}"> Contact Us</a></li>
                                        <li id="feedback"><a href="{{ route('feedback.index') }}"> Feedback</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <!--main menu end-->
                        </div>
                        <div class="col-lg-3 col-md-6 col-6">
                            <div class="header_account_area header_account5">
                                <div class="header_account-list top_links">
                                    <a href="#"><i class="icon-users"></i></a>
                                    <ul class="dropdown_links">
                                        @auth
                                            @if (auth()->user()->role === 'xxsa')
                                                <li><a href="{{ route('admin.dashboard') }}">Dashboard </a></li>
                                            @endif
                                            <li><a href="{{ route('account.index') }}">My Account </a></li>
                                            <li><a href="{{ route('cart.index') }}">Shopping Cart</a></li>
                                            <li><a href="{{ route('wishlist.index') }}">Wishlist</a></li>
                                            <li><a href="{{ route('checkout.index') }}">Checkout </a></li>
                                            <li><a href="{{ route('logout') }}">logout</a></li>
                                        @endauth
                                        @guest
                                            <li><a href="{{ route('login') }}">Login</a></li>
                                            <li><a href="{{ route('register') }}">Signup</a></li>
                                        @endguest
                                    </ul>
                                </div>
                                <div class="header_account-list header_wishlist">
                                    @if (auth()->check())
                                        <a href="{{ route('wishlist.index') }}"><i class="icon-heart"></i></a>
                                    @else
                                        <a class="header_wishlist_btn" href="javascript:void(0)"><i
                                                class="icon-heart"></i></a>
                                    @endif
                                </div>
                                <div class="header_account-list  mini_cart_wrapper">
                                    <a href="javascript:void(0)"><i class="icon-shopping-bag"></i><span
                                            class="item_count">0</span></a>
                                    @auth
                                        <!--mini cart-->
                                        <div class="mini_cart">
                                            <div class="cart_gallery">
                                                <div class="cart_close">
                                                    <div class="cart_text">
                                                        <h3>cart</h3>
                                                    </div>
                                                    <div class="mini_cart_close">
                                                        <a href="javascript:void(0)"><i class="icon-x"></i></a>
                                                    </div>
                                                </div>
                                                <div class="PlantNestCart">

                                                </div>
                                            </div>
                                            <div class="mini_cart_table">
                                                <div class="cart_table_border">
                                                    <div class="cart_total">
                                                        <span>Sub total:</span>
                                                        <span class="price">$125.00</span>
                                                    </div>
                                                    <div class="cart_total mt-10">
                                                        <span>total:</span>
                                                        <span class="price">$125.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mini_cart_footer">
                                                <div class="cart_button">
                                                    <a href="{{ route('cart.index') }}"><i
                                                            class="fa fa-shopping-cart"></i> View cart</a>
                                                </div>
                                                <div class="cart_button">
                                                    <a class="active" href="{{ route('checkout.index') }}"><i
                                                            class="fa fa-sign-in"></i>
                                                        Checkout</a>
                                                </div>

                                            </div>
                                        </div>
                                        <!--mini cart end-->
                                    @endauth
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="main_header">
            {{-- <div class="header_top">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-md-7">
                            <div class="welcome-text">
                                <p>Free Delivery: Take advantage of our time to save event</p>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5">
                            <div class="language_currency text-right">
                                <ul>
                                    <li class="currency"><a href="#"> USD <i class="fa fa-angle-down"></i></a>
                                        <ul class="dropdown_currency">
                                            <li><a href="#">EUR</a></li>
                                            <li><a href="#">GPB</a></li>
                                            <li><a href="#">RUP</a></li>
                                        </ul>
                                    </li>
                                    <li class="language"><a href="#"> English <i class="fa fa-angle-down"></i></a>
                                        <ul class="dropdown_language">
                                            <li><a href="#">French</a></li>
                                            <li><a href="#">Spanish</a></li>
                                            <li><a href="#">Russian</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="header_middle">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-3 col-4">
                            <div class="logo">
                                <a href="{{route('user.home')}}"><img src="{{asset('assets/frontend/img/logo/logo.png
                                ')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-6 col-6">
                            <div class="header_right_info">
                                <div class="search_container">
                                    <form action="{{route('shop.index')}}" method="GET">
                                        @csrf
                                        <div class="hover_category">
                                            {{-- <select class="select_option" name="select" id="categori1" style="display: none;">
                                                <option selected="" value="1">All Categories</option>
                                                <option value="2">Accessories</option>
                                                <option value="3">Accessories &amp; More</option>
                                                <option value="4">Butters &amp; Eggs</option>
                                                <option value="5">Camera &amp; Video </option>
                                                <option value="6">Mornitors</option>
                                                <option value="7">Tablets</option>
                                                <option value="8">Laptops</option>
                                                <option value="9">Handbags</option>
                                                <option value="10">Headphone &amp; Speaker</option>
                                                <option value="11">Herbs &amp; botanicals</option>
                                                <option value="12">Vegetables</option>
                                                <option value="13">Shop</option>
                                                <option value="14">Laptops &amp; Desktops</option>
                                                <option value="15">Watchs</option>
                                                <option value="16">Electronic</option>
                                            </select><div class="nice-select select_option" tabindex="0"><span class="current">All Categories</span><ul class="list"><li data-value="1" class="option selected">All Categories</li><li data-value="2" class="option">Accessories</li><li data-value="3" class="option">Accessories &amp; More</li><li data-value="4" class="option">Butters &amp; Eggs</li><li data-value="5" class="option">Camera &amp; Video </li><li data-value="6" class="option">Mornitors</li><li data-value="7" class="option">Tablets</li><li data-value="8" class="option">Laptops</li><li data-value="9" class="option">Handbags</li><li data-value="10" class="option">Headphone &amp; Speaker</li><li data-value="11" class="option">Herbs &amp; botanicals</li><li data-value="12" class="option">Vegetables</li><li data-value="13" class="option">Shop</li><li data-value="14" class="option">Laptops &amp; Desktops</li><li data-value="15" class="option">Watchs</li><li data-value="16" class="option">Electronic</li></ul></div> --}}
                                        </div>
                                        <div class="search_box">
                                            <input placeholder="Search product..." type="text" name="search" class="searched">
                                            <button type="submit"><i class="icon-search"></i></button>
                                        </div>
                                    </form>
                                </div>
                                <div class="header_account_area">
                                    {{-- <div class="header_account-list top_links">
                                        <a href="#"><i class="icon-users"></i></a>
                                        <ul class="dropdown_links">
                                            <li><a href="checkout.html">Checkout </a></li>
                                            <li><a href="my-account.html">My Account </a></li>
                                            <li><a href="cart.html">Shopping Cart</a></li>
                                            <li><a href="wishlist.html">Wishlist</a></li>
                                        </ul>
                                    </div>
                                    <div class="header_account-list header_wishlist">
                                        <a href="wishlist.html"><i class="icon-heart"></i></a>
                                    </div>
                                    <div class="header_account-list  mini_cart_wrapper">
                                        <a href="javascript:void(0)"><i class="icon-shopping-bag"></i><span class="item_count">2</span></a>
                                        <!--mini cart-->
                                        <div class="mini_cart">
                                            <div class="cart_gallery">
                                                <div class="cart_close">
                                                    <div class="cart_text">
                                                        <h3>cart</h3>
                                                    </div>
                                                    <div class="mini_cart_close">
                                                        <a href="javascript:void(0)"><i class="icon-x"></i></a>
                                                    </div>
                                                </div>
                                                <div class="cart_item">
                                                    <div class="cart_img">
                                                        <a href="#"><img src="assets/img/s-product/product.jpg" alt=""></a>
                                                    </div>
                                                    <div class="cart_info">
                                                        <a href="#">Primis In Faucibus</a>
                                                        <p>1 x <span> $65.00 </span></p>
                                                    </div>
                                                    <div class="cart_remove">
                                                        <a href="#"><i class="icon-x"></i></a>
                                                    </div>
                                                </div>
                                                <div class="cart_item">
                                                    <div class="cart_img">
                                                        <a href="#"><img src="assets/img/s-product/product2.jpg" alt=""></a>
                                                    </div>
                                                    <div class="cart_info">
                                                        <a href="#">Letraset Sheets</a>
                                                        <p>1 x <span> $60.00 </span></p>
                                                    </div>
                                                    <div class="cart_remove">
                                                        <a href="#"><i class="icon-x"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mini_cart_table">
                                                <div class="cart_table_border">
                                                    <div class="cart_total">
                                                        <span>Sub total:</span>
                                                        <span class="price">$125.00</span>
                                                    </div>
                                                    <div class="cart_total mt-10">
                                                        <span>total:</span>
                                                        <span class="price">$125.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mini_cart_footer">
                                                <div class="cart_button">
                                                    <a href="cart.html"><i class="fa fa-shopping-cart"></i> View
                                                        cart</a>
                                                </div>
                                                <div class="cart_button">
                                                    <a class="active" href="checkout.html"><i class="fa fa-sign-in"></i>
                                                        Checkout</a>
                                                </div>

                                            </div>
                                        </div>
                                        <!--mini cart end-->
                                    </div> --}}
                                    <div class="header_account-list top_links">
                                        <a href="#"><i class="icon-users"></i></a>
                                        <ul class="dropdown_links">
                                            @auth
                                                @if (auth()->user()->role === 'xxsa')
                                                    <li><a href="{{ route('admin.dashboard') }}">Dashboard </a></li>
                                                @endif
                                                <li><a href="{{ route('account.index') }}">My Account </a></li>
                                                <li><a href="{{ route('cart.index') }}">Shopping Cart</a></li>
                                                <li><a href="{{ route('wishlist.index') }}">Wishlist</a></li>
                                                <li><a href="{{ route('checkout.index') }}">Checkout </a></li>
                                                <li><a href="{{ route('logout') }}">logout</a></li>
                                            @endauth
                                            @guest
                                                <li><a href="{{ route('login') }}">Login</a></li>
                                                <li><a href="{{ route('register') }}">Signup</a></li>
                                            @endguest
                                        </ul>
                                    </div>
                                    <div class="header_account-list header_wishlist-list ">
                                        @if (auth()->check())
                                            <a href="{{ route('wishlist.index') }}"><i class="icon-heart"></i>
                                            
                                                <span
                                                class="wishlist_item_count">{{Auth::user()->wishlistItems->count()}}</span></a>
                                            
                                        @else
                                            <a class="header_wishlist_btn" href="javascript:void(0)"><i
                                                    class="icon-heart"></i><span
                                                    class="item_count wishlist_item_count">0</span></a>
                                        @endif
                                    </div>
                                    <div class="header_account-list  mini_cart_wrapper">
                                        <a href="javascript:void(0)"><i class="icon-shopping-bag"></i><span
                                                class="item_count">0</span></a>
                                        @auth
                                            <!--mini cart-->
                                            <div class="mini_cart">
                                                <div class="cart_gallery">
                                                    <div class="cart_close">
                                                        <div class="cart_text">
                                                            <h3>cart</h3>
                                                        </div>
                                                        <div class="mini_cart_close">
                                                            <a href="javascript:void(0)"><i class="icon-x"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="PlantNestCart">
    
                                                    </div>
                                                </div>
                                                <div class="mini_cart_table">
                                                    <div class="cart_table_border">
                                                        <div class="cart_total">
                                                            <span>Sub total:</span>
                                                            <span class="price">$125.00</span>
                                                        </div>
                                                        <div class="cart_total mt-10">
                                                            <span>total:</span>
                                                            <span class="price">$125.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mini_cart_footer">
                                                    <div class="cart_button">
                                                        <a href="{{ route('cart.index') }}"><i
                                                                class="fa fa-shopping-cart"></i> View cart</a>
                                                    </div>
                                                    <div class="cart_button">
                                                        <a class="active" href="{{ route('checkout.index') }}"><i
                                                                class="fa fa-sign-in"></i>
                                                            Checkout</a>
                                                    </div>
    
                                                </div>
                                            </div>
                                            <!--mini cart end-->
                                        @endauth
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header_bottom sticky-header">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            <div class="categories_menu">
                                <div class="categories_title">
                                    <h2 class="categori_toggle">Categories</h2>
                                </div>
                                <div class="categories_menu_toggle">
                                   @foreach ($categories as $category )
                                   <ul>
                                    <li class="menu_item_children" style="margin-left: 15px"><strong><a href="{{route('shop.index',$category->id)}}">{{$category->name}} 
                                    </strong>
                                    </li>
                                    @foreach ($category->children as $SubCategory )
                                    <li class=""><a href="{{route('shop.index',$SubCategory->id)}}"> {{$SubCategory->name}}</a></li>
                                   @endforeach
                                                                   </ul>
                                   @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <!--main menu start-->
                            <div class="main_menu menu_position">
                                 <nav>
                                    <ul>
                                        <li id="home"><a class="" id="home"
                                                href="{{ route('user.home') }}">home</a>

                                        </li>
                                       
                                        <li class="mega_items"><a id="shop"
                                                href="{{ route('shop.index') }}">shop<i
                                                    class="fa fa-angle-down"></i></a>
                                            <div class="mega_menu">
                                                <ul class="mega_menu_inner">
                                                    @foreach ($categories as $category)
                                                        <li><a href="#">{{ $category->name }}</a>
                                                            <ul>
                                                                @foreach ($category->children as $subCategory)
                                                                    <li><a
                                                                            href="{{ route('shop.index', $subCategory->id) }}">{{ $subCategory->name }}</a>
                                                                    </li>
                                                                @endforeach

                                                            </ul>
                                                        </li>
                                                    @endforeach

                                                </ul>
                                            </div>
                                        </li>


                                        <li id="faq"><a href="{{ route('faq.index') }}"> Faq</a></li>
                                        <li id="about"><a href="{{ route('about.index') }}"> About Us</a></li>
                                        <li id="contact"><a href="{{ route('contact.index') }}"> Contact Us</a></li>
                                        <li id="feedback"><a href="{{ route('feedback.index') }}"> Feedback</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <!--main menu end-->
                        </div>
                        <div class="col-lg-3">
                            <div class="call-support">
                                <p>Call Support: <a href="tel:0123456789">0123456789</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--header area end-->

    @yield('content')
    <!--footer area start-->
    <footer class="footer_widgets">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="widgets_container contact_us">
                            <h3>Opening Time</h3>
                            <p><span>Mon - Fri:</span> 8AM - 10PM</p>
                            <p><span>Sat:</span> 9AM-8PM</p>
                            <p><span>Suns:</span> 14hPM-18hPM</p>
                            <p><b>We Work All The Holidays</b></p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6">
                        <div class="widgets_container widget_menu">
                            <h3>Information</h3>
                            <div class="footer_menu">
                                <ul>
                                    <li><a href="{{ route('about.index') }}">About Us</a></li>
                                    <li><a href="{{ route('checkout.index') }}">Checkout</a></li>
                                    <li><a href="{{ route('contact.index') }}">Contact</a></li>
                                    <li><a href="{{ route('faq.index') }}">Frequently Questions</a></li>
                                    <li><a href="{{ route('wishlist.index') }}">Wishlist</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5">
                        <div class="widgets_container widget_app">
                            <div class="footer_logo">
                                <a href="{{ route('user.home') }}"><img
                                        src="{{ asset('assets/frontend/img/logo/logo.png') }}" alt=""></a>
                            </div>
                            <div class="footer_widgetnav_menu">
                                <ul>
                                    <li><a href="#">Payment</a></li>
                                    <li><a href="#">Affiliates</a></li>
                                    <li><a href="#">Contact</a></li>
                                    <li><a href="#">Internet</a></li>
                                </ul>
                            </div>
                            <div class="footer_social">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <div class="footer_app">
                                <ul>
                                    <li><a href="#"><img
                                                src="{{ asset('assets/frontend/img/icon/icon-app.jpg') }}"
                                                alt=""></a>
                                    </li>
                                    <li><a href="#"><img
                                                src="{{ asset('assets/frontend/img/icon/icon1-app.jpg') }}"
                                                alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="widgets_container widget_menu">
                            <h3>My Account</h3>
                            <div class="footer_menu">
                                <ul>
                                    <li><a href="shop.html">Shop</a></li>
                                    @auth
                                        <li><a href="{{ route('checkout.index') }}">Checkout </a></li>
                                        <li><a href="{{ route('cart.index') }}">Shopping Cart</a></li>
                                        <li><a href="{{ route('wishlist.index') }}">Wishlist</a></li>
                                        @if (auth()->user()->role == 'xxca')
                                            <li><a href="{{ route('account.index') }}">My Account </a></li>
                                        @else
                                            <li><a href="{{ route('admin.dashboard') }}">Dashboard </a></li>
                                        @endif
                                        <li><a href="{{ route('logout') }}">logout</a></li>
                                    @endauth
                                    @guest
                                        <li><a href="{{ route('login') }}">Login</a></li>
                                        <li><a href="{{ route('register') }}">Signup</a></li>
                                    @endguest
                                    <li><a href="{{ route('contact.index') }}">Contact</a></li>
                                    <li><a href="{{ route('contact.index') }}">About US</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="widgets_container widget_menu">
                            <h3>Customer Service</h3>
                            <div class="footer_menu">
                                <ul>
                                    <li><a href="{{ route('contact.index') }}">Contact Us</a></li>
                                    <li><a href="#">Terms of use</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="{{ route('contact.index') }}">Site Map</a></li>
                                    <li><a href="{{ route('account.index') }}">My Account</a></li>
                                    <li><a href="#">Returns</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer_bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="copyright_area">
                            <p class="copyright-text">&copy; {{ now()->year }}

                                <a href="{{ route('user.home') }}">PlantNest</a>. Made with <i
                                    class="fa fa-heart text-danger"></i>
                                by <a href="{{ route('user.home') }}" target="_blank">MSG-Artisans</a>
                            </p>

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="footer_payment">
                            <a href="#"><img src="{{ asset('assets/frontend/img/icon/payment.png') }}"
                                    alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer area end-->
    <!-- JS
============================================ -->
    <!--jquery min js-->
    <script src="{{ asset('assets/frontend/js/vendor/jquery-3.4.1.min.js') }}"></script>
    <!--popper min js-->
    <script src="{{ asset('assets/frontend/js/popper.js') }}"></script>
    <!--bootstrap min js-->
    <script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
    <!--owl carousel min js-->
    <script src="{{ asset('assets/frontend/js/owl.carousel.min.js') }}"></script>
    <!--slick min js-->
    <script src="{{ asset('assets/frontend/js/slick.min.js') }}"></script>
    <!--magnific popup min js-->
    <script src="{{ asset('assets/frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <!--counterup min js-->
    <script src="{{ asset('assets/frontend/js/jquery.counterup.min.js') }}"></script>
    <!--jquery countdown min js-->
    <script src="{{ asset('assets/frontend/js/jquery.countdown.js') }}"></script>
    <!--jquery ui min js-->
    <script src="{{ asset('assets/frontend/js/jquery.ui.js') }}"></script>
    <!--jquery elevatezoom min js-->
    <script src="{{ asset('assets/frontend/js/jquery.elevatezoom.js') }}"></script>
    <!--isotope packaged min js-->
    <script src="{{ asset('assets/frontend/js/isotope.pkgd.min.js') }}"></script>
    <!--slinky menu js-->
    <script src="{{ asset('assets/frontend/js/slinky.menu.js') }}"></script>
    <!-- Plugins JS -->
    <script src="{{ asset('assets/frontend/js/plugins.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('assets/frontend/js/main.js') }}"></script>

    @guest
        <script>
            $('.add_to_cart, .cart_button, .mini_cart_wrapper, .header_wishlist, .product_d_action','.add-to-wishlist').click(function(e) {
                e.preventDefault();
                if (localStorage.getItem('auth') == 'false') {
                    Swal.fire({
                        title: 'You need to login First!',
                        text: 'Do you want to continue?',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'Login',
                        cancelButtonText: 'No'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location = "{{ route('login') }}";
                        }
                    })
                }
            })
        </script>
    @endguest
    <script>
        function cart() {


            $.get(
                    "{{ route('cart.cart') }}", {
                        _token: '{{ csrf_token() }}'
                    },
                    function(response) {
                        console.log(response);
                        $('.PlantNestCart').empty();
                        $('#cartTable').empty();

                        var totalCartPrice = 0;
                        $('.item_count').text(response.count);
                        console.log('cartItem.count', response.count);
                        $.each(response.cartItem, function(index, cartItem) {

                            var productId = cartItem.product.id;
                            var image = cartItem.product.image_url;
                            var productName = cartItem.product.name;
                            var quantity = cartItem.quantity;
                            var price;
                            var discount = cartItem.product.discount;
                            if (discount > 0) {
                                price = cartItem.product.price - discount;
                            } else {
                                price = cartItem.product.price;
                            }
                            var itemTotal = price * quantity;
                            totalCartPrice += itemTotal;

                            // sidebar cart
                            var html = `
                <div class="cart_item">
                    <div class="cart_img">
                        <a href="#"><img src="${image}" alt=""></a>
                    </div>
                    <div class="cart_info">
                        <a href="#">${productName}</a>
                        <p>${quantity} x <span> PKR ${price.toFixed(2)} </span></p>
                    </div>
                    <div class="cart_remove"  data-cart-id="${cartItem.id}">
                        <a href="#"  onclick="removeMiniCartItem(this)"><i class="icon-x"></i></a>
                    </div>
                </div>`;

                            $('.PlantNestCart').append(html);
                            // sidebar cart end
                            // mainCart
                            var row = `
                            <tr class="product_row">
                                <td class="product_remove" data-cart-id="${cartItem.id}"><a href="#" onclick="removeCartItem(this)" ><i class="fa fa-trash-o"></i></a>
                                </td>
                                <td class="product_thumb"><a href="#"><img
                                            src="${image}" alt=""></a></td>
                                <td class="product_name"><a href="#">${productName}</a></td>
                                <td class="product-price">PKR ${price.toFixed(2)}</td>
                                <td class="product_quantity"><label>Quantity</label> <input min="1"
                                        max="100" value="${quantity}" type="number" onchange="updateCartItem(this)"></td>
                                <td class="product_total">PKR ${itemTotal.toFixed(2)}</td>
    
    
                            </tr>
                            `
                            $('#cartTable').append(row);
                            console.log(itemTotal)
                            // mainCartEnd
                        });
                        var total = totalCartPrice;
                        var formattedPrice = parseFloat(totalCartPrice.toFixed(2));

                        $('.price').text('PKR ' + formattedPrice);
                        $('.cart_amount').text('PKR ' + formattedPrice);
                        console.log(total)


                    })
                .fail(function(xhr, status, error) {
                    console.log('Error adding product to cart:', error);
                });
        }


        function updateCartItem(inputElement) {
            var closestTr = inputElement.closest('.product_row');
            var cartItemId = closestTr.querySelector('.product_remove').getAttribute('data-cart-id');
            console.log(cartItemId)
            var newQuantity = parseInt(inputElement.value);
            var productPrice = parseFloat($(inputElement).closest('.product_row').find('.product-price').text().replace(
                'PKR ', ''));

            $.ajax({
                method: 'GET',
                url: "{{ route('cart.updateQuantity') }}",
                data: {
                    quantity: newQuantity,
                    id: cartItemId
                },
                dataType: 'json',
                success: function(response) {
                    var newTotal = (productPrice * newQuantity).toFixed(2);
                    var nearest = $(inputElement).closest('.product_row').find('.product_total');
                    var newTotal = (productPrice * newQuantity).toFixed(2);
                    console.log(productPrice, newQuantity, newTotal);
                    $(inputElement).closest('.product_row').find('.product_total').text(newTotal);

                    calculateTotalCartPrice();
                    cart();
                    // var total = totalCartPrice.toFixed(2);
                    // $('.cart_amount').text('PKR ' + total);
                },
                error: function(xhr, status, error) {
                    console.log('Error updating cart item:', error);
                }
            });
        }

        function calculateTotalCartPrice() {
            var totalCartPrice = 0;

            $('.product_row').each(function(index, cartItemElement) {
                // console.log(cartItemElement);
                var itemTotalElement = $(cartItemElement).find('.product_total');
                var itemTotal = parseFloat(itemTotalElement.text().replace('PKR', ''))
                console.log(itemTotal);
                totalCartPrice += itemTotal;
            });

            // console.log(totalCartPrice)
            var formattedPrice = parseFloat(totalCartPrice.toFixed(2));
            console.log('Total Cart Price:', totalCartPrice);

            var formattedPrice = parseFloat(totalCartPrice.toFixed(2));
            console.log('Formatted Price:', formattedPrice);
            $('.cart_amount').text('PKR ' + formattedPrice);
            // 
            let totalPrice = 0;

            $('.cart_item').each(function() {
                const quantity = parseInt($(this).find('.cart_info p').text().split('x')[0]);
                const priceText = $(this).find('.cart_info span').text().replace('PKR ', '');
                const price = parseFloat(priceText);

                totalPrice += quantity * price;
            });
            console.log('totalPrice', totalPrice);
            $('.price').text('PKR ' + totalPrice);

            // var totalCartPrice = 0;

            // $('.product_row').each(function(index, cartItemElement) {
            //     console.log(cartItemElement);
            //     var itemTotal = parseFloat($(cartItemElement).find('.product_total').text());
            //     console.log(itemTotal);
            //     totalCartPrice += itemTotal;
            // });

            // return totalCartPrice;
        }

        function removeCartItem(iconElement) {
            var closestTr = iconElement.closest('.product_row');

            var cartItemId = closestTr.querySelector('.product_remove').getAttribute('data-cart-id');

            $.ajax({
                method: 'GET',
                url: "{{ route('cart.remove') }}",
                data: {
                    id: cartItemId
                },
                dataType: 'json',
                success: function(response) {
                    $(iconElement).closest('.product_row').remove();
                    calculateTotalCartPrice();
                    cart()
                    // console.log(totalCartPrice)
                    // var total = totalCartPrice.toFixed(2);
                    // $('.cart_amount').text('PKR ' + total);
                },
                error: function(xhr, status, error) {
                    console.log('Error removing cart item:', error);
                }
            });
        }

        function removeMiniCartItem(iconElement) {
            var closestTr = iconElement.closest('.cart_item');

            var cartItemId = closestTr.querySelector('.cart_remove').getAttribute('data-cart-id');

            $.ajax({
                method: 'GET',
                url: "{{ route('cart.remove') }}",
                data: {
                    id: cartItemId
                },
                dataType: 'json',
                success: function(response) {
                    $(iconElement).closest('.cart_item').remove();
                    calculateTotalCartPrice();
                    // console.log(totalCartPrice)
                    // var total = totalCartPrice.toFixed(2);
                    // $('.cart_amount').text('PKR ' + total);
                },
                error: function(xhr, status, error) {
                    console.log('Error removing cart item:', error);
                }
            });
        }

        @auth

        $(document).ready(function() {
            cart();
            $(".add-to-wishlist").click(function(e) {
                e.preventDefault(); // Prevent the link from navigating

                var productId = $(this).data("product-id");
                var $icon = $(this).find("i");

                console.log('product-id', productId, $icon);
                var url = "{{ route('wishlist.add', '') }}" + "/" + productId;
                $.get(url, {
                    product_id: productId
                }, function(response) {

                    console.log('added wishilist' + response)
                    // Change the icon to a filled heart
                    $icon.removeClass("icon-heart").addClass("fa fa-heart");
                    console.log($icon)

                });
            });


            $('.add_to_cart').click(function(e) {
                e.preventDefault()
                var productId = $(this).data('product-id');
                var quantity = $(this).data('quantity');

                console.log(productId, quantity);
                $.ajax({
                    url: "{{ route('cart.add') }}",
                    method: 'POST',
                    data: {
                        product_id: productId,
                        quantity: quantity,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        console.log('Product added to cart successfully');
                        // alert(response.message);
                        cart();
                        Swal.fire({
                            timer: 2000,
                            timerProgressBar: true,
                            icon: 'success',
                            title: 'Success',
                            text: response.message
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error('Error adding product to cart:', error);
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'There was an error adding the product to the cart.'
                        });
                    }
                });
            });
        });
        @endauth
    </script>

    @yield('script')

</body>

</html>
