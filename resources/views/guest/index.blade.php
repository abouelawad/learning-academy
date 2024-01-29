@extends('guest.layouts.layout')

@section('styles')
	<!--Additional styles here -->
@endsection

@section('guest.content')

	<!-- banner part start-->
	<section class="banner_part">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 col-xl-6">
					<div class="banner_text">
						<div class="banner_text_iner">
							<h5>Every child yearns to learn</h5>
							<h1>Making Your Childs
								World Better</h1>
							<p>{{(json_decode($banner->content))->description}}</p>
							<a href="#" class="btn_1">View Course </a>
							<a href="#" class="btn_2">Get Started </a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- banner part start-->

	<!-- feature_part start-->
	<section class="feature_part">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-xl-3 align-self-center">
					<div class="single_feature_text ">
						<h2>Awesome <br> Feature</h2>
						<p>Set have great you male grass yielding an yielding first their you're
							have called the abundantly fruit were man </p>
						<a href="#" class="btn_1">Read More</a>
					</div>
				</div>
				<div class="col-sm-6 col-xl-3">
					<div class="single_feature">
						<div class="single_feature_part">
							<span class="single_feature_icon"><i class="ti-layers"></i></span>
							<h4>Better Future</h4>
							<p>Set have great you male grasses yielding yielding first their to
								called deep abundantly Set have great you male</p>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-xl-3">
					<div class="single_feature">
						<div class="single_feature_part">
							<span class="single_feature_icon"><i class="ti-new-window"></i></span>
							<h4>Qualified Trainers</h4>
							<p>Set have great you male grasses yielding yielding first their to called
								deep abundantly Set have great you male</p>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-xl-3">
					<div class="single_feature">
						<div class="single_feature_part single_feature_part_2">
							<span class="single_service_icon style_icon"><i class="ti-light-bulb"></i></span>
							<h4>Job Oppurtunity</h4>
							<p>Set have great you male grasses yielding yielding first their to called deep
								abundantly Set have great you male</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- upcoming_event part start-->



	<!-- member_counter counter start -->
	<section class="member_counter">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-sm-6">
					<div class="single_member_counter">
						<span class="counter">{{ $trainersCount }}</span>
						<h4>All Teachers</h4>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6">
					<div class="single_member_counter">
						<span class="counter">{{ $studentsCount }}</span>
						<h4> All Students</h4>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6">
					<div class="single_member_counter">
						<span class="counter">{{ $coursesCount }}</span>
						<h4>Courses</h4>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- member_counter counter end -->

	<!--::review_part start::-->
	<section class="special_cource padding_top">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-5">
					<div class="section_tittle text-center">
						<p>popular courses</p>
						<h2>Special Courses</h2>
					</div>
				</div>
			</div>
			<div class="row">
				@foreach ($recentCourses as $course)	
					<div class="col-sm-6 col-lg-4">
						<div class="single_special_cource">
							<img src="{{ asset('uploads/trainer/'.$course->trainer->image) }}" width="380" height="250" class="special_img" alt="">
							<div class="special_cource_text">
								<a href="course-details.html" class="btn_4">{{ $course->category->name }}</a>
								<h4>${{ $course->price }}</h4>
								<a href="course-details.html">
									<h3>{{ $course->name }}</h3>
								</a>
								<p>{{ $course->brief }}</p>
								<div class="author_info">
									<div class="author_img">
										<img src="{{ asset('uploads/courses/'.$course->image) }}"  alt="">
										<div class="author_info_text">
											<p>Conduct by:</p>
											<h5><a href="#">{{ $course->trainer->name }}</a></h5>
										</div>
									</div>

								</div>
							</div>

						</div>
					</div>
				@endforeach

			</div>
		</div>
	</section>
	<!--::blog_part end::-->


	<!--::review_part start::-->
	<section class="testimonial_part">
		<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="col-xl-5">
					<div class="section_tittle text-center">
						<p>tesimonials</p>
						<h2>Happy Students</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="textimonial_iner owl-carousel">
						@foreach($endorsers as $endorser)
							<div class="testimonial_slider">
								<div class="row">
									<div class="col-lg-8 col-xl-4 col-sm-8 align-self-center">
										<div class="testimonial_slider_text">
											<p>{{ $endorser->description }}</p>
											<h4>{{ $endorser->name }}</h4>
											<h5> {{ $endorser->major }}</h5>
										</div>
									</div>
									<div class="col-lg-4 col-xl-2 col-sm-4">
										<div class="testimonial_slider_img">
											<img src="{{ asset('uploads/endorse/'.$endorser->image) }}" alt="">
										</div>
									</div>


								</div>
							</div>
						@endforeach
					</div>
				</div>

			</div>
		</div>
	</section>
	<!--::blog_part end::-->

	<!--::blog_part start::-->
	<section class="blog_part section_padding">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-5">
					<div class="section_tittle text-center">
						<p>Our Blog</p>
						<h2>Students Blog</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-lg-4 col-xl-4">
					<div class="single-home-blog">
						<div class="card">
							<img src="{{ asset('guest') }}/img/blog/blog_1.png" class="card-img-top" alt="blog">
							<div class="card-body">
								<a href="#" class="btn_4">Design</a>
								<a href="blog.html">
									<h5 class="card-title">Dry beginning sea over tree</h5>
								</a>
								<p>Which whose darkness saying were life unto fish wherein all fish of together called</p>
								<ul>
									<li> <span class="ti-comments"></span>2 Comments</li>
									<li> <span class="ti-heart"></span>2k Like</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4 col-xl-4">
					<div class="single-home-blog">
						<div class="card">
							<img src="{{ asset('guest') }}/img/blog/blog_2.png" class="card-img-top" alt="blog">
							<div class="card-body">
								<a href="#" class="btn_4">Developing</a>
								<a href="blog.html">
									<h5 class="card-title">All beginning air two likeness</h5>
								</a>
								<p>Which whose darkness saying were life unto fish wherein all fish of together called</p>
								<ul>
									<li> <span class="ti-comments"></span>2 Comments</li>
									<li> <span class="ti-heart"></span>2k Like</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4 col-xl-4">
					<div class="single-home-blog">
						<div class="card">
							<img src="{{ asset('guest') }}/img/blog/blog_3.png" class="card-img-top" alt="blog">
							<div class="card-body">
								<a href="#" class="btn_4">Design</a>
								<a href="blog.html">
									<h5 class="card-title">Form day seasons sea hand</h5>
								</a>
								<p>Which whose darkness saying were life unto fish wherein all fish of together called</p>
								<ul>
									<li> <span class="ti-comments"></span>2 Comments</li>
									<li> <span class="ti-heart"></span>2k Like</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--::blog_part end::-->
@endsection
@section('scripts')
	<!--Additional scripts here -->
@endsection
