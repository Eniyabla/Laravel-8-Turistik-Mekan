<?php
namespace App\Http\Controllers\Admin;
use App\Http\Livewire\Review;
use App\Models\Image;
use App\Models\Message;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{


    public function index()
    {
        $users=User::all()->count();
        $reviews=\App\Models\Review::all()->count();
        $productsall=Product::all()->count();
        $products=Product::where('status','false')->count();
        $messages=Message::where('status','new')->count();
        $data=[
            'users'=>$users,
            'reviews'=>$reviews,
            'products'=>$products,
            'messages'=>$messages,
            'productsall'=>$productsall,
        ];
       return view('admin.home',$data);
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

            return redirect()->intended('admin');
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
?>
