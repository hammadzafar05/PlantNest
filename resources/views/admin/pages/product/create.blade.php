@extends('admin.layouts.app')

@section('admin_title', 'Dashboard | Add Product')

@section('content')

    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0">Add Product</h4>


                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-12">
                <div id="addproduct-accordion" class="custom-accordion">
                    <div class="card">
                        <a href="#addproduct-billinginfo-collapse" class="text-dark" data-bs-toggle="collapse"
                            aria-expanded="true" aria-controls="addproduct-billinginfo-collapse">
                            <div class="p-4">

                                <div class="d-flex align-items-center">
                                    <div class="flex-1 overflow-hidden">
                                        <h5 class="font-size-16 mb-1">Add Product</h5>
                                        <p class="text-muted text-truncate mb-0">Fill all information below</p>
                                    </div>
                                    <i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
                                </div>

                            </div>
                        </a>

                        <div id="addproduct-billinginfo-collapse" class="collapse show"
                            data-bs-parent="#addproduct-accordion">
                            <div class="p-4 border-top">
                                <form method="post" action="{{ url('admin/product/storeProducts') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="productname">Product Name</label>
                                                <input id="productname" name="name" type="text"
                                                    value="{{ old('name') }}"
                                                    class="form-control @error('name') is-invalid @enderror" required>
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="productname">Product Species</label>
                                                <input id="productname" name="species" type="text"
                                                    value="{{ old('species') }}"
                                                    class="form-control @error('species') is-invalid @enderror" required>
                                                @error('species')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="image">Product Purpose</label>
                                                <input id="purpose" name="purpose" type="text" class="form-control">
                                            </div>
                                            @error('purpose')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="discount">Product Discount</label>
                                                <input id="discount" name="discount" type="number" min="0"
                                                    max="100" value="{{ old('discount') }}"
                                                    class="form-control @error('discount') is-invalid @enderror" required>
                                            </div>
                                            @error('discount')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-lg-6">

                                            <div class="mb-3">
                                                <label class="form-label" for="manufacturerbrand">Product Stock</label>
                                                <input id="manufacturerbrand" name="stock" type="number"
                                                    value="{{ old('stock') }}"class="form-control  @error('stock') is-invalid @enderror"
                                                    required>
                                                @error('stock')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="price">Price</label>
                                                <input id="price" name="price" type="number"
                                                    value="{{ old('price') }}"
                                                    class="form-control  @error('size') is-invalid @enderror" required>
                                                @error('price')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label class="form-label" for="image">Product Image</label>
                                                <!-- <input id="image" name="image[]" type="file" class="form-control  @error('image') is-invalid @enderror" multiple required> -->
                                                <input id="image" name="image[]" type="file" class="form-control"
                                                    @error('image') is-invalid @enderror multiple required>
                                            </div>
                                            @error('image')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="mb-3 text-center">
                                                <div class="images-preview-div"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label" class="control-label">Category</label>
                                                <select id="category-dropdown"
                                                    class="form-select   @error('category') is-invalid @enderror"
                                                    value="{{ old('category_id') }}" aria-label="Default select example"
                                                    name="category_id" required>
                                                    @error('category')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    <option value="" selected disabled>Select Category</option>
                                                    @foreach ($_allCategories as $category)
                                                        <option {{ old('category_id') == $category->id ? 'selected' : '' }}
                                                            value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label" class="control-label">Sub Category</label>
                                                <select
                                                    id="subcategory-dropdown"class="form-select  @error('subcategory') is-invalid @enderror"
                                                    aria-label="Default select example" name="subcategory_id"
                                                    value="{{ old('subcategory_id') }}" required>
                                                    @error('subcategory')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    <option value="" selected disabled>Select SubCategory</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            {{-- <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label" class="control-label">Discount</label>
                                                    <select class="form-select  @error('discount') is-invalid @enderror"
                                                        aria-label="Default select example"
                                                        value="{{ old('discount_id') }}" name="discount_id" required>
                                                        @error('category')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                        <option selected disabled>Select Discount</option>
                                                        <option selected value="0">No Discount</option>
                                                        @foreach ($discount as $discount)
                                                            <option
                                                                {{ old('discount_id') == $discount->id ? 'selected' : '' }}
                                                                value="{{ $discount->id }}">{{ $discount->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div> --}}
                                            <div class="mb-0">
                                                <label class="form-label" for="productdesc">Product Description</label>
                                                <textarea class="form-control  @error('description') is-invalid @enderror" name="description" id="productdesc"
                                                    rows="4" required>{{ old('name') }}</textarea>
                                                @error('description')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row my-3">
                                        <div class="col text-end">
                                            {{-- <a href="{{ route('admin.form_cancel') }}" class="btn btn-danger"> <i
                                                    class="uil uil-times me-1"></i> Cancel </a> --}}
                                            <input type="submit" class="btn btn-primary"> </button>
                                        </div> <!-- end col -->
                                    </div> <!-- end row-->

                                </form>
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
                        $('#category-dropdown').on('change', function() {
                            var idCategory = this.value;
                            $("#subcategory-dropdown").html('');
                            $.ajax({
                                url: "{{ url('admin/api/fetch-subcategory') }}",
                                type: "POST",
                                data: {
                                    category_id: idCategory,
                                    _token: '{{ csrf_token() }}'
                                },
                                dataType: 'json',
                                success: function(result) {
                                    $('#subcategory-dropdown').html(
                                        '<option selected disabled>Select Sub Category</option>'
                                    );
                                    $.each(result.subcategories, function(key, value) {
                                        $("#subcategory-dropdown").append(
                                            '<option value="' + value
                                            .id + '">' + value.name +
                                            '</option>');
                                        console.log(result.subcategories)
                                    });
                                }
                            });
                        });
                    });

                    // Multiple images preview with JavaScript
                    var previewImages = function(input, imgPreviewPlaceholder) {
                        if (input.files) {
                            var filesAmount = input.files.length;
                            for (i = 0; i < filesAmount; i++) {
                                var reader = new FileReader();
                                reader.onload = function(event) {
                                    $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(
                                        imgPreviewPlaceholder);
                                }
                                reader.readAsDataURL(input.files[i]);
                            }
                        }
                    };
                    $('#image').on('change', function() {
                        previewImages(this, 'div.images-preview-div');
                    });
                });
            </script>
        @endsection
