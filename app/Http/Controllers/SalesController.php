<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Campaign;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales = User::whereNot('id',1)->get();
        return view('admin.sales',compact('sales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create_sales');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'country' => $request->country,
            'phone' => $request->phone,
            'office' => $request->office,
            'type' => $request->type,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->route('sales');
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
    public function edit(User $sales)
    {
        return view('admin.edit_sales',compact('sales'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $sales)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.$sales],
            'password' => ['confirmed'],
        ]);
        $user = User::find($sales);
        $user->name = $request->name;
        $user->email = $request->email;
        if (isset($request->password)) {
            $user->password = Hash::make($request->password);
        }
        $user->save();
        return redirect()->route('sales');
    }
    public function campaigns(User $sales)
    {
        $campaigns = Campaign::all();
        return view('admin.edit_sales_campaigns',compact('campaigns','sales'));
    }
    public function update_campaigns(Request $request,User $sales)
    {
        $sales->campaigns = $request->campaigns;
        $sales->save();
        return back();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $sales)
    {
        $sales->delete();
        return back();
    }
}
