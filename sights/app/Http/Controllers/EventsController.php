<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Event;

class EventsController extends Controller
{
    public function index(){
        
        $data = "123";
        $data = Event::all();
        //$data = DB::table('events')->get();
        return view('home', compact('data'));
    }
}
