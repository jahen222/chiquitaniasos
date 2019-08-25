<?php

namespace App\Http\Controllers\Admin;

use App\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::paginate(20);

        return view('admin.events.index', compact('events'));
    }

    public function create()
    {

        return view('admin.events.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $event = new Event;

        if(isset($input['image'])){
            $imageName = time().'.'.$request->file('image')->getClientOriginalExtension();
            $request->image->move(public_path('images/events'), $imageName);
            $event->path_to_image = '/images/events/'.$imageName;
        }
        $event->title = $request->title;
        $event->start = $request->start;
        $event->end = $request->end;
        $event->description = $request->description;
        $event->save();

        return back();
    }

    public function edit($id)
    {
        $event = Event::find($id);

        return view('admin.events.edit', compact('event'));
    }

    public function update(Request $request, $id)
    {
        $event = Event::find($id);
        $input = $request->all();
        if(isset($input['image'])){
            $imageName = time().'.'.$request->file('image')->getClientOriginalExtension();
            $request->image->move(public_path('images/events'), $imageName);
            $event->path_to_image = '/images/events/'.$imageName;
        }
        $event->title = $request->title;
        $event->start = $request->start;
        $event->end = $request->end;
        $event->description = $request->description;
        $event->update();

        return back();
    }


    public function destroy($id)
    {
        Event::destroy($id);

        $events = Event::paginate(20);

        return view('admin.events.index', compact('events'));
    }
}
