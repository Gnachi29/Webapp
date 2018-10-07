@extends('layouts.app')

@section('content')
<style>
    h3
    {
        color:brown !important;
        font-weight: 700 !important;
    }
    </style>
    <br><br><br>
    
    <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Dashboard</div>
        
                        <div class="card-body">
                        <h3>Bookings</h3>
                        <hr> 
                        @include('inc.messages')
                        @if(count($Bookings) > 0)
                          <table class = "table table-striped">
                                <tr>
                                <th>Id</th>
                                    <th>FirstName</th>
                                    <th>Phone</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                @foreach($Bookings as $Booking)
                                <tr>
                              <td>{{$Booking->id}}</td>
                              <td>{{$Booking->FirstName}}</td>
                              <td>{{$Booking->Phone}}</td>
                             <td><a href="Booking/{{$Booking->id}}" class= "btn btn-default">Show</td>
                                  <td>
                                        {!! Form::open(['action' => ['BookingController@destroy', $Booking->id], 'method' => 'POST'])!!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{ Form::submit ('Delete', ['class' => 'btn btn-danger'])}}
                                        {!! Form::close()!!}
                                  </td>
                              </tr> 
                              @endforeach
                            </table>
                            @else
                            <div>No Bookings Yet</div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
