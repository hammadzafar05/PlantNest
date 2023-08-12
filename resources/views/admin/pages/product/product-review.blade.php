@extends('admin.layouts.app')

@section('admin_title', 'Dashboard | Reviews')
@section('style')
    <style>
        .starChecked {
            color: orange;
        }
    </style>
@endsection
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
                                        <div data-test="datatable" class="dataTables_wrapper dt-bootstrap4">
                                            <div class="row">
                                                <div data-test="datatable-table" class="col-sm-12">
                                                    <table id="dt-table"
                                                        class="bg-white table table-bordered table-hover table-striped w-100"
                                                        border="1" class="table">
                                                        <thead data-test="datatable-head">
                                                        <tr>
                                                            <th>Id</th>
                                                            <th>Name</th>
                                                            <th>product Review</th>
                                                            <th>product Name</th>
                                                            <th>Rating</th>
                                                            <th>product Image</th>
                                                        </tr>
                                                        </thead>
                                                        @php
                                                            $i = 1;
                                                        @endphp
                                                        <tbody data-test="table-body">
                                                        @foreach ($_productReviews as $review)
                                                            <tr>
                                                                <td>{{ $i++ }}</td>
                                                                <td><span
                                                                        class="badge bg-soft-danger font-size-12">{{ $review->user->name }}</span>
                                                                </td>
                                                                <td>
                                                                    @for ($i = 1; $i <= $review->rating; $i++)
                                                                        <span class="fa fa-star starChecked"></span>
                                                                    @endfor
                                                                </td>
                                                                <td>{{ $review->review_text }}</td>
                                                                <td>{{ $review->product->name }}</td>

                                                                <td>
                                                                    <img src="{{ asset('assets/backend/images/product/' . $review['product']['image_url']) }}"
                                                                        alt="" class="img-fluid" width="70"
                                                                        height="70">

                                                                </td>

                                                            </tr>
                                                        @endforeach
                                                        </tbody>
                                                    </table>
                                                </div> <!-- enbd table-responsive-->
                                            </div>
                                        </div>
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


    </div> <!-- container-fluid -->

@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('#dt-table').dataTable({
                responsive: true,
                pagingType: 'full_numbers',
                dom: "<'row mb-3'<'col-sm-12 col-md-6 d-flex align-items-center justify-content-start'f><'col-sm-12 col-md-6 d-flex align-items-center justify-content-end'B>>" +
                    "<'row'<'col-sm-12'tr>>" +
                    "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
            });
        });
    </script>
@endsection
