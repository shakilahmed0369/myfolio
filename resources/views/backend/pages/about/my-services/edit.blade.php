@extends('backend.layouts.master')

@section('content')
    
<div class="br-mainpanel">
  <div class="pd-30">
    <h4 class="tx-gray-800 mg-b-5">Update SERVICES</h4>
    <p class="mg-b-0">Do big things with Bracket, the responsive bootstrap 4 admin template.</p>
  </div><!-- d-flex -->

  <div class="br-pagebody mg-t-5 pd-x-30">
    <div class="br-section-wrapper row justify-content-center">

      
      <div class="col-md-12">
        <!--Message alart--->
        @include('backend.layouts.messages')
        <!--Message alart End--->
      <form action="{{ route('admin.services.update', $editService->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label class=" text-primary" for="icon_class">FrontAwesome Icon Class</label>
          <input value="{{ $editService->icon }}" name="icon" type="text" class="form-control" id="icon_class">
        </div>

        <div class="form-group">
          <label class=" text-primary" for="name">Title</label>
          <input value="{{ $editService->title }}" name="title" type="text" class="form-control" id="name">
        </div>


        <div class="form-group">
          <label class=" text-primary" for="link">Description</label>
          <textarea name="description" id="ckeditor" cols="30" rows="10">{{ $editService->description }}</textarea>
        </div>

        
        <div class="form-group">
          <input type="submit" class="btn btn-primary" id="addlink" value="Add Service">
        </div>
  
      </form>
    </div>

      
  </div><!-- br-pagebody -->
</div><!-- br-mainpanel -->

@endsection