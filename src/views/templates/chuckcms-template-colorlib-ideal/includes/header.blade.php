<header class="site-navbar site-navbar-target" role="banner">
    <div class="container">
		<div class="row align-items-center position-relative">

			<div class="col-lg-4">
				<nav class="site-navigation text-right ml-auto " role="navigation">
					{!! ChuckMenu::renderFrontEnd('chuckcms-template-colorlib-ideal', 'menu-header', 'ideal-header-left') !!}

				</nav>
			</div>
			<div class="col-lg-4 text-center">
				<div class="site-logo">
					<a href="{{ URL::to('/') }}"><img src="{{ URL::to('/') }}{{ ChuckSite::getSetting('logo.href') }}" alt="Logo" width="150"></a>
				</div>

				<div class="ml-auto toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-white"><span class="icon-menu h3 text-white"></span></a></div>
			</div>
			<div class="col-lg-4">
				<nav class="site-navigation text-left mr-auto " role="navigation">
					{!! ChuckMenu::renderFrontEnd('chuckcms-template-colorlib-ideal', 'menu-header', 'ideal-header-right') !!}
				</nav>
			</div>

		</div>
    </div>
</header>