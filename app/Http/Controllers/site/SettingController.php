<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Project;
use App\Models\Template;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $template = Order::with('project')->where('id',$id)->first();
        return view('profile.setting', compact('template'));
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

        $order = Project::where('order_id', $id)->update([
            'company_name' => $request->name,
            'domain' => $request->domain,
            'colors' => json_encode($request->color),
        ]);

        if($request->hasFile('logo')){
            $image = $request->file('logo');
            $imageName = $image->getClientOriginalName();
            $path = $request->file('logo')->storeAs('public/logos', $imageName);
            $imagePath = "logos/" . $imageName;

            Project::where('order_id', $id)->update([
                'logo' => "storage/$imagePath"
            ]);
        }
        return redirect('profile')->with('success', 'Դւք հաջողությամբ կատարեցիք կարգավորումները');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
