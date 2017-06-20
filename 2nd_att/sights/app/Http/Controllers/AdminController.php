<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class AdminController extends Controller
{
    public function index(){
        return view('adminPanel');

    }

    public function createView(){
        return view('create');
    }

    public function updateView(){
        return view('update');
    }

    public function deleteView(){
        return view('delete');
    }

    public function create(Request $request)
    {
        // $input = $request->all();
        // var_dump($request->title);
        $event = new Event;

        $event->title = $request->title;
        $event->lat = $request->lat;
        $event->long = $request->long;
        $event->description = $request->description;
        $event->type = $request->type;
        $event->date = $request->date;

        $event->save();

        return view('create');
    }

    public function update(Request $request)
    {
        // $input = $request->all();
        // var_dump($request->title);
        $event = Event::find($request->recordId);

        $event->title = $request->title;
        $event->lat = $request->lat;
        $event->long = $request->long;
        $event->description = $request->description;
        $event->type = $request->type;
        $event->date = $request->date;

        $event->save();

        return view('update');
    }

    public function delete(Request $request)
    {
        // var_dump($request);
        $event = Event::find($request->recordId);

        $event->delete();

        return view('delete');
    }

    public function home(){
        return view('welcome');
    }
}
