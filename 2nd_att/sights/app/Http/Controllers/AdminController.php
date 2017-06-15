<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class AdminController extends Controller
{
    public function index(){
        $action
        $location
        $title
        $description

    }

    public function store(Request $request)
    {

        $event = new Event;

        $event->title = $request->title;
        $event->lat = $request->lat;
        $event->long = $request->long;
        $event->description = $request->description;
        $event->type = $request->type;

        $event->save();
    }
}
