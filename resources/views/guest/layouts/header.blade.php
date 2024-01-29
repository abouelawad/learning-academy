<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Etrain</title>
	<link rel="icon" href="img/favicon.png">
@include('guest.layouts.styles')

	@yield('styles')

</head>

<body>
	<!--::header part start::-->
	<header class="main_menu @if(Route::CurrentRouteName()=='guest.homepage') home_menu @else single_page_menu @endif">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-12">
					<nav class="navbar navbar-expand-lg navbar-light">
						<a class="navbar-brand" href="{{ route('guest.homepage') }}"> <img src="{{ asset('guest') }}/img/logo.png" alt="logo"> </a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
							aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>

						<div class="collapse navbar-collapse main-menu-item justify-content-end" id="navbarSupportedContent">
							<ul class="navbar-nav align-items-center">
								<li class="nav-item active">
									<a class="nav-link" href="{{ route('guest.homepage') }}">Home</a>
								</li>


								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown" role="button" data-toggle="dropdown"
										aria-haspopup="true" aria-expanded="false">
										categories
									</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdown">
										@foreach ($categories as $category)
											<a class="dropdown-item" href="{{ route('guestCategories.index',$category->id) }}">{{ $category->name }}</a>
										@endforeach
										
									</div>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="contact.html">Contact</a>

							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<!-- Header part end-->