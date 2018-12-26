<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public static function sendVerification(Request $request = null, $data = null)
    {
        $mail = Mail::later(2, 'emails.welcome', $data, function ($message) {
            $message->to($data->email, $data->last_name)->subject('Welcome');
        });
        Log::info('email verificacion', ['email' => $email]);
    }
}
