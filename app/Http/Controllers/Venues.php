<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\eventcategories;
use App\Models\venue;

class Venues extends Controller
{
    public function venues()
    {
        $events = Cache::has('events') ? Cache::get('events') : Event::all();
        $venues = venue::all();
        $allCategories = Cache::has('allCategories') ? Cache::get('allCategories') : eventcategories::all();
        $data = [
            'events' => $events,
            'allCategories' => $allCategories,
            'venues'=> $venues
        ];
        return view("venues", [...$data]);
    }
}
