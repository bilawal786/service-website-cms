<?php

namespace App\Http\Controllers\Backend;

use App\Estimate;
use App\Http\Controllers\Controller;
use App\Service;
use Illuminate\Http\Request;

class EstimateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estimates = Estimate::all();
        return view('backend.estimates.estimates', compact('estimates'));
    }


    public function ajax(Request $request){
        $id = $request->id;
        $services = Service::where('categoryid', '=', $id)->get();
        return compact('services');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.estimates.createestimate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $estimate = new Estimate();
        $estimate->categoryid = $request->categoryid;
        $estimate->serviceid = $request->serviceid;
//        $estimate->item = $request->item;
//        $estimate->price = $request->price;
//        $estimate->quantity = $request->quantity;
        $estimate->description = $request->description;
        $estimate->date= $request->date;
        $items = array();
        if($itemnames = $request->item){
            foreach($itemnames as $itemname){
                $items[] = $itemname;
            }
            $im_items = implode(',', $items);
            $estimate->item = $im_items;
        }
        $prices = array();
        if($itemprices = $request->price){
            foreach($itemprices as $itemprice){
                $prices[] = $itemprice;
            }
            $im_prices = implode(',', $prices);
            $estimate->price = $im_prices;
        }
        $quantities = array();
        if($itemquantities = $request->quantity){
            foreach($itemquantities as $itemquantity){
                $quantities[] = $itemquantity;
            }
            $im_quantities = implode(',', $quantities);
            $estimate->quantity = $im_quantities;
        }
        $estimate->save();
        return redirect('estimate');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Estimate  $estimate
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estimate = Estimate::find($id);
        return view('backend.estimates.showestimate',compact('estimate'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Estimate  $estimate
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estimate = Estimate::find($id);
        return view('backend.estimates.editestimate',compact('estimate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Estimate  $estimate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estimate $estimate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Estimate  $estimate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estimate $estimate)
    {
        //
    }
}
