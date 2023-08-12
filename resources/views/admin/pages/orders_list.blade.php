@extends('admin.layouts.app')

@section('admin_title', 'Dashboard | Order')

@section('content')
    <div class="container-fluid">

        <div class="row">


            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <ul class="nav nav-tabs nav-tabs-custom mt-3 mb-2 ecommerce-sortby-list">
                                <h4>Orders List</h4>
                            </ul>
                            @if (!$_orders->isEmpty())
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
                                                    <th>Order Id</th>
                                                    <th>Date</th>
                                                    <th>Billing Name</th>
                                                    <th>Billing Address</th>
                                                    <th>Total</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                                    </thead>
                                                    <tbody data-test="table-body">
                                            @foreach ($_orders as $order)
                                                <tr>
                                                    <td>{{ $order->id }}</td>
                                                    <td>{{ \Carbon\Carbon::parse($order->created_at)->format('d-m-Y') }}
                                                    </td>
                                                    <td><span class="badge bg-soft-danger font-size-12">{{ $order->user->name }}</span></td>

                                                    @if (App\Models\userDetail::where('user_id', $order->user->id)->first())
                                                        <td>{{ App\Models\userDetail::where('user_id', $order->user->id)->first()->shipping_billing_address_1 }},{{ App\Models\userDetail::where('user_id', $order->user->id)->first()->shipping_billing_address_2 }}
                                                        </td>
                                                    @else
                                                        <td>Not Provided</td>
                                                    @endif

                                                    <td><strong>PKR</strong> {{ $order->total_amount }}</td>
                                                    <td>
                                                        {{ $order->status }}
                                                    </td>
                                                    <td>
                                                        <select class="form-control m-0"
                                                            onchange="changeOrderStatus({{ $order->id }},this.value)"
                                                            name="orderStatus" id="orderStatusChange">
                                                            <option value="pending" disabled selected>Select Status</option>
                                                            <option {{ $order->status == 'pending' ? 'selected' : '' }}
                                                                value="pending" >
                                                                Pending
                                                            </option>
                                                            <option {{ $order->status == 'confirmed' ? 'selected' : '' }}
                                                                value="confirmed" >
                                                                Confirmed
                                                            </option>
                                                            <option {{ $order->status == 'shipped' ? 'selected' : '' }}
                                                                value="shipped">
                                                                Shipped
                                                            </option>
                                                            <option {{ $order->status == 'delivered' ? 'selected' : '' }}
                                                                value="delivered" >
                                                                Delivered
                                                            </option>
                                                            <option {{ $order->status == 'cancel' ? 'selected' : '' }}
                                                                value="cancel" >
                                                                cancel
                                                            </option>
                                                        </select>

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
        function changeOrderStatus(id, status) {
            window.location.href = `${_url}/admin/orders/orderStatus/${id}/${status}`;
        }

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
