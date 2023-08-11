@extends('admin.layouts.app')

@section('admin_title', 'Dashboard | Order')
@section('content')
<div class="container-fluid">

<!-- start page title -->

<!-- end page title -->

<div class="row">


    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div>
                    <ul class="nav nav-tabs nav-tabs-custom mt-3 mb-2 ecommerce-sortby-list">
                          <h4>Contact Messages</h4>
                    </ul>
@if (!$_contacts->isEmpty())
<div class="row">

    <div class="col-xl-12 col-sm-6">
       <table border="1" class="table">

            <tr>
                <th>S No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Messages</th>

            </tr>
            @php
                $i=1;
            @endphp

            @foreach($_contacts as $contact)
            <tr>
                <td>{{$i++}}</td>
                <td>{{$contact->name}}</td>
                <td>{{$contact->email}}</td>
                <td>{{$contact->subject}}</td>
                <td>{{$contact->message}}</td>
                </td>

            @endforeach
       </table>
    </div>


</div>
@else
<div class="row justify-content-center text-center">
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <i class="uil uil-exclamation-triangle me-2"></i>
        No Contacts Found!
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
