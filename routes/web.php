<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Emailcontroller;

Route::get('/send-email', [Emailcontroller::class, 'sendEmail'])->name('send.email');


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/send-mail', function(){

//     $userMail = 'priyalchaudhari01@gmail.com';

//     dispatch(new App\Jobs\SendMailJob($userMail));

//     dd('Sent mail Succesfully');
// });