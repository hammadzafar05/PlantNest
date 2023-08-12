@extends('admin.layouts.app')

@section('admin_title','Dashboard | Products')

@section('content')
<div class="container-fluid">

    <div class="row ">
        <div class="col-lg-12">
            <div id="addproduct-accordion" class="custom-accordion">
                <div class="card">
                    {{-- <a href="#addproduct-billinginfo-collapse" class="text-dark" data-bs-toggle="collapse" aria-expanded="true" aria-controls="addproduct-billinginfo-collapse"> --}}
                        <div class="p-4">
                            <form action="{{url('admin/product/allproducts')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-5">
                                    <label class="form-label mt-1" for="category_dropdown">Main Categories</label>
                                    <select class="form-control m-0" id="category_dropdown"
                                    name="mainCat" id="orderStatusChange">
                                    <option {{ $catId == null || $catId == 'all' ? 'selected' : '' }} disabled selected>select category</option>
                                    {{-- @if (!$_mainCategory->count())
                                    @endif --}}
                                    @foreach ($_mainCategory as $cat)
                                    <option {{$cat['id'] == $catId ? 'selected' : ''}}
                                        value="{{$cat['id']}}" >
                                        {{$cat['name']}}
                                    </option>
                                    @endforeach
                                </select>
                                </div>
                                <div class="col-md-5">
                                    <label class="form-label mt-1" for="subcategory_dropdown">Sub Categories</label>
                                    <select class="form-control m-0" id="subcategory_dropdown"
                                    name="subCat" id="orderStatusChange">
                                    <option {{ $subCat == null || $subCat == 'all' ? 'selected' : '' }} disabled selected>No Sub Category Found</option>
                                    {{-- @if (!$_subCategory->count())
                                    @endif --}}
                                    @foreach ($_subCategory as $subCateg)
                                    <option {{$subCateg['id'] == $subCat ? 'selected' : ''}}
                                        value="{{$subCateg['id']}}" >
                                        {{$subCateg['name']}}
                                    </option>
                                    @endforeach
                                </select>
                                </div>
                                <div class="col-md-2" style="margin-top: 33px;">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                                    </div>
                                </form>
                                </div>    
                        </div>
                    {{-- </a> --}}
    
                </div>
    
    
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
                            <a href="{{url('admin/product/productsDetail/'.$product['id'])}}">
                                <div class="product-box">
                                    <div class="product-img pt-4 px-4">    
                                        <img src="{{ asset('assets/backend/images/product/' . $product['image_url']) }}" alt="" class="img-fluid mx-auto d-block product_img" >
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
                            </a>
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
@section('script')
    <script>
      $(function() {
                    $(document).ready(function() {
                        $('#category_dropdown').on('change', function() {
                            var idCategory = this.value;
                             $("#subcategory_dropdown").html('');
                            $.ajax({
                                url: "{{ url('admin/api/productsByCategory') }}",
                                type: "POST",
                                data: {
                                    category_id: idCategory,
                                    _token: '{{ csrf_token() }}'
                                },
                                dataType: 'json',
                                success: function(result) {
                                    $('#subcategory_dropdown').html(
                                        '<option selected disabled>Select Sub Category</option>'
                                    );
                                    $.each(result.subcategories, function(key, value) {
                                        $("#subcategory_dropdown").append(
                                            '<option value="' + value
                                            .id + '">' + value.name +
                                            '</option>');
                                    });
                                }
                            })
                        });
                    });
                });
    </script>
@endsection
