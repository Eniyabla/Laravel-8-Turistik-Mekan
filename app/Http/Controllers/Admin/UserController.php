<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $datalist=User::all();
        return view('admin.user',['datalist'=>$datalist]);
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(User $user,$id)
    {
        $data=User::find($id);
        return view('admin.user_edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function userrole(User $user,$id){
        $data=User::find($id);
        $datalist=Role::all()->sortBy('name');
        return view('admin.user_roles',['datalist'=>$datalist,'data'=>$data]);

    }
    public function userrolestore(Request $request,$id,User $user){
        $user=User::find($id);
        $role_id=$request->Input('role_id');
        $user->roles()->attach($role_id);
        return redirect()->back()->with('success','Role added to user successfully!');

    }
    public function userroledelete(Request $request,$userid,$role_id,User $user){
        $user=User::find($userid);
        $user->roles()->detach($role_id);
        return redirect()->back()->with('success','Role deleted from user successfully!');

    }
    public function update(Request $request, User $user,$id)
    {

        $data=User::find($id);
        $data->name=$request->Input('name');
        $data->email=$request->Input('email');
        $data->phone=$request->Input('phone');
        $data->address=$request->Input('address');
        if($request->file('image')!=null){
        $data->profile_photo_path=Storage::putFile('profile-photos',$request->file('image'));
        }
        $data->save();
        return redirect()->route('admin_user')->with('success','Successfully Updated');
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
