@extends('layouts.app')
@section('content')
<style>
    h1{
        color:brown !important;
        font-weight: 900 !important;
    }
</style>
<br><br><br>
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
<a href="/home" class="btn btn-primary"> Go back</a>
<br>
<br>
<h1>{!!$booking->FirstName!!}<span>{!!$booking->LastName!!}</span></h1>
<div>
    Message-{!!$booking->Message!!}
</div>
<hr>
<div>
        Phone-{!!$booking->Phone!!}
    </div>
<hr>
<p>Appointment on {{$booking->Date}} At {{$booking->Time}} </p>
<hr>
<div class="container">
    <div class="row">
    <div class="col-md-6">
        @if(!Auth::guest())
<a href="{{$booking->id}}/edit" class="btn btn-success">Edit</a>
    </div>
    <div class="col-md-6 text-right">
{!! Form::open(['action' => ['BookingController@destroy', $booking->id], 'method' => 'POST'])!!}
{{Form::hidden('_method', 'DELETE')}}
{{ Form::submit ('Delete', ['class' => 'btn btn-danger'])}}
{!! Form::close()!!}
    </div>
</div>
</div>
</div>
            </div></div>
@endif
@endsection