@extends('layouts.tutor')
@section('content')
<section class="container-fluid bg-white p-5" style="width:80%; margin:0 auto; margin-top: 50px;">
<h2>All your Courses</h2>
<ul class="list-group">
@foreach($tutor_course as $get_course)
<li class="list-group-item  fs-4 pointer shadow-sm">{{$get_course->course_title}}
@foreach($tutor_question as $tutors_question)
<script type="text/javascript">
	var newFormid='<?php echo $tutors_question->question_id; ?>';
  var tohideId=document.querySelectorAll('#question_id');
  if(tohideId.value===newFormid){
  	document.getElementById(newFormid).style.display="none";
  }
  //for(i=0; i<=tohideId.length; i++){
  //	console.log(i[0]);
  //}
</script>
<form method="POST" id="{{base64_encode('1')}}" action="{{route('set_question')}}">
	@csrf
	<input type="hidden" value="{{$get_course->course_title}}" name="course_title">
	<input type="hidden" value="{{Auth::guard('admin')->user()->email}}" 
	name="tutor_email">
	<input type="hidden" id="question_id" name="question_id" value="{{base64_encode('1')}}">
	<label>Question 1</label>
	<textarea placeholder="Type the question you want to ask users for this course.. e.g Ngozi is mostly a name given to what gender?" name="question" class="form-control textarea" style="resize:none; height: 100px;"></textarea>
	<label>Wrong Answer</label>
	<input type="text" placeholder="Write a wrong option e.g Bisexual" class="form-control" name="answer1">
	<label>Wrong Answer</label>
	<input type="text" placeholder="Write a wrong option e.g Transgender" class="form-control" name="answer2">
	<label>Wrong Answer</label>
	<input type="text" placeholder="Write a wrong option e.g Male" class="form-control" name="answer3">
	<label>Right Answer</label>
	<input type="text" placeholder="Write a right option e.g Female" class="form-control" name="answer4">
	<button  type="submit" name="submit" class="btn m-2 btn-md btn-primary">Place question</button>
</form>
<form method="POST" action="{{route('set_question')}}">
	@csrf
	<input type="hidden" value="{{$get_course->course_title}}" name="course_title">
	<input type="hidden" value="{{Auth::guard('admin')->user()->email}}" name="tutor_email">
	<input type="hidden" name="question_id" value="{{base64_encode('2')}}">
	<label>Question 2</label>
	<textarea placeholder="Type the question you want to ask users for this course.. e.g Ngozi is mostly a name given to what gender?" name="question" class="form-control textarea" style="resize:none; height: 100px;"></textarea>
	<label>Wrong Answer</label>
	<input type="text" placeholder="Write a wrong option e.g Bisexual" class="form-control" name="answer1">
	<label>Wrong Answer</label>
	<input type="text" placeholder="Write a wrong option e.g Transgender" class="form-control" name="answer2">
	<label>Wrong Answer</label>
	<input type="text" placeholder="Write a wrong option e.g Male" class="form-control" name="answer3">
	<label>Right Answer</label>
	<input type="text" placeholder="Write a right option e.g Female" class="form-control" name="answer4">
	<button  type="submit" name="submit" class="btn m-2 btn-md btn-primary">Place question</button>
</form>
<form method="POST" action="{{route('set_question')}}">
	@csrf
	<input type="hidden" value="{{$get_course->course_title}}" name="course_title">
	<input type="hidden" value="{{Auth::guard('admin')->user()->email}}" name="tutor_email">
	<input type="hidden" name="question_id" value="{{base64_encode('3')}}">
	<label>Question 3</label>
	<textarea placeholder="Type the question you want to ask users for this course.. e.g Ngozi is mostly a name given to what gender?" name="question" class="form-control textarea" style="resize:none; height: 100px;"></textarea>
	<label>Wrong Answer</label>
	<input type="text" placeholder="Write a wrong option e.g Bisexual" class="form-control" name="answer1">
	<label>Wrong Answer</label>
	<input type="text" placeholder="Write a wrong option e.g Transgender" class="form-control" name="answer2">
	<label>Wrong Answer</label>
	<input type="text" placeholder="Write a wrong option e.g Male" class="form-control" name="answer3">
	<label>Right Answer</label>
	<input type="text" placeholder="Write a right option e.g Female" class="form-control" name="answer4">
	<button  type="submit" name="submit" class="btn m-2 btn-md btn-primary">Place question</button>

