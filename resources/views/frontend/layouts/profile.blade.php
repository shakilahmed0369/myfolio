@php
    use App\Http\Controllers\Frontend\FrontendController;
    $data = FrontendController::profile();
    $profile = $data['profile'];
    $links = $data['links'];
@endphp
<div class="card-started" id="home-card">

    <!--
    Profile
  -->
    <div class="profile">

        <!-- profile image -->
        <div class="slide"
            style="background-image: url({{ asset('storage/images/cover/'.$profile->cover_image) }});">
        </div>

        <!-- profile photo -->
        <div class="image">
            <img style="object-fit: cover; height:150px;" src="{{ asset('storage/images/profile/'.$profile->image) }}" alt="" />
        </div>

        <!-- profile titles -->
        <div class="title">{{ $profile->name }}</div>
        <div class="subtitle">{{ $profile->title }}</div>

        <!-- profile socials -->
        <div class="social">
            {{-- Social link Loop --}}
            @foreach($links as $link)
                <a target="_blank" href="{{ $link->link }}"><span class="{{ $link->icon_class }}"></span></a>
            @endforeach
            {{-- Social link Loop End --}}
        </div>

        <!-- profile buttons -->
        <div class="lnks">
            <a href="{{ $profile->cv_link }}" class="lnk">
                <span class="text">Download CV</span>
                <i style="margin-left: 5px" class="fas fa-arrow-down"></i>
            </a>
            <a href="{{ route('frontend.contact') }}" class="lnk discover">
                <span class="text">Contact Me</span>
                <span class="arrow"></span>
            </a>
        </div>

    </div>

</div>