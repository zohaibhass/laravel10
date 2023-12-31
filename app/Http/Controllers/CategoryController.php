<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Menu;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $categories= Category::all();

       return view('admin.category',['categories'=>$categories]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.add-category');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:20',
            'image' => 'nullable',
            'tagline' => 'required',
        ]);
        $imageFile = $request->file('image');
        $uniqueFileName = $imageFile->getClientOriginalName();
        $image_path = $imageFile->storeAs('uploads', $uniqueFileName, 'public');

        Category::create([
            'title' => $request->input('title'),
            'image' => $image_path,
            'tag' => $request->input('tagline'),
        ]);

        return back()->with('success', 'Category Added Successfully');
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
    public function edit(string $id)
    {
        $update_cat=Category::find($id);
        return view('admin.update_category',['update_cat'=>$update_cat]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $uniquefilename=$request->getClientOriginalName();
        $image_path=$request->file('image')->storeAs('uploads',$uniquefilename,'public');

        $update_data=['title',$image_path,'tag'];


        Category::where('id',$id)->update($update_data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $category)
    {
        Category::first()->delete();
        return back()->with('success','category deleted sucessfully');
    }

    public function showmenu(){
        $menu_data=Menu::all();
        $category_data=Category::all();
        return view('menu',['category'=>$category_data,
                               'menu'=> $menu_data]);
    }
}
