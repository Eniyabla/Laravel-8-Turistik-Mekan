<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = Product::all();
        $data = Category::all();
        return view('admin.product', ['datalist'=> $datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datalist = Category::where('parent_id',0)->get();
        return view('admin.product_add',['datalist'=> $datalist]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= new Product;
        $data->title=$request->Input('title');
        $data->keywords=$request->Input('keywords');
        $data->description=$request->Input('description');
//$data->image=$request->file('image')->storeAs('images',$request->data()->id);
        //$data->image=$request->file('image')->store('images');
        //$data->image=Storage::putFile('images',$request->file('image'));
        $data->category_id=$request->Input('category_id');
        $data->user_id=Auth::id();
        $data->detail=$request->Input('detail');
        $data->city=$request->Input('city');
        $data->country=$request->Input('country');
        $data->location=$request->Input('location');
        $data->slug=$request->Input('slug');
        $data->status=$request->Input('status');
        $data->save();
        return redirect()->route('admin_product');
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
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product,$id)
    {
        $data = Product::find($id);
        $datalist = Category::where('parent_id', 0)->get();
        return view('admin.product_edit',['datalist'=>$datalist, 'data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */


    public function update(Request $request, Product $product,$id)
    {

        $data=Product::find($id);
        $data->title=$request->Input('title');
        $data->keywords=$request->Input('keywords');
        $data->description=$request->Input('description');
        //$data->image=Storage::putFile('images',$request->file('image'));
        $data->category_id=$request->Input('category_id');
        $data->user_id=Auth::id();
        $data->detail=$request->Input('detail');
        $data->city=$request->Input('city');
        $data->country=$request->Input('country');
        $data->location=$request->Input('location');
        $data->slug=$request->Input('slug');
        $data->status=$request->Input('status');
        $data->save();
        return redirect()->route('admin_product');
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
        return redirect('/product');
    }
}
