@extends('layouts.app')
@section('content')
<section class="container-fluid d-flex justify-content-center">
	<!--<div class="side-nav-control d-mobile-none bg-white card p-5">
	<ul class="list-group">
		<a class="text-left fs-5 list-group-item m-2 nobg">Home</a>
		<a class="text-left fs-5 list-group-item m-2 nobg">Courses</a>
		<a class="text-left fs-5 list-group-item m-2 nobg">Chats</a>
	</ul>
	<img alt="ad-pic" src="../img/coldigifylogo.png" style="width: 150px; height: 150px; positon:fixed; margin-top: 20px; bottom: 0px;">
	</div>-->
	<div  class="card  bg-white p-5">
		<div class="container p-2">
		<h2>New Courses</h2>
		<div class="row">
			@if(!empty($new_course))
			@foreach($new_course as $newcourse)
			<div class="col-sm-4  shadow-sm">
				<div class="card p-2 dashboard-card" style="width: 400px;">
					<div class="d-flex align-items-center p-2 justify-content-center shadow-sm">
					<img loading="lazy" alt="profile-pic" src="../storage/preview/{{$newcourse->preview}}" class="course-profile-img">
				</div>
				<small class="fs-5" style="margin-left: 10px;">{{$newcourse->course_title}}</small>
				</div>
			</div>
			@endforeach
			@else
			<h5>Featured course will be here..</h5>
			@endif
		</div>
		<div class="list-group dashboard-list" style="margin-top:20px;">
			<h4>My Courses</h4>
			<span class="fs-6">Course Name</span>
			@if(!empty($user_course))
			@foreach($user_course as $getcourse)
			 <?php
        $parameter=[
            'id' => $getcourse->course_name,
            'owner' => $getcourse->instructor_name
        ];
        $parameter=Crypt::encrypt($parameter);
        ?>

			<a href="{{route('watch.show',$parameter)}}" style="font-weight:bold;" class="p-4 list-group-item">{{$getcourse->course_name}}</a>
			@endforeach
			@else
			<a href="{{route('explore')}}"><h5>Start here by purchasing a course</h5></a>
			@endif
		</div>
		</div>
	</div>
	<!--
	<div class="card d-mobile-none student-detail-short bg-white p-5">
		
		<div class="container p-2">
			<div class="card d-flex align-items-center p-2 justify-content-center shadow-sm">
				<img class="img-circle user-profile-img" src="../img/coldigifylogo.png">
				<small class="text-center">{{Auth::guard('web')->user()->name}}</small>
			</div>
		</div>
		<div class="list-group dashboard-list" style="margin-top:20px;">
			<h4>Course Progress</h4>
			<a href="" class="list-group-item">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</a>
			<a href="" class="list-group-item">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</a>
			<a href="" class="list-group-item">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</a>
			<a href="" class="list-group-item">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</a>
			<a href="" class="list-group-item">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</a>
		</div>
	
	</div>
	-->
</section>
@endsection
