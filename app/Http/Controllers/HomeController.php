<?php
//namespace App\Http\Controllers\Admin\SettingController;
namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Setting;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public static function categorylist(){
        return Category::where('parent_id',0)->with('children')->get();
    }

    public static function getsetting(){
        $setting= Setting::first();
        return $setting;
    }
    public function index(){
        $setting= Setting::first();
        return view('home.index',['setting'=>$setting]);
    }

    public function product(){
        return view('home.product');
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
