<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $count = DB::table('users')->count();
        $admin = DB::table('role_user')->where('role_id','1')->count();
        $user = DB::table('role_user')->where('role_id','2')->count();
        return view('admin.index',['count'=>$count,'admin'=>$admin,'user'=>$user]);
    }
}
