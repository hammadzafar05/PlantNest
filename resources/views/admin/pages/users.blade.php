@extends('admin.layouts.app')

@section('title', 'Dashboard')


@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
<table id="datatable" class="table table-bordered dt-responsive table-responsive nowrap">
    <thead>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
    </tr>
    </thead>

    <tbody>
    <tr>
        <td>Tiger Nixon</td>
        <td>System Architect</td>
        <td>Edinburgh</td>
    </tr>
    <tr>
        <td>Garrett Winters</td>
        <td>Accountant</td>
        <td>Tokyo</td>
    </tr>
    </tbody>
</table>
            </div>
        </div>
    </div>

    @section('script')
    @endsection
@endsection