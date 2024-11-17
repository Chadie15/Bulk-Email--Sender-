<?php

namespace App\Http\Controllers;

use App\Jobs\sendEmailsJob;
use App\Models\User;
use App\Models\Business;
use App\Mail\CompanyMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
//use Illuminate\Support\Facades\Auth;
//use Illuminate\Support\Facades\Hash;
//use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{

    public function user_store(Request $request)
    {
            //validate the request
        $request->validate([
            'name' => ['required', 'max:255', 'min:5', 'string'],
            'email' => 'required|email|unique:users',
            //'password' => ['required', 'min:8', 'confirmed', Password::defaults()],
        ]);
        // create a new user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            //'password' => Hash::make($request->password),
        ]);

        return to_route('Post.index');
    }

    public function show_user ()
    {
        $users = User::all();
        $businesses = Business::all();
        $business_emails = Business::pluck('email')->toArray();
        //return view('send-emails', compact('businesses'));

        //return 'Emails Sent Successfully';
        return view('send-emails', compact('users', 'businesses', 'business_emails'));

    }
    
    public function SendBulkEmails (Request $request)
    {
        $businesses = Business::all();

        $subject = $request->input('subject');

        //Create a new instance of a CompanyMail and pass the subject
        $mail = new CompanyMail( $subject, $businesses);

        // Send the Mail

        foreach($businesses as $business)
        {
            sendEmailsJob::dispatch($business->name, $business->email, $subject);
        }

        return redirect()->back();


    }


   
}
