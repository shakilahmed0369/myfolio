@extends('backend.layouts.master')

@section('content')
    
<div class="br-mainpanel">
  <div class="pd-30">
    <h4 class="tx-gray-800 mg-b-5">Dashboard</h4>
    <p class="mg-b-0">Do big things with Bracket, the responsive bootstrap 4 admin template.</p>
  </div><!-- d-flex -->

  <div class="br-pagebody mg-t-5 pd-x-30">
    <div class="br-section-wrapper row justify-content-center">

      
      <div class="col-md-12">
        <!--Message alart--->
        @include('backend.layouts.messages')
        <!--Message alart End--->
      <form action="{{ route('admin.about-me.update', $about->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
          <label class=" text-primary" for="age">Your Age</label>
          <input value="{{ $about->age }}" name="age" type="number" class="form-control" id="age">
        </div>

        <div class="form-group">
          <label class=" text-primary" for="residence">Your Residence</label>
          <input value="{{ $about->residence }}" name="residence" type="text" class="form-control" id="residence">
        </div>

        <div class="form-group">
          <label class=" text-primary" for="freelance">Freelance</label>
          <input value="{{ $about->freelance }}" name="freelance" type="text" class="form-control" id="freelance">
        </div>

        <div class="form-group">
          <label class=" text-primary" for="address">Your Address</label>
          <input value="{{ $about->address }}" name="address" type="text" class="form-control" id="link">
        </div>

        {{-- ck editor --}}
        <div class="form-group">
          <label class=" text-primary" for="about">About You!</label>
          <textarea name="about" id="ckeditor" cols="30" rows="5">{{ $about->about }}</textarea>
        </div>

        <div class="form-group">
          <input type="submit" class="btn btn-primary" id="addlink" value="Update">
        </div>

  
      </form>
    </div>

      
  </div><!-- br-pagebody -->
</div><!-- br-mainpanel -->

@endsection