<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CategoryController extends Controller
{

    protected $appends=[
        'getParentsTree'
    ];
    public static function getParentsTree($category,$title){
        if($category->parent_id==0){
            return $title;
        }
        $parent=Category::find($category->parent_id);
        $title=$parent->title." > ".$title;
        return CategoryController::getParentsTree($parent,$title);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index(){
        $datalist= Category::with('children')->get();
        return view('admin.category', ['datalist' => $datalist]);
        //return view('');
    }

    public function add()
    {
        $datalist= DB::table('categories')->get()->where('parent_i',0);
        return view('admin.category_add', ['datalist' => $datalist]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function create(Request $request)
    {

        DB::table('categories')->insert([
            'parent_id' => $request->input('parent_id'),
            'keywords' => $request->input('keywords'),
            'description' => $request->input('description'),
            'slug' => $request->input('slug'),
            'status' => $request->input('status'),
            'title' => $request->input('title'),
        ]);
        return redirect('admin/category/add');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dat=Category::find($id);
        $datalist= DB::table('categories')->get()->where('parent_id',0);
        return view('admin.category_edit', ['data' => $dat,'datalist' => $datalist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $data=Category::find($id);
        $data->parent_id = $request->input('parent_id');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->slug = $request->input('slug');
        $data->status = $request->input('status');
        $data->title = $request->input('title');
        $data->save();
        return redirect('admin/category');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        DB::table('categories')->where('id','=',$id)->delete();
        return redirect('admin/category');
    }
}
