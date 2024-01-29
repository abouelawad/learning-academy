@extends('guest.layouts.layout')

@section('styles')
	<!--Additional styles here -->
@endsection

@section('content')
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="breadcrumb_iner text-center">
                      <div class="breadcrumb_iner_item">
                          <h2>Course Details</h2>
                          <p>Home<span>/</span>Courses<span>/</span>{{ $course->category->name }}<span>/</span>{{ $course->name }}</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- breadcrumb start-->

  <!--================ Start Course Details Area =================-->
  <section class="course_details_area section_padding">
      <div class="container">
          <div class="row">
              <div class="col-lg-8 course_details_left">
                  <div class="main_image">
                      <img class="img-fluid" src="{{ asset('uploads/courses/'.$course->image) }}" alt="">
                  </div>
                  <div class="content_wrapper">
                      <h4 class="title_top">Objectives</h4>
                      <div class="content">
                         {!! $course->description !!}
                      </div>

                      <h4 class="title">Eligibility</h4>
                      <div class="content">
                          {{$course->brief}}.
                      </div>

                      <h4 class="title">Course Outline</h4>
                      <div class="content">
                          <ul class="course_list">
                              <li class="justify-content-between align-items-center d-flex">
                                  <p>Introduction Lesson</p>
                                  <a class="btn_2 text-uppercase" href="#">View Details</a>
                              </li>
                              <li class="justify-content-between align-items-center d-flex">
                                  <p>Basics of HTML</p>
                                  <a class="btn_2 text-uppercase" href="#">View Details</a>
                              </li>
                              <li class="justify-content-between align-items-center d-flex">
                                  <p>Getting Know about HTML</p>
                                  <a class="btn_2 text-uppercase" href="#">View Details</a>
                              </li>
                              <li class="justify-content-between align-items-center d-flex">
                                  <p>Tags and Attributes</p>
                                  <a class="btn_2 text-uppercase" href="#">View Details</a>
                              </li>
                              <li class="justify-content-between align-items-center d-flex">
                                  <p>Basics of CSS</p>
                                  <a class="btn_2 text-uppercase" href="#">View Details</a>
                              </li>
                              <li class="justify-content-between align-items-center d-flex">
                                  <p>Getting Familiar with CSS</p>
                                  <a class="btn_2 text-uppercase" href="#">View Details</a>
                              </li>
                              <li class="justify-content-between align-items-center d-flex">
                                  <p>Introduction to Bootstrap</p>
                                  <a class="btn_2 text-uppercase" href="#">View Details</a>
                              </li>
                              <li class="justify-content-between align-items-center d-flex">
                                  <p>Responsive Design</p>
                                  <a class="btn_2 text-uppercase" href="#">View Details</a>
                              </li>
                              <li class="justify-content-between align-items-center d-flex">
                                  <p>Canvas in HTML 5</p>
                                  <a class="btn_2 text-uppercase" href="#">View Details</a>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>


              <div class="col-lg-4 right-contents">
                  <div class="sidebar_top">
                      <ul>
                          <li>
                              <a class="justify-content-between d-flex" href="#">
                                  <p>Trainer’s Name</p>
                                  <span class="color">{{ $course->trainer->name }}</span>
                              </a>
                          </li>
                          <li>
                              <a class="justify-content-between d-flex" href="#">
                                  <p>Course Fee </p>
                                  <span>${{ $course->price }}</span>
                              </a>
                          </li>



                      </ul>
                      {{-- <a href="#" class="btn_1 d-block">Enroll the course</a> --}}
                  </div>


              </div>
          </div>
      </div>
  </section>
  <!--================ End Course Details Area =================-->

@endsection