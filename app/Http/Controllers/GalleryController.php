<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;
use App\Models\Event;
use App\Models\eventcategories;

class GalleryController extends Controller
{
    public function index()
    {
        $events = Cache::has('events') ? Cache::get('events') : Event::all();
        $allCategories = Cache::has('allCategories') ? Cache::get('allCategories') : eventcategories::all();
        $data = [
            'events' => $events,
            'allCategories' => $allCategories
        ];

        return view('gallery',[...$data]);
    }
}
