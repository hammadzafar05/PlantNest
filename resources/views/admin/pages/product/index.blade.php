@extends('admin.layouts.app')

@section('admin_title','Dashboard | Products')

@section('content')
<div class="container-fluid">

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Products</h4>

        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
   <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <div>
                    @if (!($allproducts)->isEmpty())
                    <div class="row">
                        @foreach($allproducts as $product)
                        <div class="col-xl-4 col-sm-2">
                            
                            <div class="product-box">
                                <div class="product-img pt-4 px-4">
                                    {{-- <div >
                                    @if( $product->trending == 1)
                                        <a href="{{route('product.trending',$product->id)}}"  class="product-ribbon badge bg-danger text-white">Not Trending</a>
                                     @else
                                      <a href="{{route('product.trending',$product->id)}}"  class="product-ribbon badge bg-warning text-white">Trending</a>
                                        @endif
                                    </div> --}}
                                    @foreach(array_reverse($product['images']->toArray(),true) as $img)
                                    @if($img['product_id']==$product->id)
                                             @php
                                                $imgs=$img['image_url']
                                            @endphp
                                    @endif
                                    @endforeach
                                        
                                        <img src="{{ asset('assets/backend/images/product/' . $imgs) }}" alt="" class="img-fluid mx-auto d-block product_img" >



                                </div>

                                <div class="text-center product-content p-4">

                                    <h5 class="mb-1"><a href="#" class="text-dark">{{$product['name']}}</a></h5>
                                    <p class="text-muted font-size-13">{{Str::limit($product['description'],70)}}</p>

                                    <h5 class="mt-3 mb-0"><span class="text-muted me-2">${{$product['price']}}<del></del></span> </h5>

                                </div>
                                <div class="buttons m-3 text-center" >
                                     <button class="btn btn-success text-white"><a href="{{url('admin/product/editProducts',$product['id'])}}" class="text-white" >Edit</a></button>
                                     <button class="btn btn-danger text-white"><a href="{{url('admin/product/deleteProducts',$product['id'])}}"  class="text-white" >Delete</a></button>
                                     @if($product['status']==1)
                                        <button class="btn btn-dark text-white"><a href="{{url('admin/product/status',$product['id'])}}" class="text-white" >Deactivate</a></button>
                                     @else
                                        <button class="btn btn-info text-white"><a href="{{url('admin/product/status',$product->id)}}" class="text-white" >Activate</a></button>
                                    @endif

                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                    @else
                    <div class="row justify-content-center text-center">
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <i class="uil uil-exclamation-triangle me-2"></i>
                            No Products Found!
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            
                            </button>
                        </div>
                    </div>
                    @endif
                    <div class="row">
                        <ul class="pagination mt-5 d-flex justify-content-center">
                                {{ $allproducts->links('pagination::bootstrap-5')}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- end row -->

</div> <!-- container-fluid -->

@endsection
