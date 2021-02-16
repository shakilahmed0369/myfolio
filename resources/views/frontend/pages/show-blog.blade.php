@php

    function FormatDate($data){
    $date = date('j F, Y', strtotime($data));
    return $date;
    }

@endphp

@extends('frontend.layouts.master')
@section('content')


<!--
				Card - Blog
			-->
<div class="card-inner animated blog active" id="blog-card">
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
						Blog
					-->
        <div class="content blog-single">

            <!-- title -->
            <div class="title"><span class="first-word">Blog</span> Post</div>

            <!-- content -->
            <div class="row border-line-v">
                <div class="col col-m-12 col-t-12 col-d-12">
                    <div class="post-box">

                        <!-- blog detail -->
                        <h1>{{ $showBlog->title }}</h1>
                        <div class="blog-detail">{{ FormatDate($showBlog->created_at) }}</div>

                        <!-- blog image -->
                        <div class="blog-image">
                            <img src="{{ asset('storage/images/blog/'.$showBlog->post_image) }}"
                                alt="">
                        </div>

                        <!-- blog content -->
                        <div class="blog-content">
                            {!! $showBlog->description !!}
                        </div>

                    </div>
                </div>
            </div>


        </div>
    </div>
    <a href="{{ route('frontend.blog') }}"
        style="position: absolute;/*! top: 0; */background: #00c1d3;z-index: 1111;right: 0;bottom: 0;color: #fff;padding: 2px;"><i
            class="fas fa-arrow-left"></i> Back</a>
</div>
@endsection