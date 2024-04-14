@extends('layout')
@section('content')

<!--  <div class="content-wrapper">
          <h1 class="page-title">User Profile</h1> -->
          <div class="row user-profile">
            <div class="col-lg-20 side-left">
              <div class="card mb-10">
                <div class="card-body avatar">
                  <h2 class="card-title">Info</h2>
                  <img src="{{URL::to($student_description_profile->student_image)}}" alt="">
                  <p class="name">{{$student_description_profile->student_name}}</p>
                  <p class="designation">-  {{$student_description_profile->student_department}}  -</p>
                  <a class="email" href="#">Email:{{$student_description_profile->student_email}}</a>
                  <a class="number" href="#">Phone.No:{{$student_description_profile->student_phone}}</a>
                </div>
              </div>
              <div class="card mb-10">
                <div class="card-body overview">
                  <ul class="achivements">
                  	<h2 style="color: black;font-family: verdana;font-weight: ;"> Metropolitan University </h2>
                    <!-- <li><p>34</p><p>Projects</p></li>
                    <li><p>23</p><p>Task</p></li>
                    <li><p>29</p><p>Completed</p></li> -->
                  </ul>
                  <div class="wrapper about-user">
                    <h2 class="card-title mt-4 mb-3">About</h2>
                    <p>Information about this student .</p>
                  </div>
                  <div class="info-links">
                    <a class="website" >
                      <i class="icon-globe icon">Name</i>
                      <span style="font-family: verdana;font-size: 15px;">{{$student_description_profile->student_name}}</span>
                    </a>

                    <a class="website" >
                      <i class="icon-globe icon">Email:</i>
                      <span style="font-family: verdana;font-size: 15px;">{{$student_description_profile->student_email}}</span>
                    </a>


                    <a class="website" >
                      <i class="icon-globe icon">Phone:</i>
                      <span style="font-family: verdana;font-size: 15px;">{{$student_description_profile->student_phone}}</span>
                    </a>

                    <a class="website" >
                      <i class="icon-globe icon">Department</i>
                      <span style="font-family: verdana;font-size: 15px;">{{$student_description_profile->student_department}}</span>
                    </a>

                    <a class="website" >
                      <i class="icon-globe icon">Address</i>
                      <span style="font-family: verdana;font-size: 15px;">{{$student_description_profile->student_address}}</span>
                    </a>





                    <a class="social-link" href="#">
                      <i class="icon-social-facebook icon"></i>
                      <span>Co-curricular activities management system . Developed By: Srabon </span>
                    </a>
                    <a class="social-link" href="#">
                      <i class="icon-social-linkedin icon"></i>
                      <span></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          
          </div>
        <!-- </div> -->

@endsection