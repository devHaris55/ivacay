@extends('layouts.main')
@section('content')

<!-- banner start -->
<section class="main_slider">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="banner_text text-center ">
                        <h3> Vacationer</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner end -->
    
    <!-- Log In Start -->
    <section class="log_in">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="lips_sec">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 ">
                                <div class="lips_div text-center">
                                    <h3><strong>Plan Your </strong>Vacation</h3>
                                    <p>There are a few key elements that make up a good vacation, and one of them is planning.
Planning can make or break your holiday, so it’s best to proceed carefully. We’ve gathered a
bunch of steps for those of you who need a roadmap to plan travels! Let’s get started.
</p>
                                    <div class="input_form">
                                        <form action="{{route('Vacationer_search_packages')}}" method="POST">
                                            @csrf
                                            <ul>
                                                <li>
                                                   <label for="">Where to go?</label>
                                                   <!-- <input type="search" placeholder="Search Country" id="search" name="country" required> -->
                                                   <select class="sel" name="country_id">
                                                        <option selected="" hidden="" disabled="">Select Country</option>
                                                        @foreach($countries as $country)
                                                            <option value="{{$country->id}}">{{$country->name}}</option>
                                                        @endforeach
                                                    </select>
                                                <!-- <input type="text" placeholder="" id="wtg"> -->
                                                </li>                                                
                                                <li>
                                                    <label for="">From</label>
                                                    <input name="from_date" min="{{Carbon\Carbon::now()->addDay()->format('Y-m-d')}}" type="date" placeholder="" id="fromdate">
                                                </li>                                                
                                                <li>
                                                    <label for="">To</label>
                                                    <input name="end_date" min="{{Carbon\Carbon::now()->addDay()->format('Y-m-d')}}" type="date" placeholder="" id="todate">
                                                </li>
                                                <li>
                                                    <button type="submit">Go</button>
                                                 <!-- <a class="btn btn-danger" id="btn_click"> Go</a> -->
                                                </li>
                                  
                                            </ul>
                                        </form>
                                        <div id="test"></div>
                                        @push('js')
                                        <script>
                                        $(document).ready(function(){
                                        $('#search').on('keyup', function(){
                                                let x = $(this).val();
                                                let data = {'search': x};
                                                let url = 'country-for-vacation';
                                                
                                                $.ajax({
                                                    url: url,
                                                    data: data,
                                                    type: 'GET',
                                                
                                                    success: function(data) {
                                                        res = data;
                                                        console.log(data);
                                                        $('#test').html(data);
                                        
                                                    },
                                                    error: function() {
                                                        console.log('error');
                                                    }
                                        
                                                });
                                            });
                                        });
                                        
                                        // In your Javascript (external .js resource or <script> tag)
                                        $(document).ready(function() {
                                            $('.js-example-basic-single').select2();
                                        });
                                        </script>
                                        @endpush
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                



                    <div class="deals_you "  id="panel" >
                        <h3>Activites</h3>
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-12 custom" >
                                <div class="family">
                                    <label class="containerd">
                                    <img src="{{asset('images/family_1.jpg')}}" class="img-fluid" alt="">
                                    <small><a href="javascript:void(0)"> Visit geologic sites </a></small>
                                      <input type="checkbox"  name="checkbox" id="check_id1">
                                      <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12 custom" >
                                <div class="family">
                                    <label class="containerd">
                                    <img src="{{asset('images/family_2.jpg')}}" class="img-fluid" alt="">
                                    <small><a href="javascript:void(0)"> museums</a></small>
                                      <input type="checkbox"  name="checkbox" id="check_id2">
                                      <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12 custom" >
                                  <div class="family">
                                    <label class="containerd">
                                    <img src="{{asset('images/family_3.jpg')}}" class="img-fluid" alt="">
                                    <small><a href="javascript:void(0)"> Landmarks</a></small>
                                      <input type="checkbox"  name="checkbox" id="check_id3">
                                      <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12 custom" >
                                <div class="family">
                                    <label class="containerd">
                                    <img src="{{asset('images/family_4.jpg')}}" class="img-fluid" alt="">
                                    <small><a href="javascript:void(0)"> Reservation tours</a></small>
                                      <input type="checkbox"  name="checkbox" id="check_id4">
                                      <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>                           
                           <div class="col-md-3 col-sm-3 col-xs-12 custom" >
                                <div class="family">
                                    <label class="containerd">
                                    <img src="{{asset('images/family_5.jpg')}}" class="img-fluid" alt="">
                                    <small><a href="javascript:void(0)"> Renactments</a></small>
                                      <input type="checkbox"  name="checkbox" id="check_id5">
                                      <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="service_btn">
                                    <a id="ssd" class="btn btn-danger"href="{{route('UI_personal_concierge_service')}}" >shared service deal
                                    </a>
                                </div>
                            </div> 

                        </div>
                    </div>                    
                    <div class="deals_you "  id="panel2" >
                        <h3>Nature</h3>
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-12" >
                                <div class="family">
                                    <label class="containerd">
                                    <img src="{{asset('images/family_6.jpg')}}" class="img-fluid" alt="">
                                    <small><a href="javascript:void(0)"> Geologic sites </a></small>
                                      <input type="checkbox" id="check_id11" name="checkbox">
                                      <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12" >
                                <div class="family">
                                    <label class="containerd">
                                    <img src="{{asset('images/family_7.jpg')}}" class="img-fluid" alt="">
                                    <small><a href="javascript:void(0)"> conservation <br>easements </a></small>
                                      <input type="checkbox" id="check_id22" name="checkbox">
                                      <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12" >
                                  <div class="family">
                                    <label class="containerd">
                                    <img src="{{asset('images/family_8.jpg')}}" class="img-fluid" alt="">
                                    <small><a href="javascript:void(0)">  national parks</a></small>
                                      <input type="checkbox" id="check_id33" name="checkbox">
                                      <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12" >
                                <div class="family">
                                    <label class="containerd">
                                    <img src="{{asset('images/family_9.jpg')}}" class="img-fluid" alt="">
                                    <small><a href="javascript:void(0)"> bird watching</a></small>
                                      <input type="checkbox" id="check_id44"  name="checkbox">
                                      <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>                           
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="service_btn">
                                    <a id="pcs"  class="btn btn-danger" href="{{route('UI_personal_concierge_service2')}}">personal concierge service
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="main_client">
                        <h3>What Our Client Says About Us</h3>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="client">
                                    <h4>Lorem Ipsum</h4>
                                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse
                                        ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel
                                        facilisis. </p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. sed do eiusmod et dolore
                                        magna aliqua. </p>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="vid_img">
                                    <img src="{{asset('images/vid_img.png')}}" class="img-fluid" alt="">
                                    <a data-fancybox="gallery" href="https://www.youtube.com/watch?v=-7aTH9G9ZaE"
                                        tabindex="0"><i class="fas fa-circle-play"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Log In End -->

@endsection
