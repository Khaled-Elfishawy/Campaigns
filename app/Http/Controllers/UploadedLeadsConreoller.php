<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Imports\LeadImport;
use App\Exports\LeadExport;
use Maatwebsite\Excel\Facades\Excel;

class UploadedLeadsConreoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($type=null)
    {
        if(auth()->user()->type != 'sales')
            $leads = Lead::where(function($e)use($type){
                if(!is_null($type)){
                    $e->where('status',$type);
                }else{
                    $e->where('status','new');
                }               
            })->where('source_campain','old')->paginate(100);
        else
            $leads = Lead::where(function($e)use($type){
                $e->where('sales',auth()->user()->id)->OrWhereIn('campaign',auth()->user()->campaigns);
                if(!is_null($type)){
                    $e->where('status',$type);
                }else{
                    $e->where('status','new');
                }
                
            })->where('source_campain','old')
            ->paginate(1);

        return view('admin.leads',compact('leads'));
    }
    public function search(Request $request,$type)
    {
        $leads = Lead::where(function($e)use($request,$type){
            if($request->search){
                $e->where('name','LIKE','%'.$request->search.'%');
            }
            if ($request->campaign != 0) {
                $e->where('campaign',$request->campaign);
            }
            if ($request->status != 0) {
                $e->where('status',$request->status);
            }
            if(!is_null($type)){
                $e->where('status',$type);
            }else{
                $e->where('status','new');
            }            
        })->where('source_campain','old')->get();
        return view('admin.leads',compact('leads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function upload()
    {
        return view('admin.upload');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store_upload(Request $request)
    {
        Excel::import(new LeadImport, request()->file('name'));
        return redirect()->route('uploaded_lead');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = new Lead;
        $store->name            = $request->FirstName.' '.$request->LastName;
        $store->phone           = $request->PhoneNumber;
        $store->email           = $request->Email;
        $store->address         = null;
        $store->country         = null;
        $store->city            = null;
        $store->phone2          = null;
        $store->date_of_birth   = null;
        $store->campaign        = $request->campaign;
        $lead->source_campain   = null;
        $store->sales           = null;
        $store->status          = 'new';
        $store->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lead  $lead
     * @return \Illuminate\Http\Response
     */
    public function show(Lead $lead)
    {
        //
        $comments = Comment::where('lead',$lead->id)->get();
        return view('admin.lead_view',compact('lead','comments'));
    }
    public function comment(Request $request, Lead $lead)
    {
        $comment = new Comment;
        $comment->comment = $request->comment;
        $comment->lead = $lead->id;
        $comment->user = auth()->user()->id;
        $comment->save();
        return back();
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lead  $lead
     * @return \Illuminate\Http\Response
     */
    public function edit(Lead $lead)
    {
        return view('admin.edit_lead',compact('lead'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lead  $lead
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lead $lead)
    {
        $lead->name             = $request->name;
        $lead->phone            = $request->phone;
        $lead->email            = $request->email;
        $lead->address          = null;
        $lead->country          = $request->country;
        $lead->phone2           = $request->phone2;
        $lead->date_of_birth    = $request->date_birth;
        $lead->deposit          = $request->deposit;
        $lead->city             = $request->city;
        $lead->sales            = $request->sales;
        $lead->status           = $request->status;
        $lead->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lead  $lead
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lead $lead)
    {
        //
    }
}
