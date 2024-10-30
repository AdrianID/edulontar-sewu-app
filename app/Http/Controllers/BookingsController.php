<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Bookings;
use App\Models\Package;
use App\Models\Packages;
use Illuminate\Http\Request;

class BookingsController extends Controller
{
    public function index()
    {
        $bookings = Bookings::with('package')->get();
        return view('bookings.index', compact('bookings'));
    }

    public function create()
    {
        $packages = Packages::all();
        return view('bookings.create', compact('packages'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_name' => 'required|string|max:255',
            'package_id' => 'required|exists:packages,id',
            'booking_date' => 'required|date',
            'ticket_quantity' => 'required|integer|min:1',
        ]);

        $validatedData['ticket_number'] = 'TIKET-' . strtoupper(uniqid());
        $validatedData['status'] = 'pending';

        Bookings::create($validatedData);
        return redirect()->route('bookings.index')->with('success', 'Booking created successfully.');
    }

    public function show(Bookings $booking)
    {
        return view('bookings.show', compact('booking'));
    }

    public function approve(Bookings $booking)
    {
        $booking->update(['status' => 'approved']);
        return redirect()->route('bookings.index')->with('success', 'Booking approved.');
    }

    public function reject(Bookings $booking)
    {
        $booking->update(['status' => 'rejected']);
        return redirect()->route('bookings.index')->with('success', 'Booking rejected.');
    }

    public function destroy(Bookings $booking)
    {
        $booking->delete();
        return redirect()->route('bookings.index')->with('success', 'Booking deleted successfully.');
    }
}
