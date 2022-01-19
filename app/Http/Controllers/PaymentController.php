<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Payment;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = Setting::first();
        $menus = Menu::where('parent_id', '=', 0)->with('children')->get();
        $datalist= Payment::where('user_id','=',Auth::user()->id)->get();
        return view('home.user_payments',['datalist'=>$datalist,'menus'=>$menus,'setting'=>$setting]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $setting = Setting::first();
        $menus = Menu::where('parent_id', '=', 0)->with('children')->get();
        return view('home.user_payment_add',['menus'=>$menus,'setting'=>$setting]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Payment;
        $data->year = $request->input('year');
        $data->month = $request->input('month');
        $data->payment = $request->input('payment');
        $data->user_id = Auth::id();
        $data->note = $request->input('note');
        $data->status = $request->input('status');
        $data->save();
        return redirect()->route('user_payments')->with('success','Thanks, Waiting For Approve');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        //
    }
}
