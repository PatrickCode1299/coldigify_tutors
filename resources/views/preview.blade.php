@extends('layouts.app')
@section('content')
<section style="positon:relative;"  class="container">
	<div class=" preview-card p-2 justify-content-center align-items-center">
		<div style="positon:absolute; top:0px;" class="card  p-2 shadow-sm">
			<div  class="p-2 justify-content-start align-items-center">
			<span class="text-indicator" style="font-weight:bold;">{{$about->category}} &#8594;</span>
			<span class="text-indicator" style="font-weight:bold;">{{$about->course_title}}</span>
			</div>
			<h2 class="m-2" style="font-weight:bold;">{{$about->course_title}}</h2>
			<p class="p-2 fs-4" style=" font-weight:bold;">{{$about->description}}</p>
			<div  class="p-2 d-flex justify-content-start">
			<?php
        $parameter=[
            'id' => $about->unique_id,
           
        ];
        $parameter=Crypt::encrypt($parameter);
        ?>
			<a href="{{route('instructor',$parameter)}}"><small>Created by &#8594;<span style="font-weight:bolder;">@if(empty($avatar->avatar))
				<img class="img-rounded" height="30px" width="30px" src="/profile_avatar/default.jpg"> 
				@else
				<img class="img-rounded" height="30px" width="30px" src="/profile_avatar/{{$avatar->avatar}}"> 
				@endif
				{{$about->tutors_name}}</span></small></a>

			</div>
		<h3 class="p-2">Course Content</h3>
		<ol>
		@foreach($allmodules as $module_title)
		<li class="p-2">{{$module_title->module_title}}</li>
		@endforeach
		</ol>
		</div>
		<div class="card preview-video-card shadow-lg p-2" style="positon:relative; ">
			<video style="margin-top:0px;" loading="lazy" height="400px" width="100%" height="auto" controls>
  <source src="/content/{{$about->file1}}" type="video/mp4">
  <source src="/content/{{$about->file1}}" type="video/ogg">
  Your browser does not support the video tag.
</video>
<h1 style="font-weight:bold;" class="text-bold">&#8358;{{$about->price}}</h1>
@if(Auth::guard('web')->check())
<a style="color:white;" href="{{route('checkout',$about->course_title)}}" class="btn btn-primary btn-block btn-lg">To Checkout</a>
@else
 <?php
        $parameter=[
            'id' => $about->created_at,
            'owner' => $about->unique_id
        ];
        $parameter=Crypt::encrypt($parameter);
        ?>
<a href="{{route('redirect',$parameter)}}" class="btn btn-primary btn-block btn-lg">Buy now</a>
@endif
<small style="positon:absolute; font-weight: bold; top:40px; color:black;  left:20px; right:20px;">Preview this course</small>
		</div>
	</div>
</section>
    @endsection