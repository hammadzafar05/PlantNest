@extends('admin.layouts.app')
@section('admin_title', 'Dashboard | Categories')

@section('content')
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
                                    <h5 class="font-size-16 mb-1">UPDATE SUB CATEGORY</h5>
                                    <p class="text-muted text-truncate mb-0">Update accesory sub category below</p>
                                </div>
                                <i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
                            </div>
    
                        </div>
                    </a>
    
                    <div id="addproduct-billinginfo-collapse" class="collapse show" data-bs-parent="#addproduct-accordion">
                        <div class="p-4 border-top">
                            <form method="post" action="{{url('admin/categories/UpdateAccessoryCategory')}}" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="row">
                                <div class="col-md-12">
                                <div class="mb-3">
                                    <input name="cId" type="hidden" value="{{$category->id}}">
                                    <label class="form-label" for="productname">Category Name</label>
                                    <input id="productname" name="name" type="text" value="{{$category->name}}" class="form-control @error('name') is-invalid @enderror" required>
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
@endsection