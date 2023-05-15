<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Trip;

class ShowBookingInfoController extends Controller
{
    public function showbookinginfo()
    {
        $details = Booking::with('bookings_seat')->where('user_id', auth()->user()->id)->orderBy('id', 'DESC')->get();
        // dd($details);
        // dd(auth()->user());
        return view('users.pages.showbookinginfo', compact('details'));
    }
    public function showTripInfo($tripId)
    {
        $details = Trip::with('bus')->find($tripId);
        // dd($details);
        // dd(auth()->user());
        return view('users.pages.showtripinfo', compact('details'));
    }
    public function viewinfo($id)
    {
        $detail = Booking::find($id);

        return view('users.pages.viewinfo', compact('detail'));
    }
}
