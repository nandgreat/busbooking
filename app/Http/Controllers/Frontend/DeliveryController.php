<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\DeliveryHistory;
use App\Models\Trip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DeliveryController extends Controller
{

    public function deliveryPage(Request $request)
    {
        $details = Trip::with('bus')->find($request->trip_id);
        $passengers = $request->passengers;
        $amount = $request->amount;

        $deliveryMenu = "book_delivery";

        return view('users.pages.delivery', compact('deliveryMenu'));
    }

    public function processDelivery(Request $request)
    {
        $details = Trip::with('bus')->find($request->trip_id);
        $passengers = $request->passengers;
        $amount = $request->amount;

        $deliveryMenu = "book_delivery";

        Log::info($request->all());

        $delivery = DeliveryHistory::create([
            'user_id' => auth()->user()->id,
            'reference_code' => "SST" . rand(10000, 99999),
            'delivery_from' => $request->delivery_from,
            'delivery_to' => $request->delivery_to,
            'delivery_date' => $request->delivery_date,
            'delivery_amount' => "113",
            'receiver_name' => $request->receiver_name,
            'receiver_phone' => $request->receiver_phone,
            'delivery_item' => $request->delivery_item
        ]);

        $request->session()->flash('success', 'Delivery Booked successfully');
        $request->session()->flash('delivery', $delivery->reference_code);


        // return view('users.pages.delivery', compact('delivery'));

        return redirect()->route('user.book.delivery')
            ->with('delivery', $delivery->reference_code);

        // return redirect()->route('user.book.delivery', ['delivery' => $delivery, 'success' => 'Delivery Booked successfully']);

        // return view('users.pages.delivery', compact('deliveryMenu'));
    }

    public function checkDeliveryStatus(Request $request)
    {
        $delivery = DeliveryHistory::where('reference_code', $request->delivery_code)->first();

        if (!$delivery) {
            return redirect()->route('user.book.delivery_status')
                ->with('error', "Invalid Delivery reference");
        }

        return view('users.pages.delivery_status', compact('delivery'));
    }

    public function deliveryStatus(Request $request)
    {
        $details = Trip::with('bus')->find($request->trip_id);
        $passengers = $request->passengers;
        $amount = $request->amount;

        $deliveryMenu = "book_delivery";

        return view('users.pages.delivery_status', compact('deliveryMenu'));
    }

    public function trackDelivery(Request $request)
    {
        $details = Trip::with('bus')->find($request->trip_id);
        $passengers = $request->passengers;
        $amount = $request->amount;

        $deliveryMenu = "book_delivery";

        return view('users.pages.track_delivery', compact('deliveryMenu'));
    }

    public function deliveryHistory(Request $request)
    {

        $deliveries = DeliveryHistory::where('user_id', auth()->user()->id)->get();

        $deliveryMenu = "book_delivery";

        return view('users.pages.delivery_history', compact('deliveries'));
    }

    public function customerService(Request $request)
    {
        $details = Trip::with('bus')->find($request->trip_id);
        $passengers = $request->passengers;
        $amount = $request->amount;

        $deliveryMenu = "book_delivery";

        return view('users.pages.customer_service', compact('deliveryMenu'));
    }

    public function reportsAndFeedbacks(Request $request)
    {
        $details = Trip::with('bus')->find($request->trip_id);
        $passengers = $request->passengers;
        $amount = $request->amount;

        $deliveryMenu = "book_delivery";

        return view('users.pages.report_and_feedback', compact('deliveryMenu'));
    }
}