</form>
<form method="POST" action="{{route('set_question')}}">
	@csrf
	<input type="hidden" value="{{$get_course->course_title}}" name="course_title">
	<input type="hidden" value="{{Auth::guard('admin')->user()->email}}" name="tutor_email">
	<input type="hidden" name="question_id" value="{{base64_encode('4')}}">
	<label>Question 4</label>
	<textarea placeholder="Type the question you want to ask users for this course.. e.g Ngozi is mostly a name given to what gender?" name="question" class="form-control textarea" style="resize:none; height: 100px;"></textarea>
	<label>Wrong Answer</label>
	<input type="text" placeholder="Write a wrong option e.g Bisexual" class="form-control" name="answer1">
	<label>Wrong Answer</label>
	<input type="text" placeholder="Write a wrong option e.g Transgender" class="form-control" name="answer2">
	<label>Wrong Answer</label>
	<input type="text" placeholder="Write a wrong option e.g Male" class="form-control" name="answer3">
	<label>Right Answer</label>
	<input type="text" placeholder="Write a right option e.g Female" class="form-control" name="answer4">
	<button  type="submit" name="submit" class="btn m-2 btn-md btn-primary">Place question</button>

</form>
<form method="POST" action="{{route('set_question')}}">
	@csrf
	<input type="hidden" value="{{$get_course->course_title}}" name="course_title">
	<input type="hidden" value="{{Auth::guard('admin')->user()->email}}" name="tutor_email">
	<input type="hidden" name="question_id" value="{{base64_encode('5')}}">
	<label>Question 5</label>
	<textarea placeholder="Type the question you want to ask users for this course.. e.g Ngozi is mostly a name given to what gender?" name="question" class="form-control textarea" style="resize:none; height: 100px;"></textarea>
	<label>Wrong Answer</label>
	<input type="text" placeholder="Write a wrong option e.g Bisexual" class="form-control" name="answer1">
	<label>Wrong Answer</label>
	<input type="text" placeholder="Write a wrong option e.g Transgender" class="form-control" name="answer2">
	<label>Wrong Answer</label>
	<input type="text" placeholder="Write a wrong option e.g Male" class="form-control" name="answer3">
	<label>Right Answer</label>
	<input type="text" placeholder="Write a right option e.g Female" class="form-control" name="answer4">
	<button  type="submit" name="submit" class="btn m-2 btn-md btn-primary">Place question</button>

</form>
<form method="POST" action="{{route('set_question')}}">
	@csrf
	<input type="hidden" value="{{$get_course->course_title}}" name="course_title">
	<input type="hidden" value="{{Auth::guard('admin')->user()->email}}" name="tutor_email">
	<input type="hidden" name="question_id" value="{{base64_encode('6')}}">
	<label>Question 6</label>
	<textarea placeholder="Type the question you want to ask users for this course.. e.g Ngozi is mostly a name given to what gender?" name="question" class="form-control textarea" style="resize:none; height: 100px;"></textarea>
	<label>Wrong Answer</label>
	<input type="text" placeholder="Write a wrong option e.g Bisexual" class="form-control" name="answer1">
	<label>Wrong Answer</label>
	<input type="text" placeholder="Write a wrong option e.g Transgender" class="form-control" name="answer2">
	<label>Wrong Answer</label>
	<input type="text" placeholder="Write a wrong option e.g Male" class="form-control" name="answer3">
	<label>Right Answer</label>
	<input type="text" placeholder="Write a right option e.g Female" class="form-control" name="answer4">
	<button  type="submit" name="submit" class="btn m-2 btn-md btn-primary">Place question</button>

</form>
<form method="POST" action="{{route('set_question')}}">
	@csrf
	<input type="hidden" value="{{$get_course->course_title}}" name="course_title">
	<input type="hidden" value="{{Auth::guard('admin')->user()->email}}" name="tutor_email">
	<input type="hidden" name="question_id" value="{{base64_encode('7')}}">
	<label>Question 7</label>
	<textarea placeholder="Type the question you want to ask users for this course.. e.g Ngozi is mostly a name given to what gender?" name="question" class="form-control textarea" style="resize:none; height: 100px;"></textarea>
	<label>Wrong Answer</label>
	<input type="text" placeholder="Write a wrong option e.g Bisexual" class="form-control" name="answer1">
	<label>Wrong Answer</label>
	<input type="text" placeholder="Write a wrong option e.g Transgender" class="form-control" name="answer2">
	<label>Wrong Answer</label>
	<input type="text" placeholder="Write a wrong option e.g Male" class="form-control" name="answer3">
	<label>Right Answer</label>
	<input type="text" placeholder="Write a right option e.g Female" class="form-control" name="answer4">
	<button  type="submit" name="submit" class="btn m-2 btn-md btn-primary">Place question</button>

