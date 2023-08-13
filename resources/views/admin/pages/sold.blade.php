@extends('admin.layouts.app')

@section('admin_title', 'Dashboard | Sold')

@section('content')
    <div class="container-fluid">

        <div class="row">


            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <ul class="nav nav-tabs nav-tabs-custom mt-3 mb-2 ecommerce-sortby-list">
                                <h4>Sold Products List</h4>
                            </ul>
                            @if (!$products->isEmpty())
                            <div class="col-xl-12 col-sm-6">
                                @php
                                    $i = 1;
                                @endphp
                                <div data-test="datatable" class="dataTables_wrapper dt-bootstrap4">
                                    <div class="row">
                                        <div data-test="datatable-table" class="col-sm-12">
                                                <table  id="dt-table" class="bg-white table table-bordered table-hover table-striped w-100">
                                            <thead data-test="datatable-head">
                                                <tr>
                                                    <th># No</th>
                                                    <th>Name</th>
                                                    <th>Category</th>
                                                    <th>Sold Quantity</th>
                                                </tr>
                                                    </thead>
                                                    <tbody data-test="table-body">
                                            @foreach ($products as $product)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $product->product_name }}</td>
                                                    <td>{{ $product->category_name }}</td>
                                                    <td>
                                                        {{ $product->total_quantity_sold}}
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div> <!-- enbd table-responsive-->
                                    </div>
                                </div>
                            </div>
                            @else
                                <div class="row justify-content-center text-center">
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <i class="uil uil-exclamation-triangle me-2"></i>
                                        No Orders Found!
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
@section('script')
    <script>
        $(document).ready(function() {
            $('#dt-table').dataTable(
                {
           responsive: true,
           pagingType: 'full_numbers',
           dom:
               "<'row mb-3'<'col-sm-12 col-md-6 d-flex align-items-center justify-content-start'f><'col-sm-12 col-md-6 d-flex align-items-center justify-content-end'B>>" +
               "<'row'<'col-sm-12'tr>>" +
               "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
       }
            );
        });
    </script>
@endsection
