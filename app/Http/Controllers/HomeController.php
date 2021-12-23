<?php
//namespace App\Http\Controllers\Admin\SettingController;
namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Image;
use App\Models\Message;
use App\Models\Product;
use App\Models\Setting;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public static function categorylist(){
        return Category::where('parent_id','=',0)->with('children')->get();
    }

    public static function getsetting(){
        $setting= Setting::first();
        return $setting;
    }
    public static function slider(){
        $slider=Product::select('id','title','image','country','slug')->limit(3)->get();
        return $slider;
    }
    public static function slider2(){
        $slider2=Image::select('id','title','image',)->limit(2)->get();
        return $slider2;
    }

    public function index(){
        $setting= Setting::first();
        return view('home.index',['setting'=>$setting]);
    }
    public function product($id,$slug){
        $data=Product::find($id);
        print_r($data);
        exit();
        //return view('home.product',['data'=>$data]);
    }

    public function sendmessage(Request $request){
        $data= new Message;
        $data->name=$request->Input('name');
        $data->email=$request->Input('email');
        $data->phone=$request->Input('phone');
        $data->subject=$request->Input('subject');
        $data->message=$request->Input('message');
        $data->save();

        return redirect()->route('contactus')->with('success','Your Message was successfully sent.Thanks!');
    }
    public function about(){
        return view('home.about');
    }
    public function refernces(){
        return view('home.reference');
    }
    public function contact(){
        return view('home.contact');
    }
    public function login(){
        return view('admin.login');
    }

    public function logincheck(Request $request){

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('Admin');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
