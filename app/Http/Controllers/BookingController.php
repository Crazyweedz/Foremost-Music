<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookingRequest;
use App\Mail\Reservation;
use App\Models\Artist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\HttpFoundation\Response;

class BookingController extends Controller
{
    public function index()
    {
        $artistes = Artist::orderBy('name', 'asc')->get();

        return view('bookings.index', compact('artistes'));
    }

    public function send(BookingRequest $request)
    {
        $booking = $request->all();

        if ($booking['artiste'] === 'Simina Grigoriu') {
            $mails = [setting('site.email_booking_simina'), setting('site.email_booking')];
        } else {
            $mails = setting('site.email_booking');
        }

        Mail::to($mails)->send(new Reservation($booking));

        return redirect()->route('booking.index')->with('success', 'Votre demande de reservation a bien été envoyée.');
    }
}
