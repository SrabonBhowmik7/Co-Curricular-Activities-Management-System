@extends('layout')

@section('content')

        
   <!--    <div class="col-12">
        <form action="/search" method="get">
        <div class="inpt-group">
          <input type="search" name="search" class="from-control">
          <span class="input-group-prepend">
            <button type="submit" class="btn btn-primary">Search
              
            </button>
            
          </span>
          
        </div> 
        </form>
        
      </div>
 -->


      <!-- <div class="content-wrapper">
          <h1 class="page-title">Data table</h1> -->
          <!-- <div class="card"> -->
           <!-- previous running all student -->

            <div class="card-body">
              <h2 class="card-title">Data table</h2>
              <div class="row">
                <div class="col-12">
                  <table id="order-listing" class="table table-striped" style="width:100%;">
                    <thead>
                      <tr>
                      	  <th>Image </th>
                          <th>Name </th>
                          <th>Email </th>
                          <th>Phone</th>
                          <th>Department</th>
                          <th>Activity</th>
                         
                      </tr>
                    </thead>
                    <tbody>
                    	@foreach($all_student_info as $v_student)
                      <tr>
                          <td><img src="{{URL::to($v_student->student_image)}}" height="60" width="60" style="border-radius: 50%;"></td>
                          <td>{{$v_student->student_name}}</td>
                          <td>{{$v_student->student_email}}</td>
                          <td>{{$v_student->student_phone}}</td>
                          <td>{{$v_student->student_department}}</td> 
                          <td>{{$v_student->student_activity}}</td>
                          <td>
                          		@if ($v_student->student_activity == 1)
                          		<span class="label label-success">{{'Singer'}}</span>
                          		@elseif ($v_student->student_activity == 2)
                          		<span class="label label-success">{{'Designer'}}</span>
                          		@elseif ($v_student->student_activity == 3)
                          		<span class="label label-success">{{'Anchor'}}</span>
                          		@elseif ($v_student->student_activity = 4)
                          		<span class="label label-success">{{'Dancer'}}</span>
                          		@elseif ($v_student->student_activity == 5)
                          		<span class="label label-success">{{'Speaker'}}</span>
                          		@else
                          		<span class="label label-success">{{'Not Defined'}}</span>
                          		@endif

                          </td>
                          <!--  <td>
                            <label class="badge badge-info">On hold</label>
                          </td> -->    
                          <td>
                            <a href="{{URL::to('/student_view/'.$v_student->student_id)}}"> <button class="btn btn-outline-primary">View</button> </a>
                            
                            <a href="{{URL::to('/student_edit/'.$v_student->student_id)}}"> <button class="btn btn-outline-warning">Edit</button> </a>

                            <a href="{{URL::to('/student_delete/'.$v_student->student_id)}}" id = "delete"> <button class="btn btn-outline-danger">Delete</button> </a>
                          </td>
                      </tr>
                     @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- end here previous running   -->
          <!-- </div> -->
        <!-- </div> -->

 <!--  <div class="card-body">
              <h2 class="card-title">Data table</h2>
              <div class="row">
                <div class="col-12">
                  <table id="order-listing" class="table table-striped" style="width:100%;">
                    <thead>
                      <tr>
                           <th>Order #</th>
                          <th>Purchased On</th>
                          <th>Customer</th>
                          <th>Ship to</th>
                          <th>Base Price</th>
                          <th>Purchased Price</th>
                          <th>Status</th>
                          <th>Actions</th> -->

                         <!--  <th>Image </th>
                          <th>Name </th>
                          <th>Email </th>
                          <th>Phone</th>
                          <th>Department</th>
                          <th>Activity</th>
                      </tr>
                    </thead>
                    @foreach($all_student_info as $v_student)
                    <tbody>
                      
                      <tr>
                          <td>1</td>
                          <td>27/08/12</td>
                          <td>Edinburgh</td>
                          <td>New York</td>
                          <td>$1500</td>
                          <td>$3200</td>
                          <td>
                            <label class="badge badge-info">On hold</label>
                          </td>
                          <td>
                            <button class="btn btn-outline-primary">View</button>
                          </td>
                      </tr>
                      
                    </tbody>
                    @endforeach
                  </table>
                </div>
              </div>
            </div> -->

@endsection