@extends('backend.layouts.master')

@section('content')
    
<div class="br-mainpanel">
  <div class="pd-30">
    <h4 class="tx-gray-800 mg-b-5">Update Contact</h4>
    <p class="mg-b-0">Do big things with Bracket, the responsive bootstrap 4 admin template.</p>
  </div><!-- d-flex -->

  <div class="br-pagebody mg-t-5 pd-x-30">
    <div class="br-section-wrapper row justify-content-center">

      
      <div class="col-md-12">
        <!--Message alart--->
        @include('backend.layouts.messages')
        <!--Message alart End--->
      <form action="{{ route('admin.contact.update', $edit->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="icon_class">Address</label>
          <input value="{{ $edit->address }}" name="address" type="text" class="form-control" id="icon_class">
        </div>

        <div class="form-group">
          <label for="name">Email</label>
          <input value="{{ $edit->email }}" name="email" type="text" class="form-control" id="name">
        </div>

        <div class="form-group">
          <label for="link">Phone</label>
          <input value="{{ $edit->phone }}" name="phone" type="text" class="form-control" id="link">
        </div>

        <div class="form-group">
          <input type="submit" class="btn btn-primary" id="addlink" value="Update Contact">
        </div>
  
      </form>
    </div>

      
  </div><!-- br-pagebody -->
</div><!-- br-mainpanel -->

@endsection