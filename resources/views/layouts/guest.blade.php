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
    <!--animate css-->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/animate.css') }}">
    <!--jquery ui min css-->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/jquery-ui.min.css') }}">
    <!--slinky menu css-->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/slinky.menu.css') }}">
    <!--plugins css-->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/plugins.css') }}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">

    <!--modernizr min js here-->
    <script src="{{ asset('assets/frontend/js/vendor/modernizr-3.7.1.min.js') }}"></script>

    @guest
        <script src="{{ asset('assets/backend/libs/sweetalert2/sweetalert2.all.min.js') }}"></script>
    @endguest

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
    </style>
</head>

<body>

    <!--header area start-->



    <!--offcanvas menu area end-->
    <header>
        <div class="main_header header_five">
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
                                        {{-- @foreach ($categories as $category)
                                        
                                        <li id="shop"><a href="blog.html">{{$category->name}}<i class="fa fa-angle-down"></i></a>
                                            <ul class="sub_menu pages">
                                                
                                                @foreach ($category->children as $subCategory)
                                                <li><a href="blog-details.html">{{$subCategory->name}}</a></li>
                                                
                                            
                                            @endforeach
                                            
                                            </ul>
                                        </li>
                                           
                                        @endforeach --}}
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
            $('.add_to_cart, .cart_button, .mini_cart_wrapper, .header_wishlist, .product_d_action').click(function(e){
                e.preventDefault();
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
                }
            })
        </script>
    @endguest
    <script>
        function cart() {
            console.log('test')


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



        $(document).ready(function() {
            cart();

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
                        alert(response.message);
                        cart();
                        // Swal.fire({
                        //     icon: 'success',
                        //     title: 'Success',
                        //     text: 'Product added to cart successfully.'
                        // });
                    },
                    error: function(xhr, status, error) {
                        console.error('Error adding product to cart:', error);
                        // Swal.fire({
                        //     icon: 'error',
                        //     title: 'Error',
                        //     text: 'There was an error adding the product to the cart.'
                        // });
                    }
                });
            });
        });
    </script>

    @yield('script')

    </body>

    </html>
