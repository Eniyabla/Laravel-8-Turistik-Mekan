<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = Faq::all();
        return view('admin.faq', ['datalist'=> $datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.faq_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $data= new Faq;
        $data->position=$request->Input('position');
        $data->question=$request->Input('question');
        $data->answer=$request->Input('answer');
        $data->status=$request->Input('status');
        $data->save();
        return redirect()->route('admin_faq')->with('Success','Faq added with success!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function show(Faq $faq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Faq $faq,$id)
    {
        $data = Faq::find($id);
        return view('admin.faq_edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Faq $faq,$id)
    {
        $data=Faq::find($id);
        $data->position=$request->Input('position');
        $data->question=$request->Input('question');
        $data->answer=$request->Input('answer');
        $data->status=$request->Input('status');
        $data->save();
        return redirect()->route('admin_faq')->with('Success','Faq updated with success!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Faq $faq,$id)
    {
        DB::table('faqs')->where('id','=',$id)->delete();
        return redirect()->route('admin_faq')->with('Sucsess','Faq deleted with success!');
    }
}