</form>
<form method="POST" action="{{route('set_question')}}">
	@csrf
	<input type="hidden" value="{{$get_course->course_title}}" name="course_title">
	<input type="hidden" value="{{Auth::guard('admin')->user()->email}}" name="tutor_email">
	<input type="hidden" name="question_id" value="{{base64_encode('8')}}">
	<label>Question 8</label>
	<textarea placeholder="Type the question you want to ask users for this course.. e.g Ngozi is mostly a name given to what gender?" name="question" class="form-control textarea" style="resize:none; height: 100px;"></textarea>
	<label>Wrong Answer</label>
	<input type="text" placeholder="Write a wrong option e.g Bisexual" class="form-control" name="answer1">
	<label>Wrong Answer</label>
	<input type="text" placeholder="Write a wrong option e.g Transgender" class="form-control" name="answer2">
	<label>Wrong Answer</label>
	<input type="text" placeholder="Write a wrong option e.g Male" class="form-control" name="answer3">
	<label>Right Answer</label>
	<input type="text" placeholder="Write a right option e.g Female" class="form-control" name="answer4">
	<button  type="submit" name="submit" class="btn m-2 btn-md btn-primary">Place question</button>

</form>
<form method="POST" action="{{route('set_question')}}">
	@csrf
	<input type="hidden" value="{{$get_course->course_title}}" name="course_title">
	<input type="hidden" value="{{Auth::guard('admin')->user()->email}}" name="tutor_email">
	<input type="hidden" name="question_id" value="{{base64_encode('9')}}">
	<label>Question 9</label>
	<textarea placeholder="Type the question you want to ask users for this course.. e.g Ngozi is mostly a name given to what gender?" name="question" class="form-control textarea" style="resize:none; height: 100px;"></textarea>
	<label>Wrong Answer</label>
	<input type="text" placeholder="Write a wrong option e.g Bisexual" class="form-control" name="answer1">
	<label>Wrong Answer</label>
	<input type="text" placeholder="Write a wrong option e.g Transgender" class="form-control" name="answer2">
	<label>Wrong Answer</label>
	<input type="text" placeholder="Write a wrong option e.g Male" class="form-control" name="answer3">
	<label>Right Answer</label>
	<input type="text" placeholder="Write a right option e.g Female" class="form-control" name="answer4">
	<button  type="submit" name="submit" class="btn m-2 btn-md btn-primary">Place question</button>

</form>
<form method="POST" action="{{route('set_question')}}">
	@csrf
	<input type="hidden" value="{{$get_course->course_title}}" name="course_title">
	<input type="hidden" value="{{Auth::guard('admin')->user()->email}}" name="tutor_email">
	<input type="hidden" name="question_id" value="{{base64_encode('10')}}">
	<label>Question 10</label>
	<textarea placeholder="Type the question you want to ask users for this course.. e.g Ngozi is mostly a name given to what gender?" name="question" class="form-control textarea" style="resize:none; height: 100px;"></textarea>
	<label>Wrong Answer</label>
	<input type="text" placeholder="Write a wrong option e.g Bisexual" class="form-control" name="answer1">
	<label>Wrong Answer</label>
	<input type="text" placeholder="Write a wrong option e.g Transgender" class="form-control" name="answer2">
	<label>Wrong Answer</label>
	<input type="text" placeholder="Write a wrong option e.g Male" class="form-control" name="answer3">
	<label>Right Answer</label>
	<input type="text" placeholder="Write a right option e.g Female" class="form-control" name="answer4">
	<button  type="submit" name="submit" class="btn m-2 btn-md btn-primary">Place question</button>

</form>
</li>
@endforeach
@endforeach
</ul>
</section>
@if(route('exam'))
<script type="text/javascript">
  document.title='Set Exam';
</script>
@endif
@endsection