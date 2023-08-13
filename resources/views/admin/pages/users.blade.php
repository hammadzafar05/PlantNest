@extends('admin.layouts.app')
@section('admin_title', 'Dashboard | Users')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                        <ul class="nav nav-tabs nav-tabs-custom mt-3 mb-2 ecommerce-sortby-list">
                            <h4>Users List</h4>
                        </ul>
                        <div class="row">
                        @if (!empty($users))

                                <div class="col-xl-12 col-sm-6">
                                    @php
                                        $i = 1;
                                    @endphp
                                    <div data-test="datatable" class="dataTables_wrapper dt-bootstrap4">
                                        <div class="row">
                                            <div data-test="datatable-table" class="col-sm-12">
                                                    <table  id="dt-table"
                                                        class="bg-white table table-bordered table-hover table-striped w-100">
                                                        <thead data-test="datatable-head">
                                                            <tr>
                                                                <th class="sorting">S no</th>
                                                                <th class="sorting">Name</th>
                                                                <th class="sorting">Email</th>
                                                                <th class="sorting">Contact</th>
                                                                <th class="sorting">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody data-test="table-body">
                                                            @foreach ($users as $user)
                                                            <tr>
                                                                <td>{{$i++}}</td>
                                                                <td>{{$user['name']}}</td>
                                                                <td>{{$user['email']}}</td>
                                                                @if ($user['contact_number'])
                                                                <td>{{$user['contact_number']}}</td>
                                                                @else
                                                                <td>Not Given</td>
                                                                @endif
                                                             <td>
                                                                <a onclick="deleteData('/admin/deleteUser/'+{{$user['id']}})"
                                                                class="btn btn-danger">Delete</a>
                                                                {{-- <a href="{{url('admin/deleteUser/'.$user['id'])}}"
                                                                class="btn btn-danger">Delete</a> --}}
                                                                <button type="button" class="btn btn-info" onclick="openModal({{json_encode($user)}})">Detail</button>    
                                                            </td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            @else
                                <div class="row justify-content-center text-center">
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <i class="uil uil-exclamation-triangle me-2"></i>
                                        No Users Found!
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close">

                                        </button>
                                    </div>
                                </div>
                                @endif
                        </div>
            </div>
        </div>
    </div>
    </div>


    <div class="modal fade bd-example-modal-sm" id="myModal" tabindex="-1" role="dialog"
        aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="mySmallModalLabel">User Detail</h5>
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
@endsection

@section('script')
    <script>
        function openModal(userDetail) {
            
            var address = userDetail.details[0]['shipping_city'] + ', ' + userDetail.details[0]['shipping_state'] + ', ' +
                userDetail.details[0]['shipping_country'];

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
