<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\JsonResponse;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function inactivereview(){
        $datalist = Review::where('user_id',Auth::id())->where('status','inact')->get();
        return view('home.reviews_inactive', ['datalist'=> $datalist]);
    }
    public function activereview(){
        $datalist = Review::where('user_id',Auth::id())->where('status','act')->get();
        return view('home.reviews_active', ['datalist'=> $datalist]);
    }
    public function newreview(){
        $datalist = Review::where('user_id',Auth::id())->where('status','new')->get();
        return view('home.reviews_new', ['datalist'=> $datalist]);
    }


    public function index()
    {
        $datalist = Review::where('user_id',Auth::id())->get();
        return view('home.reviews', ['datalist'=> $datalist]);
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
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Review $review,$id)
    {
        $data = Review::find($id);
        return view('home.review_edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Review $review,$id)
    {
        $data=Review::find($id);
        $data->status=$request->Input('status');
        $data->save();
        return back()->with('Success','Review updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Review $review,$id)
    {
        DB::table('reviews')->where('id', '=', $id)->delete();
        return redirect()->route('user_review')->with('success','Your review was successfully deleted!');
    }

}
