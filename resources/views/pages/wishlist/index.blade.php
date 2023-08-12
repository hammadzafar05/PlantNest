@extends('layouts.guest')
<title>
    {{ config('app.name', 'PlantNest|Whislist') }}</title>

@section('content')
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <h3>Wishlist</h3>
                        <ul>
                            <li><a href="{{ route('user.home') }}">home</a></li>
                            <li>Wishlist</li>
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
                                            <th class="product_remove">Delete</th>
                                            <th class="product_thumb">Image</th>
                                            <th class="product_name">Product</th>
                                            <th class="product-price">Price</th>
                                            <th class="product_quantity">Stock Status</th>
                                            <th class="product_total">Add To Cart</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($wishlistItems as $wishlistItem)
                                            <tr>
                                                <td class="product_remove remove_wishlist" data-product-id="{{ $wishlistItem->product->id }}" ><a href="#">X</a></td>
                                                <td class="product_thumb"><a href="#"><img
                                                            src="{{ $wishlistItem->product->image_url }}"
                                                            alt=""></a></td>
                                                <td class="product_name"><a
                                                        href="#">{{ $wishlistItem->product->name }}</a></td>
                                                <td class="product-price">@if ($wishlistItem->product->discount_percentage > 0) 
                                                        <span class="current_price">Rs
                                                            {{ $wishlistItem->product->price - $wishlistItem->product->discount }}</span>
                                                        <span class="old_price" style="text-decoration: line-through">Rs
                                                            {{ $wishlistItem->product->price }}</span>
                                                    @else
                                                        <span class="current_price">Rs
                                                            {{ $wishlistItem->product->price }}</span>
                                                    @endif
                                                </td>
                                                <td class="product_quantity">
                                                    @if ($wishlistItem->product->stock <= 0)
                                                        Out Of Stock
                                                    @else
                                                        In Stock
                                                    @endif
                                                </td>
                                                <td class="product_total add_to_cart"
                                                    data-product-id="{{ $wishlistItem->product->id }}" ><a
                                                        href="#">Add To Cart</a></td>


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
    <!--wishlist area end -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function () {
            $(".remove_wishlist").click(function (e) {
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
