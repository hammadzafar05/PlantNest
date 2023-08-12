@extends('admin.layouts.app')
@section('admin_title', 'Dashboard | Product Detail')
@section('style')
<style>
    .starChecked {
      color: orange;
    }
    </style>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 col">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0">Product Detail</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="/ecommerce-product-detail">Ecommerce</a></li>
                        <li class="active breadcrumb-item" aria-current="page"><a
                                href="/ecommerce-product-detail">Product Detail</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-5">
                            <div class="product-detail">
                                <div class="row">
                                    <div class="col-3">
                                        <ul class="flex-column nav nav-pills">
                                            <li class="nav-item">
                                                @foreach ($productArray->images as $image)
                                                <a class="active nav-link">
                                                <img src="{{asset('assets/backend/images/product/'.$image->image_url)}}"
                                                        alt=""
                                                        class="img-fluid mx-auto d-block tab-img rounded">
                                                    </a>
                                                    @endforeach
                                                </li>
                                        </ul>
                                    </div>
                                    <div class="col-9">
                                        <div class="tab-content position-relative">
                                            <div class="tab-pane active">
                                                <div class="product-img m-0 p-0"><img
                                                        src="{{asset('assets/backend/images/product/'.$productArray->image_url)}}"
                                                        alt="" id="expandedImg1"
                                                        class="img-fluid mx-auto d-block"></div>
                                            </div>
                                            {{-- <div class="tab-pane">
                                                <div class="product-img"><img
                                                        src="/static/media/img-1.7d8658df1a509f5ebbd2.png"
                                                        id="expandedImg2" alt=""
                                                        class="img-fluid mx-auto d-block"></div>
                                            </div>
                                            <div class="tab-pane">
                                                <div class="product-img"><img
                                                        src="/static/media/img-1.7d8658df1a509f5ebbd2.png"
                                                        id="expandedImg3" alt=""
                                                        class="img-fluid mx-auto d-block"></div>
                                            </div>
                                            <div class="tab-pane">
                                                <div class="product-img"><img
                                                        src="/static/media/img-1.7d8658df1a509f5ebbd2.png"
                                                        id="expandedImg4" alt=""
                                                        class="img-fluid mx-auto d-block"></div>
                                            </div> --}}
                                        </div>
                                        {{-- <div class="text-center mt-2 row">
                                            <div class="d-grid col-sm-6"><button type="button"
                                                    class="btn-block waves-effect waves-light mt-2 me-1 btn btn-primary"><i
                                                        class="uil uil-shopping-cart-alt me-2"></i> Add to cart</button>
                                            </div>
                                            <div class="d-grid col-sm-6"><button type="button"
                                                    class="btn-block waves-effect  mt-2 waves-light btn btn-light"><i
                                                        class="uil uil-shopping-basket me-2"></i>Buy now</button></div>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7">
                            <div class="mt-4 mt-xl-3 ps-xl-4">
                                <h4 class="font-size-20 mb-3">{{$productArray->name}}</h4>
                                <div class="text-muted"><span class="badge bg-success font-size-14 me-1"><i
                                            class="mdi mdi-star">{{$productArray->reviews->count()}}</i></span></div>
                                <h5 class="mt-4 pt-2 text-primary"><strong>PKR: {{$productArray->price}}</strong><span
                                        class="text-danger font-size-15 ms-2">{{$productArray->discount > 0 ? -$productArray->discount :  ''}}% Off</span></h5>
                                <p class="mt-4 text-muted">{{$productArray->purpose}}</p>
                                <div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mt-3">
                                                <h5 class="font-size-14">Species :</h5>
                                                <ul class="list-unstyled product-desc-list text-muted">
                                                    <li><i class="mdi mdi-circle-medium me-1 align-middle"></i>{{$productArray->species}}</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mt-3">
                                                <h5 class="font-size-14">Services :</h5>
                                                <ul class="list-unstyled product-desc-list text-muted">
                                                    <li><i class="uil uil-exchange text-primary me-1 font-size-16"></i>
                                                        10 Days Replacement</li>
                                                    <li><i class="uil uil-bill text-primary me-1 font-size-16"></i>
                                                        Cash on Delivery available</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="product-color">
                                        <h5 class="font-size-15">Color :</h5><a class="active"
                                            href="/ecommerce-product-detail">
                                            <div class="product-color-item border rounded"><img
                                                    src="/static/media/img-1.7d8658df1a509f5ebbd2.png" alt=""
                                                    class="avatar-md"></div>
                                            <p>Red</p>
                                        </a><a class="active" href="/ecommerce-product-detail">
                                            <div class="product-color-item border rounded"><img
                                                    src="/static/media/img-2.1c8fac61181331c07712.png" alt=""
                                                    class="avatar-md"></div>
                                            <p>Dark</p>
                                        </a><a class="active" href="/ecommerce-product-detail">
                                            <div class="product-color-item border rounded"><img
                                                    src="/static/media/img-3.13e02027e81c737eeccf.png" alt=""
                                                    class="avatar-md"></div>
                                            <p>Purple</p>
                                        </a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <div class="mt-4">
                        <h5 class="font-size-14 mb-3">Reviews:</h5>
                        <div class="text-muted mb-3"><span class="badge bg-success font-size-14 me-1"><i
                                    class="mdi mdi-star"> {{$productArray->reviews->count()}}</i></span> Review</div>
                        <div class="border p-4 rounded">
                            @foreach ($productArray->reviews as $review)
                            <div class="d-flex align-items-start">
                                <div class="flex-grow-1">
                                    <h5 class="font-size-15 mb-0">{{$review->user->name}}</h5>
                                </div>
                            </div>
                            <div class="border-bottom pb-3">
                                <p class="float-sm-end text-muted font-size-13">{{\Carbon\Carbon::parse($review->created_at)->format('Y-m-d')}}</p>
                                <p class="text-muted my-1">
                                    {{$review->review_text}}
                                </p>
                                <div class="badge bg-success mb-2"><i class="mdi mdi-star"></i>  {{$review->rating}}</div>
                                <div class="badge font-14 mb-2">
                                    @for ($i = 1; $i <= $review->rating; $i++)
                                    <span class="fa fa-star starChecked"></span>
                                    @endfor
                                </div>
                               
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

