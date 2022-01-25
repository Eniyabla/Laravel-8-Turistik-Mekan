<?php
namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Faq;
use App\Models\Image;
use App\Models\Like;
use App\Models\Message;
use App\Models\Product;
use App\Models\Review;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{


    public function test(){
        return view('layouts._header3');
    }
    public function categoryplaces($id){
        $datalist=Product::where('category_id',$id)->where('status','true')->get();
        $data=Category::find($id);
        return view('home.categoryplaces',['datalist'=>$datalist,'data'=>$data]);


    }
    public static function categorylist(){
        return Category::where('parent_id','=',0)->where('status','true')->with('children')->get();
    }

    public static function getsetting(){

        $setting= Setting::first();
        return $setting;
    }
    public function faq(){
        $datalist=Faq::where('status','true')->orderBy('position')->get();
        return view('home.faq',['datalist'=>$datalist]);
    }
    public static function slider(){
        $slider=Product::select('id','title','image','country','slug')->where('status','true')->orderby('created_at','ASC')->limit(4)->get();
        return $slider;
    }
    public static function countreviews($id)
    {
        return Review::where('status','act')->where('place_id',$id)->count();
    }
    public static function averagereviews($id)
    {
        return Review::where('place_id',$id)->where('status','act')->average('rate');
    }

    public static function likes($id){

        return Like::where('product_id',$id)->count();
    }
    public static function check($id){

        return Like::where('product_id',$id)->where('user_id',Auth::id())->count();
    }

    public function index(){
        $slider=Product::select('id','title','image','country','slug','city')->where('status','=','true')->inRandomOrder()->limit(3)->get();
        $title=Product::select('id','title','image','country','slug','city')->where('status','=','true')->limit(8)->OrderBydesc('title')->get();
        $country=Product::select('id','title','image','country','slug','city')->where('status','=','true')->limit(8)->OrderBydesc('country')->get();
        $picked=Product::select('id','title','image','country','slug','city')->where('status','=','true')->limit(8)->get();
        $latest=Product::select('id','title','image','country','slug','city')->where('status','=','true')->limit(8)->OrderBydesc('created_at')->get();

        $topuser=User::select('name','profile_photo_path')->limit(3)->inRandomOrder()->get();


        $setting= Setting::first();

        $data=[
            'slider'=>$slider,
            'title'=>$title,
            'country'=>$country,
            'page'=>'home',
            'picked'=>$picked,
            'latest'=>$latest,
            'topuser'=>$topuser,

        ];
        return view('home.index1',$data);
    }
    public function product_detail($id){
        $data=Product::where('status','true')->find($id);
        $datalist= Image::where('product_id',$id)->get();
        $reviews= Review::where('status','act')->where('place_id',$id)->get();
        $rev1=Review::where('status','act')->where('place_id',$id)->where('rate',1)->count();
        $rev2=Review::where('status','act')->where('place_id',$id)->where('rate',2)->count();
        $rev3=Review::where('status','act')->where('place_id',$id)->where('rate',3)->count();
        $rev4=Review::where('status','act')->where('place_id',$id)->where('rate',4)->count();
        $rev5=Review::where('status','act')->where('place_id',$id)->where('rate',5)->count();
        $alldata=[
            'rev1'=>$rev1,
            'rev2'=>$rev2,
            'rev3'=>$rev3,
            'rev4'=>$rev4,
            'rev5'=>$rev5,
            'datalist'=>$datalist,
            'reviews'=>$reviews,
            'data'=>$data
        ];
        return view('home.place_detail',$alldata);
    }

    public function getplace(Request $request){
        $search=$request->Input('search');
        $count=Product::where('title','like','%'.$search.'%')->where('status','true')->get()->count();
        if($count==1){
            $data=Product::where('title','like','%'.$search.'%')->where('status','true')->get()->first();
            return redirect()->route('product_detail',['id'=>$data->id]);
        }
        else{
            return redirect()->route('placelist',['search'=>$search]);
        }

    }
    public function placelist($search){

        $datalist=Product::where('title','like','%'.$search.'%')->where('status','true')->get();
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
