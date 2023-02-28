<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class UploadEvent extends Controller
{
    public function uploadEvent(Request $req)
    {
        $event = new Event();
        $fileName = $req->eventName . "-" . $req->doe . "." . $req->file('eventPicture')->getClientOriginalExtension();
        $req->file('eventPicture')->storeAs("evnets/images", $fileName);

        $event->name = $req->eventName;
        $event->doe = $req->doe;
        $event->imgPath = $fileName;
        $event->imgAlt = $req->imageText;
        $event->aboutEve = $req->aboutEve;
        $event->fullName = $req->fullEventName;
        $event->save();
        return "Event Uploaded Successfully";
    }
}
