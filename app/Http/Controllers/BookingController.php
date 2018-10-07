<?php

namespace App\Http\Controllers;

use App\Booking;
use Illuminate\Http\Request;
use DB;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Booking');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'FirstName' => 'required',
            'Date' => 'required',
            'Message' => 'required',
            'Time' => 'required'
        ]);

        $Booking = new Booking();
        $Booking->FirstName = $request->input('FirstName');
        $Booking->LastName = $request->input('LastName');
        $Booking->Date = $request->input('Date');
        $Booking->Time = $request->input('Time');
        $Booking->Phone = $request->input('Phone');
        $Booking->Message = $request->input('Message');
        $Booking->save();
    return redirect('/create')->with('success', ' Appointment Booked Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking, $id)
    {
        $booking = Booking::find($id);
        return view('viewBooking')->with('booking', $booking);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking, $id)
    {
        $Booking = Booking::find($id);
        return view('editbooking')->with('Booking', $Booking);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $this->validate($request,[
            'FirstName' => 'required',
            'Date' => 'required',
            'Message' => 'required',
            'Time' => 'required'
        ]);

        $Booking = Booking::find($id);
        $Booking->FirstName = $request->input('FirstName');
        $Booking->LastName = $request->input('LastName');
        $Booking->Date = $request->input('Date');
        $Booking->Time = $request->input('Time');
        $Booking->Phone = $request->input('Phone');
        $Booking->Message = $request->input('Message');
        $Booking->save();
    return redirect('home')->with('success', ' Appointment Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking, $id)
    {
        $booking = Booking::Find($id);
        $booking->delete();
        return redirect('home')->with('success', 'Booking has been deleted');

    }
}
