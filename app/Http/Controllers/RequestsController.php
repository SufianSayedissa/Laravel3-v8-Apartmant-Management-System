<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Requests;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RequestsController extends Controller
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
        $datalist= Requests::where('user_id','=',Auth::user()->id)->get();
        return view('home.user_requests',['datalist'=>$datalist,'menus'=>$menus,'setting'=>$setting]);
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
        return view('home.user_requests_add',['menus'=>$menus,'setting'=>$setting]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Requests;
        $data->type = $request->input('type');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->user_id = Auth::id();
        $data->adminnote = $request->input('adminnote');
        $data->status = $request->input('status');
        $data->save();
        return redirect()->route('user_requests');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Requests  $requests
     * @return \Illuminate\Http\Response
     */
    public function show(Requests $requests)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Requests  $requests
     * @return \Illuminate\Http\Response
     */
    public function edit(Requests $requests,$id)
    {
        $setting = Setting::first();
        $menus = Menu::where('parent_id', '=', 0)->with('children')->get();
        $data = Requests::find($id);
        return view('home.user_requests_edit',['data'=>$data,'menus'=>$menus,'setting'=>$setting]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Requests  $requests
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Requests $requests,$id)
    {
        $data = Requests::find($id);
        $data->type = $request->input('type');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->user_id = Auth::id();
        $data->adminnote = $request->input('adminnote');
        $data->status = $request->input('status');
        $data->save();
        return redirect()->route('user_requests');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Requests  $requests
     * @return \Illuminate\Http\Response
     */
    public function destroy(Requests $requests,$id)
    {
        $data = Requests::find($id);
        $data->delete();
        return redirect()->route('user_requests')->with('success','Request Deleted');
    }
}
