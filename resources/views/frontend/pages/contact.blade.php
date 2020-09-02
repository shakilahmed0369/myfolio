@extends('frontend.layouts.master')
@section('content')


<!--
				Card - Contacts
			-->
<div class="card-inner animated contacts active" id="contacts-card">
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
						Conacts Info
					-->
        <div class="content contacts">

            <!-- title -->
            <div class="title">Get in Touch</div>

            <!-- content -->
            <div class="row">
                <div class="col col-d-12 col-t-12 col-m-12 border-line-v">

                    <div class="map" id="map"><iframe style="width: 100%; height:240px"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8684.820941297945!2d90.35523551232662!3d23.76458316926663!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c09f9ba3d447%3A0x1babce9f1c6c95a3!2sMohammadpur%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1598561952761!5m2!1sen!2sbd"
                            width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                            aria-hidden="false" tabindex="0"></iframe></div>

                    <div class="info-list">
                        <ul>
                            <li style="width: 100%"><strong>Address . . . . .</strong>{{ $contact->address }}</li>
                            <br>
                            <li style="width: 100%"><strong>Email . . . . .</strong>{{ $contact->email }}</li>
                            <br>
                            <li style="width: 100%"><strong>Phone . . . . .</strong>{{ $contact->phone }}</li>
                        </ul>
                    </div>
                </div>
                <div class="clear"></div>
            </div>

        </div>

        <!--
						Contact Form
					-->
        <div class="content contacts">

            <!-- title -->
            <div class="title">Contact Form</div>

            <!-- content -->
            <div class="row">
                <div class="col col-d-12 col-t-12 col-m-12 border-line-v">
                    @if(Session::get('send'))
                        <div class="alert">
                            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                            {{ Session::get('send') }}
                        </div>
                    @endif
                    <div class="contact_form">
                        <form action="{{ route('frontend.send.mail') }}" id="" method="post">
                            @csrf
                            <div class="row">
                                <div class="col col-d-6 col-t-6 col-m-12">
                                    <div class="group-val">
                                        <input type="text" name="name" placeholder="Full Name" />
                                    </div>
                                </div>
                                <div class="col col-d-6 col-t-6 col-m-12">
                                    <div class="group-val">
                                        <input type="text" name="email" placeholder="Your Email Address" />
                                    </div>
                                </div>
                                <div class="col col-d-12 col-t-12 col-m-12">
                                    <div class="group-val">
                                        <textarea name="message" placeholder="Your Message"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="align-left">
                                <input type="submit" value="Send">
                            </div>
                        </form>
                        <div class="alert-success">
                            <p>Thanks, your message is sent successfully.</p>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>

        </div>

    </div>
</div>
@endsection
