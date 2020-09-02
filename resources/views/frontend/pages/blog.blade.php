@php
		//helper functions
		//why i am making a helper class?
		//cause i am super lazy -__-'

		use Illuminate\Support\Str;
		// function for short any kind of text
		function short($data, $num){
			return Str::of($data)->words($num, '. . .');
		}
		// funciton for date format
		function FormatDate($data){
			$date = date('j', strtotime($data));
			return $date;
		}

		function FormatMonth($data){
			$date = date('M', strtotime($data));
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
				{{-- preloader end--}}
				<div class="card-wrap">

					<!--
						Blog
					-->
					<div class="content blog">

						<!-- title -->
						<div class="title">Latest Posts</div>

						<!-- content -->
						<div class="row border-line-v">

							<!-- blog item -->
							@foreach ($blogs as $blog)
									<div class="col col-d-12 col-t-12 col-m-12 border-line-h">
								<div class="box-item">
									<div class="image">
										<a href="{{ route('frontend.show.blog', $blog->id) }}">
											<img src="{{ asset('storage/images/blog/'.$blog->post_image) }}" alt="" />
											<span class="info">
												<span class="ion ion-document-text"></span>
											</span>
											<span class="date"><strong>{{ FormatDate($blog->created_at) }}</strong>{{ FormatMonth($blog->created_at) }}</span>
										</a>
									</div>
									<div class="desc">
										<a href="" class="name">{{ short($blog->title, 10) }}</a>
										<div class="category">{{ $blog->blog_cat->name }}</div>
									</div>
								</div>
							</div>	
							@endforeach
							<div class="clear"></div>
						</div>
					</div>
				</div>
			</div>
@endsection