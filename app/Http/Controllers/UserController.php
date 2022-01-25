<?php

namespace App\Http\Controllers;

use App\Http\Livewire\Like;
use App\Http\Livewire\Review;
use App\Models\Message;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */

    public function reviews(){
        $datalist = Review::all();
        return view('home.reviews', ['datalist'=> $datalist]);
    }

    public function replyedmessage(){
        $id=Auth::id();
        $name=User::where('id',$id)->get()->first();
        $datalist = Message::where('name',$name->name)->where('note','<>','')->where('status','=','Read')->get();
        return view('home.user_replyed_message', ['datalist'=> $datalist]);
    }
    public function readmessage(){
        $id=Auth::id();
        $name=User::where('id',$id)->get()->first();
        $datalist = Message::where('name',$name->name)->where('status','=','Read')->get();
        return view('home.user_message_read', ['datalist'=> $datalist]);
    }
    public function unreadmessage(){
        $id=Auth::id();
        $name=User::where('id',$id)->get()->first();
        $datalist = Message::where('name',$name->name)->where('status','=','New')->get();
        return view('home.user_message_unread', ['datalist'=> $datalist]);
    }
    public function newmessage(){
        $id=Auth::id();
        $name=User::where('id',$id)->get()->first();
        $datalist = Message::where('name',$name->name)->where('status','<>','Read')->get();
        return view('home.user_message_unread', ['datalist'=> $datalist]);
    }
    public function allmessages(){
        $id=Auth::id();
        $name=User::where('id',$id)->get()->first();
        $datalist = Message::where('name',$name->name)->get();

        return view('home.all_message', ['datalist'=> $datalist]);
    }
    public function deletemessage(Message $message, $id)
    {
        DB::table('messages')->where('id', '=', $id)->delete();
        return redirect()->back()->with('success','Your message was successfully deleted!');

    }

    public function wishlist(){
       // $datalist = Product::where('product_id',Auth::id())->where(\App\Models\Like::where('product_id',Auth::id())->get('user_id'),Auth::id())->get();
       // return view('home.wishlist',['datalist'=>$datalist]);
        $data=DB::table('likes')->where('user_id',Auth::id())->select('product_id')->get();
           //->select('product_id')->where('user_id',Auth::id())->get();

        //$datalist = Product::where('id',$data)->get();
           // DB::table('products')
           // ->whereIn('id',$data)->get();

          // ->whereIn
        return view('home.wishlist',['datalist'=>$data]);
    }
public function likedproducts(){
    $data=DB::table('products')->where('user_id',Auth::id())->select('id');
    $data=DB::table('likes')->whereIn('product_id',$data)->select('product_id')->get();

    return view('home.likedproducts',['datalist'=>$data]);
}
    public function user_profile()
    {
        return view('layouts.userprofile');
    }

    public function index(){

        $name=User::where('id',Auth::id())->get()->first();

        $messagesr=Message::where('status','Read')->where('name',$name->name)->count();
        $messagesrep=Message::where('note','<>','')->where('name',$name->name)->count();
        $messagesunr=Message::where('status','new')->where('name',$name->name)->count();
        $messages=Message::where('status','false')->count();
        $messagesn=Message::where('status','false')->count();

        $messagesall=Message::where('name',$name->name)->count();
        $reviewsactive=\App\Models\Review::Where('status','act')->where('user_id',Auth::id())->count();
        $reviewsinactive=\App\Models\Review::Where('status','inact')->where('user_id',Auth::id())->count();
        $reviewsnew=\App\Models\Review::Where('status','new')->where('user_id',Auth::id())->count();
        $reviewsall=\App\Models\Review::where('user_id',Auth::id())->count();

        $productsall=Product::all()->where('user_id',Auth::id())->count();
        $productsn=Product::where('status','false')->where('user_id',Auth::id())->count();
        $products=Product::where('status','true')->where('user_id',Auth::id())->count();


        $likedproducts=DB::table('products')->where('user_id',Auth::id())->select('id');
        $likedproducts=DB::table('likes')->whereIn('product_id',$likedproducts)->count();
        $wishlist=DB::table('likes')->where('user_id',Auth::id())->count();


        $data=[
            'messagesunr'=>$messagesunr,
            'messagesr'=>$messagesr,
            'messagesall'=>$messagesall,
            'messagesrep'=>$messagesrep,
            'messagesn'=>$messagesn,
            'messages'=>$messages,

            'reviewsnew'=>$reviewsnew,
            'reviewsactive'=>$reviewsactive,
            'reviewsinactive'=>$reviewsinactive,
            'reviewsall'=>$reviewsall,

            'products'=>$products,
            'productsn'=>$productsn,
            'productsall'=>$productsall,

            'likedproducts'=>$likedproducts,
            'wishlist'=>$wishlist,
        ];
        return view('layouts.account',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
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
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
