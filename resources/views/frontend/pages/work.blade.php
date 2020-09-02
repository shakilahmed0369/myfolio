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
            <div class="title">Recent Works</div>

            <!-- filters -->
            <div class="filter-menu filter-button-group">
                <div class="f_btn active">
                    <label><input type="radio" name="fl_radio" value="grid-item" />All</label>
                </div>
                @foreach($work_cats as $work_cat)
                    <div class="f_btn">
                        <label><input type="radio" name="fl_radio"
                                value="{{ $work_cat->name }}" />{{ $work_cat->name }}</label>
                    </div>
                @endforeach


            </div>

            <!-- content -->
            <div class="row grid-items border-line-v">
                @foreach($works as $work)
                    <div class="col col-d-6 col-t-6 col-m-12 grid-item {{ $work->work_cat->name }} border-line-h">
                        <div class="box-item">
                            <div class="image">
                                <a href="{{ route('frontend.show.work', $work->id) }}"
                                    class="">
                                    <img src="{{ asset('storage/images/works/thumbnail/'.$work->work_image) }}"
                                        alt="" />
                                    <span class="info">
                                        <span class="ion ion-image"></span>
                                    </span>
                                </a>
                            </div>
                            <div class="desc">
                                <a href="" class="name">{{ $work->title }}</a>
                                <div class="category">{{ $work->work_cat->name }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <!-- work item photo -->





                <div class="clear"></div>

            </div>
            <div style="margin-top: 20px" class="pagination">
                {{ $works->links() }}
            </div>

        </div>

    </div>
</div>
@endsection
