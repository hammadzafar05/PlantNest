@extends('layouts.guest')
<title>
    {{ config('app.name', 'PlantNest | Order Info') }}</title>

@section('content')
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <h3>Order Info</h3>
                        <ul>
                            <li><a href="{{ route('user.home') }}">home</a></li>
                            <li>Order Info</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->


    <!--wishlist area start -->
    <div class="wishlist_area mt-100">
        <div class="container">
            <form action="#">
                <div class="row">
                    <div class="col-12">
                        <div class="table_desc wishlist">
                            <div class="cart_page table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th class="product_thumb">Image</th>
                                            <th class="product_name">Product</th>
                                            <th class="product-price">Price</th>
                                            <th class="product_quantity">Quantity</th>
                                            <th class="product_price_total">Total</th>
                                            <th class="product_total">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orderDetails as $order)
                                            <tr>
                                                <td> {{ $loop->iteration }} </td>
                                                <td class="product_thumb"><a href="#"><img
                                                            src="{{ $order->product->image_url }}"
                                                            alt=""></a></td>
                                                <td class="product_name"><a
                                                        href="#">{{ $order->product->name }}</a></td>
                                                <td class="product-price">Rs @if ($order->product->discount_percentage > 0)
                                                        <span class="current_price">
                                                            {{ $order->product->price - $order->product->discount }}</span>
                                                        <span class="old_price">
                                                            {{ $order->product->price }}</span>
                                                    @else
                                                        <span class="current_price">
                                                            {{ $order->product->price }}</span>
                                                    @endif
                                                </td>
                                                <td class="product_quantity">
                                                    {{ $order->quantity }}
                                                </td>
                                                <td >{{ $order->price }}</td>
                                                <td class="product_total add_to_cart"
                                                    data-product-id="{{ $order->product->id }}" ><a 
                                                        href="#">Give Review</a></td>


                                            </tr>
                                        @endforeach



                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>

            </form>
            <div class="row">
                <div class="col-12">
                    <div class="wishlist_share">
                        <h4>Share on:</h4>
                        <ul>
                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                            <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                            <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
    @endsection

    @section('script')
        
    <script>
        $(document).ready(function () {
            $(".give_review_btn").click(function (e) {
                e.preventDefault(); // Prevent the link from navigating
    
                var productId = $(this).data("product-id");
                var $tr = $(this).closest("tr");
    
                // Make a GET request to your API to remove the product from the wishlist
                $.get("/wishlist/remove/" + productId, function (response) {
                    // Remove the entire row from the table
                    $tr.remove();
                });
            });
        });
    </script>
    
@endsection
