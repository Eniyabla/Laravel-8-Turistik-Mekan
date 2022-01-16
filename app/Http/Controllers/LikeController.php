<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{

    public function likeproduct($id)
    {
        $like = Like::where('product_id', $id)->where('user_id',Auth::id())->first();
        if ($like) {
            $like->delete();
            return back();
        } else {
            Like::create([
                'product_id' => $id,
                'user_id' => Auth::id()
            ]);
            return back();
        }
    }



}
