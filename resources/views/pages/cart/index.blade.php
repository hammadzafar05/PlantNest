
@extends('layouts.guest')
<title>{{ config('app.name', 'PlantNest|Cart') }}</title>

@section('content')
<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <h3>Cart</h3>
                    <ul>
                        <li><a href="{{route('user.home')}}">home</a></li>
                        <li>Shopping Cart</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!--shopping cart area start -->
<div class="shopping_cart_area mt-100">
    <div class="container">
        <form action="#">
            <div class="row">
                <div class="col-12">
                    <div class="table_desc">
                        <div class="cart_page table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="">Delete</th>
                                        <th class="product_thumb">Image</th>
                                        <th class="product_name">Product</th>
                                        <th class="product-price">Price</th>
                                        <th class="product_quantity">Quantity</th>
                                        <th class="product_total">Total</th>
                                    </tr>
                                </thead>
                                <tbody id="cartTable">
                                

                                </tbody>
                            </table>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!--coupon code area start-->
            <div class="coupon_area">
                <div class="row">
                    {{-- <div class="col-lg-6 col-md-6">
                        <div class="coupon_code left">
                            <h3>Coupon</h3>
                            <div class="coupon_inner">
                                <p>Enter your coupon code if you have one.</p>
                                <input placeholder="Coupon code" type="text">
                                <button type="submit">Apply coupon</button>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-lg-6 col-md-6 offset-6">
                        <div class="coupon_code right">
                            <h3>Cart Totals</h3>
                            <div class="coupon_inner">
                                <div class="cart_subtotal">
                                    <p>Subtotal</p>
                                    <p class="cart_amount">£215.00</p>
                                </div>
                                <div class="cart_subtotal ">
                                    <p>Shipping</p>
                                    <p class="shipping_amount"><span>Free:</span> PKR 0</p>
                                </div>
                                {{-- <a href="#">Calculate shipping</a> --}}

                                <div class="cart_subtotal">
                                    <p>Total</p>
                                    <p class="cart_amount">£215.00</p>
                                </div>
                                <div class="checkout_btn">
                                    <a href="{{ route('checkout.index') }}">Proceed to Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--coupon code area end-->
        </form>
    </div>
</div>
<!--shopping cart area end -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            console.log('i ran');

            // Remove active class from all li elements
            $('nav ul li a').removeClass('active');

            // Add active class to the clicked li element
            $('#shop').addClass('active');
        });
    </script>
@endsection