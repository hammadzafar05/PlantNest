@if(Session::has('success'))
    <div class="alert alert-success messageToast" id="successMessage" role="alert">
    {{session('success')}}
    </div>
    @endif
@if(Session::has('error'))
    <div class="alert alert-alert messageToast" id="successMessage" role="alert">
    {{session('error')}}
    </div>
    @endif

    @php
    session()->forget('message');
    @endphp

    {{-- @if ($errors->any())
        @foreach ($errors->all() as $err)
        <div class="alert alert-danger messageToast" role="alert">
            {{$err}}
        </div>
        @endforeach
    @endif  --}}
