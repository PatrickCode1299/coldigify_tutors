@extends('layouts.app')
@section('content')
      <section class="site-introduction" style="margin-top:0px;">
        <div class="container-fluid d-flex justify-content-center align-items-center">
        <div class="intro-content m-5">
            <h1 style='font-weight:bold;'>Learn any Skill on the Go.</h1>
            <p>We are a global training provider based in Nigeria that specialises in accredited and bespoke training courses.<br /> 
                We crush the barriers to getting a degree....</p>
                <a style="color:white;" href="{{route('explore')}}" class='btn btn-md btn-primary'>Explore Courses</a>
        </div>
    <div class='static-user-img m-5'>
      <img  class="img-responsive img-rounded" style="border-radius: 10px;max-width:80%; max-height:80%;" alt="Student Pic" src="../img/student.png" />
        </div>
        </div>
      </section>
      <hr class="site-sponsor-rule" />
      <section class="site-sponsors-corner">
        <div class="container-fluid">
            <div class='btn-group nobg d-flex justify-content-center'>
                <button class="btn btn-primary"><img class='img-responsive' src="../img/cornellhomes.jpg" height="100" width="100" /></button>
                <button class="btn btn-primary"><img class='img-responsive' src="../img/cornellhomes.jpg" height="100" width="100" /></button>
                <button class="btn btn-primary"><img class='img-responsive' src="../img/cornellhomes.jpg" height="100" width="100" /></button>
                <button class="btn btn-primary"><img class='img-responsive' src="../img/cornellhomes.jpg" height="100" width="100" /></button>
                <button class="btn btn-primary"><img class='img-responsive' src="../img/cornellhomes.jpg" height="100" width="100" /></button>
            </div>
        </div>
      </section>
      <hr class="site-sponsor-rule" />

      <section class="popular-courses-form m-5">
        <!--
        <div class="percent-width-div">
      <div  class="input-group find-courses-div bg-white shadow-sm mb-3">
        <input type="text" class="form-control" name="coursename" placeholder="Course Name" aria-label="Recipient's username" aria-describedby="basic-addon2">
        <input type="text" class="form-control" name="tutor_name" placeholder="Tutor Name" aria-label="Recipient's username" aria-describedby="basic-addon2">
        <select name="courses" class="form-control">
        <option value="null">Popular Courses</option>
        <option value="Data Analysis">Data Analysis</option>
        <option value="Web Development">Web Development</option>
        <option value="Graphics Design">Graphics Design</option>
        <option value="Video Editing">Video Editing</option>
        </select>
        <div class="input-group-append">
        <span class="input-group-text greenbg-btn" id="basic-addon2">Search</span>
        </div>
        </div>
        </div>
    -->
        <div class="container p-5" style="margin-top: 30px;">
            <h1 style="font-weight:bold; color: #000000;">We have prepared this courses for you.</h1>
        <div class="row p-5">
        @foreach($courses as $course)
          <?php
        $parameter=[
            'id' => $course->created_at,
            'owner' => $course->unique_id
        ];
        $parameter=Crypt::encrypt($parameter);
        ?>
        <div class="col-sm-4" style=" margin-top: 20px;">
        <img loading="lazy"  class="buy-showcase img-rounded img-thumbnail" src="../storage/preview/{{$course->preview}}">
        <small style="letter-spacing:5px; margin-top: 10px; color: darkgreen; font-weight: bold; font-size: 14px;" class="block">{{$course->price}}&#8358;</small>
        <span> {{$course->views}}</span>
        <h5 style="font-weight:bolder; color:black;">{{$course->course_title}}</h5>
        <a class="btn btn-md btn-primary" href="{{route('preview.show',$parameter)}}">Enrol</a>
       </div>
        
        @endforeach
        </div>
        </div>
        </section>
        <section class="learn-from-us m-10">
        <div class="container">
        <div class="d-flex justify-content-center align-items-center">
        <div class='static-user-img'>
        <img loading="lazy"  class="img-responsive" style="border-radius:10px; max-width:80%; max-height:80%;" alt="Student Pic" src="../img/student.png" />
        </div>
        <div class="why-learn">
            <h1>Why We Learn <br /> From Coldigify</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, praesentium quis architecto illum quae asperiores. 
                Et illum nam quae totam aliquam amet. Accusantium totam harum nostrum, quisquam iste soluta deleniti.</p>
                <ul>
                    <li>Word Class</li>
                    <li>Flexible</li>
                </ul>
                <ul>
                    <li>Affordable</li>
                    <li>Job relevant</li>
                </ul>
                @if(Auth::guard('web')->check())
                <a style="color:white;" href="{{route('explore')}}" class="ml-5 btn btn-md btn-primary">Explore Courses</a>
                @else
                <a style="color:white;" href="{{ route('register') }}" class="ml-5 btn btn-md btn-primary">Register Now</a>
                @endif
        </div>
        </div>
        </div>
        </section>
        <section  class="explore m-5">
        <div class='container explore-container'>
        <div class="explore-heading">
        <h1 class="text-center bold">Explore Company Courses.</h1>
        <p class="text-center" style="word-wrap:break-word;">Coldigify is a leading e-learning platform in Nigeria with well vast tutors all over differrent locations across Nigeria, offering their courses. To provide a huge impact on the students who enrol for the courses on our platform.</p>
        </div> 
            <div class="row explore explore-card bg-none">
            @foreach($category as $cat)
            <div class='col-sm-4'>
             <div class="card">
            <div class="card-body fs-3 text-center">
            <a href="{{route('showcourse',$cat->category)}}">{{$cat->category}}</a>
            </div>
            </div>
            </div>
            @endforeach
            </div>
            <center><button style='margin-top:40px' class="btn btn-md btn-primary"><a href="{{route('explore')}}">Explore all</a></button></center>
        </div>
        </section>
        <section  class="explore m-5">
        <div class='container explore-container'>
        <div class="explore-heading">
        <h1 class="text-center bold">People Say About Our Courses</h1>
        <p class="text-center" style="word-wrap:break-word;">Coldigify is a leading e-learning platform in Nigeria with well vast tutors all over differrent locations across Nigeria, offering their courses. To provide a huge impact on the students who enrol for the courses on our platform.</p>
        </div> 
            <div class="row justify-content-center explore explore-card bg-none">
            <div class='col-md-4'>
             <div class="card shadow-sm" style="max-height: 200px;">
            <div class="card-body d-flex fs-6">
            <img loading="lazy" class="img-rounded" src="../img/me.jpg" style="width:50%; max-height:80px;">
            <div class="p-2">
                <h3>Amazing Courses</h3>
                <p>I enjoy learning from coldigify, they have a wonderful resource to help me improve my skills...</p>
                <small><i>Akintola Patrick</i></small>
            </div>
            </div>
            </div>
            </div>
           <div class='col-md-4'>
             <div class="card" style="max-height: 200px;">
            <div class="card-body d-flex fs-6">
            <img loading="lazy" class="img-circle" src="../img/onthego.jpeg" style="width:80%; max-height:80px;">
            <div class="p-2">
                <h3>Best Learning Platform</h3>
                <p class="break-word word-wrap">They are the best learning platform, i can always agree to that. The courses on their platform are well taught.</p>
                <small><i>Jane Gordon</i></small>
            </div>
            </div>
            </div>
            </div>
            </div>
        </div>
        </section>
        <section class="container update-section">
            <div class="center-sub-div">
            <h2 class="sub-text">Subscribe For Get Update<br /> Every New Courses</h2>
            <form class="input-group" method="POST">
                <input class="form-control" placeholder="Your Email Adddress" type="email" name="subscribe_mail">
                <button class="btn btn-lg btn-primary">Subscribe</button>
            </form>
            </div>
        </section>
        <section class="footer">
        <footer>
            <div class="flex-footer-info">
            <div class="flex-footer-div">
               <h3>Elearn</h3>
               <ul>
                   <li>About</li>
                   <li>What we offer</li>
                   <li>Leadership</li>
                   <li>Careers</li>
                   <li>Catalog</li>
                   <li>For enterprise</li>
               </ul>
            </div>
            <div class="flex-footer-div">
                <h3>Courses</h3>
                <ul>
                    <li>Classroom Courses</li>
                    <li>Virtual Classroom Courses</li>
                    <li>E-learning Courses</li>
                    <li>Video Courses</li>
                    <li>Offline Courses</li>
                </ul>
            </div>
            <div class="flex-footer-div">
                <h3>Community</h3>
                <ul>
                    <li>Learners</li>
                    <li>Partners</li>
                    <li>Developers</li>
                    <li>Transactions</li>
                    <li>Blogs</li>
                    <li><a href="{{ route('admin_login') }}">Tutor</a></li>
                </ul> 
            </div>
            <div class="flex-footer-div">
                 <h3>Quick Links</h3>
                <ul>
                    <li>Home</li>
                    <li>Proffessional Education</li>
                    <li>Courses</li>
                    <li>Admissions</li>
                    <li>Testimonials</li>
                </ul>
            </div>
            </div>
            <p class="text-center fs-5 text-white">Coldigify &copy;     <?php echo date('Y'); ?></p>
        </footer>
        </section>
    </body>
    @endsection
</html>
