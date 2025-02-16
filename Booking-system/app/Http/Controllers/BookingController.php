<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function index(Request $request)
    {
        $bookings = Booking::all();
        return view('welcome', compact('bookings'));
    }

    public function filterByDate(Request $request)
    {
        $date = $request->input('date');
        $bookings = Booking::where('booking_date', $date)->get();

        return response()->json($bookings);
    }
}
