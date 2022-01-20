<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

    public function index()
    {
        $datalist = Product::all();
        $data = Category::all();
        return view('admin.product', ['datalist'=> $datalist,'data'=>$data]);
    }
    public function create()
    {

        $datalist= Category::with('children')->get();
        return view('admin.product_add',['datalist'=> $datalist]);
    }


    public function store(Request $request)
    {
        $data= new Product;
        $data->title=$request->Input('title');
        $data->keywords=$request->Input('keywords');
        $data->description=$request->Input('description');
        $data->image=Storage::putFile('images',$request->file('image'));
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


    public function edit(Product $product,$id)
    {
        $data = Product::find($id);
        $datalist= Category::with('children')->get();
        return view('admin.product_edit',['datalist'=>$datalist, 'data'=>$data]);
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
        return redirect()->route('admin_product')->with('success','An Item has been successfully updated');;
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
        return redirect()->route('admin_product');
    }
}
