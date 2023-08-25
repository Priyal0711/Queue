<?php

namespace App\Http\Controllers;
use App\Jobs\SendMailJob;

use Illuminate\Http\Request;

class Emailcontroller extends Controller
{
    public function sendEmail()
    {
        $sendMailData = [
            'email' => 'priyal.chaudhari@brainvire.com',
            'message' => 'This is the message content.',
        ];

        SendMailJob::dispatch($sendMailData);

        return "Email sent to the queue!";
}

}
