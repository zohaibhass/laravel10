<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $member_data = Member::all();
        return view('admin.members', ['member_data' => $member_data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.add-member');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:20',
            'adress' => 'required',
            'position' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|max:50'
        ]);

        if ($request->hasFile('image')) {
            $uploadedFile = $request->file('image');
            $uniqueFilename = $uploadedFile->getClientOriginalName();

            $imagePath = $uploadedFile->storeAs('uploads', $uniqueFilename, 'public');
        } else {
            $imagePath = null; // No image provided
        }

        Member::create([
            'name' => $request->input('name'),
            'position' => $request->input('position'),
            'adress' => $request->input('adress'),
            'image' => $imagePath,
            'description' => $request->input('description'),
        ]);

        return back()->with('success', 'member added sucessfully');
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
    public function edit(string $Member)
    {

        $member_data = Member::where('id', $Member)->first();

        return view('admin.update_member', ['member_data' => $member_data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $Member)
    {

        $request->validate([
            'name' => 'required|max:20',
            'adress' => 'required',
            'position' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|max:50'
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $uniquefilename = $file->getClientOriginalName();
            $image_path = $file->storeAs('uploads', $uniquefilename, 'public');
        } else {

            $image_path = null;
        }
        $update_data = [
            'name' => $request->input('name'),
            'position' => $request->input('position'),
            'adress' => $request->input('adress'),
            'image' => $image_path,
            'description' => $request->input('description'),
        ];
        Member::where('id', $Member)->update($update_data);

        return back()->with('success', 'member updated sucessfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Member::first()->delete();
        return back()->with('success', 'member deleted sucessfully');
    }

    public function showmembers(){

        $show_data=Member::all();

        return view('team',['show_data'=>$show_data]);

    }
}


