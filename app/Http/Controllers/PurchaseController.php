<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purchase;
use App\Models\Supplier;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $purchases = Purchase::all();

        return view('purchase.index', compact('purchases'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $supplies = Supplier::all();

        return view('purchase.create', compact('supplies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $purchase = new Purchase;

        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'supply_id' => 'required',
            'date' => 'required',
        ]);

        $purchase->medical_name = $request->name;
        $purchase->total_price = $request->price;
        $purchase->order_date = $request->date;
        $purchase->supplier_id = $request->supply_id;

        $purchase->save();
        return redirect()->back()->with('message', 'Product Purchased Successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $purchase = Purchase::find($id);
        $supplies = Supplier::all();

        return view('purchase.edit', compact('purchase', 'supplies'));
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
        $purchase = Purchase::find($id);

        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'supply_id' => 'required',
            'date' => 'required',
        ]);

        $purchase->medical_name = $request->name;
        $purchase->total_price = $request->price;
        $purchase->order_date = $request->date;
        $purchase->supplier_id = $request->supply_id;

        $purchase->update();
        return redirect()->back()->with('message', 'Product Updated Successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $purchase = Purchase::find($id);
        $purchase->delete();
        return redirect()->back()->with('message', 'Purchase Cancelled Successful');
    }
}
