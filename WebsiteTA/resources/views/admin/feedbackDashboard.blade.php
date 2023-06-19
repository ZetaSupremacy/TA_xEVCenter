@extends('layouts.navbar_dashboard')

    @section('content')

        <div class="inner-content-tabbing-visitordetail my-3 py-3">
            <div class="mx-3 mb-3">
                
                <div class="col-md-12">
                    <div class="card border-radius-8">
                        <div class="card-body d-flex align-items-center" style="background-color: #C3C3C3;">
                            <h5 style="font-weight: bold; flex: 1;">Feedback Visitor</h5>
                            <button class="btn btn-primary flex-center px-4 mx-2 border-radius-8 btn-sm" type="submit" id="submit-reservation" style="background-color: #50BFFE; color: white; font-weight: bold; float: right;">Download</button>
                        </div>
                    </div>
                </div>

                <div class="box-reservation-xev my-3 py-5">
                    <div class="card border-radius-8">
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th><input type="checkbox" id="checkAll"></th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Institution Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Testimony</th>
                                        <th scope="col">Advice</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($feedbacks as $feedback)
                                    <tr>
                                        <td><input class="checkItem" type="checkbox"></td>
                                        @php 
                                        $date = substr($feedback->created_at, 0, 10);
                                        @endphp
                                        <th scope="row">{{ $date }}</th>
                                        <td>test</td>
                                        <td>test email</td>
                                        <td>{{ $feedback->testimoni }}</td>
                                        <td>{{ $feedback->advice }}</td>
                                    </tr>                                    
                                    @endforeach
                                    </tbody>
                                </table>
                                <div class="col-md-12">
                                    <button class="btn btn-primary flex-center mt-3 py-1 px-4 mx-2 border-radius-8 btn-sm" type="submit" id="submit-reservation" style="background-color: #CE2500; color: white; font-weight: bold; float: left;">Delete</button>
                                    <i class="fa-solid fa-circle-chevron-right fa-xl flex-center mt-4 py-2 px-3" style="color: #000000; float: right;"></i>
                                    <i class="fa-solid fa-circle-chevron-left fa-xl flex-center mt-4 py-2 px-3" style="color: #000000; float: right;"></i>
                                </div>
                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
            
@endsection