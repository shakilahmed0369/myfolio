@extends('backend.layouts.master')

@section('content')
    
<div class="br-mainpanel">
  <div class="pd-30">
    <h4 class="tx-gray-800 mg-b-5">Dashboard</h4>
    <p class="mg-b-0">Do big things with Bracket, the responsive bootstrap 4 admin template.</p>
  </div><!-- d-flex -->

  <div class="br-pagebody mg-t-5 pd-x-30">
    <div class="row row-sm">

      <div class="col-sm-6 col-xl-3">
        <div class="bg-teal rounded overflow-hidden">
          <div class="pd-30 d-flex align-items-center">
            <i class="fas fa-code tx-60 lh-0 tx-white op-7"></i>
            <div class="mg-l-20">
              <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Total Projects</p>
              <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">{{ $work_count }}</p>
            </div>
          </div>
        </div>
      </div><!-- col-3 -->

      <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
        <div class="bg-danger rounded overflow-hidden">
          <div class="pd-30 d-flex align-items-center">
            <i class="far fa-newspaper tx-60 lh-0 tx-white op-7"></i>
            <div class="mg-l-20">
              <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Total Blogs</p>
              <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">{{ $blogs_count }}</p>
            </div>
          </div>
        </div>
      </div><!-- col-3 -->
  </div><!-- br-pagebody -->
</div><!-- br-mainpanel -->

@endsection