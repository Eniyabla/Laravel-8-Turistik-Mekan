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
        return view('layouts._comment');
    }
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
    public static function countreviews($id)
    {
        return Review::where('status','act')->where('place_id',$id)->count();
    }
    public static function averagereviews($id)
    {
        return Review::where('place_id',$id)->where('status','act')->average('rate');
    }
    public static function averageusereviews($id)
    {

       return DB::table('products')
           ->join('users', 'users.id', '=', 'products.user_id')
           ->join('reviews', 'products.user_id', '=', 'users.id')
           ->where('reviews.id', '=', $id)
           ->average('rate');
    }
    public static function likes($id){

        return Like::where('product_id',$id)->count();
    }
    public static function check($id){

        return Like::where('product_id',$id)->where('user_id',Auth::id())->count();
    }

    public function index(){
        $slider=Product::select('id','title','image','country','slug','city')->where('status','=','true')->limit(3)->inRandomOrder()->get();
        $title=Product::select('id','title','image','country','slug','city')->where('status','=','true')->limit(6)->OrderBydesc('title')->get();
        $country=Product::select('id','title','image','country','slug','city')->where('status','=','true')->limit(6)->OrderBydesc('country')->get();
        $picked=Product::select('id','title','image','country','slug','city')->where('status','=','true')->limit(6)->get();
        $latest=Product::select('id','title','image','country','slug','city')->where('status','=','true')->limit(6)->OrderBydesc('created_at')->get();

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
        $data=Product::find($id);
        $datalist= Image::where('product_id',$id)->get();
        $reviews= Review::where('status','act')->where('place_id',$id)->get();
        return view('home.place_detail',['data'=>$data,'datalist'=>$datalist,'reviews'=>$reviews]);
    }
    #comment+like

    public function pressLike(Request $request)
    {
        $product = Product::find($request->product_id);
        if($product->likes->contains('user_id',auth()->id())){

            $product->likes()->where('user_id',auth()->id())->delete();
        }else{
            $product->likes()->create(['user_id'=>auth()->id()]);
        }
        $count = $product->likes()->count();
        $pusherData['post_id'] = $product->id;
        $pusherData['count'] = $count;
        $this->push('likes',$pusherData);
        return response()->json(['likes'=>$count]);
    }
    public function getplace(Request $request){
        $search=$request->Input('search');
        $count=Product::where('title','like','%'.$search.'%')->get()->count();
        if($count==1){
            $data=Product::where('title','like','%'.$search.'%')->get()->first();
            return redirect()->route('product_detail',['id'=>$data->id]);
        }
        else{
            return redirect()->route('placelist',['search'=>$search]);
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
