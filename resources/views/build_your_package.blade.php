@extends('layouts.main')
@section('content')


<!-- banner start -->
<section class="main_slider">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="banner_text text-center lips_div ">
                        <h3> <strong>Build Your</strong>Package</h3>
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
                <form action="{{route('Vacationer_package_request')}}" method="POST">
                    @csrf
                    <div class="col-xs-12 col-sm-4 col-md-4 centerCol">
                        <div class="log_input ">
                            <label for="">Where to go?</label>
                            <select class="sel" name="country_id">
                                <option selected="" hidden="" disabled="">Select Country</option>
                                @foreach($countries as $country)
                                    <option value="{{$country->id}}">{{$country->name}}</option>
                                @endforeach
                            </select>
                            <div class="form-group">
                                <label for="">Start Date</label>
                                <input name="start_date" type="date" placeholder="" id="fromdate">
                            </div>
                            <div class="form-group">
                                <label for="">End Date</label>
                                <input name="end_date" type="date" placeholder="" id="fromdate">
                            </div>
                            <!-- <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="E-mail*">
                            </div>
                            <div class="form-group">
                                <input type="text" name="comment" class="form-control" placeholder="Comment*">
                            </div> -->
                        </div>
                        <div class="sign_btn">
                        <button type="submit">Submit Response</button>
                        </div>
                    </div>
                </from>
            </div>

        </div>
        </div>
    </section>
    <!-- Log In End -->

@endsection
