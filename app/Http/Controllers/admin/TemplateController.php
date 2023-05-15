<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Template;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $templates = Template::orderBy('id','desc')->get();
        $categories = Category::all();
        return view('admin.templates.templates',compact('templates','categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>['required'],
            'category_id'=>['required'],
            'screen'=>['required']
        ]);
        $image = $request->file('screen');
        $imageName = $image->getClientOriginalName();
        $path = $request->file('screen')->storeAs('public/screens', $imageName);
        $imagePath = "screens/".$imageName;

        $template = new Template();
        $template->name = $request->name;
        $template->file = "storage/$imagePath";
        $template->category_id = $request->category_id;
        $template->save();

        return redirect()->back()->with('success','Դուք հաջողությամբ ավելացրել եք');
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if(Template::find($id)){
            Template::where('id',$id)->delete();
        }
        return redirect()->back()->with('success','Դուք հաջողությամբ ջնջել եք');
    }
}
