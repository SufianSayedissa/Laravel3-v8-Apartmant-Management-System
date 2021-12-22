<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\MenuController;
use App\Models\Menu;
use App\Models\News;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public static function menulist()
    {
        return Menu::where('parent_id','=' ,1)->with('children')->get();
    }


    public static function getsetting()
    {
        return Setting::first();
    }

    public function index()
    {
        $setting = Setting::first();
        $menus = Menu::where('parent_id', '=', 0)->with('children')->get();
        return view('home.index', ['setting' => $setting, 'menus' => $menus]);

    }

    public function news()
    {
        $menus = Menu::where('parent_id', '=', 0)->with('children')->get();
        return view('home.news',['menus' => $menus]);
    }

    public function announcements()
    {
        $menus = Menu::where('parent_id', '=', 0)->with('children')->get();
        return view('home.announcements',['menus' => $menus]);
    }

    public function aboutus()
    {
        $setting = Setting::first();
        $menus = Menu::where('parent_id', '=', 0)->with('children')->get();
        return view('home.aboutus', ['setting' => $setting,'menus' => $menus]);
    }

    public function fag()
    {
        $menus = Menu::where('parent_id', '=', 0)->with('children')->get();
        return view('home.fag',['menus' => $menus]);
    }

    public function contact()
    {
        $menus = Menu::where('parent_id', '=', 0)->with('children')->get();
        return view('home.contact',['menus' => $menus]);
    }

    public function login()
    {
        return view('admin.login');
    }

    public function logincheck(Request $request)
    {
        if ($request->isMethod('post')) {
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                return redirect()->intended('admin');
            }

            return back()->withErrors([
                'email' => 'The provided credentials do not match our records',
            ]);
        } else {
            return view('admin.login');
        }
    }


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');

    }


}
