<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\eventcategories;

class KeyManagement extends Controller
{
    public function keyManagement()
    {
        $events = Cache::has('events') ? Cache::get('events') : Event::all();
        $allCategories = Cache::has('allCategories') ? Cache::get('allCategories') : eventcategories::all();
        $data = [
            'events' => $events,
            'allCategories' => $allCategories
        ];

        return view("keyManagement",[...$data]);
    }
}
