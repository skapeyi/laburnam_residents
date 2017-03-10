<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //View all bookings made
        $bookings = Booking::orderBy('id','DESC')->get()->toArray();
        $total_bookings = DB::table('bookings')->count();
        $not_contacted_not_confirmed = DB::table('bookings')->where(['confirmed'=>0,'contacted' =>0])->count();
        $contacted_not_confirmed = DB::table('bookings')->where(['confirmed'=>0,'contacted' =>1])->count();
        $contacted_confirmed = DB::table('bookings')->where(['confirmed'=>1,'contacted' =>1])->count();
        $contacted = DB::table('bookings')->where('contacted',1)->count();
        return view('booking.index', compact('bookings','confirmed','not_contacted_not_confirmed','contacted_not_confirmed','contacted_confirmed'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('booking.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $booking = Booking::create([
          'name' => $request->name,
          'check_in' => $request->check_in,
          'check_out' => $request->check_out,
          'housing_type' => $request->housing_type,
          'adults' => $request->adults,
          'children' => $request->children,
          'email' => $request->email,
          'phone' => $request->phone,
          'more_info' => $request->more_info
        ]);
        flash('Your booking has been received. One of us will be in touch','success');
        return redirect('/make-a-booking');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
