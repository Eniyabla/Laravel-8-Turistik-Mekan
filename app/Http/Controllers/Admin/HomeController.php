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

        $name=User::where('id',Auth::id())->get()->first();

        $messagesr=Message::where('status','Read')->count();
        $messagesrep=Message::where('note','<>','')->count();
        $messagesunr=Message::where('status','new')->count();
        $messages=Message::where('status','false')->count();
        $messagesn=Message::where('status','new')->count();
        $messagesall=Message::all()->count();

        $reviewsactive=\App\Models\Review::Where('status','act')->count();
        $reviewsinactive=\App\Models\Review::Where('status','inact')->count();
        $reviewsnew=\App\Models\Review::Where('status','new')->count();
        $reviewsall=\App\Models\Review::all()->count();

        $productsall=Product::all()->count();
        $productsn=Product::where('status','false')->count();
        $products=Product::where('status','true')->count();


        $likedproducts=DB::table('products')->select('id');
        $likedproducts=DB::table('likes')->whereIn('product_id',$likedproducts)->count();
        $wishlist=DB::table('likes')->count();


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

            'users'=>$users,
            'reviews'=>$reviews,
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

        return redirect()->route('admin_login');

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
