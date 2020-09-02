@extends('backend.layouts.master')

@section('content')
    
<div class="br-mainpanel">
  <div class="pd-30">
    <h4 class="tx-gray-800 mg-b-5">Profile</h4>
    <p class="mg-b-0">Do big things with Bracket, the responsive bootstrap 4 admin template.</p>
  </div><!-- d-flex -->

  <div class="br-pagebody mg-t-5 pd-x-30">
    <div class="br-section-wrapper row justify-content-center">
      
      <div class="col-md-6">
        @include('backend.layouts.messages')
      <form action="{{ route('admin.profile-settings.update', $user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="form-group">
          <label for="exampleInputEmail1">Cover Image</label>
          <input name="cover_image" type="file" class="form-control" id="exampleInputEmail1">
        </div>

        <div class="form-group">
          <label for="cover_image">Avater Image</label>
          <input name="image" type="file" class="form-control" id="cover_image">
        </div>

        <div class="form-group">
          <label for="name">Full Name</label>
          <input name="name" type="text" class="form-control" id="name" value="{{ $user->name }}">
        </div>

        <div class="form-group">
          <label for="title">Title</label>
          <input name="title" type="text" class="form-control" id="title" value="{{ $user->title }}">
        </div>
        
        <hr>

        <div class="form-group">
          <label for="cv_link">CV Link</label>
          <input name="cv_link" type="text" class="form-control" id="cv_link" value="{{ $user->cv_link }}">
        </div>

        <div class="form-group">
          <input type="submit" class="btn btn-primary" id="" value="Update">
        </div>
  
      </form>
    </div>

      <div class="col-md-6">

        <div class="form-layout form-layout-7">
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              Cover Image:
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <img class=" img-fluid" src="{{ asset('storage/images/cover/'.$user->cover_image) }}" alt="">
            </div><!-- col-8 -->
          </div><!-- row -->
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
             Avater:
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <img src="{{ asset('storage/images/profile/'.$user->image) }}" alt="" class="img-fluid">
            </div><!-- col-8 -->
          </div><!-- row -->

          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
             Full Name
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input disabled class="form-control text-primary" type="text" name="firstname" placeholder="Enter your email address" value="{{ $user->name }}">
            </div><!-- col-8 -->
          </div><!-- row -->

          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
             Title
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input disabled class="form-control text-primary" type="text" name="firstname" placeholder="Enter your email address" value="{{ $user->title }}">
            </div><!-- col-8 -->
          </div><!-- row -->

          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
             CV Link
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input disabled class="form-control text-primary" type="text" name="firstname" placeholder="Enter your email address" value="{{ $user->cv_link }}">
            </div><!-- col-8 -->
          </div><!-- row -->

        </div>

      </div>
      
  </div><!-- br-pagebody -->
</div><!-- br-mainpanel -->

@endsection