<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */

    public function index()
    {
        $datalist = Product::where('user_id',Auth::id())->get();
        $data = Category::where('status','true');
        return view('home.user_product', ['datalist'=> $datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $datalist= Category::with('children')->where('status','true')->get();
        return view('home.user_product_add',['datalist'=> $datalist]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $data= new Product;
        $data->title=$request->Input('title');
        $data->keywords=$request->Input('keywords');
        $data->description=$request->Input('description');
        if($request->file('image')!=null){
            $data->image=Storage::putFile('images',$request->file('image'));
        }
        $data->category_id=$request->Input('category_id');
        $data->user_id=Auth::id();
        $data->detail=$request->Input('detail');
        $data->city=$request->Input('city');
        $data->country=$request->Input('country');
        $data->location=$request->Input('location');
        $data->slug=$request->Input('slug');
        $data->status=$request->Input('status');
        $data->save();
        return redirect()->route('user_product_create')->with('success','An Item has been successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Product $product,$id)
    {
        $data = Product::find($id);
        $datalist= Category::with('children')->get();
        return view('home.user_product_edit',['datalist'=>$datalist, 'data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */

public function new_product(){
    $datalist=Product::where('user_id',Auth::id())->where('status','false')->get();
    return view('home.user_product_new',['datalist'=>$datalist]);
}
public function available_product(){
    $datalist=Product::where('user_id',Auth::id())->where('status','true')->get();
    return view('home.user_product_active',['datalist'=>$datalist]);
}
    public function update(Request $request, Product $product,$id)
    {

        $data=Product::find($id);
        $data->title=$request->Input('title');
        $data->keywords=$request->Input('keywords');
        $data->description=$request->Input('description');
        if($request->file('image')!=null){
            $data->image=Storage::putFile('images',$request->file('image'));
        }
        $data->category_id=$request->Input('category_id');
        $data->user_id=Auth::id();
        $data->detail=$request->Input('detail');
        $data->city=$request->Input('city');
        $data->country=$request->Input('country');
        $data->location=$request->Input('location');
        $data->slug=$request->Input('slug');
        $data->status=$request->Input('status');
        $data->save();
        return redirect()->back()->with('success','An Item has been successfully updated');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function destroy(Product $product,$id)
    {
        DB::table('products')->where('id','=',$id)->delete();
        return redirect()->route('user_product')->with('succes','An item has been successfully deleted');
    }
}
