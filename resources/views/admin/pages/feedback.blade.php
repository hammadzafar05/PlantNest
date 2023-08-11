@extends('admin.layouts.app')

@section('admin_title','Dashboard | Feedbacks')

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
                          <h4>Feedback List</h4>
                    </ul>
@if (!$_feedbacks->isEmpty())
<div class="row">

    <div class="col-xl-12 col-sm-6">
       <table border="1" class="table">

            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Number</th>
                <th>Feedback</th>
            </tr>
            @php
                $i=1;
            @endphp
            @foreach($_feedbacks as $feedback)
            <tr>
                <td>{{$i++}}</td>
                <td>{{$feedback->user->name}}</td>
                <td>{{$feedback->user->email}}</td>
                @if ($feedback->user->contact_number)
                <td>{{$feedback->user->contact_number}}</td>
                @else
                <td>Not Given</td>
                
                @endif
                <td>{{$feedback->feedback_text}}</td>

            </tr>
            @endforeach
       </table>
    </div>


</div>
@else
<div class="row justify-content-center text-center">
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <i class="uil uil-exclamation-triangle me-2"></i>
        No Feedbacks Found!
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
