<?php

namespace App\Http\Controllers\Users\Admin;

use App\Http\Controllers\Controller;
use App\models\Event;
use App\models\Hall;
use App\models\Organizer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Event::latest()->get();
        return view('admin.sections.events.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $halls =Hall::latest()->get();
        $organizers  = Organizer::latest()->get();
        return view('admin.sections.events.create',compact('halls','organizers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'title' => 'required',
            'description'=>'required',
            'price'=>'required',
            'from'=>'required',
            'to'=>'required',
            'all_ticket'=>'required',
            'hall_id'=>'required',
            'organizer_id'=>'required'
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInputs($request->all());
        } else {
            $coverName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('/assets/images/events'), $coverName);

            $chief = Event::create([
                'title' => $request->title,
                'description'=> $request->description,
                'image'=> $coverName,
                'price'=> $request->price,
                'from'=> $request->from,
                'to'=> $request->to,
                'all_ticket'=> $request->all_ticket,
                'available_ticket'=>$request->all_ticket,
                'hall_id'=> $request->hall_id,
                'organizer_id'=> $request->organizer_id
            ]);//Create new User


            return redirect()->route('events.index')->with('success', 'The User has created successfully.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $halls =Hall::latest()->get();
        $organizers  = Organizer::latest()->get();
        $category = Event::find($id);
        return view('admin.sections.events.show', compact('category','halls','organizers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $halls =Hall::latest()->get();
        $organizers  = Organizer::latest()->get();
        $category = Event::find($id);
        return view('admin.sections.events.edit', compact('category','organizers','halls'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $package = Event::find($id);
        $rules = [
            'title' => 'required',
            'description'=>'required',
            'price'=>'required',
            'from'=>'required',
            'to'=>'required',
            'all_ticket'=>'required',
            'hall_id'=>'required',
            'organizer_id'=>'required'
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        } else {
            if ($request->image != $package->image) {
                unlink(public_path('assets\images\events') . '/' . $package->image);
                $coverName = time() . '.' . $request->image->getClientOriginalExtension();
                $request->image->move(public_path('/assets/images/events'), $coverName);
            } else {
                $coverName = $request->image;
            }

            $package->update([
                'title' => $request->title,
                'description'=> $request->description,
                'image'=> $coverName,
                'price'=> $request->price,
                'from'=> $request->from,
                'to'=> $request->to,
                'all_ticket'=> $request->all_ticket,
                'available_ticket'=> $request->all_ticket,
                'hall_id'=> $request->hall_id,
                'organizer_id'=> $request->organizer_id
            ]);

        }
        return redirect()->back()->with('message', 'Done Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $old = Event::find($id);
        $old->delete();
        return redirect()->route('events.index')->with('message', 'Deleted successfully');
    }
}
