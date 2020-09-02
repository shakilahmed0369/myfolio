@extends('backend.layouts.master')

@section('content')
    
<div class="br-mainpanel">
  <div class="pd-30">
    <h4 class="tx-gray-800 mg-b-5">ADD Funfact</h4>
    <p class="mg-b-0">Do big things with Bracket, the responsive bootstrap 4 admin template.</p>
  </div><!-- d-flex -->

  <div class="br-pagebody mg-t-5 pd-x-30">
    <div class="br-section-wrapper row justify-content-center">

      
      <div class="col-md-12">
        <!--Message alart--->
        @include('backend.layouts.messages')
        <!--Message alart End--->
      <form action="{{ route('admin.fun-fact.store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label class=" text-primary" for="icon_class">FrontAwesome Icon Class</label>
          <input name="icon_class" type="text" class="form-control" id="icon_class">
        </div>

        <div class="form-group">
          <label class="text-primary" for="name">Your Fun Fact</label>
          <input name="fun_fact" type="text" class="form-control" id="name">
        </div>

        <div class="form-group">
          <input type="submit" class="btn btn-primary" id="addlink" value="Add Funfact">
        </div>
  
      </form>
    </div>

      
  </div><!-- br-pagebody -->
</div><!-- br-mainpanel --> 

@endsection