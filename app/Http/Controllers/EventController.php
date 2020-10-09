<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::orderBy('date', 'DESC')->get();

        return view('events.index', compact('events'));
    }

    public function show($slug)
    {
        //Récupère l'évènement à partir du slug
        $event = Event::where('slug', $slug)->firstOrFail();

        return view('events.show', compact('event'));
    }
}
