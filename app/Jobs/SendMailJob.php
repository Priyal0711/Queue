<?php 

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailDemo;

class SendMailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $sendMailData;

    public function __construct($sendMailData)
    {
        $this->sendMailData = $sendMailData;
    }

    public function handle()
    {
        Mail::to($this->sendMailData['email'])
        ->send(new SendMailDemo($this->sendMailData['message']));
    }
}
