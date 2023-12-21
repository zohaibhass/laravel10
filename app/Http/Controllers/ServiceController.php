<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $show_service = Service::all();

        return view('admin.services', ['show_service' => $show_service]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()

    {

        return view('admin\add_service');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:20',
            'image' => 'required',
            'description' => 'required|max:50',
        ]);


        $imagePath = $request->file('image')->storeAs('uploads', 'serviceimage.png', 'public');


        Service::create([
            'title' => $request->input('title'),
            'image' => $imagePath,
            'description' => $request->input('description'),

        ]);

        return  back()->with('success', 'service added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $service)
    {
        $update_data=Service::where('id',$service)->first();

        return view('admin.update_service',['update_data'=>$update_data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $service)

    {
$request->validate(['image'=>'nullable']);

        $update_image=$request->file('image')->storeAs('uploads','serviceimage.png','public');

        $service_to_update=['title'=>$request->input('title'),
        'image'=>$update_image,
        'description'=>$request->input('description')];

        Service::first()->update($service_to_update);
        return back()->with('success','service updated successfully');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $service)
    {
         Service::where('id', $service)->delete();



        return back()->with('success', 'deleted successfully');
    }
}
