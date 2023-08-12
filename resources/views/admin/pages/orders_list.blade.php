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
                                        <div data-simplebar="init" style="max-height: 339px;"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: -16.6667px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: auto; overflow: hidden scroll;"><div class="simplebar-content" style="padding: 0px;">
                                            <div class="table-responsive">
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
                                                    <td><span class="badge bg-soft-danger font-size-12">{{ $order->user->name }}</span></td>

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
                                            @endforeach
                                        </table>
                                    </div> <!-- enbd table-responsive-->
                                </div></div></div></div><div class="simplebar-placeholder" style="width: auto; height: 503px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="height: 228px; transform: translate3d(0px, 0px, 0px); display: block;"></div></div></div> <!-- data-sidebar-->
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
    </script>
@endsection
