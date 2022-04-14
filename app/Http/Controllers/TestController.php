<?php

namespace App\Http\Controllers;

use App\Events\RealTimeMessage;
use Illuminate\Http\Request;

class TestController extends Controller
{

    public function index()
    {

        // event(new RealTimeMessage('Hello World'));
        // return 'Hello World';

        return view('welcome')->with(event(new RealTimeMessage('Hello World')));
    }
}
