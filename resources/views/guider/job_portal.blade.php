@extends('guider.layouts.main')
@section('content')

            
            

            <div id="main">
              <div id="">
                <div class="row"> 
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="nav_list"> 
                      <ul>
                        <li><a href="javascript:void(0)">Home</a></li>
                        <li><a href="javascript:void(0)">/</a></li>
                        <li><a href="javascript:void(0)">Job Portal</a></li>
                      </ul>
                    </div>
                  </div>                  
                  <!-- <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="">
                      <a href="{{route('Guider_add_package')}}" class="btn btn_dashed"> Add New Package</a>
                    </div>
                  </div> -->
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="main_table">
                      <div class="table-responsive table-bordered table-striped">
                        <table class="table">
                          <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Description</th>                            
                            <th>Country</th>
                            <th>Status</th>
                            <th >Action</th>
                          </tr>
                          
                          <tr>
                            <td>1  </td>                            
                            <td>test  </td>
                            <td>asd@mail.com  </td>
                            <td>User</td>                            
                            <td  class="inactive">Inactive</td>
                            <td colspan="2" ><a href="javascript:void(0)" class="edit">Edit |</a><a href="javascript:void(0)" class="del">Delete </a> </td>
                          </tr>                         
                          <tr>
                            <td>1  </td>                            
                            <td>test  </td>
                            <td>asd@mail.com  </td>
                            <td>User</td>                            
                            <td  class="inactive">Inactive</td>
                            <td colspan="2" ><a href="javascript:void(0)" class="edit">Edit |</a><a href="javascript:void(0)" class="del">Delete </a> </td>
                          </tr>                          
                          <tr>
                            <td>1  </td>                            
                            <td>test  </td>
                            <td>asd@mail.com  </td>
                            <td>User</td>                            
                            <td  class="inactive">Inactive</td>
                            <td colspan="2" ><a href="javascript:void(0)" class="edit">Edit |</a><a href="javascript:void(0)" class="del">Delete </a> </td>
                          </tr>                          
                          <tr>
                            <td>1  </td>                            
                            <td>test  </td>
                            <td>asd@mail.com  </td>
                            <td>User</td>                            
                            <td  class="inactive">Inactive</td>
                            <td colspan="2" ><a href="javascript:void(0)" class="edit">Edit |</a><a href="javascript:void(0)" class="del">Delete </a> </td>
                          </tr>                          
                          <tr>
                            <td>1  </td>                            
                            <td>test  </td>
                            <td>asd@mail.com  </td>
                            <td>User</td>                            
                            <td  class="inactive">Inactive</td>
                            <td colspan="2" ><a href="javascript:void(0)" class="edit">Edit |</a><a href="javascript:void(0)" class="del">Delete </a> </td>
                          </tr>

                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


@endsection

