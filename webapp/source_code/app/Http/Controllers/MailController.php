<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactInfo\StoreContactInfoRequest;
use App\Http\Requests\Subscribers\StoreSubscriberRequest;
use App\Models\Contact_us;
use Illuminate\Http\Request;
use Mail;
use Alert;
use Illuminate\Support\Facades\Route;
use Session;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class MailController extends Controller
{

    public function contact_us_massage()
    {
        return view('emails/contactfeedback');
    }

    public function submit_contact_info(Request $request)
    {

        $checkifmodal = $request->checkifmodal;

              $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'max:20',
            'clientornot' => 'required',
            'message' => 'required',
            'g-recaptcha-response' => 'required',
        ]);


        $data = array(
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'clientornot' => $request->clientornot,
            'bodyMessage' => $request->message,
        );
// dd('Hiiiiiiiiii');
        Mail::send('emails.contact', $data, function ($message) use ($data) {
            $message->from('info@akinalaw.com', 'akinalaw.com Contact Form');
            $message->to('info@akinalaw.com', 'Management');
            $message->subject('Mail from the cantact form of akinalaw.com');
        });

        Mail::send('emails.contactfeedback', $data, function ($message) use ($data) {
            $message->from('info@akinalaw.com', 'akinalaw.com');
            $message->to($data['email']);
            $message->subject('Thank you for contacting us');
        });

        $Contactus = new Contact_us();
        $Contactus->first_name = $request->first_name;
        $Contactus->last_name = $request->last_name;
        $Contactus->email = $request->email;
        $Contactus->phone = $request->phone;
        $Contactus->clientornot = $request->clientornot;
        $Contactus->message = $request->message;
        $Contactus->save();

        if (Mail::failures()) {  // check for failures
                echo 'failed';
            }
            else{ // no failures
            echo 'sent';
            }



    }


    }

