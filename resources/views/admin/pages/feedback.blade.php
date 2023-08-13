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
        <div data-simplebar="init" style="max-height: 339px;"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: -16.6667px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: auto; overflow: hidden scroll;"><div class="simplebar-content" style="padding: 0px;">
            <div class="table-responsive">
       <table border="1" class="table">

            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Feedback</th>
            </tr>
            @php
                $i=1;
            @endphp
            @foreach($_feedbacks as $feedback)
            <tr>
                <td>{{$i++}}</td>
                <td>{{$feedback->name}}</td>
                <td>{{$feedback->email}}</td>
                <td>{{$feedback->subject}}</td> 
                <td>{{$feedback->message}}</td>

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
