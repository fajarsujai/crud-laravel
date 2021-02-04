@extends('layouts.app')

@section('content')
@include('layouts.headers.empty-cards')
<div style="margin-top:100px">
    <form action="">
        @csrf
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" placeholder="Regular" class="form-control" disabled />
            </div>
          </div>
        </div>
      </form>
</div>

@endsection

@push('js')

@endpush
