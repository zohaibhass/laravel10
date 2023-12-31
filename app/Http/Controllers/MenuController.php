<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $menu_data= menu::all();

        return view('admin.availablemenu',['menu_data'=>$menu_data]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $menu_category=Category::all();

        return view('admin.add-menu',['menu_category'=>$menu_category]);


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

$request->validate([
'title'=>'required|max:20',
'image'=>'nullable',
'category'=>'',
'price'=>'required|numeric',
'description'=>'required|max:50',
]);

$image_path=$request->file('image')->storeAs('uploads','menuimage.jpg','public');

menu::create([
    'title'=>$request->input('title'),
    'image'=>$image_path,
    'category_id'=>$request->input('category'),
    'price'=>$request->input('price'),
    'description'=>$request->input('description'),

]);

return back()->with('success','Menu Added successfully');

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
    public function edit(string $menu)
    {
        $menu_data = Menu::where('id',$menu)->with('categories')->get();

        return view('admin.update_menu', ['menudata' => $menu_data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $update_data=['title','image','price','category','description'];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $menu)
    {
        Menu::where('id',$menu)->delete();
        return back()->with('success','menu deleted sucessfully');
    }
}
