<?php
//namespace App\Http\Controllers\Admin\SettingController;
namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Faq;
use App\Models\Image;
use App\Models\Message;
use App\Models\Product;
use App\Models\Setting;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function categoryplaces($id){
      $datalist=Product::where('category_id',$id)->get();
      $data=Category::find($id);
      return view('home.categoryplaces',['datalist'=>$datalist,'data'=>$data]);


    }
    public static function categorylist(){
        return Category::where('parent_id','=',0)->with('children')->get();
    }

    public static function getsetting(){

        $setting= Setting::first();
        return $setting;
    }
    public function faq(){
        $datalist= Faq::all()->sortBy('position');
        return view('home.faq',['datalist'=>$datalist]);
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
        $slider=Product::select('id','title','image','country','slug')->limit(8)->get();
        $title=Product::select('id','title','image','country','slug')->limit(5)->OrderBydesc('title')->get();
        $country=Product::select('id','title','image','country','slug')->limit(8)->OrderBydesc('country')->get();
        $picked=Product::select('id','title','image','country','slug')->limit(6)->get();
        $latest=Product::select('id','title','image','country','slug')->limit(6)->OrderBydesc('id')->get();



        $setting= Setting::first();

        $data=[
            'slider'=>$slider,
            'title'=>$title,
            'country'=>$country,
            'page'=>'home',
            'picked'=>$picked,
            'latest'=>$latest,

        ];
        return view('home.index',$data);
    }
    public function product_detail($id){
        $data=Product::find($id);
        $datalist= Image::where('product_id',$id)->get();
        return view('home.place_detail',['data'=>$data,'datalist'=>$datalist]);
    }

    public function getplace(Request $request){
        $search=$request->Input('search');
        $count=Product::where('title','like','%'.$search.'%')->get()->count();
        if($count==1){
            $data=Product::where('title','like','%'.$search.'%')->get()->first();
            return redirect()->route('product_detail',['id'=>$data->id]);
        }
        else{
            return redirect()->route('product_list',['search'=>$search->id]);
        }

    }
    public function placelist($search){

        $datalist=Product::where('title','like','%'.$search.'%')->get();
        return view('home.place_list',['datalist'=>$datalist]);
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
