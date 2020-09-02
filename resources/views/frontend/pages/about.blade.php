@extends('frontend.layouts.master')
@section('content')

<!-- 
				Card - About
			-->
<div class="card-inner animated active" id="about-card">
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
						About 
					-->
        <div class="content about">

            <!-- title -->
            <div class="title">About Me</div>

            <!-- content -->
            <div style="padding: 30px 0px" class="col col-d-6 col-t-6 col-m-12 ">
                <div class="text-box">
                    <p>
                        {!! $about->about !!}
                    </p>
                </div>
            </div>
            <div class="col col-d-6 col-t-12 col-m-12">
                <div class="info-list">
                    <ul>
                        <li><strong>Age . . . . .</strong>{{ $about->age }}</li>
                        <li><strong>Residence . . . . .</strong>{{ $about->residence }}</li>
                        <li><strong>Freelance . . . . .</strong>{{ $about->freelance }}</li>
                        <li><strong>Address . .</strong>{{ $about->address }}</li>
                    </ul>
                </div>
            </div>
            <div class="clear"></div>

        </div>

        <!--
						Services
					-->
        <div class="content services">

            <!-- title -->
            <div class="title">My Services</div>

            <!-- content -->
            <div class="row service-items border-line-v">
                @foreach($services as $service)
                    <div class="col col-d-6 col-t-6 col-m-12 border-line-h">
                        <div class="service-item">
                            <div class="icon"><span class="{{ $service->icon }}"></span></div>
                            <div class="name">{{ $service->title }}</div>
                            <p>
                                {{ $service->description }}
                            </p>
                        </div>
                    </div>
                @endforeach
                <div class="clear"></div>
            </div>

        </div>

        <!--
						Fun Fact
					-->
        <div class="content fuct">

            <!-- title -->
            <div class="title">Fun Fact</div>

            <!-- content -->
            <div class="row fuct-items">
                @foreach($funFacts as $funFact)
                    <div class="col col-d-3 col-t-3 col-m-6 border-line-v">
                        <div class="fuct-item">
                            <div class="icon"><span class="{{ $funFact->icon_class }}"></span></div>
                            <div class="name">{{ $funFact->fun_fact }}</div>
                        </div>
                    </div>
                @endforeach
                <!-- fuct item -->

                <div class="clear"></div>
            </div>

        </div>

        <!--
						Clients
					-->
        <div class="content clients">

            <!-- title -->
            <div class="title">Clients</div>

            <!-- content -->
            <div class="row client-items">
                @foreach($clients as $client)
                    <!-- client item -->
                    <div class="col col-d-3 col-t-3 col-m-6 border-line-v">
                        <div class="client-item">
                            <div class="image">
                                <a href="" onclick="event.preventDefault()">
                                    <img src="{{ asset('storage/images/client_logo/'.$client->client_logo) }}"
                                        alt="" />
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="clear"></div>
            </div>

        </div>

        <!--
						Testimonials
					-->
        <div class="content testimonials">

            <!-- title -->
            <div class="title">Testimonials</div>

            <!-- content -->
            <div class="row testimonials-items">

                <!-- client item -->
                <div class="col col-d-12 col-t-12 col-m-12 border-line-v">
                    <div class="revs-carousel default-revs">
                        <div class="owl-carousel">
                            {{-- Carousel item --}}
                            @foreach($testimonials as $testimonial)
                                <div class="item">
                                    <div class="revs-item">
                                        <div class="text">
                                            {!! $testimonial->quote !!}
                                        </div>
                                        <div class="user">
                                            <div class="img"><img
                                                    src="{{ asset('storage/images/testimonial/'.$testimonial->image) }}"
                                                    alt="" /></div>
                                            <div class="info">
                                                <div class="name">{{ $testimonial->name }}</div>
                                                <div class="company">{{ $testimonial->title }}</div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>

                <div class="clear"></div>
            </div>

        </div>

    </div>
</div>


@endsection
