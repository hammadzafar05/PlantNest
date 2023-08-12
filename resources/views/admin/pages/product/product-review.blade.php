@extends('admin.layouts.app')

@section('admin_title', 'Dashboard | Reviews')

@section('content')
    <div class="container-fluid">

        <!-- start page title -->

        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <ul class="nav nav-tabs nav-tabs-custom mt-3 mb-2 ecommerce-sortby-list">
                                <h4>Review List</h4>
                            </ul>
                            @if (!$_productReviews->isEmpty())
                                <div class="row">

                                    <div class="col-xl-12 col-sm-6">
                                        <table border="1" class="table">

                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Rating</th>
                                                <th>product Name</th>
                                                <th>product Image</th>
                                            </tr>
                                            @php
                                                $i = 1;
                                            @endphp
                                            @foreach ($_productReviews as $review)
                                                <tr>
                                                    <td>{{ $i++ }}</td>
                                                    <td><span class="badge bg-soft-danger font-size-12">{{ $review->user->name }}</span></td>
                                                    <td>{{ $review->product->name }}</td>
                                                    <td>
                                                        @foreach(array_reverse($review['product']['images']->toArray(),true) as $img)
                                                        @if($img['product_id']==$review->product->id)
                                                                 @php
                                                                    $imgs=$img['image_url']
                                                                @endphp
                                                        @endif
                                                        @endforeach
                                                        <img src="{{ asset('assets/backend/images/product/' . $imgs) }}" alt="" class="img-fluid mx-auto d-block product_img" >

                                                    </td>

                                                </tr>
                                            @endforeach
                                        </table>
                                    </div>


                                </div>
                            @else
                                <div class="row justify-content-center text-center">
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <i class="uil uil-exclamation-triangle me-2"></i>
                                        No Product Reviews Found!
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">

                                        </button>
                                    </div>
                                </div>
                            @endif


                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- end row -->

    </div> <!-- container-fluid -->

@endsection
