@extends('frontend.layouts.master')
@section('content')

<!--
				Card - Resume
			-->
<div class="card-inner animated active" id="resume-card">
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
						Skills
					-->
        <div class="content skills">

            <!-- title -->
            <div class="title">My Skills</div>

            <!-- content -->
            <div class="row">

                <!-- skill item -->
                <div class="col col-m-12 border-line-v">
                    <div class="skills-list list">
                        <div class="skill-title border-line-h">
                            <div class="icon"><i class="far fa-lightbulb"></i></i></div>
                            <div class="name">Knowledge</div>
                        </div>
                        <ul>
                            @foreach($skills as $skill)
                                <li>
                                    <div class=""><i style="color: #78cc6d;margin-right: 5px;"
                                            class="fas fa-star-of-life"></i> {{ $skill->title }}</div>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                </div>

                <div class="clear"></div>
            </div>


            <div class="title">Tools And Technology</div>
            <!-- content -->
            <div class="row fuct-items">
                @foreach($technologies as $technology)
                    <div class="col col-d-3 col-t-3 col-m-6 border-line-v">
                        <div class="fuct-item">
                            <div class="icon"><span class="{{ $technology->icon_class }}"></span></div>
                            <div class="name">{{ $technology->title }}</div>
                        </div>
                    </div>
                @endforeach
                <!-- fuct item -->

                <div class="clear"></div>
            </div>

        </div>

    </div>
</div>
@endsection
