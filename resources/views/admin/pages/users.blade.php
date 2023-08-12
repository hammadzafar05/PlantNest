@extends('admin.layouts.app')
@section('admin_title', 'Dashboard | Users')

@section('content')

    <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div>
                    <ul class="nav nav-tabs nav-tabs-custom mt-3 mb-2 ecommerce-sortby-list">
                        <h4>Users List</h4>
                    </ul>
                    @if (!empty($users))
                    <div class="row">

                        <div class="col-xl-12 col-sm-6">
                            @php
                                $i=1;
                            @endphp
                              <div data-simplebar="init" style="max-height: 339px;"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: -16.6667px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: auto; overflow: hidden scroll;"><div class="simplebar-content" style="padding: 0px;">
                                <div class="table-responsive">
                            <table border="1" class="table">

                                <tr>
                                    <th>S No.</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    {{-- <th>Phone</th> --}}
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td><span class="badge bg-soft-danger font-size-12">{{ $user['name'] }}</span></td>
                                        <td>{{ $user['email'] }}</td>
                                        {{-- <td>{{ $user->phone }}</td> --}}
                                        @if ($user['role'] == 'xxus')
                                            <td>User</td>
                                        @elseif($user['role'] == 'xxsa')
                                            <td>Admin</td>
                                        @endif
                                        <td>
                                            <a href="{{url('admin/deleteUser/'.$user['id'])}}"
                                                class="btn btn-danger">Delete</a>
                                                <button type="button" class="btn btn-info" onclick="openModal({{json_encode($user)}})">Detail</button>
                                        </td>
                                    </tr>
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
                            No Users Found!
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
    
    <div class="modal fade bd-example-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header"><h5 class="modal-title mt-0" id="mySmallModalLabel">User Detail</h5>
                </div>
          <div class="row m-2">
            <div class="row my-2">
                <div class="col-md-4">
                   <p>Name:</p> 
                </div>
                <div class="col-md-8">
                    <input id="name" type="text" readonly class="form-control">
                </div>
            </div>
            <div class="row my-2">
                <div class="col-md-4">
                   <p>Email:</p> 
                </div>
                <div class="col-md-8">
                    <input id="email" type="text" readonly class="form-control">
                </div>
            </div>
            <div class="row my-2">
                <div class="col-md-4">
                   <p>Contact:</p> 
                </div>
                <div class="col-md-8">
                    <input id="contact" type="text" readonly class="form-control">
                </div>
            </div>
            <div class="row my-2">
                <div class="col-md-4">
                   <p>City:</p> 
                </div>
                <div class="col-md-8">
                    <input id="city" type="text" readonly class="form-control">
                </div>
            </div>
            <div class="row my-2">
                <div class="col-md-4">
                   <p>State:</p> 
                </div>
                <div class="col-md-8">
                    <input id="state" type="text" readonly class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                   <p>Country:</p> 
                </div>
                <div class="col-md-8">
                    <input id="country" type="text" readonly class="form-control">
                </div>
            </div>
            <div class="row my-2">
                <div class="col-md-4">
                   <p>Address:</p> 
                </div>
                <div class="col-md-8">
                    <input id="address" type="text" readonly class="form-control">
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@section('script')
<script>
    function openModal(userDetail)
    {
        var address = userDetail.details[0]['shipping_city']+', '+userDetail.details[0]['shipping_state']+', '+userDetail.details[0]['shipping_country'];

        $('#myModal').modal('show')
        $('#name').val(`${userDetail.name}`)
        $('#email').val(`${userDetail.email}`)
        $('#contact').val(`${userDetail.details[0]['shipping_phone_number']}`)
        $('#city').val(`${userDetail.details[0]['shipping_city']}`)
        $('#state').val(`${userDetail.details[0]['shipping_state']}`)
        $('#country').val(`${userDetail.details[0]['shipping_country']}`)
        $('#address').val(address)

    }
</script>
@endsection
@endsection
