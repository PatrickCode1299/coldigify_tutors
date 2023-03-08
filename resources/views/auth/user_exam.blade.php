@extends('layouts.app')
@section('content')
<div class="container-fluid p-2">
	<div class="card p-5">
	<ul class="list-group list-group-flush">
	@foreach($exam_questions as $questions)
	<h4>{{$questions->question}}</h4>
	<li class="list-group-item"><span class="m-2">A</span>{{$questions->answer1}}</li>
	<li class="list-group-item"><span class="m-2">B</span>{{$questions->answer2}}</li>
	<li class="list-group-item"><span class="m-2">C</span>{{$questions->answer3}}</li>	
	<li class="list-group-item"><span class="m-2">D</span>{{$questions->answer4}}</li><br />
	@endforeach
</ul>
</div>
</div>
<script type="text/javascript">
	var allheadings=document.getElementsByTagName("h4");
	for(i=0; i<allheadings.length; i++){
	var text=document.createTextNode(i+"");
	allheadings.innerHTML=text;
	}
</script>
@endsection