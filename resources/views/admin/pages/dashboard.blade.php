@extends('admin.layouts.app')

@section('admin_title','Dashboard')
@section('content')

                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0">Dashboard</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            {{-- <li class="breadcrumb-item"><a href="javascript: void(0);">Thrift Fashion</a></li> --}}
                                            <li class="breadcrumb-item active">Dashboard</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body bg-primary  text-center">
                                    @php
                                        $users=\App\Models\User::count() ?? 0;
                                    @endphp
                                        <div >
                                            <h4 class="mb-1 mt-1 text-white"><span data-plugin="counterup">
                                                {{$users}}
                                            </span></h4>
                                            <p class="text-white mb-0">Total Users</p>
                                        </div>

                                    </div>
                                </div>
                            </div> <!-- end col-->

                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body text-center">
                                        @php
                                        $orders=\App\Models\Order::count() ?? 0;
                                        @endphp
                                        <div>
                                            <h4 class="mb-1 mt-1"><span data-plugin="counterup"> 
                                                {{$orders}}
                                            </span></h4>
                                            <p class="text-muted mb-0">Orders</p>
                                        </div>

                                    </div>
                                </div>
                            </div> <!-- end col-->

                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body text-white bg-primary text-center">
                                        @php
                                        $products=\App\Models\Product::where('status',1)->count() ?? 0;
                                        @endphp
                                        <div>
                                      
                                            <h4 class="mb-1 mt-1 text-white"><span data-plugin="counterup">
                                            {{$products}}    
                                            </span></h4>
                                            <p class="text-white mb-0">Products</p>
                                        </div>

                                    </div>
                                </div>
                            </div> <!-- end col-->

                            <div class="col-md-6 col-xl-3">

                                <div class="card">
                                    <div class="card-body text-center">
                                        @php
                                        $products=\App\Models\Order::where('status','delivered')->sum('total_amount') ?? 0;
                                        @endphp
                                        <div>
                                            <h4 class="mb-1 mt-1 text-center"> + PKR <span data-plugin="counterup">  </span></h4>
                                            <p class="text-muted mb-0">Total Revenue</p>
                                        </div>

                                    </div>
                                </div>
                            </div> <!-- end col-->
                        </div> <!-- end row-->



                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="float-end">

                                        </div>
                                        <h4 class="card-title mb-4">Latest Users</h4>

                                        <div data-simplebar="init" style="max-height: 339px;"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: -16.6667px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: auto; overflow: hidden scroll;"><div class="simplebar-content" style="padding: 0px;">
                                            <div class="table-responsive">
                                                <table class="table table-borderless table-centered table-nowrap">
                                                    <tbody>
                                                        @foreach($_users as $user)
                                                        <tr>
                                                            <td style="width: 20px;"><img src="{{asset('assets/backend/images/users/avatar-4.png')}}" class="avatar-xs rounded-circle " alt="..."></td>
                                                            <td>
                                                                <h6 class="font-size-15 mb-1 fw-normal">{{$user->name}}</h6>
                                                                <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i> {{$user->email}}</p>
                                                            </td>

                                                            <td><span class="badge bg-soft-danger font-size-12">
                                                                @if($user->role == 'xxus')
                                                                    User
                                                                @elseif($user->role == 'xxsa')
                                                                    Admin

                                                                @endif

                                                        </span></td>
                                                            <td class="text-muted fw-semibold text-end"><i class="icon-xs icon me-2 text-success" data-feather="trending-up"></i>{{$user->contact_number}}</td>
                                                        </tr>
                                                       @endforeach
                                                    </tbody>
                                                </table>
                                            </div> <!-- enbd table-responsive-->
                                        </div></div></div></div><div class="simplebar-placeholder" style="width: auto; height: 503px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="height: 228px; transform: translate3d(0px, 0px, 0px); display: block;"></div></div></div> <!-- data-sidebar-->
                                    </div><!-- end card-body-->
                                </div> <!-- end card-->
                            </div><!-- end col -->




                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Latest Orders</h4>
                                        <div class="table-responsive">
                                            <table class="table table-centered table-nowrap mb-0">
                                                <thead class="table-light">
                                                    <tr>
                                                        {{-- <th style="width: 20px;">
                                                            <div class="form-check font-size-16">
                                                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                                                <label class="form-check-label" for="customCheck1">&nbsp;</label>
                                                            </div>
                                                        </th> --}}
                                                        <th>Order ID</th>
                                                        <th>Customer Name</th>
                                                        <th>Date</th>
                                                        <th>Total</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($_orders as $order)
                                                    <tr>
                                                        <td><a href="javascript: void(0);" class="text-body fw-bold">{{$order->id}}</a> </td>
                                                        <td>{{$order->user->name}}</td>
                                                        <td>
                                                        {{\Carbon\Carbon::parse($order->order_date)->format('Y-m-d')}}
                                                        </td>
                                                        <td>
                                                       $ {{$order->total_amount}}
                                                        </td>

                                                    </tr>
                                                    @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- end table-responsive -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                    </div> <!-- container-fluid -->
                </div>
@endsection
