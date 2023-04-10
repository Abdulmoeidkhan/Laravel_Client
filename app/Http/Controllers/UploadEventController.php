<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;

class UploadEventController extends Controller
{
    public function eventUpload(Request $req)
    {
        if(Auth::check()){
            $event = new Event();
            $fileName = $req->eventName . "-" . $req->doe . "." . $req->file('eventPicture')->getClientOriginalExtension();
            $req->file('eventPicture')->storeAs("app/public/events/images", $fileName);
    
            $event->name = $req->eventName;
            $event->doe = $req->doe;
            $event->imgPath = $fileName;
            $event->imgAlt = $req->imageText;
            $event->aboutEve = $req->aboutEve;
            $event->eventWebsite = $req->eventWeb;
            $event->fullName = $req->fullEventName;
            $event->save();
            return redirect()->route('eventUpload')->with('success', 'Event uploaded successfully!');
        }else{
            return redirect('admin');
        }

    }
}
