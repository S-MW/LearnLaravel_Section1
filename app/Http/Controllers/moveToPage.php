<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Contact;
use illuminate\support\facades\Validator;
use App\Http\Requests\ContactRequest;

class moveToPage extends Controller
{

    public function home()
    {
        return view('home');
    }

    public function about()
    {  
    return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function submit(ContactRequest $request)
    {
        // create() this method is quick&easy but you have to put [protected $fillable ... ] into the model
        Contact::create($request->all());
        return redirect()->route('contact')->with('status','successful input');

        /*
        // you can save with this way, but the create() is easier than this one.
        $Contact = new Contact;
        $Contact->name =  request()->input('name');
        $Contact->email =  request()->input('email');
        $Contact->subject =  request()->input('subject');
        $Contact->message =  request()->input('message'); 
        $Contact->save();
        */

        dd('done');
        dd(request()->all());
    }
}
