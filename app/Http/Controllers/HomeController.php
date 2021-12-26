<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\MenuController;
use App\Models\Faq;
use App\Models\Image;
use App\Models\Menu;
use App\Models\Content;
use App\Models\Message;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Type;

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
        $slider = Content::select('id','title','image')->limit(4)->get();
        $news = Content::select('id','type','title','image','keywords','description')->where('type','News')->where('status','True')->get();
        $lastannouncements = Content::select('id','type','title','description','image','updated_at')->where('type','Announcements')->where('status','True')->orderByDesc('updated_at')->limit(1)->get();
        $dailyannouncements =Content::select('id','type','title','description','image','updated_at')->where('type','Announcements')->where('status','True')->limit(5)->get();
        return view('home.index',['setting' => $setting,'menus' => $menus,'slider' => $slider,
            'news' => $news,'lastannouncements'=>$lastannouncements,'dailyannouncements'=>$dailyannouncements]);

    }
    public function contentslider($id)
    {
        $data = Content::find($id);
        print_r($data);
        exit();

    }


    public function content()
    {
        $menus = Menu::where('parent_id', '=', 0)->with('children')->get();
        return view('home.content',['menus' => $menus]);
    }




    public function newscontent()
    {

        $news = Content::select('id','type','title','image','updated_at','keywords','description')->where('type','News')->where('status','True')->get();
        $setting = Setting::first();
        $menus = Menu::where('parent_id', '=', 0)->with('children')->get();

        return view('home.news_content',['news'=>$news,'menus'=>$menus,'setting'=>$setting]);
    }


    public function announcementscontent()
    {

        $announcements = Content::select('id','type','title','image','updated_at','keywords','description')->where('type','Announcements')->where('status','True')->get();
        $setting = Setting::first();
        $menus = Menu::where('parent_id', '=', 0)->with('children')->get();
        return view('home.announcements_content',['announcements'=>$announcements,'menus'=>$menus,'setting'=>$setting]);
    }

    public function contentdetail($id)
    {
        $setting = Setting::first();
        $data= Content::find($id);
        $datalist = Image::where('content_id',$id)->get();
        $menus = Menu::where('parent_id', '=', 0)->with('children')->get();
        return view('home.content_detail',['data'=>$data,'menus'=>$menus,'setting'=>$setting,'datalist'=>$datalist]);
    }



    public function getcontent(Request $request)
    {
        $search =$request->input('search');
        $count=Content::where('title','like','%'.$search.'%')->get()->count();
        if ($count==1)
        {
        $data = Content::where('title',$request->input('search'))->first();
        return redirect()->route('contentdetail',['id'=>$data->id]);
        }
        else
        {
            return redirect()->route('contentlist',['search'=>$search]);
        }
    }

    public function contentlist($search)
    {
        $datalist=Content::where('title','like','%'.$search.'%')->get();
        return view('home.search_contents',['datalist'=>$datalist]);
    }



    public function aboutus()
    {
        $setting = Setting::first();
        $menus = Menu::where('parent_id', '=', 0)->with('children')->get();
        return view('home.aboutus', ['setting' => $setting,'menus' => $menus]);
    }

    public function faq()
    {
        $setting = Setting::first();

        $menus = Menu::where('parent_id', '=', 0)->with('children')->get();
        $datalist= Faq::all()->sortBy('id');
        return view('home.faq',['menus' => $menus,'datalist'=>$datalist,'setting' => $setting]);
    }

    public function contact()
    {
        $setting = Setting::first();
        $menus = Menu::where('parent_id', '=', 0)->with('children')->get();
        return view('home.contact',['setting' => $setting,'menus' => $menus]);
    }
    public function sendmessage(Request $request)
    {

        $data = new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->save();
        return redirect()->route('contact')->with('success','Your Message Has Been Sent, Thanks.');

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
