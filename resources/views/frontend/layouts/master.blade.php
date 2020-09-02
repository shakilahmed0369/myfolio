@include('frontend.layouts.top')
<body>
	<div class="page new-skin">

		<!--
			Container
		-->
		<div class="container opened" data-animation-in="fadeInLeft" data-animation-out="fadeOutLeft">
			<!--
				Header
			-->
			@include('frontend.layouts.sidebar')

			<!--
				Card - Started
			-->
			{{-- profile card --}}
			@include('frontend.layouts.profile')

			{{-- main contant card --}}
			@yield('content')
		</div>
	</div>
	{{-- js scripts are here --}}
	@include('frontend/layouts/bottom')
	
</body>
</html>