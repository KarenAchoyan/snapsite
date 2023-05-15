<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::orderBy('id','desc')->get();
        return view('admin.orders.orders', compact('orders'));
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
        if(Order::find($id)){
            Order::where('id',$id)->delete();
            return redirect()->back()->with('success',  'Դուք հաջողությամբ ջնջել եք պատվերը');
        }
    }
    function active($id){
        $order = Order::find($id);
        $order->status = 1;
        $order->save();
        return redirect()->back()->with('success','Պրոյեկտը ակտիվացել է');
    }
    function deactive($id){
        $order = Order::find($id);
        $order->status = 0;
        $order->save();
        return redirect()->back()->with('success','Պրոյեկտը ապաակտիվացել է');
    }
}
