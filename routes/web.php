<?php

use App\Jobs\ExampleJob;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/testmail', function(){

    Mail::to('fulano@provedor.com')
            ->send(new TestMail);

    return 'Email sended! ';
});

// Route::get('/testjob', function(){
//     ExampleJob::dispatch(['example' => 'value']);

//     return 'ok';
// });

// Route::get('/', function () {
//     return view('welcome');
// });
