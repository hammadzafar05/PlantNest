@extends('layouts.guest')
<title>{{ config('app.name', 'PlantNest|Account') }}</title>
@section('content')
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <h3>My Account</h3>
                        <ul>
                            <li><a href="{{route('user.home')}}">home</a></li>
                            <li>My account</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!-- my account start  -->
    <section class="main_content_area">
        <div class="container">
            <div class="account_dashboard">

                <div class="row">
                    <!-- Session Status -->
                <x-auth-session-status class="text-success mb-4" :status="session('status')" />
                <x-auth-session-status class="text-success mb-4" :status="session('success')" />

                @if ($errors->updatePassword->any())
                    <ul>
                        @foreach ($errors->updatePassword->all() as $error)
                            <li class="text-danger">{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif

                    <div class="col-sm-12 col-md-3 col-lg-3">
                        <!-- Nav tabs -->
                        <div class="dashboard_tab_button">
                            <ul role="tablist" class="nav flex-column dashboard-list">
                                <li><a href="#dashboard" data-bs-toggle="tab" class="nav-link active">Dashboard</a></li>
                                <li> <a href="#orders" data-bs-toggle="tab" class="nav-link">Orders</a></li>
                                <li><a href="#address" data-bs-toggle="tab" class="nav-link">Addresses</a></li>
                                <li><a href="#account-details" data-bs-toggle="tab" class="nav-link">Account details</a>
                                <li><a href="#update-password" data-bs-toggle="tab" class="nav-link">Update Password</a>
                                </li>
                                <li><a href="{{ route('logout') }}" class="nav-link">logout</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-9 col-lg-9">
                        <!-- Tab panes -->
                        <div class="tab-content dashboard_content">
                            <div class="tab-pane fade show active" id="dashboard">
                                <h3>Dashboard </h3>
                                <p>From your account dashboard. you can easily check &amp; view your <a href="#">recent
                                        orders</a>, manage your <a href="#">shipping and billing addresses</a> and <a
                                        href="#">Edit your password and account details.</a></p>
                            </div>
                            <div class="tab-pane fade" id="orders">
                                <h3>Orders</h3>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#No</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Total</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($orders as $order)
                                            
                                            <tr>
                                                <td>#{{ $order->id }}</td>
                                                <td>{{ \Carbon\Carbon::parse($order->created_at)->format('d M Y') }}</td>
                                                <td><span class="success">{{ $order->status }}</span></td>
                                                <td>{{ $order->total_amount }}</td>
                                                @if (Str::lower($order->status) == "confirmed")
                                                <td><a href="{{ route('order.details',$order->id) }}" class="view">view</a></td>
                                                @elseif (Str::lower($order->status) == "pending")
                                                <td><a href="{{route('order.cancel',$order->id)}}" class="view">Cancel Order</a></td>
                                                @else
                                                <td>View</td>
                                                @endif
                                            </tr>
                                            
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="address">
                                <p>The following addresses will be used on the checkout page by default.</p>
                                <h4 class="billing-address">Billing address</h4>
                                <p><strong>Name:</strong>  {{ $userDetails->name }}</p>
                                <address>
                                    <span><strong>City:</strong> {{ $userDetails->details->first()?->shipping_city }}</span>,
                                    <br>
                                    <span><strong>State:</strong> {{ $userDetails->details->first()?->shipping_state }}</span>,
                                    <br>
                                    <span><strong>ZIP:</strong> {{ $userDetails->details->first()?->shipping_zip_code }}</span>,
                                    <br>
                                    <span><strong>Country:</strong> {{ $userDetails->details->first()?->shipping_country }}</span>
                                </address>
                            </div>
                            <div class="tab-pane fade" id="account-details">
                                <h3>Account details </h3>
                                <div class="login">
                                    <div class="login_form_container">
                                        <div class="account_login_form">
                                            <form action="{{ route('account.update') }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                 <br>
                                                 <div class="row">
                                                    <div class="col-md-6">
                                                        <label>First Name</label>
                                                        <input type="text" name="name" value="{{ Auth::user()->name }}">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>Email</label>
                                                        <input type="text" name="email" value="{{ Auth::user()->email }}">
                                                    </div>
                                                 </div>
                                                 <div class="row">
                                                    <div class="col-md-6">
                                                        <label>Contact Number</label>
                                                        <input type="number" name="contact_number" value="{{ Auth::user()->contact_number}}">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>City</label>
                                                        <input type="text" name="shipping_city" value="{{ $userDetails->details->first()?->shipping_city }}">
                                                    </div>
                                                 </div>
                                                 <div class="row">
                                                    <div class="col-md-6">
                                                        <label>Address 1</label>
                                                        <input type="text" name="shipping_billing_address_1" value="{{ $userDetails->details->first()?->shipping_billing_address_1 }}">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>Address 2</label>
                                                        <input type="text" name="shipping_billing_address_2" value="{{ $userDetails->details->first()?->shipping_billing_address_2 }}">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label>State</label>
                                                        <input type="text" name="shipping_state" value="{{ $userDetails->details->first()?->shipping_state }}">        
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>Country</label>
                                                        <input type="text" name="shipping_country" value="{{ $userDetails->details->first()?->shipping_country }}">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label>Zip Code</label>
                                                        <input type="text" name="shipping_zip_code" value="{{ $userDetails->details->first()?->shipping_zip_code }}">
                                                    </div>
                                                </div>
                                                <div class="save_button primary_btn default_button">
                                                    <button type="submit">Save</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="update-password">
                                <h3>Update Password</h3>
                                <div class="login">
                                    <div class="login_form_container">
                                        <div class="account_login_form">
                                            <form action="{{ route('password.update') }}" method="POST">
                                                @method('PUT')
                                                @csrf
                                                 <br>
                                                <label>Current Password <span class="text-danger">*</span> </label>
                                                <input type="password" name="current_password" required>
                                                <label>New Password <span class="text-danger">*</span></label>
                                                <input type="password" name="password" required>
                                                <label>Confirm New Password <span class="text-danger">*</span></label>
                                                <input type="password" name="password_confirmation" required>
                                                <div class="save_button primary_btn default_button">
                                                    <button type="submit">Update</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- my account end   -->
@endsection
@section('script')
<script>
    $(document).ready(function() {
        // console.log('i ran');

        // Remove active class from all li elements
        $('nav ul li a').removeClass('active');

        // Add active class to the clicked li element
        $('#shop').addClass('active');
    });
</script>
@endsection