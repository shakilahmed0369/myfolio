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
      <form action="{{ route('admin.works.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label class=" text-primary" for="title">Projetct Image</label>
          <input name="work_image" type="file" class="form-control" id="work_image">
        </div>

        <div class="form-group">
          <label class=" text-primary" for="title">Tilte</label>
          <input name="title" type="text" class="form-control" id="name">
        </div>

        <div class="form-group">
          <label class=" text-primary" for="title">Project Link</label>
          <input name="link" type="text" class="form-control" id="name">
        </div>

        <div class="form-group">
          <label class=" text-primary" for="title">Project Category</label>
          <select name="work_cat_id" id="" class="form-control">
            <option value="">Select</option>

            @foreach ($work_cats as $work_cat)
            <option value="{{ $work_cat->id }}">{{ $work_cat->name }}</option>
            @endforeach
          </select>

        </div>

        <div class="form-group">
          <label class=" text-primary" for="title">Description</label>
          <textarea name="description" id="ckeditor" cols="30" rows="10"></textarea>
        </div>


        <div class="form-group">
          <input type="submit" class="btn btn-primary" id="addlink" value="Add Category">
        </div>
  
      </form>
    </div>

      
  </div><!-- br-pagebody -->
</div><!-- br-mainpanel -->

@endsection