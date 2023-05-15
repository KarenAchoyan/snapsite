<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Project;
use App\Models\Template;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request,$id)
    {
        $request->validate([
            'name'=>'required',
            'phone'=>'required',
            'email'=>'required'
        ]);

        $order = new Order();
        $order->template_id = $id;
        $order->phone = $request->phone;
        $order->email = $request->email;
        $order->name = $request->name   ;
        $order->user_id = Auth::id();
        $order->save();

        $project = new Project();
        $project->user_id = Auth::id();
        $project->template_id = $id;
        $project->company_name = "";
        $project->domain = "";
        $project->end_time = date("Y-m-d");
        $project->logo = "";
        $project->colors = "";
        $project->order_id = $order->id;
        $project->save();

        return redirect('profile')->with('success','Ձեր հայտը ուղարկված է, մեր մասնագետները կկապնվեն ձեզ հետ');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $template = Template::find($id);
        return view('profile.ordering', compact('template'));
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
        //
    }
}
