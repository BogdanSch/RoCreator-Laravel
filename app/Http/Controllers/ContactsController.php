<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Config;

class ContactsController extends Controller
{
    public function index()
    {
        return view("contacts/contacts");
    }
    public function sendMail(ContactRequest $request)
    {
        $recipientEmail = Config::get('mail.from.address');
        try {
            Mail::to($recipientEmail)->send(new ContactMail($request->fullName, $request->email, $request->subject, $request->message));
            return redirect()->route('mailStatus', ['mailStatus' => 'success']);
        } catch (Exception $e) {
            return redirect()->route('mailStatus', ['mailStatus' => 'error']);
        }
    }
    public function mailStatusResponse(Request $request)
    {
        return view('contacts/mail-status', $request);
    }
}