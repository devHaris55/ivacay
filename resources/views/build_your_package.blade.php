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
                            <div class="form-group">
                                <label for="">Username</label>
                                <input name="username" type="text" class="form-control" placeholder="Username" id="fromdate" required>
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input name="email" type="email" class="form-control" placeholder="Email" id="fromdate" required>
                            </div>
                            <div class="log_input cust">
                                <label for="">Where to go?</label>
                                <select class="sel" name="country_id">
                                    <!-- <option selected="" hidden="" disabled="">Select Country</option> -->
                                    @foreach($countries as $country)
                                        <option value="{{$country->id}}">{{$country->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Start Date</label>
                                <input name="start_date" min="{{Carbon\Carbon::now()->addDay()->format('Y-m-d')}}" value="{{Carbon\Carbon::now()->addDay()->format('Y-m-d')}}" type="date" placeholder="" id="fromdate" required>
                            </div>
                            <div class="form-group">
                                <label for="">End Date</label>
                                <input name="end_date" min="{{Carbon\Carbon::now()->addDay(2)->format('Y-m-d')}}" value="{{Carbon\Carbon::now()->addDay(2)->format('Y-m-d')}}" type="date" placeholder="" id="fromdate" required>
                            </div>
                            <div class="form-group">
                                <label for="">Starting Point</label>
                                <input name="starting_point" type="text" class="form-control" placeholder="Starting Point" id="fromdate" required>
                            </div>
                            <div class="form-group">
                                <label for="">Destination</label>
                                <input name="destination" type="text" class="form-control" placeholder="Destination" id="fromdate" required>
                            </div>
                            <div class="form-group">
                                <label for="">Comment</label>
                                <input type="text" name="comment" class="form-control" placeholder="Comment*" required>
                            </div>
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
