<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\eventcategories;

class EventPageController extends Controller
{
    public function eventPage(Request $req)
    {
        $EventData = Event::all()->sortBy("doe");
        $futureEvents = [];
        $pastEvents = [];
        $name = $req->name;
        foreach ($EventData as $key => $event) {
            $diff = date_diff(date_create(substr(date(DATE_ATOM), 0, 10)), date_create($event->doe));
            $diff->format("%R%a") >= 0
                ? array_push($futureEvents, $event)
                : array_push($pastEvents, $event);
        };
        return in_array($name, ["upComingEvents", "pastEvents"], TRUE) ?
            call_user_func(function () use ($name, $futureEvents, $pastEvents) {
                // return (($name == "upComingEvents") ? $futureEvents : $pastEvents);
                $allCategories = eventcategories::all();
                // $categoriesImages = FileUpload::where('categories', $name)->get();
                $data = [
                    'allCategories' => $allCategories,
                    'events' => ($name == "upComingEvents") ? $futureEvents : $pastEvents,
                    'type'=> ($name == "upComingEvents") ? 'Future' : "Past",
                ];
                return view("events", [...$data]);
            })
            : abort(404);
    }
}
