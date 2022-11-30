<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;
use App\Models\Campaign;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $campaigns = Campaign::all();  
        return view('admin.reports',compact('campaigns'));
    }
    public function search(Request $request)
    {
        $leads = Lead::where(function($e)use($request){
            if($request->search){
                $e->where('name','LIKE','%'.$request->search.'%');
            }
            if ($request->campaign != 0) {
                $e->where('campaign',$request->campaign);
            }
            if ($request->status != 0) {
                $e->where('status',$request->status);
            }
            if ($request->date_from || $request->date_to) {
                $e->whereBetween('created_at',[$request->date_from,$request->date_to]);
            }
        })->get();
        return view('admin.reports',compact('leads','request'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
