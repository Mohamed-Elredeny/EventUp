<?php

namespace App\Http\Controllers\Users\Admin;


use App\Http\Controllers\Controller;
use App\models\Hall;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HallsController extends Controller
{
    public function __sleep()
    {
        $ref   = new \ReflectionClass(__CLASS__);
        $props = $ref->getProperties(\ReflectionProperty::IS_PROTECTED);

        $serialize_fields = array();

        foreach ($props as $prop) {
            $serialize_fields[] = $prop->name;
        }

        return $serialize_fields;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Hall::latest()->get();
        return view('admin.sections.halls.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sections.halls.create');

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
            'title'=> 'required',
            'description'=> 'required',
            'address'=> 'required',
            'price_per_hour'=> 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInputs($request->all());
        } else {

            $coverName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('/assets/images/halls'), $coverName);

            $chief = Hall::create([
                'title' =>$request['title'],
                'description'=>$request['description'],
                'image'=>$coverName,
                'address'=>$request['address'],
                'price_per_hour'=>$request['price_per_hour'],

            ]);//Create new User


            return redirect()->route('halls.index')->with('success', 'The User has created successfully.');
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
        $category = Hall::find($id);
        return view('admin.sections.halls.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Hall::find($id);
        return view('admin.sections.halls.edit', compact('category'));
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
        $package = Hall::find($id);
        $rules = [
            'title'=> 'required',
            'description'=> 'required',
            'address'=> 'required',
            'price_per_hour'=> 'required',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        } else {
            if ($request->image != $package->image) {
                unlink(public_path('assets\images\halls') . '/' . $package->image);
                $coverName = time() . '.' . $request->image->getClientOriginalExtension();
                $request->image->move(public_path('/assets/images/halls'), $coverName);
            } else {
                $coverName = $request->image;
            }

            $package->update([
                'title' => $request->title,
                'description' => $request->description,
                'address' => $request->address,
                'price_per_hour' => $request->price_per_hour,
                'image' => $coverName
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
     /*   //You can not delete subs
        $users = Hall::where('package_id',$id)->get();
        if(count($users) > 0 ){
            return redirect()->back()->with('message','You can not delete this package');
        }else {*/
            $old = Hall::find($id);
            $old->delete();
            return redirect()->route('halls.index')->with('message', 'Deleted successfully');
  //      }
    }
}
