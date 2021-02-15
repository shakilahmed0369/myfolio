@extends('frontend.layouts.master')
@section('content')


<!--
				Card - Works
			-->
<div class="card-inner animated active" id="works-card">
    {{-- preloader --}}
    <div class="preloader">
        <div class="centrize full-width">
            <div class="vertical-center">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div>
    </div>
    {{-- preloader end --}}
    <div class="card-wrap">

        <!--
						Works
					-->
        <div class="content works">

            <!-- title -->
            <div class="title">Work</div>

            <!-- content -->
            <div class="row grid-items">
                

                @if (! json_decode($work->work_image))
                    <div class="col col-d-12 grid-item">
                        <img width="100%"
                            src="{{ asset('storage/images/works/work_image/'.$work->work_image) }}"
                            alt="">
                    </div>  
                @else  

                        @foreach (json_decode($work->work_image) as $image)
                        <div class="col col-d-12 grid-item">
                            <img width="100%"
                                src="{{ asset('storage/images/works/work_image/'.$image) }}"
                                alt="">
                        </div> 
                        @endforeach
   
                        
                      
                @endif

            </div>

            <hr style="margin-top: 20px; margin-bottom:20px">
            <div class="title">{{ $work->title }}</div>
            <div class="col col-d-12 grid-item">
                <div style="margin-top: 20px; margin-bottom:20px">
                    {!! $work->description !!}
                    <a target="_blank" class="btn" href="{{ $work->link }}">Project Link</a>
                </div>
            </div>
            <div class="clear"></div>
        </div>

    </div>
    <a href="{{ route('frontend.works') }}"
        style="position: absolute;/*! top: 0; */background: #78c259;z-index: 1111;right: 0;bottom: 0;color: #fff;padding: 2px;"><i
            class="fas fa-arrow-left"></i> Back</a>
</div>
</div>
@endsection