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
      <form action="{{ route('admin.settings.update', $settings->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="title">Title</label>
          <input value="{{ $settings->title }}" name="title" type="text" class="form-control" id="title">
        </div>

        <div class="form-group">
          <label for="keyword">Keyword</label>
          <input value="{{ $settings->keyword }}" name="keyword" type="text" class="form-control" id="keyword">
        </div>

        

        <div class="form-group">
          <select name="theme" class="form-control select2" data-placeholder="Choose Browser">
            <option value="1"  @if ($settings->theme == 1) selected="true" @endif >Default</option>
            <option value="2"  @if ($settings->theme == 2) selected="true" @endif >Material Dark</option>
            <option value="3"  @if ($settings->theme == 3) selected="true" @endif >Material Orange</option>
          </select>
        </div>

        <div class="form-group">
          <label for="description">Description</label>
          <textarea type="text" name="description" id="description" class="form-control">{{ $settings->description }}</textarea>
        </div>

        <div class="form-group">
          <input type="submit" class="btn btn-primary" id="addlink" value="Add Link">
        </div>
  
      </form>
    </div>

      
  </div><!-- br-pagebody -->
</div><!-- br-mainpanel -->

@endsection