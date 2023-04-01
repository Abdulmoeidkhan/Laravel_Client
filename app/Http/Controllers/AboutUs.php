<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\eventcategories;
use Illuminate\Support\Facades\Cache;

class AboutUs extends Controller
{
    public function aboutUs()
    {
        $events = Cache::has('events') ? Cache::get('events') : Event::all();
        $allCategories =  Cache::has('allCategories') ? Cache::get('allCategories') : eventcategories::all();
        $data = [
            'events' => $events,
            'allCategories' => $allCategories
        ];
        return view("about", [...$data]);
    }
}
