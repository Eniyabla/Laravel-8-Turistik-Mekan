<?php

namespace App\Http\Controllers;

use App\Http\Livewire\Review;
use App\Models\Message;
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

    public function repliedmessage(){
        $id=Auth::id();
        $name=User::where('id',$id)->get()->first();
        $datalist = Message::where('name',$name->name)->where('status','=','Read')->get();

        return view('home.received_message', ['datalist'=> $datalist]);
    }
    public function allmessages(){
        $id=Auth::id();
        $name=User::where('id',$id)->get()->first();
        $datalist = Message::where('name',$name->name)->get();

        return view('home.sent_message', ['datalist'=> $datalist]);
    }

    public function index()
    {
        return view('layouts.userprofile');
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
