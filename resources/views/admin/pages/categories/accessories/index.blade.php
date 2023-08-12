@extends('admin.layouts.app')
@section('admin_title', 'Dashboard | Categories')

@section('content')

{{-- // create category  --}}

<div class="container-fluid">
    <!-- start row -->
    <div class="row ">
        <div class="col-lg-12">
            <div id="addproduct-accordion" class="custom-accordion">
                <div class="card">
                    <a href="#addproduct-billinginfo-collapse" class="text-dark" data-bs-toggle="collapse" aria-expanded="true" aria-controls="addproduct-billinginfo-collapse">
                        <div class="p-4">
    
                            <div class="d-flex align-items-center">
                                {{-- <div class="me-3">
                                    <div class="avatar-xs">
                                        <div class="avatar-title rounded-circle bg-soft-primary text-primary">
                                            01
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="flex-1 overflow-hidden">
                                    <h5 class="font-size-16 mb-1">ADD SUB CATEGORY</h5>
                                    <p class="text-muted text-truncate mb-0">Add Accessories category below</p>
                                </div>
                                <i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
                            </div>
    
                        </div>
                    </a>
    
                    <div id="addproduct-billinginfo-collapse" class="collapse show" data-bs-parent="#addproduct-accordion">
                        <div class="p-4 border-top">
                            <form method="post" action="{{url('admin/categories/AddAccesoriesCategory')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label" for="productname">Category Name</label>
                                    <input id="productname" name="name" type="text" value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror" required>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
    
                                    </div>
    
                                </div>
                                <div class="row mb-4">
                                    <div class="col text-end">
                                        {{-- <a href="{{url('')}}" class="btn btn-danger"> <i class="uil uil-times me-1"></i> Cancel </a> --}}
                                        <input type="submit" class="btn btn-success">  </button>
                                    </div> <!-- end col -->
                                </div> <!-- end row-->
                                
                                </form>
                        </div>
                    </div>
                </div>
    
    
            </div>
        </div>
    </div>
    <!-- end row -->
    </div> <!-- container-fluid -->

    <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div>
                    <ul class="nav nav-tabs nav-tabs-custom mt-3 mb-2 ecommerce-sortby-list">
                        <h4>Categories</h4>
                    </ul>
                    @if (!$accessoriesCategories->isEmpty())
                    <div class="row">

                        <div class="col-xl-12 col-sm-6">
                            @php
                                $i=1;
                            @endphp
                            <table border="1" class="table">

                                <tr>
                                    <th>S No.</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                                @foreach ($accessoriesCategories as $category)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>
                                            <a href="{{url('admin/categories/editAccessoryCategory/'.$category->id)}}" class="btn btn-primary">Edit</a>
                                            <a href="{{url('admin/categories/deleteAccessoryCategory/'.$category->id)}}"
                                                class="btn btn-danger">Delete</a>
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
                            No Category Found!
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

@section('script')

@endsection
@endsection
