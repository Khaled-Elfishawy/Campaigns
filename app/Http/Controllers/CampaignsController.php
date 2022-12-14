<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CampaignsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $count = Campaign::count();
        $campaigns = Campaign::paginate(60);
        return view('admin.campaigns',compact('count','campaigns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.create_campaigns');
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
        //return dd($request->all());
        $store = new Campaign;
        $store->name       = $request->campaign_name;
        $store->template   = $request->template;
        $store->slug       = md5($request->campaign_name.$request->expire_at);
        $store->status     = $request->status;
        $store->platforms  = json_encode($request->platform);
        $store->expires_at = $request->expire_at;
        $store->save();
        return redirect()->route('campaigns');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Campaigns  $campaigns
     * @return \Illuminate\Http\Response
     */
    public function show($campaign)
    {
        $campaign = Campaign::find(base64_decode($campaign));
        if ($campaign->expires_at < date('Y-m-d')) {
            return abort(404);
        }
        $campaign->increment('visits', 1);
        return view('templates.'.$campaign->template,compact('campaign'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function edit(Campaign $campaign)
    {
        return view('admin.edit_campaigns',compact('campaign'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Campaign $campaign)
    {
        $campaign->name       = $request->campaign_name;
        $campaign->template   = $request->template;
        $campaign->slug       = md5($request->campaign_name.$request->expire_at);
        $campaign->status     = $request->status;
        $campaign->platforms  = json_encode($request->platform);
        $campaign->expires_at = $request->expire_at;
        $campaign->save();
        return redirect()->route('campaigns');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function destroy(Campaign $campaign)
    {
        //
    }
}
