@extends('layouts.navbar_dashboard')

    @section('content')
        <div class="inner-content-tabbing-visitordetail my-3 py-3">
            <div class="mx-3 mb-3">
                
                <div class="col-md-12">
                    <div class="card border-radius-8">
                        <div class="card-body d-flex align-items-center" style="background-color: #C3C3C3;">
                            <h2 style="font-weight: bold;">Setting - Reservation</h2>
                        </div>
                    </div>
                </div>
        
                <div class="col-md-12 mt-3">
                    <div class="card" style="background-color: #C3C3C3;">
                            <div class="card-body d-flex align-items-center mt-4" style="background-color: #FFFFFF; border: 15px solid; border-color: #C3C3C3;">
                                <h4 style="font-weight: bold; flex: 1;">Allow Days</h4>
                                <button class="btn btn-primary flex-center px-5 mx-2 border-radius-8 btn-sm" type="submit" id="submit-reservation" style="background-color: #FE8F50; color: white; font-weight: bold; float: right;">Edit</button>
                            </div>
                            <div class="card-body d-flex align-items-center mt-4" style="background-color: #FFFFFF; border: 15px solid; border-color: #C3C3C3;">
                                <h4 style="font-weight: bold; flex: 1;">Date Interval</h4>
                                <button class="btn btn-primary flex-center px-5 mx-2 border-radius-8 btn-sm" type="submit" id="submit-reservation" style="background-color: #FE8F50; color: white; font-weight: bold; float: right;">Edit</button>
                            </div>
                            <div class="card-body d-flex align-items-center mt-4 mb-4" style="background-color: #FFFFFF; border: 15px solid; border-color: #C3C3C3;">
                                <h4 style="font-weight: bold; flex: 1;">Quota</h4>
                                <button class="btn btn-primary flex-center px-5 mx-2 border-radius-8 btn-sm" type="submit" id="submit-reservation" style="background-color: #FE8F50; color: white; font-weight: bold; float: right;">Edit</button>
                            </div>
                    </div>
                </div>
        
            </div>
        </div>
        @endsection