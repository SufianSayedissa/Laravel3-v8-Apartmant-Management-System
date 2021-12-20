<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = DB::select('SELECT * FROM menus ');
        return view('admin.menu',['datalist'=>$datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data = new Menu();
        $data->parent_id = $request->input('parent_id');
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->status = $request->input('status');
        $data->image =Storage::putFile('images',$request->file('image'));
        $data->save();
        return redirect()->route('admin_menu');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        $datalist= DB::table('menus')->get()->where('parent_id',0);

        return view('admin.menu_add',['datalist'=>$datalist]);
    }

    /**
     * Insert data
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
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu, $id)
    {
        $data=Menu::find($id);
        $datalist= DB::table('menus')->get()->where('parent_id',0);
        return view('admin.menu_edit',['data'=>$data, 'datalist'=>$datalist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu, $id)
    {
        $data=Menu::find($id);
        $data->parent_id =$request->input('parent_id');
        $data->title =$request->input('title');
        $data->keywords =$request->input('keywords');
        $data->description =$request->input('description');
        $data->status =$request->input('status');
        if ($request->file('image')!=null)
        {
            $data->image =Storage::putFile('images',$request->file('image'));
        }
        $data->save();

        return redirect()->route('admin_menu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu, $id)
    {
        DB::table('menus')->where('id','=', $id)->delete();
        return redirect()->route('admin_menu');

    }
}
