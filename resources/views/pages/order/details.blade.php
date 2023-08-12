@extends('layouts.guest')
<title>
    {{ config('app.name', 'PlantNest | Order Info') }}</title>
@section('style')
<style>
    .review {
    margin-bottom: 20px;
    border: 1px solid #ccc;
    padding: 10px;
}

.rating {
    display: inline-block;
}

.rating input {
    display: none;
}

.rating label {
    cursor: pointer;
    width: 20px;
    height: 20px;
    margin: 0 2px;
    font-size: 20px;
    float: right;
    color: #ccc;
}

.rating label:before {
    content: '\2605';
}

/* Adjust the styles for the checked and hover states */
.rating input:checked ~ label,
.rating label:hover,
.rating input:checked + label:hover,
.rating input:checked ~ label:hover,
.rating label:hover ~ input:checked ~ label,
.rating input:checked ~ label:hover ~ label {
    color: #FFC107;
}
.star {
    font-size: 24px;
    color: #FFD700; /* Yellow color for stars */
}

</style>
@endsection
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
                                                        src="{{ $order->product->image_url }}" alt=""></a></td>
                                            <td class="product_name"><a href="#">{{ $order->product->name }}</a>
                                            </td>
                                            <td class="product-price">Rs @if ($order->product->discount_percentage > 0)
                                                    <span class="current_price">
                                                        {{ $order->product->price - $order->product->discount }}</span>
                                                    <span class="old_price" style="text-decoration: line-through">
                                                        {{ $order->product->price }}</span>
                                                @else
                                                    <span class="current_price">
                                                        {{ $order->product->price }}</span>
                                                @endif
                                            </td>
                                            <td class="product_quantity">
                                                {{ $order->quantity }}
                                            </td>
                                            <td>Rs {{ $order->price }}</td>
                                            <td class="product_total give_review_btn"
                                                data-product-id="{{ $order->product->id }}">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#modal_box{{ $order->product->id }}">Give
                                                    Review</a>
                                            </td>
                                        </tr>

                                        <div class="modal fade" id="modal_box{{ $order->product->id }}" tabindex="-1"
                                            role="dialog" aria-hidden="true">
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
                                                                            <div class="tab-pane fade show active"
                                                                                id="tab1" role="tabpanel">
                                                                                <div class="modal_tab_img">
                                                                                    <a href="#"><img
                                                                                            src="{{ $order->product->image_url }}"
                                                                                            alt=""></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-7 col-md-7 col-sm-12">
                                                                    <div class="modal_right">
                                                                        <div class="modal_title">
                                                                             <h2>{{ $order->product->name }}</h2>
                                                                        </div>
                                                                        <div class="modal_description mb-10">
                                                                             <p><strong> Category:  </strong>{{ $order->product->category->name }}</p>
                                                                        </div>

                                                                    </div>
                                                                    @if ($order->product->reviews->count())
                                                                        <h4 class="text-success mt-4">Review Already Given</h4>
                                                                        <div>
                                                                            <p><strong>Review: </strong> {{ $order->product->reviews->first()->review_text }}</p>
                                                                            <p><strong>Rating: </strong> 
                                                                            
                                                                                @for ($i = 1; $i <= 5; $i++)
                                                                                    @if ($i <= $order->product->reviews->first()->rating)
                                                                                        <span class="star">&#9733;</span>
                                                                                    @elseif ($i - 0.5 <= $order->product->reviews->first()->rating)
                                                                                        <span class="star">&#9733;&#189;</span>
                                                                                    @else
                                                                                        <span class="star">&#9734;</span>
                                                                                    @endif
                                                                                @endfor

                                                                            </p>
                                                                        </div>
                                                                    @else
                                                                        <div class="product_review_form">
                                                                        <form
                                                                            action="{{ route('product.review.submit', $order->product->id) }}"
                                                                            method="POST">
                                                                            @csrf
                                                                            <input type="hidden" name="product_id" value="{{ $order->product->id }}">
                                                                            <div class="product_ratting mb-10">
                                                                                <h5>Your rating</h5>
                                                                                <div class="rating">
                                                                                    <input type="radio" id="star5{{ $order->product->id }}" name="rating" value="5" />
                                                                                    <label for="star5{{ $order->product->id }}" title="5 stars"></label>
                                                                                    <input type="radio" id="star4{{ $order->product->id }}" name="rating" value="4" />
                                                                                    <label for="star4{{ $order->product->id }}" title="4 stars"></label>
                                                                                    <input type="radio" id="star3{{ $order->product->id }}" name="rating" value="3" />
                                                                                    <label for="star3{{ $order->product->id }}" title="3 stars"></label>
                                                                                    <input type="radio" id="star2{{ $order->product->id }}" name="rating" value="2" />
                                                                                    <label for="star2{{ $order->product->id }}" title="2 stars"></label>
                                                                                    <input type="radio" id="star1{{ $order->product->id }}" name="rating" value="1" />
                                                                                    <label for="star1{{ $order->product->id }}" title="1 star"></label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-12">
                                                                                    <label for="review_comment">Your review
                                                                                    </label>
                                                                                    <textarea name="review" id="review_comment" required></textarea>
                                                                                </div>
                                                                                <div class="col-lg-6 col-md-6">
                                                                                    <label for="author">Name</label>
                                                                                    <input id="author" type="text"
                                                                                        name="name" required>

                                                                                </div>
                                                                                <div class="col-lg-6 col-md-6">
                                                                                    <label for="email">Email </label>
                                                                                    <input id="email" type="email"
                                                                                        name="email" required>
                                                                                </div>
                                                                            </div>
                                                                            <button type="submit">Submit</button>
                                                                        </form>
                                                                    </div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach



                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
            {{-- <div class="row">
                <div class="col-12">
                    <div class="wishlist_share">
                        <h4>Share on:</h4>
                        <ul>
                            <li><a href=""><i class="fa fa-rss"></i></a></li>
                            <li><a href=""><i class="fa fa-vimeo"></i></a></li>
                            <li><a href=""><i class="fa fa-tumblr"></i></a></li>
                            <li><a href=""><i class="fa fa-pinterest"></i></a></li>
                            <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div> --}}

        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $(".give_review_btn").click(function(e) {
                e.preventDefault(); // Prevent the link from navigating

                var productId = $(this).data("product-id");
                var $tr = $(this).closest("tr");

                // Make a GET request to your API to remove the product from the wishlist
                // $.get("/wishlist/remove/" + productId, function (response) {
                //     // Remove the entire row from the table
                //     $tr.remove();
                // });
            });
        });
    </script>
    @if(session()->has('success'))
        <script>
            Swal.fire({
                    timer: 2000,
                    timerProgressBar: true,
                    icon: 'success',
                    title: 'Thanks For The Review',
                    text: 'Review Submited Successfully'
                    });
        </script>
    @endif
@endsection
