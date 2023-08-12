@extends('admin.layouts.app')
@section('admin_title', 'Dashboard | Product Detail')
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
                                            @foreach ($productArray->images as $image)
                                            {{dd($image->image_url[0])}}
                                            <li class="nav-item">
                                                <a class="active nav-link">
                                                <img src="{{asset('assets/backend/images/product/'.$image->image_url)}}"
                                                        alt=""
                                                        class="img-fluid mx-auto d-block tab-img rounded">
                                                    </a>
                                                </li>
                                                @endforeach
                                        </ul>
                                    </div>
                                    <div class="col-9">
                                        <div class="tab-content position-relative">
                                            <div class="tab-pane active">
                                                <div class="product-img"><img
                                                        src="{{asset('assets/backend/images/product/'.$productArray->image_url)}}"
                                                        alt="" id="expandedImg1"
                                                        class="img-fluid mx-auto d-block"></div>
                                            </div>
                                            <div class="tab-pane">
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
                                            </div>
                                        </div>
                                        <div class="text-center mt-2 row">
                                            <div class="d-grid col-sm-6"><button type="button"
                                                    class="btn-block waves-effect waves-light mt-2 me-1 btn btn-primary"><i
                                                        class="uil uil-shopping-cart-alt me-2"></i> Add to cart</button>
                                            </div>
                                            <div class="d-grid col-sm-6"><button type="button"
                                                    class="btn-block waves-effect  mt-2 waves-light btn btn-light"><i
                                                        class="uil uil-shopping-basket me-2"></i>Buy now</button></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7">
                            <div class="mt-4 mt-xl-3 ps-xl-4">
                                <h5 class="font-size-14"><a class="text-muted" href="/ecommerce-product-detail">Nike</a>
                                </h5>
                                <h4 class="font-size-20 mb-3">Nike N012 Running Shoes (Gray)</h4>
                                <div class="text-muted"><span class="badge bg-success font-size-14 me-1"><i
                                            class="mdi mdi-star"></i> 4.2</span> 234 Reviews</div>
                                <h5 class="mt-4 pt-2"><del class="text-muted me-2">$280</del>$260<span
                                        class="text-danger font-size-14 ms-2">- 20 % Off</span></h5>
                                <p class="mt-4 text-muted">If several languages coalesce, the grammar of the resulting
                                    language is more simple and regular</p>
                                <div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mt-3">
                                                <h5 class="font-size-14">Specification :</h5>
                                                <ul class="list-unstyled product-desc-list text-muted">
                                                    <li><i class="mdi mdi-circle-medium me-1 align-middle"></i> High
                                                        Quality</li>
                                                    <li><i class="mdi mdi-circle-medium me-1 align-middle"></i> Leather
                                                    </li>
                                                    <li><i class="mdi mdi-circle-medium me-1 align-middle"></i> All
                                                        Sizes available</li>
                                                    <li><i class="mdi mdi-circle-medium me-1 align-middle"></i> 4
                                                        Different Color</li>
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
                                    <div class="product-color">
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
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <h5 class="font-size-14 mb-3"><i
                                            class="uil uil-location-pin-alt font-size-20 text-primary align-middle me-2"></i>
                                        Delivery location</h5>
                                    <div class="d-inline-flex">
                                        <div class="input-group mb-3"><input placeholder="Enter Delivery pincode"
                                                type="text" class="form-control form-control"><button
                                                type="button" class="btn btn-light">Check</button></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-8 col-lg-7">
                                        <div class="product-desc-color mt-3">
                                            <h5 class="font-size-14">Colors :</h5>
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><a class="active"
                                                        data-bs-toggle="tooltip" id="Gray"
                                                        href="/ecommerce-product-detail">
                                                        <div class="product-color-item"><img
                                                                src="/static/media/img-1.7d8658df1a509f5ebbd2.png"
                                                                alt="" class="avatar-md"></div>
                                                    </a></li>
                                                <li class="list-inline-item"><a class=""
                                                        data-bs-toggle="tooltip" id="Dark"
                                                        href="/ecommerce-product-detail">
                                                        <div class="product-color-item"><img
                                                                src="/static/media/img-2.1c8fac61181331c07712.png"
                                                                alt="" class="avatar-md"></div>
                                                    </a></li>
                                                <li class="list-inline-item"><a class=""
                                                        data-bs-toggle="tooltip" id="Purple"
                                                        href="/ecommerce-product-detail">
                                                        <div class="product-color-item"><img
                                                                src="/static/media/img-3.13e02027e81c737eeccf.png"
                                                                alt="" class="avatar-md"></div>
                                                    </a></li>
                                                <li class="list-inline-item"><a class="text-primary border-0 p-1"
                                                        href="/ecommerce-product-detail">2 + Colors</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-lg-5">
                                        <div class="mt-3">
                                            <h5 class="font-size-14 mb-3">Select Sizes :</h5>
                                            <div class="d-inline-flex"><select class="form-select w-sm form-select">
                                                    <option value="1">3</option>
                                                    <option value="2">4</option>
                                                    <option value="3">5</option>
                                                    <option value="4">6</option>
                                                    <option value="5">7</option>
                                                    <option value="6">8</option>
                                                    <option value="7">9</option>
                                                    <option value="8">10</option>
                                                </select></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <h5 class="font-size-14 mb-3">Product description: </h5>
                        <div class="product-desc">
                            <ul class="nav-tabs-custom nav nav-tabs">
                                <li class="nav-item"><a class="nav-link" style="cursor: pointer;">Description</a>
                                </li>
                                <li class="nav-item"><a class="active nav-link"
                                        style="cursor: pointer;">Specifications</a></li>
                            </ul>
                            <div class="tab-content border border-top-0 p-4">
                                <div class="tab-pane">
                                    <div class="row">
                                        <div class="col-sm-3 col-md-2">
                                            <div><img src="/static/media/img-6.8d6e5eecfa1688bc0a28.png"
                                                    alt="" class="img-fluid mx-auto d-block"></div>
                                        </div>
                                        <div class="col-sm-9 col-md-10">
                                            <div class="text-muted p-2">
                                                <p>If several languages coalesce, the grammar of the resulting language
                                                    is more simple and regular</p>
                                                <p>Everyone realizes why a new common language would be desirable, one
                                                    could refuse to pay expensive translators.</p>
                                                <p>It will be as simple as occidental in fact.</p>
                                                <div>
                                                    <ul class="list-unstyled product-desc-list text-muted">
                                                        <li><i class="mdi mdi-circle-medium me-1 align-middle"></i> Sed
                                                            ut perspiciatis omnis iste</li>
                                                        <li><i class="mdi mdi-circle-medium me-1 align-middle"></i>
                                                            Neque porro quisquam est</li>
                                                        <li><i class="mdi mdi-circle-medium me-1 align-middle"></i>
                                                            Quis autem vel eum iure</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane active">
                                    <table class="table-nowrap mb-0 table">
                                        <tbody>
                                            <tr>
                                                <th scope="row" style="width: 20%;">Category</th>
                                                <td>Shoes</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 20%;">Brand</th>
                                                <td>Nike</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 20%;">Color</th>
                                                <td>Gray</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 20%;">Quality</th>
                                                <td>High</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 20%;">Material</th>
                                                <td>Leather</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <h5 class="font-size-14 mb-3">Reviews :</h5>
                        <div class="text-muted mb-3"><span class="badge bg-success font-size-14 me-1"><i
                                    class="mdi mdi-star"></i> 4.2</span> 234 Reviews</div>
                        <div class="border p-4 rounded">
                            <div class="border-bottom pb-3">
                                <p class="float-sm-end text-muted font-size-13">12 July, 2020</p>
                                <div class="badge bg-success mb-2"><i class="mdi mdi-star"></i> 4.1</div>
                                <p class="text-muted mb-4">It will be as simple as in fact, it will be Occidental. It
                                    will seem like simplified</p>
                                <div class="d-flex align-items-start">
                                    <div class="flex-grow-1">
                                        <h5 class="font-size-15 mb-0">Samuel</h5>
                                    </div>
                                    <ul class="list-inline product-review-link mb-0">
                                        <li class="list-inline-item"><a href="/ecommerce-product-detail"><i
                                                    class="uil uil-thumbs-up"></i></a></li>
                                        <li class="list-inline-item"><a href="/ecommerce-product-detail"><i
                                                    class="uil uil-comment-alt-message"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="border-bottom py-3">
                                <p class="float-sm-end text-muted font-size-13">06 July, 2020</p>
                                <div class="badge bg-success mb-2"><i class="mdi mdi-star"></i> 4.0</div>
                                <p class="text-muted mb-4">Sed ut perspiciatis unde omnis iste natus error sit</p>
                                <div class="d-flex align-items-start">
                                    <div class="flex-grow-1">
                                        <h5 class="font-size-15 mb-0">Joseph</h5>
                                    </div>
                                    <ul class="list-inline product-review-link mb-0">
                                        <li class="list-inline-item"><a href="/ecommerce-product-detail"><i
                                                    class="uil uil-thumbs-up"></i></a></li>
                                        <li class="list-inline-item"><a href="/ecommerce-product-detail"><i
                                                    class="uil uil-comment-alt-message"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="border-bottom py-3">
                                <p class="float-sm-end text-muted font-size-13">26 June, 2020</p>
                                <div class="badge bg-success mb-2"><i class="mdi mdi-star"></i> 4.2</div>
                                <p class="text-muted mb-4">Neque porro quisquam est, qui dolorem ipsum quia dolor sit
                                    amet</p>
                                <div class="d-flex align-items-start">
                                    <div class="flex-grow-1">
                                        <h5 class="font-size-15 mb-0">Paul</h5>
                                    </div>
                                    <ul class="list-inline product-review-link mb-0">
                                        <li class="list-inline-item"><a href="/ecommerce-product-detail"><i
                                                    class="uil uil-thumbs-up"></i></a></li>
                                        <li class="list-inline-item"><a href="/ecommerce-product-detail"><i
                                                    class="uil uil-comment-alt-message"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')

@endsection
