<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\eventcategories;
use Illuminate\Support\Facades\Cache;
use App\Models\Contact;

class ContactController extends Controller
{


    public function index()
    {
        $events = Cache::has('events') ? Cache::get('events') : Event::all();
        $allCategories =  Cache::has('allCategories') ? Cache::get('allCategories') : eventcategories::all();
        $data = [
            'events' => $events,
            'allCategories' => $allCategories
        ];
        return view('contact', [...$data]);
    }
    public function ContactUsForm(Request $request) {
        // Form validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'subject'=>'required',
            'message' => 'required'
         ]);
        //  Store data in database
        $req = Contact::create($request->all());
        echo $req;
        //  Send mail to admin
        Mail::send('mail', array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'subject' => $request->get('subject'),
            'user_query' => $request->get('message'),
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('info@badarexpo.com', 'Admin')->subject($request->get('subject'));
        });
        return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
    }
}
