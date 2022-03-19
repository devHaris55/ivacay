@extends('guider.layouts.main')
@section('content')



            <div id="main">
              <div id="main-contents">
                <div id="abouttab" class="tabcontent DBabout">

                <div class="main_form">
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="nav_list"> 
                      <ul>
                        <li><a href="javascript:void(0)">Home /</a></li>
                        <li><a href="{{route('Guider_packages')}}">Package list /</a></li>
                      </ul>
                    </div>
                  </div>                  
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="">
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <span>Add Package</span>
                  <small></small>
                  <div class="dashboarform mtop60">
                    <div class="info">
                      <h3>Packages Add</h3>
                    </div>
                   <form action="{{route('Guider_add_edit_package')}}" method="POST" enctype="multipart/form-data">
                     @csrf
                    <div class="row">
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                        <label>Title</label>
                          <input type="text" name="title" class="form-control" placeholder="Title">
                        </div>
                        <div class="form-group">
                          <label>Description</label>
                            <input type="text" name="description" class="form-control" placeholder="Description">
                        </div>
                        <div class="form-group">
                          <label>Image</label>
                            <input type="file" name="image" class="form-control" placeholder="Image">
                        </div>
                        <div class="form-group">
                        <label>Country</label>
                          <input type="text" name="country" class="form-control" placeholder="Country">
                        </div>
                        <div class="form-group">
                          <label>Country ID</label>
                            <select class="form-control" name="country_id">
                                <option selected="" hidden="" disabled="">Select Country</option>
                                @foreach($countries as $country)
                                <option value="{{$country->id}}">{{$country->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <!-- <div class="form-group">
                        <label>Country ID</label>
                          <input type="number" name="country_id" class="form-control" placeholder="Country">
                        </div> -->
                       <div class="form-group">
                        <label>Start Date</label>
                          <input type="date" name="from_date" class="form-control" placeholder="Email Address">
                        </div> 
                       <div class="form-group">
                        <label>End Date</label>
                          <input type="date" name="end_date" class="form-control" placeholder="Email Address">
                        </div> 
                        <!-- <div class="form-group">
                          <label>Phone number</label>
                            <select class="form-control" id="user_role" name="user_role">
                                <option selected="" hidden="" disabled="">Select Role</option>
                                <option value="1">Admin</option>
                                <option value="2">User</option>
                                <option value="3">Vendor</option>
                                <option value="4">Customer</option>
                            </select>
                       </div>  -->
                        <div class="form-group">
                         <label>Status</label>


                          <label><input type="radio" name="status" checked>
                             Active
                          </label> 
                          <label><input type="radio" name="status">
                            Inactive
                          </label> 
                        </div>
                       <button type="submit" class=" sub btn btn_dashed" > Submit</button>


                      </div>
                     
                    </div>
                </div>                                                                         
              </div>                                         
            </div>

 
@endsection
