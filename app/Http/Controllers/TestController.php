<?php

namespace App\Http\Controllers;

//use App\Events\RealTimeMessage;

use App\Models\User;
use App\Notifications\TimeNotification;
use Illuminate\Http\Request;

class TestController extends Controller
{

    public function index()
    {

        // event(new RealTimeMessage('Hello World'));
        // return 'Hello World';
        $user = User::first();

        return view('dashboard')->with($user->notify(new TimeNotification('Hello World')));
        // return view('welcome');
        // return view('welcome')->with($user->notify(new TimeNotification('Hello World')));;
    }
}
