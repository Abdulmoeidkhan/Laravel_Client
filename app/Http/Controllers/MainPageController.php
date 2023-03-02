<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\FileUpload;
use App\Models\eventcategories;

class MainPageController extends Controller
{
    public function index()
    {
        // Events Fetchin and filtering
        $events = Event::all();
        $futureEvents = [];
        $pastEvents = [];
        foreach ($events as $key => $event) {
            $diff = date_diff(date_create(substr(date(DATE_ATOM), 0, 10)), date_create($event->doe));
            $diff->format("%R%a") > 1
                ? array_push($futureEvents, $event)
                : array_push($pastEvents, $event);
        }

        // Categories Fetching and filtering only for first page
        $allCategories = eventcategories::all();
        $categories = FileUpload::distinct()->get(['categories']);
        $categoriesImage = [];
        $categoriesArray = [];
        $categoriesArrayCount = [];
        foreach ($categories as $key => $category) {
            array_push($categoriesArray, str_replace("-", " ", $category['categories']));
            array_push($categoriesImage, (FileUpload::where('categories', $category['categories'])->firstOrFail('filename'))->filename);
            array_push($categoriesArrayCount, FileUpload::where("categories", $category['categories'])->count());
            // $categoriesArrayCount[$key]=$category['categories'];
        }
        // print_r($categoriesArray);
        // print_r($categoriesArrayCount);
        // print_r($categoriesImage);
        // $count = FileUpload::where()->get(['categories']);
        // echo($categories);

        $data = [
            'events' => $events,
            'futureEvents' => $futureEvents,
            'pastEvents' => $pastEvents,
            'categoriesArray' => $categoriesArray,
            'categoriesArrayCount' => $categoriesArrayCount,
            'categoriesImage' => $categoriesImage,
            'allCategories' => $allCategories
        ];
        return view("welcome", [...$data]);
    }
}
