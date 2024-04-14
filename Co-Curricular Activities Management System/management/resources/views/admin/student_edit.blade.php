@extends('layout')
@section('content')
<!-- <div class="content-wrapper">
          <h1 class="page-title">Basic elements</h1>
          <div class="row"> -->
              <div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Add Students </h2>

                           <p class=" alert-success"><?php
              $exception=Session::get('exception');

              if($exception)
              {
                echo $exception;
                Session::put('exception',null);
              }

              ?></p>
                          <form class="forms-sample" method='post' action="{{URL::to('/update_student')}}" enctype="multipart/form-data">
                          	{{ csrf_field()}}
                              <div class="form-group">
                                  <label for="exampleInputname">Student Name </label>
                                  <input type="text" class="form-control p-input" name= "student_name" aria-describedby="emailHelp" value="{{($student_description_profile->student_name)}}">
                                 <!--  <small id="emailHelp" class="form-text text-muted text-success">We'll never share your email with anyone else.</small> -->
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student email</label>
                                  <input type="email" class="form-control p-input" name="student_email" placeholder="email">
                              </div>
                               <div class="form-group">
                                  <label for="exampleInputPassword1">Student phone</label>
                                  <input type="text" class="form-control p-input" name="student_phone" placeholder="phone">
                              </div>
                               <div class="form-group">
                                  <label for="exampleInputPassword1">Student department</label>
                                  <input type="text" class="form-control p-input" name="student_department" placeholder="department">
                              </div>
                               <div class="form-group">
                                  <label for="exampleInputPassword1">Student address</label>
                                  <input type="text" class="form-control p-input" name="student_address" placeholder="address">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Password</label>
                                  <input type="password" class="form-control p-input" id="student_password" placeholder="Password">
                              </div>
                            

                              <!-- <div class="form-group">
                                  <label for="exampleTextarea">Example textarea</label>
                                  <textarea class="form-control p-input" id="exampleTextarea" rows="3"></textarea>
                            
                              </div> -->

                              <!--student  photos dear section  -->
                            <!--   <div class="form-group">
                                  <label>Upload file</label>
                                  <div class="row">
                                    <div class="col-12">
                                      <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Image</label>
                                      <input type="file" class="form-control-file" name="student_image" id="exampleInputFile2" aria-describedby="fileHelp">
                                      <small id="fileHelp" class="form-text text-muted">upload photos.</small>
                                    </div>
                                  </div>
                              </div> -->

                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student Activity</label>
                                  <select class="form-control p-input" name="student_activity">
                                  	<option value="1">Singer</option>
                                  	<option value="2">Designer</option>
                                  	<option value="3">Anchor</option>
                                  	<option value="4">Dancer</option>
                                  	<option value="5">Speaker</option>
                                  </select>
                              </div>
                              <button type="submit" class="btn btn-success btn-block">Update</button>
                          </form>
                      </div>
                  </div>
              </div>

@endsection