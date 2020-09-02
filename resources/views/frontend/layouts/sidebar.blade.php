<header class="header">

    <!-- menu -->
    <div class="top-menu">
        <ul>
            <li class="@if (Request::segment(1) == null)
          active @endif">
                <a href="{{ route('frontend.about') }}">
                    <i class="far fa-address-card nav-icon"></i>
                    <span class="link">About</span>
                </a>
            </li>
            <li class="@if (Request::segment(1) == "resume") active @endif">
                <a href="{{ route('frontend.resume') }}">
                    <i class="fas fa-file-code nav-icon"></i>
                    <span class="link">Skill</span>
                </a>
            </li>
            <li class="@if (Request::segment(1) == "works") active @endif">
                <a href="{{ route('frontend.works') }}">
                    <i class="fas fa-business-time nav-icon"></i>
                    <span class="link">Works</span>
                </a>
            </li>
            <li class="@if (Request::segment(1) == "blog") active @endif">
                <a href="{{ route('frontend.blog') }}">
                    <i class="far fa-newspaper nav-icon"></i>
                    <span class="link">Blog</span>
                </a>
            </li>
            <li class="@if (Request::segment(1) == "contact") active @endif">
                <a href="{{ route('frontend.contact') }}">
                    <i class="fas fa-id-card-alt nav-icon"></i>
                    <span class="link">Contact</span>
                </a>
            </li>
        </ul>
    </div>

</header>
