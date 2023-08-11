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
                    @if (!$users->isEmpty())
                    <div class="row">

                        <div class="col-xl-12 col-sm-6">
                            @php
                                $i=1;
                            @endphp
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
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        {{-- <td>{{ $user->phone }}</td> --}}
                                        @if ($user->role == 'xxus')
                                            <td>User</td>
                                        @elseif($user->role == 'xxsa')
                                            <td>Admin</td>
                                        @endif
                                        <td>
                                            <a href="{{url('admin/deleteUser/'.$user->id)}}"
                                                class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
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

@section('script')
@endsection
@endsection
