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
                                <div class="row">

                                    <div class="col-xl-12 col-sm-6">
                                        <table border="1" class="table">

                                            <tr>
                                                <th>Order Id</th>
                                                <th>Date</th>
                                                <th>Billing Name</th>
                                                <th>Billing Address</th>
                                                <th>Total</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            @foreach ($_orders as $order)
                                                <tr>
                                                    <td>{{ $order->id }}</td>
                                                    <td>{{ \Carbon\Carbon::parse($order->created_at)->format('d-m-Y') }}
                                                    </td>
                                                    <td>{{ $order->user->name }}</td>

                                                    @if (App\Models\userDetail::where('user_id', $order->user->id)->first())
                                                        <td>{{ App\Models\userDetail::where('user_id', $order->user->id)->first()->shipping_billing_address_1 }},{{ App\Models\userDetail::where('user_id', $order->user->id)->first()->shipping_billing_address_2 }}
                                                        </td>
                                                    @else
                                                        <td>Not Provided</td>
                                                    @endif

                                                    {{-- <td>{{ App\Models\Profile::where('users_id',$order->user->id)->first()->address1}},{{ App\Models\Profile::where('users_id',$order->user->id)->first()->address2}}</td> --}}
                                                    <td>${{ $order->total_amount }}</td>
                                                    <td>
                                                        {{ $order->status }}
                                                        {{-- @if ($order->status == 0)
                                        <span >Cancel</span>
                                        @elseif($order->status==1)
                                        <span >pending</span>
                                        @elseif($order->status==2)
                                        <span>Delivered</span>
                                        @endif --}}
                                                    </td>
                                                    <td>
                                                        <select class="form-control m-0"
                                                            onchange="changeOrderStatus({{ $order->id }},this.value)"
                                                            name="orderStatus" id="orderStatusChange">
                                                            <option value="pending" disabled selected>Select Status</option>
                                                            <option {{ $order->status == 'pending' ? 'selected' : '' }}
                                                                value="pending" class="bg-secondary text-white">
                                                                Pending
                                                            </option>
                                                            <option {{ $order->status == 'confirmed' ? 'selected' : '' }}
                                                                value="confirmed" class="bg-primary text-white">
                                                                Confirmed
                                                            </option>
                                                            <option {{ $order->status == 'shipped' ? 'selected' : '' }}
                                                                value="shipped" class="bg-info text-white">
                                                                Shipped
                                                            </option>
                                                            <option {{ $order->status == 'delivered' ? 'selected' : '' }}
                                                                value="delivered" class="bg-warning text-white">
                                                                Delivered
                                                            </option>
                                                            <option {{ $order->status == 'cancel' ? 'selected' : '' }}
                                                                value="cancel" class="bg-danger text-white">
                                                                cancel
                                                            </option>
                                                        </select>

                                                    </td>
                                            @endforeach
                                        </table>
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
            var url= '{{url("/")}}'
            window.location.href = `${url}/admin/orders/orderStatus/${id}/${status}`;
        }
    </script>
@endsection
