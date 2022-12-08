<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Query;
use Illuminate\Http\Request;

class QueryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $queries = Query::orderBy('id','desc')->get();
        return view('backend.queries.queries',compact('queries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function querystatus(Request $request){
        $queryid = $request->queryid;
        $query = Query::find($queryid);
        $query->status = $request->status;
        $query->save();
        return compact('query');
    }

    public  function datesearch(Request $request){
        if($request->searchdate){
        $searchdate = $request->searchdate;
        $queries = Query::whereDate('created_at', '=', $searchdate)->orderBy('id','desc')->get();
        return view('backend.queries.queries',compact('queries'));
        }else{
            $queries = Query::orderBy('id','desc')->get();
            return view('backend.queries.queries',compact('queries'));
        }
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Query  $query
     * @return \Illuminate\Http\Response
     */
    public function show(Query $query)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Query  $query
     * @return \Illuminate\Http\Response
     */
    public function edit(Query $query)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Query  $query
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Query $query)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Query  $query
     * @return \Illuminate\Http\Response
     */
    public function destroy(Query $query)
    {
        //
    }
}
