<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Email;
use App\Models\Business;
use App\Mail\CompanyMail;
use App\Jobs\sendEmailsJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
//use Illuminate\Support\Facades\Auth;
//use Illuminate\Support\Facades\Hash;
//use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    public function user_store(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => ['required', 'max:255', 'min:5', 'string'],
            'email' => 'required|email|unique:users',
        ]);

        // Create a new user
        User::create([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return to_route('Post.index');
    }

    public function show_user()
    {
        $users = User::all();
        $businesses = Business::all();
        $business_emails = Business::pluck('email')->toArray();

        return view('send-emails', compact('users', 'businesses', 'business_emails'));
    }

    public function SendBulkEmails(Request $request)
    {
        // Validate the request
        $request->validate([
            'subject' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        // Create a new Email record
        $email = Email::create([
            'subject' => $request->subject,
            'body' => $request->body,
        ]);

        // Get all businesses
        $businesses = Business::all();

        // Dispatch jobs to send emails
        foreach ($businesses as $business) {
            sendEmailsJob::dispatch($business->name, $business->email, $email->subject);
        }

        return redirect()->back()->with('success', 'Emails sent successfully!');
    }
}
