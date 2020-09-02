@extends('backend.layouts.master')

@section('content')
    
<div class="br-mainpanel">
  <div class="pd-30">
    <h4 class="tx-gray-800 mg-b-5">ADD SERVICES</h4>
    <p class="mg-b-0">Do big things with Bracket, the responsive bootstrap 4 admin template.</p>
  </div><!-- d-flex -->

  <div class="br-pagebody mg-t-5 pd-x-30">
    <div class="br-section-wrapper row justify-content-center">

      
      <div class="col-md-12">
        <!--Message alart--->
        @include('backend.layouts.messages')
        <!--Message alart End--->
      <form action="{{ route('admin.testimonial.update', $edit->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label class=" text-primary" for="iamge">Image</label>
          <input name="testi_image" type="file" class="form-control" id="iamge">
          <img width="300px" class=" img-fluid" src="{{ asset('storage/images/testimonial/'.$edit->image) }}" alt="">
        </div>

        <div class="form-group">
          <label class=" text-primary" for="name">Name</label>
          <input value="{{ $edit->name }}" name="name" type="text" class="form-control" id="name">
        </div>

        <div class="form-group">
          <label class=" text-primary" for="title">Title</label>
          <input value="{{ $edit->title }}" name="title" type="text" class="form-control" id="title">
        </div>


        <div class="form-group">
          <label class=" text-primary" for="link">Quote</label>
          <textarea name="quote" id="ckeditor" cols="30" rows="10">{{ $edit->quote }}</textarea>
        </div>

        
        <div class="form-group">
          <input type="submit" class="btn btn-primary" id="addlink" value="Add Service">
        </div>
  
      </form>
    </div>

      
  </div><!-- br-pagebody -->
</div><!-- br-mainpanel -->

@endsection