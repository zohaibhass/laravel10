<?php

namespace App\Http\Controllers;

use App\Models\Availability;
use Illuminate\Http\Request;

class AvailabilityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $availability_data = Availability::all();

        return view('admin.availability', ['availability_data' => $availability_data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {


        return view('admin.add_availability');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'day' => 'required',
            'opentime' => 'required',
            'closetime' => 'required',
        ]);

        Availability::create([
            'day' => $request->input('day'),
            'open_time' => $request->input('opentime'),
            'close_time' => $request->input('closetime'),
        ]);

        return back()->with('success', 'availability added');
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
    public function edit(string $Availability)
    {

        $update_data = Availability::where('id', $Availability)->first();

        return view('admin.update-availability', ['update_data' => $update_data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $availablity)
    {
        $data_to_update = [
            'day' => $request->input('day'),
            'open_time' => $request->input('opentime'),
            'close_time' => $request->input('closetime'),
        ];

        Availability::where('id', $availablity)->update($data_to_update);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $availablity)
    {
        Availability::where('id', $availablity)->delete();

        return back()->with('success', 'Deleted');
    }

    public function showavailability(){
        $availability_data = Availability::all();
        return view('availability',['availability'=>$availability_data]);
    }
}
